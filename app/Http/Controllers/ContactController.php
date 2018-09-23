<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    function store(Request $request) {
 
   	
            // my data storage location is project_root/storage/app/data.json file.
   $contactInfo = Storage::disk('local')->exists('data.json') ? json_decode(Storage::disk('local')->get('data.json')) : [];
        
            $inputData = $request->only(['name','price']);
       
            array_push($contactInfo,$inputData);
    
            Storage::disk('local')->put('data.json', json_encode($contactInfo));
 
            return [];
 
      
	}

	function get_data(Request $request){
		$contactInfo = Storage::disk('local')->get('data.json');
		$data = json_decode($contactInfo);
	
		return view('allProduct')->with('data',$data);
	}
}