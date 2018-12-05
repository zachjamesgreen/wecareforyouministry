<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactForm;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function send(Request $req)
    {
      if ($req->ajax())
      {
        $data = $req->post();
        $body = $data['body'];
        $name = $data['name'];
        $email = $data['email'];
        Mail::to('zach@zachgreen.codes')->send(new ContactForm($body, $name, $email));
      }

    }
}
