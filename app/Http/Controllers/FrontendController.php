<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\Permission\Models\Role;
use App\Models\State;
use App\Models\Course;
use App\Models\User;
use App\Models\Coursetopic;
use Validator;
use Hash;
use DB;
use Mail;
use Auth;
use Str;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function cells(){
        return view('frontend.cells');
    }

    public function collaborations(){
        return view('frontend.collaborations');
    }

    public function community(){
        return view('frontend.community');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function courses(){
        $courses = $records = Course::orderBy('id', 'ASC')->where('status', 'active')->latest()->get();
        return view('frontend.courses', compact('courses'));
    }

    public function content(){
        return view('frontend.content');
    }

    public function credentials(){
        return view('frontend.credentials');
    }

    public function pg(){
        return view('frontend.pg');
    }

    public function privacypolicy(){
        return view('frontend.privacy-policy');
    }

    public function institutionregistration(){
        $states = State::orderBy('state', 'ASC')->get();
        return view('frontend.institution-registration', compact('states'));
    }

    public function iksolympiad(){
        return view('frontend.iks-olympiad');
    }

    public function whatisiks(){
        return view('frontend.what-is-iks');
    }

    public function whyiks(){
        return view('frontend.why-iks');
    }

    public function courseoverview($slug){
        $course = Course::where('slug', $slug)->where('status', 'active')->first();
        if(!$course){
            return back();
        }
        $parent_topic = Coursetopic::where('parent_id',0)->where('status','active')->where('course_id',$course->id)->get();
        return view('frontend.course-overview',compact('course','parent_topic'));
    }

    public function institutionregistrationpost(Request $req){
        try{
            $input = $req->all();
            $rules = [
                "name"=>"required",
                "code"=>"required|max:10",
                'password' => 'required|min:6|max:15',
                'confirm_password' => 'required|min:6|max:15|same:password',
                "email"=>"required|email|unique:users,email",
                "mobile"=>"required|integer|digits:10",
                "mobile2"=>"nullable|integer|digits:10",
                "logo" => 'required|mimes:png,gig,jpg,jpeg,webp',
                "contact_person_name"=>"required",
                "contact_person_mobile"=>"required",
                "address"=>"required",
                "state"=>"required",
                "city" => 'required',
                "pincode" => 'required'
            ];

            $validation = Validator::make($input, $rules);
            if($validation->fails()){
                return $validation->messages();
                return back()->withErrors($validation)->withInput();
            }
            $logo = NULL;
            if($req->hasFile('logo')) {
                $destinationPath = 'uploads/cms/'; // upload path
                $file = $req->file('logo');
                $original_name = pathinfo($file, PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension(); // getting file extension
                $imgex = ['png','jpeg','jpg','webp'];
                if(!in_array($extension,$imgex)){
                    return back()->with('error','The logo must be a file of type: png, jpeg, jpg')->withInput();
                }
                $fileName = rand(11111, 99999).'_'.$file->getClientOriginalName(); // renameing image
                $upload_success = $file->move($destinationPath, $fileName); // uploading file to given path
                $logo = $destinationPath.$fileName;
            }
            $input['role'] = 21;
            $input['logo'] = $logo;
            $input['type'] = 'institution';
            $input['role_id'] = $input['role'];
            $input['password'] = Hash::make($input['password']);
            $input['status'] = 'inactive';
            $user = User::create($input);
            $user->assignRole($input['role']);
            try{
                Mail::send("emails.institution_welcome",['user' => $user], function($message) use ($user){
                    $message->from(env('ADMIN_EMAIL'), env('ADMIN_NAME')) ;
                    $message->to($user->email, $user->name)->subject("Institution Account Created");
                });
            }catch(\Exception $e){
                //return back()->with('error', $e->getMessage());
            }

            return back()->with('success','New institution has been created');
        }catch(\Exception $e){
            return back()->with('error', $e->getMessage().'__'.$e->getLine());
        }
    }

}
