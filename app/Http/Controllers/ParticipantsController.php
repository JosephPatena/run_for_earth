<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participants;
use Session;

class ParticipantsController extends Controller
{
    public function __construct()
    {
    	$this->participants = new Participants;
    }

    public function congratulation(){
    	$participants = (object)Session::get('participants');
    	return view('congratulations', compact('participants'));
    }

    public function participants(){
    	$participants = $this->participants->all_participants();
    	return view('participants', compact('participants'));
    }
}
