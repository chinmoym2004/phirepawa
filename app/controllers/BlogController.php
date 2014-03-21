<?php

class BlogController extends BaseController {

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

	public function getNew()
	{
		
		$data=array(
			'operation'=>'new'
		);
		$this->layout->content = View::make('blog.create',$data);
	}
	public function postCreate()
	{
		
		$uid=Auth::user()->id;
		$blog=new Blog();
		$blog->title= Input::get('title');
		$blog->body= Input::get('body');
		$blog->tags= Input::get('tags');
		$blog->uid= $uid;
		$blog->verified= 0;
		$blog->save();
		return Redirect::to('blog/mycontent');

	}

	public function delete(){
		//$this->layout->content = View::make('');
	}

	//for all uer
	public function index(){
		//$blog=Blog::where('verified','=',1)->get();
		$blog=DB::table('blog')
		->join('users','users.id','=','blog.uid')
		->select('*','blog.id as postid')
		->where('blog.verified','=',1)
		->get();
		$data=array(
			'blog' => $blog 
			);
		$this->layout->content = View::make('blog.view',$data);
	}

	public function postUpdate($id){
		$uid=Auth::user()->id;
		$blog=Blog::find($id);
		$blog->title= Input::get('title');
		$blog->body= Input::get('body');
		$blog->tags= Input::get('tags');
		$blog->uid= $uid;
		$blog->verified= 0;
		$blog->save();
		return Redirect::to('blog/mycontent');
	}
	public function getEdit($id)
	{
		
		$blog=Blog::where('id','=',$id)->get();
		$data=array(
			'blog'=>$blog,
			'operation'=>'update'
			);
		$this->layout->content = View::make('blog.create',$data);
	}
	public function getDisplay($id)
	{
		if(Auth::check())
		{
			$chkBlog=Blog::where('uid','=',Auth::user()->id)->get();
			if($chkBlog)
			{
				$blog=DB::table('blog')
				->join('users','users.id','=','blog.uid')
				->select('*','blog.id as postid')
				->where('blog.id','=',$id)
				->get();
			}
		}
		else
		{
			$blog=DB::table('blog')
			->join('users','users.id','=','blog.uid')
			->select('*','blog.id as postid')
			->where('blog.id','=',$id)
			->where('blog.verified','=',1)
			->get();
		}
		if(count($blog))
		{
			$getallcomment=DB::table('comment')
			->join('users','users.id','=','comment.doneby')
			->select('*','comment.updated_at as commenton')
			->where('comment.context','=','blog')
			->where('comment.contextid','=',$id)
			->where('comment.verified','=',1)
			->get();
			$data=array(
				'blog'=>$blog,
				'getallcomment'=>$getallcomment,
				'postid'=>$id
				);
			$this->layout->content = View::make('blog.display',$data);
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
			$blog=DB::table('blog')
			->join('users','users.id','=','blog.uid')
			->select('*','blog.id as postid')
			->where('blog.uid','=',$uid)
			->get();
			$data=array(
				'blog' => $blog 
				);
			$this->layout->content = View::make('blog.view',$data);
		}
		else
		{
		return Redirect::to('users/login');
		}
	}

}