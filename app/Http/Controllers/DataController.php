<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataController extends Controller
{
    
    public function showForm()
    {
        return view(
            'data'
        );
    }

    public function handleSubmit(Request $request){
        //handle submission here
        $inputData = $request->all();

        //do something with the data
        //...

        //Redirect or return a view
        return redirect()->route('show-form')->with('status', 'Success! Data submitted!');
    }
}
