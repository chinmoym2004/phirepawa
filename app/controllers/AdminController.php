<?php

class AdminController extends BaseController {

	protected $layout="adminmainLayout";


	public function index()
	{
		if(Auth::check())
		{
		if(Auth::user()->usertype=='admin' || Auth::user()->usertype=='super'){
			$noofpost=DB::table('blog')->join('users', 'users.id', '=', 'blog.uid')->select('*','blog.id as blogid','blog.created_at as postedon')->where('blog.verified','=',0)->get();

			$nooffaq=DB::table('faq')->join('users', 'users.id', '=', 'faq.uid')->select('*','faq.id as faqid','faq.created_at as postedon')->where('faq.verified','=',0)->get();

			$noofcomments=Comments::where('verified','=',0)->get();


			$data=array(
				'noofpost' => $noofpost,
				'nooffaq'=>$nooffaq ,
				'noofcomments'=>$noofcomments
			);
			$this->layout->content = View::make('admin.home',$data);
		}
	}
	else{
		$this->layout->content = View::make('users.login');
	}
		
	}
	public function getDashboard()
	{
		if(Auth::user()->usertype=='admin'||Auth::user()->usertype=='super'){
			$noofpost=DB::table('blog')->join('users', 'users.id', '=', 'blog.uid')->select('*','blog.id as blogid','blog.created_at as postedon')->where('blog.verified','=',0)->get();

			$nooffaq=DB::table('faq')->join('users', 'users.id', '=', 'faq.uid')->select('*','faq.id as faqid','faq.created_at as postedon')->where('faq.verified','=',0)->get();

			$noofcomments=Comments::where('verified','=',0)->get();

			$data=array(
				'noofpost' => $noofpost,
				'nooffaq'=>$nooffaq ,
				'noofcomments'=>$noofcomments
			);
			$this->layout->content = View::make('admin.home',$data);
		}
		
	}

	public function getShowallpost(){
		$approvedpost=DB::table('blog')->join('users', 'users.id', '=', 'blog.uid')->select('*','blog.id as blogid','blog.created_at as postedon')->where('blog.verified','=',1)->get();
		$data=array(
			'noofpost'=>$approvedpost
		);
		$this->layout->content = View::make('admin.approvedpost',$data);
	}

	public function getAllnewlyblog(){
		$newpost=DB::table('blog')
		->join('users', 'users.id', '=', 'blog.uid')
		->select('*','blog.id as blogid','blog.created_at as postedon')
		->where('blog.verified','=',0)->get();
		$data=array(
			'noofpost'=>$newpost
		);
		$this->layout->content = View::make('admin.newpost',$data);	
	}
	public function getAllnewlyfaq(){
		$newfaq=DB::table('faq')
		->join('users', 'users.id', '=', 'faq.uid')
		->select('*','faq.id as faqid','faq.created_at as postedon')
		->where('faq.verified','=',0)->get();
		$data=array(
			'nooffaq'=>$newfaq
		);
		$this->layout->content = View::make('admin.newfaq',$data);	
	}

	public function getShowallfaq(){
		$newfaq=DB::table('faq')
		->join('users', 'users.id', '=', 'faq.uid')
		->select('*','faq.id as faqid','faq.created_at as postedon')
		->where('faq.verified','=',1)->get();
		$data=array(
			'nooffaq'=>$newfaq
		);
		$this->layout->content = View::make('admin.newfaq',$data);	
	}

	public function getAdduser(){
		if(Auth::user()->usertype=='admin'){
			$data=array(
				'auth'=>0
			);
			$this->layout->content=View::make('admin.adduser',$data);
		}
		else if(Auth::user()->usertype=='super'){
			$data=array(
				'auth' =>1
			);
			$this->layout->content=View::make('admin.adduser',$data);
		}
		else{
			$data=array(
				'auth'=>0
			);
			$this->layout->content=View::make('admin.adduser',$data);
		}
	}




	public function postAdduser(){
		$validator = Validator::make(Input::all(), User::$rules);
		if ($validator->passes()) 
		{
			$saveuser=new User();
			$saveuser->email=Input::get('email');
			$saveuser->firstname=Input::get('firstname');
			$saveuser->lastname=Input::get('lastname');
			$saveuser->regno=Input::get('regno');
			$saveuser->password=Hash::make(Input::get('password'));
			$saveuser->usertype=Input::get('usertype');
			$saveuser->year=Input::get('useryear');
			$saveuser->active=1;
			$saveuser->save();
			return Redirect::to('admin/adduser')->with('message', '<strong>Success</strong>User added');
		}
		else{
			return Redirect::to('admin/adduser')->with('message', '<strong>Oh no!</strong>Change a few things up and try submitting again')->withErrors($validator)->withInput();
		}
	}


