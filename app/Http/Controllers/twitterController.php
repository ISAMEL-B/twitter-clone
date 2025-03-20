<?php

namespace App\Http\Controllers;

use App\Models\twit;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;

class twitterController extends Controller
{
    public function media(){
        // taken the code that was saving manually ha

        return view('twitter',[
                'twit' =>twit::orderBy('created_at','DESC')->paginate(2)
        ]);
        }
}
