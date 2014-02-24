<?php

class ForumController extends BaseController {

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
	//for all uer
	public function index(){
		$forum=Forum::where('verified','=',1)->get();
		$data=array(
			'forum' => $forum 
			);
		$this->layout->content = View::make('forum.view',$data);
	}

	protected $layout="mainLayout";

	public function getNew()
	{
		
		$data=array(
			'operation'=>'new'
			);
		$this->layout->content = View::make('forum.create',$data);
	}

	public function postCreate()
	{
		$forum=new Forum();
		$forum->topics=Input::get('forumTopics');
		$forum->desc=Input::get('description');
		$forum->created_by=Auth::user()->id;
		$forum->verified=0;
		$forum->save();
		return Redirect::to('forum/new')->with('message','Forum topics has saved successfully for verification');
	}

	public function delete(){
		//$this->layout->content = View::make('');
	}

	

	public function update(){
		$data=array(
			'forum'=>$forum,
			'operation'=>'update'
			);
		$this->layout->content = View::make('forum.update',$data);
	}

 ///for single user 
	public function getMycontent(){
		$uid=Auth::user()->id;
		$forum=forum::where('uid','=',$uid)->get();
		$data=array(
			'forum' => $forum 
			);
		$this->layout->content = View::make('forum.view',$data);

	}

}