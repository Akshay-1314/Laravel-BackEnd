<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File; 
use Mail;

use App\diagnosis;
use App\booking;

class UserController1 extends Controller
{
    public function get_booking(Request $req){
        if($req->validate([
            "sellist1[]"=>"required",
            "file"=>"required|image|mimes:jpeg,png,jpg,gif|max:2048",
            "sellist2"=>"required"],
            ['sellist1[].required'=>"Please select atleast one test",
            'file.required'=>"Please choose a file",
            'sellist2.required'=>"Please select a lab"]))
        {
            $new = new diagnosis;
            $new->lab_name = $req->sellist2;

            //converting array to comma seperated string values
            $string='';
            foreach ($req->sellist1 as $value){
                $string .=  $value.',';
            }
            $new->test_name = substr($string,0,-1);

            //file(image)
            $file = $req->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload',$filename);
            $new->doctor_prescription = $filename;
            $new->save();
            
            return redirect('booking_details')->with('message','Success!');
            
        }
    }
    public function get_patientdetails(Request $re){
        //get tl_id from diagnosis
        $diag = diagnosis::take(1)->orderBy('tl_id','DESC')->get();
        if($re->validate([
            "name"=>"required|min:3",
            "age"=>"required",
            "gender"=>"required",
            "email"=>"required|email",
            "mobile"=>"required|digits:10",

            "booking_date"=>"required|date_format:Y-m-d|after:today",
            "time_slot"=>"required",
            "address"=>"required",
            "pin_code"=>"required"],
            ['mobile.digits'=>'The mobile number must be 10 digits',
            'booking_date.required'=>'Please select a Date',
            'time_slot.required'=>'Please pick a time-slot']))
        {
            $booking = new booking;
            $booking->user_id = $diag[0]['tl_id'];
            $booking->user_name = $re->name;
            $booking->age = $re->age;
            $booking->gender = $re->gender;
            $booking->mobile = $re->mobile;
            $booking->email = $re->email;

            $booking->date = $re->booking_date;
            $booking->time_slot = $re->time_slot;
            $booking->address = $re->address;
            $booking->pin_code = $re->pin_code;
            $booking->save();
            

            Mail::send('mail',['name'=>$re->name],function($message) use($re){
                $message->to($re['email'])->subject('Booking Confirmed');
                $message->from('akshaykumar200042@gmail.com','Practo');
            });
            return redirect('landing_page')->with('message','Success!');
        }
    }
    

    public function show_data(){

        //$data['data'] = DB::select("select * from diagnosis,bookings where diagnosis.tl_id = bookings.user_id");
        $data = booking::all();
        return view('Booking_List',compact('data'));
        
    }

    public function delete($id){
        $user = diagnosis::select('doctor_prescription')->where('tl_id',$id);
        $image = $user->first()->doctor_prescription;
        unlink('upload/'.$image);
        diagnosis::where('tl_id',$id)->delete();
        booking::where('user_id',$id)->delete();
        return redirect('booking_list')->with('message','Deleted!');
    }
}