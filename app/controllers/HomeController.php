<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	protected $layout="mainLayout";

	public function index()
	{
		$this->layout->content = View::make('index');
	}

	public function aboutus(){
		$this->layout->content = View::make('aboutus');
	}
	public function myprofile(){
		$this->layout->content = View::make('myprofile');
	}

}