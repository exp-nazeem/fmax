<?php
class SubscribeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'SubscribeController@mail');
	|
	*/
	public function mail($email)
	{
		try{
			$list_id = "01a314861b";
			return MailchimpWrapper::lists()->subscribe($list_id, array('email'=>$email), NULL, 'html', false);	
		}
		catch(Exception $e){
			return false;
		}

	}

	public function feedback()
	{
		if (Request::isMethod('post')) {
			$feedback = new FeedbackModel();
			$feedback->email = Input::get('email');
			$feedback->name = Input::get('name');
			$feedback->phone = Input::get('phone');
			$feedback->company = Input::get('company', '');
			$feedback->message = Input::get('message');
			$feedback->date = date("Y-m-d H:i:s");
	 		$feedback->save();
        }
        $data = array(
        	'name' => Input::get('name'),
        	'phone' => Input::get('phone'),
        	'company' => Input::get('company'),
        	'comments' => Input::get('message')
        );
		Mailgun::send('emails.feedback', $data, function($message)
		{
		    $to  = Config::get('configuration.sales_email');
		    $message->from(Input::get('email'));
		    $message->to($to,$to)->subject('Partner '. Input::get('name'));
		});    
		if(Input::get('newsletter') ){
			$this->mail(Input::get('email'));
		}    
	}

	public function partner()
	{
		if (Request::isMethod('post')) {
			$partner = new PartnerModel();
			$partner->email = Input::get('email');
			$partner->name = Input::get('name');
			$partner->jobs = Input::get('jobs');
			$partner->phone = Input::get('phone');
		    $partner->country = Input::get('country', '');
			$partner->company = Input::get('company', '');
			$partner->website = Input::get('website', '');
			$partner->address = Input::get('address', '');
			$partner->message = Input::get('message');
	 		$partner->save();
        
        $data = array(
        	'name' => $partner->name,
        	'phone' =>$partner->phone,
        	'jobs' => $partner->jobs,
        	'phone' => $partner->phone,
        	'website' => $partner->website,
        	'address' => $partner->address,
        	'company' => $partner->company,
        	'country' => $partner->country,
        	'comments' => $partner->message
        );
		Mailgun::send('emails.partner', $data, function($message)
		{
			$to  = Config::get('configuration.sales_email');
		    $message->from(Input::get('email'));
		    $message->to($to,$to)->subject('Partner Feedback from '. Input::get('name'));
		});    
		}  
	}

}
