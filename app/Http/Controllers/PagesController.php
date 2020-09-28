<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Get Index Page (/index)
    public function getIndex(){
    	return view('pages.index');
    }
	//Get About Page (/about)
    public function getAbout(){
    	return view('pages.about');
    }

	//Get Welcome Page (/)
    public function getWelcome(){
    	return view('pages.welcome');
    }
}
