<?php

namespace App\Http\Controllers;

use App\Models\Gestion;
use Illuminate\Http\Request;
use App\Mail\AnswerMarkdownMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function dash()
    {
        $datas = Gestion::paginate(10);

        $numb = 0;

        return view('dashboard', compact('datas','numb'));
    }

    // public function index() {
    //     $users = User::paginate(10);
    //     return view('user', compact('users'));
    // }
    // public function dash()
    // {
    //     $numb = 0;

    //     return view('dashboard', compact('datas','numb'), [
    //         'gestions' => DB::table('gestions')->paginate(15)
    //     ]);
    // }



    public function send($id)
    {
        $datas = Gestion::findOrFail($id);

        return view('message', compact('datas'));
    }

    public function destroy($id)
    {
        $del = Gestion::findOrFail($id);

        $del->delete();

        return redirect('dashboard');
    }

    public function answer(Request $request)
    {
        $datas = Gestion::paginate(10);

        $info = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'message' => $request->message
                ];

        $msg = "yes";

        Mail::to($request->email)->send(new AnswerMarkdownMail($info));

        $numb = 0;

        return view('dashboard', compact('datas','numb'));
    }
}
