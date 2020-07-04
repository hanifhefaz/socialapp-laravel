<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ExploreController extends Controller
{
	public function index()
	{

		return view('explore', [
			'users' => User::paginate(15),
		]);
	}
    
}
