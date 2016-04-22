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
	protected $layout = 'layouts.main';

	public function showWelcome()
	{
		$testimonials = TestimonialsModel::where('status', '=', 1)->get();
		return View::make('index')->with('testimonials', $testimonials);
	}

	public function contact()
	{
		return View::make('contact');
	}

	public function about()
	{
		return View::make('aboutus');
	}

	public function news($id = 1)
	{
		$newsDet = explode("-", $id);
		if(count($newsDet) >1){
			 $id = $newsDet[0];	
			 $news = NewsModel::where('status', '=', 1)->where('id','=',$id)->get();
			 $showPagination =0;
		}
		else{
			$news = NewsModel::where('status', '=', 1)->offset(($id - 1) * 5)->take(5)->orderBy('priority', 'ASC')->get();
			$showPagination = 1;

		}
		return View::make('news')->with(array('news' => $news, "id" => $id ,"showPagination" => $showPagination));
	}

	public function product()
	{
		return View::make('product');
	}
	public function business()
	{
		return View::make('business');
	}
	public function casestudy()
	{
		return View::make('casestudy');
	}
	public function downloadCasestudy()
	{
		return View::make('downloadCasestudy');
	}

	public function customerStories()
	{
		return View::make('customer-stories');
	}
	public function downloads()
	{
		if (Request::isMethod('post')) {
			$feedback = new FeedbackModel();
			$feedback->email = Input::get('email');
			$feedback->name = Input::get('name');
			$feedback->phone = Input::get('phone');
			$feedback->date = date("Y-m-d H:i:s");
	 		$feedback->save();
        }
        $data = array(
        	'name' => Input::get('name'),
        	'phone' => Input::get('phone'),
        );
		Mailgun::send('emails.downloads', $data, function($message)
		{
		    $message->from(Input::get('email'));
		    $message->to('ajish.j@experionglobal.com', 'Ajish J')->subject('Download access from '. Input::get('name'));
		});    
		return View::make('downloads');
	}
	public function freeDownloads(){
		return View::make('downloads');
	}
	public function faq()
	{
		return View::make('faq');
	}
	public function industry()
	{
		return View::make('industry');
	}

	

	public function cpg()
	{
		return View::make('solutions.cpg');
	}
	public function vansales()
	{
		return View::make('solutions.vansales');
	}
	public function pharma()
	{
		return View::make('solutions.pharma');
	}
	public function retail()
	{
		return View::make('solutions.retail');
	}
	public function audit()
	{
		return View::make('solutions.audit');
	}
	

}
