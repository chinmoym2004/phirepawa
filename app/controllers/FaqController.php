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

	public function delete(){
		//$this->layout->content = View::make('');
	}

	//for all uer
	public function index(){
		$faq=faq::where('verified','=',1)->get();
		$data=array(
			'faq' => $faq 
			);
		$this->layout->content = View::make('faq.view',$data);
	}

	public function postUpdate($id){
		$uid=Auth::user()->id;
		$faq=Blog::find($id);
		$faq->title= Input::get('faq_title');
		$faq->body= Input::get('faq_desc');
		$faq->uid= $uid;
		$faq->verified= 0;
		$faq->save();
		return Redirect::to('faq/mycontent');
	}

	public function postCreate(){
		$uid=Auth::user()->id;
		$faq=new Faq();
		$faq->title= Input::get('faq_title');
		$faq->body= Input::get('faq_desc');
		$faq->uid= $uid;
		$faq->verified= 0;
		$faq->save();
		return Redirect::to('faq/mycontent');
	}

	public function getEdit($id)
	{
		
		$blog=Faq::where('id','=',$id)->get();
		$data=array(
			'faq'=>$faq,
			'operation'=>'update'
			);
		$this->layout->content = View::make('faq.create',$data);
	}

	public function getDisplay($id)
	{
		
		$faq=Faq::where('id','=',$id)->get();
		$data=array(
			'faq'=>$faq
			);
		$this->layout->content = View::make('faq.display',$data);
	}
 ///for single user 
	public function getMycontent(){
		$uid=Auth::user()->id;
		$faq=faq::where('uid','=',$uid)->get();
		$data=array(
			'faq' => $faq 
			);
		$this->layout->content = View::make('faq.view',$data);

	}

}