<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Brand;
use App\Models\merchant;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Hash;
use Carbon\Carbon;

class UserController extends Controller
{
    public function index()
    {
        $User = User::get();
        
        return response()->json($User);
    }
    
    public function store(Request $request){
        
        $validated = $request->validate( [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'store_name' => 'required',
            'city' => 'required|string',
            'phone' => 'required',
            'capital' => 'required|string',
            'experience' => 'required',
        ]);
        
        $User = User::create([
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
        ]);
        $User->save();
        // return response()->json(['status' => 1, 'message' => __('lang.added_successfully'),'data' => $User]);
        return redirect('/confirm')->with('status', 'added_successfully');
    }
    public $role_id = [];
    
    public function storepro(Request $request){
        
        $rule = [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'store_name' => 'required',
            'city' => 'required|string',
            'phone' => 'required',
            'capital' => 'required|string',
            'experience' => 'required',
            'website' => 'required',
            'num_emp' => 'required',
            'num_branches' => 'required|string',
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
        $User = User::create([
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
        ]);
        $User->save();
        // return response()->json(['status' => 1, 'message' => __('lang.added_successfully'),'data' => $User]);
        return redirect('/confirm')->with('status', 'added_successfully');
    }
}
