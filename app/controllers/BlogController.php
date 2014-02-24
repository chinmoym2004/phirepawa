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

	public function getCreate()
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
		$blog=Blog::where('verified','=',1)->get();
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
		
		$blog=Blog::where('id','=',$id)->get();
		$data=array(
			'blog'=>$blog
			);
		$this->layout->content = View::make('blog.display',$data);
	}
 ///for single user 
	public function getMycontent(){
		$uid=Auth::user()->id;
		$blog=Blog::where('uid','=',$uid)->get();
		$data=array(
			'blog' => $blog 
			);
		$this->layout->content = View::make('blog.view',$data);

	}

}