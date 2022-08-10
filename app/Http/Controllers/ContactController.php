<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function list()
    {
        return view('contact.list', [
            'contacts' => Contact::all()
        ]);
    }

    public function addForm()
    {
        return view('contact.add');
    }

    public function add()
    {

        $attributes = request()->validate([
            'email' => 'bail|required|min:3|email|max:60',
            'website' => 'bail|required|string|min:2|url|max:250',
            'address' => 'bail|required'
        ]);

        $contact = new Contact();
        $contact->email = $attributes['email'];
        $contact->website = $attributes['website'];
        $contact->address = $attributes['address'];
        $contact->save();

        return redirect('/console/contact/list')
            ->with('message', 'Contact Added Successfully!');
    }

    public function editForm(Contact $contact)
    {
        return view('contact.edit', [
            'contact' => $contact,
        ]);
    }

    public function edit(Contact $contact)
    {

        $attributes = request()->validate([
            'email' => 'bail|required|min:3|email|max:60',
            'website' => 'bail|required|string|min:2|url|max:250',
            'address' => 'bail|required'
        ]);

        $contact->email = $attributes['email'];
        $contact->website = $attributes['website'];
        $contact->address = $attributes['address'];
        $contact->update();

        return redirect('/console/contact/list')
            ->with('message', 'Contact Updated!');
    }

    public function delete(Contact $contact)
    {
        $contact->delete();
        
        return redirect('/console/contact/list')
            ->with('message', 'Contact has been deleted!');        
    }

    public function getAll(){
        try{
            $contacts=Contact::all();
            $data=['status'=>1,'data'=>$contacts,'message'=>'Success!'];
            return json_encode($data);

        }
        catch(Exception $e){
            $data=['status'=>0,'message'=>$e->getMessage()];
            return json_encode($data);

        }

    }

    

  
}
