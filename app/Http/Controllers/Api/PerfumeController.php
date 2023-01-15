<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
// use App\Models\Post;
use App\Models\Perfume;
use App\Models\Category;
use App\Traits\GeneralTrait;
use App\Models\review_rating;
use Session;

use Illuminate\Http\Request;

class PerfumeController extends Controller
{
    public function index()
    {
        $perfumes = perfume::latest()->get();
        return response()->json($perfumes);

    }
    
    public function getPerfume(perfume $perfume)
    {
        return Perfume::with('review_ratings','category.perfumes')
                 ->where('id' , $perfume->id)->get();
    }
    
    public function AddPerfume(Request $request)
    {
        $rule = [
            'perfume_name' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'category' => 'required',
            'stock' => 'required',
            'image' => 'required|image|max:1024'
        ];

        $customMessages = [
            'required' => __('validation.attributes.required'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);
        if ($validator->fails()) {
            if (str_contains(validationErrorsToString($validator->errors()), 'perfume_id')) {
                return response()->json(['status' => 423, 'message' => validationErrorsToString($validator->errors())], 422);
            }
            return response()->json(['status' => 422, 'message' => validationErrorsToString($validator->errors())], 422);
        }
        $perfume = perfume::create([


            'perfume_name_en' => $request['perfume_name_en'],
            'perfume_name_ar' => $request['perfume_name_ar'],
            'price' => $request['price'],
            'discount' => $request['discount'],
            'desc_en' => $request['desc_en'],
            'desc_ar' => $request['desc_ar'],
            'quantity' => $request['quantity'],
            'count_in_stock' => $request['quantity'],
            'count_in_rate' => $request['count_in_rate'],
            'rate' => $request['rate'],
            'star_rating' => $request['star_rating'],
            'date' => $request['date'],
            'category' => $request['category'],
            'stock' => $request['stock'],
            'image' => $request['image'],
            'availabilty' => $request['availabilty'],
            'category_id' => $request['category_id'],

        ]);
        return response()->json(['status' => 1, 'data' => $perfume]);
    }

    public function filterproducts(Request $request)
    {
        if($request->isMethod('post')){
            
            $result = perfume::where(function($q)use($request){
                if($request->categoreies)
                    $q->whereIN('category_id',$request->categoreies);
                    
                if($request->search)
                       $q->where('perfume_name_en', 'LIKE', "%{$request->search}%") 
                            ->orwhere('perfume_name_ar', 'LIKE', "%{$request->search}%") ;

                elseif (request()->sort == 'high_price') {
                    $q->where('status', '1')->orderBy('price' , 'desc');
                            } 
                elseif (request()->sort == 'low_price') {
                    $q->where('status', '1')->orderBy('price', 'ASC');
                    }
                elseif (request()->sort == 'rating') {
                        $q->where('rate', '>', '0')
                        ->andwhere('status', '1')->orderBy('rate');
                        }
                elseif (request()->sort == 'Latest') {
                    $q->where('status', '1')->orderBy('created_at', 'ASC');
                            }

            })->get();

            return $result;
        }
 
    }

    public function merchantPerfumeSearch(Request $request)
    {
        if($request->isMethod('post')){
            
            $result = perfume::where(function($q)use($request){
               
                if($request->search)
                       $q->where('perfume_name_en', 'LIKE', "%{$request->search}%") 
                            ->orwhere('perfume_name_ar', 'LIKE', "%{$request->search}%") ;

            })->get();

            return $result;
        }
 
    }

    public function mostwanted()
    {
        $result = Perfume::where('flag_perfume' , '=' , 1 )->
                          orderBy('rate', 'desc')->take(10)->get();

        return response()->json($result);
    }

    public function perfumecategory( $id)
    {
        $result = Perfume::where('category_id', '=', $id)->
                          orderBy('id', 'desc')->get();

        return response()->json($result);
    }

    public function getcollection()
    {
        $result = Perfume::where('flag_ghali' , '=' , 1 )
                          ->get();

        return response()->json($result);
    }

    public function filterMerchantPerfumes(Request $request)
    {
        if($request->isMethod('post')){
            
            $result = perfume::where(function($q)use($request){
                if($request->categoreies)
                    $q->whereIN('category_id',$request->categoreies);

                elseif (request()->date == 'july 2022') {
                    $q->whereBetween('created_at', array('2022-07-01', '2022-07-31'))
                    ->where('status', '1')->orderBy('created_at', 'ASC');
                            } 
                elseif (request()->date == 'june 2022') {
                                $q->whereBetween('created_at', array('2022-06-01', '2022-06-30'))
                                ->where('status', '1')->orderBy('created_at', 'ASC');
                                        }
                elseif (request()->date == 'may 2022') {
                               $q->whereBetween('created_at', array('2022-05-01', '2022-05-31'))
                                 ->where('status', '1')->orderBy('created_at', 'ASC');
                                         }
                elseif (request()->date == 'april 2022') {
                                $q->whereBetween('created_at', array('2022-04-01', '2022-04-30'))
                                ->where('status', '1')->orderBy('created_at', 'ASC');
                                    }                         
                                    
            })->get();

            return $result;
        }
 
    }


    // public function AddreviewPerfume(Request $request)
    // {
    //     $rule = [
    //         'id' => 'required',
    //         'star_rating' => 'required',
    //     ];

    //     $customMessages = [
    //         'required' => __('validation.attributes.required'),
    //     ];

    //     $validator = validator()->make($request->all(), $rule, $customMessages);
        
    //     if ($validator->fails()) {
    //         if (str_contains(validationErrorsToString($validator->errors()), 'workshop_id')) {
    //             return response()->json(['status' => 423, 'message' => validationErrorsToString($validator->errors())], 422);
    //         }
    //         return response()->json(['status' => 422, 'message' => validationErrorsToString($validator->errors())], 422);
    //     }
    //     $perfume = perfume::find($id);

    //     $perfume->review_ratings()->create([
    //         'star_rating' =>$request->star_rating,
    //       'comments' => $request->comments,
    //   ]);
    //     return response()->json(['status' => 1, 'data' => $perfume]);

    // }

}
