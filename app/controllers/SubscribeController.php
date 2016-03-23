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
			$list_id = "ac600f5804";
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
		    $message->from(Input::get('email'));
		    $message->to('sales@fieldmax.in', 'John Smith')->subject('Feedback from '. Input::get('name'));
		});    
		if(Input::get('newsletter') ){
			$this->mail(Input::get('email'));
		}    
	}

}
