<?php

namespace App\Http\Controllers;

use App\Mail\ContactMarkdownMail;
use App\Mail\ReceptionMarkdownMail;
use App\Mail\TestMail;
use App\Mail\TestMarkdownMail;
use App\Models\Gestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class GestionController extends Controller
{

    public function contact()
   {
       return view('cont');
   }

    public function store(Request $request)
    {
        $gest_store = new Gestion();
        $gest_store->name = $request->name;
        $gest_store->email = $request->email;
        $gest_store->phone = $request->phone;
        $gest_store->message = $request->message;
        $gest_store->save();

        $info = [
                    'name' => $request['name'],
                    'email' => $request['email'],
                    'phone' => $request['phone'],
                    'message' => $request['message'],
                ];

        // Mail::to('infos@cievent.ci')->send(new TestMail($info));
        Mail::to('infos@cievent.ci')->send(new ContactMarkdownMail($info));
        // Mail::to($request->email)->send(new TestMarkdownMail($info));
        Mail::to($request->email)->send(new ReceptionMarkdownMail($info));
        
        // return back()->with('success', 'User added successfully.');
        // return back();
        return view('/test');
    }

    
    
    // public function read($id)
    // {
    //     $msg = Gestion::findOrFail($id);
    //     return redirect('message', compact('msg'));
    // }
}
