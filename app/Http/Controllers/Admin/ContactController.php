<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    public function index(){
    	$contacts = Contact::all();
    return view('admin.contact.index',compact('contacts'));
    }
     public function show($id){
    	$contact = Contact::findOrFail($id);
    return view('admin.contact.show',compact('contact'));
    }
    public function destroy($id){
    	$contact = Contact::findOrFail($id);
    	$contact->delete();
    	return redirect()->route('admin.contact')->with(['success'=>'Le message a étè supprimée avec success' ]);
    }
}

