<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    public function list()
    {
        return view('contact-us.list', [
            'contacts' => ContactUs::all()
        ]);
    }

    public function contact(Request $request){
        try{
            
            $attributes = $request->validate([
                'email' => 'bail|required|min:3|email|max:60',
                'name' => 'bail|required|string|min:2|max:250',
                'phone' => 'bail|required',
                'message' => 'bail|required'
            ]);

            $contact=new ContactUs;
            $contact->name=$attributes['name'];
            $contact->email=$attributes['email'];
            $contact->phone=$attributes['phone'];
            $contact->message=$attributes['message'];
            $contact->save();

            $data=['status'=>1,'message'=>'Contacted Successfully!'];
            return json_encode($data);

        }
        catch(Exception $e){
            $data=['status'=>0,'message'=>$e->getMessage()];
            return json_encode($data);

        }



    }
}