	public function getUseradmin(){
		$getuser=User::where('usertype','=','admin')->orWhere('usertype','=','super')->paginate(1);
		$data=array('getuser' => $getuser);
		$this->layout->content=View::make('admin.listadmin',$data);
	}

	public function getUsercommon(){
		$getuser=User::where('usertype','=','common')->paginate(1);
		$data=array('getuser' => $getuser);
		$this->layout->content=View::make('admin.listcommon',$data);
	}

	public function getSiteinfo(){

		$update=Siteinfo::get();
		foreach ($update as $key) {
			if($key->context_type=='aboutus')
			{
				$about=$key->about;
				$aboutid=$key->id;
			}
			else if($key->context_type=='home')
			{
				$home=$key->about;
				$homeid=$key->id;
			}
		}
		$data=array(
			'about'=>$about,
			'aboutid'=>$aboutid,
			'home'=>$home,
			'homeid'=>$homeid
			);
		$this->layout->content=View::make('admin.siteinfo',$data);	
	}


	public function postAboutus()
	{
		$update=Siteinfo::find(Input::get('aboutid'));
		$update->about=Input::get('saveAboutus');
		$update->save();
		return Redirect::to('admin/siteinfo');
	}

	public function postHomecontent()
	{
		$update=Siteinfo::find(Input::get('homeid'));
		$update->about=Input::get('saveHome');
		$update->save();
		return Redirect::to('admin/siteinfo');
	}

	public function getGallery()
	{
		//$getPhotos=Gallery::orderpaginate(2);
		$this->layout->content=View::make('admin.gallery');
	}
	public function getUploadimage()
	{
		//$getPhotos=Gallery::orderpaginate(2);
		$this->layout->content=View::make('admin.uploadimage');
	}

	public function getDelete($id)
	{
		if(Auth::check())
		{
		//$getPhotos=Gallery::orderpaginate(2);
			if(Auth::user()->usertype=='admin'||Auth::user()->usertype=='super')
			{
			$getPost=Blog::find($id);
			$getPost->delete();
			
				$noofpost=DB::table('blog')->join('users', 'users.id', '=', 'blog.uid')->select('*','blog.id as blogid','blog.created_at as postedon')->where('blog.verified','=',0)->get();

				$nooffaq=DB::table('faq')->join('users', 'users.id', '=', 'faq.uid')->select('*','faq.id as faqid','faq.created_at as postedon')->where('faq.verified','=',0)->get();

				

				$data=array(
					'noofpost' => $noofpost,
					'nooffaq'=>$nooffaq ,
				);
				$this->layout->content = View::make('admin.home',$data);
			}
			else
			{
				return Redirect::to('/')->with('message',"Un-Authorized Access");
			}
		}
		else{
			return Redirect::to('/');
		}
		
	}

	public function getVerify($id)
	{
		if(Auth::check())
		{
			if(Auth::user()->usertype=='admin'||Auth::user()->usertype=='super')
			{
					//$getPhotos=Gallery::orderpaginate(2);
					$getPost=Blog::find($id);
					$getPost->verified=1;
					$getPost->save();
					$newpost=DB::table('blog')
					->join('users', 'users.id', '=', 'blog.uid')
					->select('*','blog.id as blogid','blog.created_at as postedon')
					->where('blog.verified','=',0)->get();
					$data=array(
						'noofpost'=>$newpost
					);
					$this->layout->content = View::make('admin.newpost',$data);
			}
			else
			{
				return Redirect::to('/')->with('message',"Un-Authorized Access");
			}
		}
		else
		{
			return Redirect::to('/');
		}
		
	}


	public function getAllnewlycomment()
	{
		$noofcomments=DB::table('comment')
		->join('users', 'users.id', '=', 'comment.doneby')
		->select('*','comment.id as commentid','comment.updated_at as postedon')
		->where('comment.verified','=',0)->get();
		$data=array(
			'noofcomments'=>$noofcomments
		);
		$this->layout->content = View::make('admin.newcomments',$data);	
	}
	public function postVerifycomment($id)
	{
		$getComment=Comments::find($id);
		$getComment->verified=1;
		$getComment->save();
	}
	public function postDeletecomment($id)
	{
		$getComment=Comments::find($id);
		$getComment->delete();
	}

	
}
