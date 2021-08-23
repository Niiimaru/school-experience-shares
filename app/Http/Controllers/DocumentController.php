<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
question-5
use App\Http\Requests\DocumentRequest;
main

class DocumentController extends Controller
{
    //(
 question-5
    public function send(DocumentRequest $request)

    public function send(Request $request)
main
    {
        $customor = new Customer();
        $customor->name = $request->last . $request->first;
        $customor->email = $request->email;
        $customor->tel = $request->tel;
        $customor->content = $request->content;
        $customor->save();

        return view('document.thanks');
    }
}
