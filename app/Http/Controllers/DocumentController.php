<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customor;

class DocumentController extends Controller
{
    //(
    public function send(Request $request)
    {
        $customor = new Customor();
        $customor->name = $request->last . $request->first;
        $customor->email = $request->email;
        $customor->tel = $request->tel;
        $customor->content = $request->content;
        $customor->save();

        return view('document.thanks');
    }
}
