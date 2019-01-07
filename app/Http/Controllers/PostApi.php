<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostApi extends Controller
{
    //
	public function index() {

		$data = Post::all(); //fetch all data from database

		return $data;
	}
}
