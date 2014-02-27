<?php

class FaqController extends BaseController {

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
		$this->layout->content = View::make('faq.create',$data);
	}
	public function postCreate()
	{
		
		$uid=Auth::user()->id;
		$faq=new Faq();
		$faq->title= Input::get('title');
		$faq->body= Input::get('body');
		$faq->tags= Input::get('tags');
		$faq->uid= $uid;
		$faq->verified= 0;
		$faq->save();
		return Redirect::to('faq/mycontent');

	}

	public function delete(){
		//$this->layout->content = View::make('');
	}

	//for all uer
	public function index(){
		//$faq=faq::where('verified','=',1)->get();
		$faq=DB::table('faq')
		->join('users','users.id','=','faq.uid')
		->select('*','faq.id as postid')
		->where('faq.verified','=',1)
		->get();
		$data=array(
			'faq' => $faq 
			);
		$this->layout->content = View::make('faq.view',$data);
	}

	public function postUpdate($id){
		$uid=Auth::user()->id;
		$faq=Faq::find($id);
		$faq->title= Input::get('title');
		$faq->body= Input::get('body');
		$faq->tags= Input::get('tags');
		$faq->uid= $uid;
		$faq->verified= 0;
		$faq->save();
		return Redirect::to('faq/mycontent');
	}
	public function getEdit($id)
	{
		
		$faq=faq::where('id','=',$id)->get();
		$data=array(
			'faq'=>$faq,
			'operation'=>'update'
			);
		$this->layout->content = View::make('faq.create',$data);
	}
	public function getDisplay($id)
	{
		$chkFaq=Faq::where('uid','=',Auth::user()->id)->get();
		if($chkFaq)
		{
			$faq=DB::table('faq')
			->join('users','users.id','=','faq.uid')
			->select('*','faq.id as postid')
			->where('faq.id','=',$id)
			->get();
		}
		else
		{
			$faq=DB::table('faq')
			->join('users','users.id','=','faq.uid')
			->select('*','faq.id as postid')
			->where('faq.id','=',$id)
			->where('faq.verified','=',1)
			->get();
		}

		if(count($faq))
		{
			$getallcomment=DB::table('comment')
			->join('users','users.id','=','comment.doneby')
			->select('*','comment.updated_at as commenton')
			->where('comment.context','=','faq')
			->where('comment.contextid','=',$id)
			->where('comment.verified','=',1)
			->get();
			$data=array(
				'faq'=>$faq,
				'getallcomment'=>$getallcomment,
				'postid'=>$id
				);
			$this->layout->content = View::make('faq.display',$data);
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
			$faq=DB::table('faq')
			->join('users','users.id','=','faq.uid')
			->select('*','faq.id as postid')
			->where('faq.uid','=',$uid)
			->get();
			$data=array(
				'faq' => $faq 
				);
			$this->layout->content = View::make('faq.view',$data);
		}
		else
		{
		return Redirect::to('users/login');
		}
	}

}