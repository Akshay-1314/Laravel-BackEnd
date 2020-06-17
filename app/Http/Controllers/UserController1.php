<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File; 
use Session;
use Mail;
use Crypt;

use App\diagnosis;
use App\booking;
use App\admin;
use App\lab;
use App\test;
use App\labs_tests;

class UserController1 extends Controller
{
    public function get_booking(Request $req){
        if($req->validate([
            "file"=>"required|image|mimes:jpeg,png,jpg,gif|max:2048",
            ],
            ['file.required'=>"Please choose a file",
            'file.max'=>"The image size shoudn't be more than 2MB",
            'file.mimes'=>"The file must be an image",
        ]))
        {
            if(!session()->has('sample1')){
                return redirect('booking_page')->with('message','Error!');
            }
            $new = new diagnosis;
            $new->lab_name = Session::get('sample1');

            //converting array to comma seperated string values
            $string='';
            foreach ($req->sellist1 as $value){
                if($value!=""){
                    $string .=  $value.',';
                }
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
        $user = diagnosis::find($id);
        $image = $user->doctor_prescription;
        $path = public_path('upload/'.$image);
        if(is_file($path))
        {
            unlink('upload/'.$image);
        }
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
    public function labs(Request $req){
        $new = new lab;
        if($req->validate([
            "labs"=>"required"],
            ['labs.required'=>'Please enter a lab name'
        ]))
        {
            $new->lab_name = $req->labs;
            $new->save();
            return redirect('add_details')->with('labs','Success!');
        }
    }
    public function tests(Request $req){
        $new = new test;
        if($req->validate([
            "tests"=>"required"],
            ['tests.required'=>'Please enter a test name'
        ]))
        {
            $new->test_name = $req->tests;
            $new->save();
            return redirect('add_details')->with('tests','Success!');
        }
    }
    public function labs_tests(Request $req){
        if($req->validate([
            "lab_id"=>"required",
            "test_id"=>"required"]
        ))
        {
            $new = new labs_tests;
            $new->lab_id = $req->lab_id;
            $new->test_id = $req->test_id;
            $new->save();
            return redirect('add_details')->with('labs_tests','Success!');
        }
    }
    public function del($id){
        $user = lab::find($id);
        lab::where('id',$id)->delete();
        return redirect('add_details')->with('delete','Deleted!');
    }
    public function trash($id){
        $user = test::find($id);
        test::where('id',$id)->delete();
        return redirect('add_details')->with('delete','Deleted!');
    }
    public function dele($id){
        $user = labs_tests::find($id);
        labs_tests::where('id',$id)->delete();
        return redirect('add_details')->with('delete','Deleted!');
    }
    
    public function booking_page(){
        $tests = DB::select("select distinct(tests.test_name) from labs_tests join tests on labs_tests.test_id = tests.id join labs on labs_tests.lab_id = labs.id");
        $associations = DB::select("select distinct(labs.lab_name), labs_tests.lab_id
                                    from labs_tests
                                    join tests on labs_tests.test_id = tests.id
                                    join labs on labs_tests.lab_id = labs.id");
        return view('New_Booking_Page',compact('associations','tests'));
    }
    public function check(Request $req){
        if($req->validate([
            "sellist2"=>"required",
            ],
            [
            'sellist2.required'=>"Please select a lab"
        ])){
            $tests = DB::select("select distinct(labs.lab_name), labs_tests.lab_id
            from labs_tests
            join tests on labs_tests.test_id = tests.id
            join labs on labs_tests.lab_id = labs.id");
                foreach($tests as $value){
                    if($value->lab_name == $req->sellist2){
                        session()->put('check',DB::select("select distinct(tests.test_name) from labs_tests join tests on labs_tests.test_id = tests.id join labs on labs_tests.lab_id = $value->lab_id"));
                        session()->put('sample',$value->lab_id);
                        session()->put('sample1',$value->lab_name);
                        return redirect('booking_page');
                    }
                }
        }
    }
}
