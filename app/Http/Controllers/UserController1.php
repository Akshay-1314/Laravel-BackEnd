<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File; 
use Mail;
use Crypt;

use App\diagnosis;
use App\booking;
use App\admin;

class UserController1 extends Controller
{
    public function get_booking(Request $req){
        if($req->validate([
            "file"=>"required|image|mimes:jpeg,png,jpg,gif|max:2048",
            "sellist2"=>"required"],
            ['file.required'=>"Please choose a file",
            'file.max'=>"The image size shoudn't be more than 2MB",
            'file.mimes'=>"The file must be an image", 
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
            
            $req->session()->put('booking',$req->input());
            return redirect('booking_details')->with('message','Success!');
        }
    }
    public function get_patientdetails(Request $re){
        //get id from diagnosis
        $diag = diagnosis::take(1)->orderBy('id','DESC')->get();
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
            $booking->user_id = $diag[0]['id'];
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
            
            return redirect('home')->with('message','Success!');
        }
    }
    public function showdata(){
        $data = booking::all();
        return view('Booking_List',compact('data'));
    }
    public function delete($id){
        $user = diagnosis::select('doctor_prescription')->where('id',$id);
        $image = $user->first()->doctor_prescription;
        unlink('upload/'.$image);
        diagnosis::where('id',$id)->delete();
        booking::where('user_id',$id)->delete();
        $data = booking::all();
        return redirect('booking_list')->with('message','Delete!');
    }

    public function admin_check(Request $req){
            $details = DB::select("select * from admin");
            $var = false;
            foreach($details as $value){
                if($value->username == $req->username and Crypt::decrypt($value->password) == $req->pwd){
                    $var = true;
                    break;
                }
            }
            if($var){
                $req->session()->put('details',$req->input());
                //$data['data'] = DB::select("select * from diagnosis,bookings where diagnosis.id = bookings.user_id");
                return redirect('/')->with('login','Loggedin');
            }
            else{
                return redirect()->back()->with('message','Error!');
            }
    }
    public function admin_add(){
        $new = new admin;
        $new->username = 'akshaykumar200042@gmail.com';
        $new->password = Crypt::encrypt('mentorminds_practo');
        $new->save();
    }
}
