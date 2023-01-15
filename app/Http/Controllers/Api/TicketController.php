<?php

namespace App\Http\Controllers\Api;
use App\Models\Ticket;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function ListOfTickets()
    {
        $tickets=Ticket::where('merchant_id',auth()->guard('api')->user()->id)->latest()->get();

        return response()->json(['status' => 1, 'data' => $tickets]);

    }

    public function show($id)
    {
        return Ticket::find($id);
    }
    public function store(Request $request)
    {
        // return cart::create($request->all());
        $rule = [
            'subject' => 'required',
            'content' => 'required',
            'type' => 'required',
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
        $Ticket = Ticket::create([

            'subject' => $request['subject'],
            'content' => $request['content'],
            'type' => $request['type'],
            'date' => $request['date'],
            'merchant_id'  => auth()->guard('api')->user()->id
        ]);


        return response()->json(['status' => 1, 'message' => __('lang.added_successfully'),'data' => $Ticket]);

    }

    public function update(Request $request, $id) {
        $Ticket = Ticket::findOrFail($id);
        $Ticket->update($request->all());
    
        return response()->json(['status' => 1, 'message' => __('lang.updated_successfully'),'data' => $Ticket]);

    }
}
