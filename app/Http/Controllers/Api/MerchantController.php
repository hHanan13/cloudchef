<?php

namespace App\Http\Controllers\Api;
use App\Models\merchant;
use App\Models\perfumerequest;
use App\Models\following;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Traits\GeneralTrait;
use Hash;

class MerchantController extends Controller
{

    public function ListOfMerchants()
    {
        $merchant=merchant::where('status',1)->where('type','merchant')->latest()->get();
        return response()->json(['status' => 1, 'data' => $merchant]);
    }

    
    public function bymerchant(Request $request)
    {
        return merchant::where('id' , $request->id)
                        ->with('orderData')
                        ->get();
    }

    public function show_review_merchant($id)
    {
        return merchant::with('review_ratings','review_ratings.merchant')->find($id);
    }

    public function listPerfumeRequest(Request $request)
    {
       return auth()->guard('api')->user()->perfumerequestData;

    }

    public function countperfumes(){
        
        return auth()->guard('api')->user()->perfumeData->count();
  
      }

      public function countmerchants(){
        
        return merchant::where('type','merchant')->where('status', '1')->count();  
      }

      public function filter_perfumes_for_merchant(Request $request)
      {
          if($request->isMethod('post')){
              
              $result = merchant::whereHas('perfumeData' ,function($q)use($request){

                if($request->categoreies)
                    $q->whereIN('category_id',$request->categoreies);
                      
                  if($request->search)
                           $q->where('perfume_name_en', 'LIKE', "%{$request->search}%") 
                               ->orwhere('perfume_name_ar', 'LIKE', "%{$request->search}%") ;
  
                  elseif (request()->sort == 'Most Popular') {
                      $q->where('status', '1')->orderBy('star_rating' , 'desc');
                              } 
                  elseif (request()->sort == 'Random') {
                      $q->where('status', '1');
                      }
                  elseif (request()->sort == 'TOP Rated') {
                          $q->where('rate', '>', '0')
                          ->andwhere('status', '1')->orderBy('rate');
                          }
                  elseif (request()->sort == 'Most Recent') {
                      $q->where('status', '1')->orderBy('created_at', 'ASC');
                              }
  
              })->get();
  
              return $result;
          }
   
      }

      public function filter_merchants(Request $request)
      {
          if($request->isMethod('post')){
              
              $result = merchant::where(function($q)use($request){

                if($request->categoreies)
                    $q->whereIN('category_id',$request->categoreies);
                      
                  if($request->search)
                         $q->where('merchant_name', 'LIKE', "%{$request->search}%");
  
                  elseif (request()->sort == 'Most Popular') {
                      $q->where('status', '1')->orderBy('star_rating' , 'desc');
                              } 
                  elseif (request()->sort == 'Random') {
                      $q->where('status', '1');
                      }
                  elseif (request()->sort == 'TOP Rated') {
                          $q->where('rate', '>', '0')
                          ->andwhere('status', '1')->orderBy('rate');
                          }
                  elseif (request()->sort == 'Most Recent') {
                      $q->where('status', '1')->orderBy('created_at', 'ASC');
                              }
  
              })->get();
  
              return $result;
          }
   
      }

    public function merchantPerfume($id)
    {
        return merchant::with('perfumeData')->find($id);

        // return auth()->guard('api')->user()->perfumeData;
    }

    public function showmerchant($id)
    {
        return merchant::with('review_ratings')->find($id);
    }

    public function statics()
    {
        $perfume_request =  perfumerequest::where('merchant_id', auth()->guard('api')->user()->id)->latest()->get();
        return response()->json(['status' => 1, 'data' => [
            'perfume_request_count'  =>  $perfume_request->count(),
            'pending_perfume_request'  =>   $perfume_request->where('status',0)->count(),
            'accepted_perfume_request'   =>   $perfume_request->where('status',1)->count(),
        ]]);

    }

    public function toggoleFollow(Request $request)
    {
        $following =following::where('following_id',$request->following_id)->where('follwer_id',auth()->guard('api')->user()->id)->first();

        if($following){
            $following->delete();
                    return response()->json(['status' => 1, 'msg' => trans('api.remove_from_following_success')]); 
        }
        else{
            Following::create([
                'following_id' => $request->following_id , 
                'follwer_id' => auth()->guard('api')->user()->id
        ]);
            return response()->json(['status' => 1, 'msg' => trans('api.add_to_following_success')]); 

        }
    }
 
    public function showfollowers(Request $request)
    {

        return auth()->guard('api')->user()->follower;
    }

    public function countfollowers(Request $request)
    {
        
        return auth()->guard('api')->user()->follower()->count();
    }

     public function showfollowings(Request $request)
    {

        return auth()->guard('api')->user()->following;

    }

    public function store(Request $request){
        
        $validated = $request->validate( [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'store_name' => 'required',
            'city' => 'required|string',
            'phone' => 'required|numeric|min:11',
            'capital' => 'required|string',
            'experience' => 'required',
        ]);
        
        $User = merchant::create([
            'name' => $request['name'],
            'store_name' => $request['store_name'],
            'email' => $request['email'],
            'city' => $request['city'],
            'capital' => $request['capital'],
            'experience' => $request['experience'],
            'kind' => json_encode($request['kind']),
            'website' => $request['website'],
            'num_emp' => $request['num_emp'],
            'num_branches' => $request['num_branches'],
            'phone' => $request['phone'],
            'start' => $request['start'],
            'end' => $request['end'],
            'status'=>0,
            'packages'=>'Emerging Restaurant Package',
        ]);

        $User->save();
        return redirect('/package')->with('message', 'Added successfully');
    }
    public $role_id = [];
    
    public function storepro(Request $request){
        
        $validated = $request->validate( [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'store_name' => 'required',
            'city' => 'required|string',
            'phone' => 'required|numeric|min:11',
            'website' => 'required|url',
            'num_emp' => 'required',
            'num_branches' => 'required|string',
        ]);
        // $customMessages = [
        //     'required' => __('validation.attributes.required'),
        // ];
        // $validator = validator()->make($request->all(), $rule, $customMessages);
        // if ($validator->fails()) {
        //     if (str_contains(validationErrorsToString($validator->errors()), 'perfume_id')) {
        //         return response()->json(['status' => 423, 'message' => validationErrorsToString($validator->errors())], 422);
        //     }
        //     return response()->json(['status' => 422, 'message' => validationErrorsToString($validator->errors())], 422);
        // }
        $User = merchant::create([
            'name' => $request['name'],
            'store_name' => $request['store_name'],
            'email' => $request['email'],
            'city' => $request['city'],
            'capital' => $request['capital'],
            'experience' => $request['experience'],
            'kind' => json_encode($request['kind']),
            'website' => $request['website'],
            'num_emp' => $request['num_emp'],
            'num_branches' => $request['num_branches'],
            'phone' => $request['phone'],
            'start' => $request['start'],
            'end' => $request['end'],
            'status'=>1,
            'packages'=>'Professional Restaurant Package',
        ]);

        $User->save();
        return redirect('/propackage')->with('message', 'Added successfully');
    }
}
