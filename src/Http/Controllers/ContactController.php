<?php

namespace Sohan\contactForm\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Sohan\contactForm\Models\Contact;
// use Brian2694\Toastr\Facades\Toastr;
// use RealRashid\SweetAlert\Facades\Alert;
use Alert;


class ContactController extends Controller
{
    public function index()
    {
        return view('contactForm::contact');
    }
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'skill' => 'required',
            'check' => 'required',
            'gender' => 'required'
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->skill = $request->skill;
        $contact->check = implode(",", $request->check);
        $contact->gender = $request->gender;
        $contact->save();

        // Toastr::success('Messages in here', 'Title', ["positionClass" => "toast-top-center"]);
        // alert()->success('Title', 'Lorem Lorem Lorem');

        // Alert::success('Success Title', 'Service has been updated successfully');

        // session()->flash('message', 'This is a message!');
        //return redirect('/contact')->with('success', 'Item created successfully!');
        return back();
    }
}
