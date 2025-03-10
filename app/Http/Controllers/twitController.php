<?php

namespace App\Http\Controllers;
// importing twit model
use App\Models\twit;

use Illuminate\Http\Request;

class twitController extends Controller
{
    // Controller to submit form to db
    public function store(){
        // Validating the textarea where to enter a twit
        request()->validate([
            'content' => 'required|min:3|max:240'
        ]);// ends here

        $twits = new twit([
            // getting user input
            'content' => request()->get('content',''),

        ]);
        $twits -> save();
        // Redirecting to the home page (twitter.blade.php) while showing a success message
        return redirect()->route('twit.page')->with('success','Twit posted successfully.');
    }

    // Function to delete/destroy a twit
    public function destroy(twit $id){

        // filter where id = 1 or ..

        // $twitid = twit::where('id',$id)->firstOrFail()->delete(); THIS IS OLD SCHOOL
        $id->delete();

        // Redirecting to the home page (twitter.blade.php) while showing a delete message
        return redirect()->route('twit.page')->with('success','Twit deleted successfully.');
    }

    public function show(twit $id){
        return view('show_twit.twit',[
            'twit' => $id
        ]);
    }
}