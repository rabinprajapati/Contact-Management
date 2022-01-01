<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Session;

class ContactController extends Controller
{
    protected function addContact(Request $req)
    {
        $req->validate([
            'contactName' => 'required|min:3|max:20',
            'contactAddress' => 'required|min:3|max:30',
            'contactPhone' => 'required|min:7|max:10',
        ]);
        $contact=new Contact;
        $contact->contactName=$req->contactName;
        $contact->contactAddress=$req->contactAddress;
        $contact->contactPhone=$req->contactPhone;
        $contact->UserId=$req->session()->get('user')->id;  
        $contact->save();
        return redirect('/');
    }
    protected function contactList()
    {
        $userId=Session::get('user')->id;
        $contacts=Contact::where('userId','=',$userId)->get();
        return view('/contact/contactList',['contacts'=>$contacts]);
    }
    protected function detail($id)
    {
        $contact=Contact::find($id);
        return view('/contact/detail',['contact'=>$contact]);
    }
    protected function search(Request $req)
    {
        $userId=Session::get('user')->id;
        $searchString=$req->searchString;
        $contacts=Contact::where('contactName','like',$searchString.'%')
                ->where('userId','=',$userId)->get();
        return view('/contact/contactList',['contacts'=>$contacts]);
    }
    protected function edit($id)
    {
        $contact=Contact::find($id);
        return view('/contact/edit',['contact'=>$contact]);
    }
    protected function updateContact(Request $req,$id)
    {
        $contact=Contact::find($id);
        $contact->contactName=$req->contactName;
        $contact->contactAddress=$req->contactAddress;
        $contact->contactPhone=$req->contactPhone;
        $contact->save();
        return redirect('/contactList');
    }
    protected function delete($id)
    {
        Contact::find($id)->delete();
        return redirect('/contactList');
    }
}
