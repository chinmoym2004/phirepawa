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
		
		$uid=Auth::user()->id;
		$forum=new Forum();
		$forum->title= Input::get('title');
		$forum->body= Input::get('body');
		$forum->uid= $uid;
		$forum->verified= 0;
		$forum->save();
		return Redirect::to('forum/mycontent');

	}

	public function delete(){
		//$this->layout->content = View::make('');
	}

	//for all uer
	public function index(){
		//$forum=forum::where('verified','=',1)->get();
		$forum=DB::table('forum')
		->join('users','users.id','=','forum.uid')
		->select('*','forum.id as postid')
		->where('forum.verified','=',1)
		->get();
		$data=array(
			'forum' => $forum 
			);
		$this->layout->content = View::make('forum.view',$data);
	}

	public function postUpdate($id){
		$uid=Auth::user()->id;
		$forum=Forum::find($id);
		$forum->title= Input::get('title');
		$forum->body= Input::get('body');
		$forum->tags= Input::get('tags');
		$forum->uid= $uid;
		$forum->verified= 0;
		$forum->save();
		return Redirect::to('forum/mycontent');
	}
	public function getEdit($id)
	{
		
		$forum=Forum::where('id','=',$id)->get();
		$data=array(
			'forum'=>$forum,
			'operation'=>'update'
			);
		$this->layout->content = View::make('forum.create',$data);
	}
	public function getDisplay($id)
	{
		$chkforum=Forum::where('uid','=',Auth::user()->id)->get();
		if($chkforum)
		{
			$forum=DB::table('forum')
			->join('users','users.id','=','forum.uid')
			->select('*','forum.id as postid')
			->where('forum.id','=',$id)
			->get();
		}
		else
		{
			$forum=DB::table('forum')
			->join('users','users.id','=','forum.uid')
			->select('*','forum.id as postid')
			->where('forum.id','=',$id)
			->where('forum.verified','=',1)
			->get();
		}

		if(count($forum))
		{
			$getallcomment=DB::table('comment')
			->join('users','users.id','=','comment.doneby')
			->select('*','comment.updated_at as commenton')
			->where('comment.context','=','forum')
			->where('comment.contextid','=',$id)
			->where('comment.verified','=',1)
			->get();
			$data=array(
				'forum'=>$forum,
				'getallcomment'=>$getallcomment,
				'postid'=>$id
				);
			$this->layout->content = View::make('forum.display',$data);
		}
		else
		{
			return Redirect::to('error');
		}
	}
 ///for single user 
	public function getMycontent(){
		if(Auth::check())
		{
			$uid=Auth::user()->id;
			$forum=DB::table('forum')
			->join('users','users.id','=','forum.uid')
			->select('*','forum.id as postid')
			->where('forum.uid','=',$uid)
			->get();
			$data=array(
				'forum' => $forum 
				);
			$this->layout->content = View::make('forum.view',$data);
		}
		else
		{
		return Redirect::to('users/login');
		}
	}

}