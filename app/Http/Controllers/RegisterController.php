<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participants;
use Carbon\Carbon;
use Session;

class RegisterController extends Controller
{
    public function __construct()
    {
    	$this->participants = new Participants;
    }

    public function register(Request $request){
        $participants = array();
        foreach ($request->first_name as $key => $value) {
        	$create = [
        		'first_name' => $request->first_name[$key],
        		'last_name' => $request->last_name[$key],
        		'complete_address' => $request->complete_address[$key],
        		'gender' => $request->gender[$key],
        		'birthday' => $request->birthday[$key],
        		'contact_number' => $request->contact_number[$key],
        		'email_address' => $request->email_address[$key],
        		'shirt_size' => $request->shirt_size[$key]
        	];
        	$participant = $this->participants->create_participant($create);

            array_push($participants, $participant);

        }
        Session::put('participants', $participants);

    	return redirect()->route('congratulation');
    }
}
