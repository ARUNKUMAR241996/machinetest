<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appoinment;
use App\Models\Slot;
use Validator;

class AppoinmentController extends Controller
{

	
	public function custlist()
    {
    	$data = Appoinment::join('slot','slot.id','appoinment.slot_id')
    	->select('appoinment.id','slot.slots','appoinment.customer_name','appoinment.vehicle_number','start_date','end_date')->get();
    	return view('customerlist',compact('data'));
    }
    //
    public function storeappoinment(Request $request)
    {
//     	 $rule=[
                
//             'customer_name'           => 'required|string|min:2|max:50',
//             'vehicle_no'           => 'required|string|min:2|max:30',

//             ];
//             $messages = [
    
// ];
           
             
//             $validator = Validator::make($request->all(),$rule,$messages);
//                 if ($validator->fails()) {
//                      $result_arr['status']= False;
//                     $result_arr['response'] = $validator->errors();

//                     return view('home', compact('result_arr'));
//                     return json_encode($result_arr);
//                 }


    	

    	 $stock_adjustment = Appoinment::updateOrCreate([
                                    
                                    'customer_name' => $request->customer_name, 
                                    'vehicle_number' => $request->vehicle_no,
                                    ],
                                    [
                                    'slot_id' => $request->slot, 
                                    'start_date' => $request->start_date,
                                    'end_date' => $request->end_date,
                                    'status'    => 1
                                    ]);
    	 if($stock_adjustment){
              $update_slot = Slot::where('id',$request->slot)->update(['status'=>1]);
    	 }
    	 return view('home');
    }
}
