<?php namespace App\Http\Controllers;

use App\Conference;
use App\ConferenceRegistrant;
use App\Http\Requests\ConferenceRegistrationRequest;
use App\Http\Requests\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;

class ConferenceRegistrationController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the registration form to the user
     *
     * @return Response
     */
    public function getRegistrationform()
    {
        $conference = Conference::find(1);

        return View::make('rnb')
            ->with('conference', $conference);
    }


    public function postRegistrationform(ConferenceRegistrationRequest $request)
    {

        $registration = new ConferenceRegistrant;
        $registration->conference_id = 1;
        $registration->title = Input::get('title');
        $registration->first_name = Input::get('first_name');
        $registration->last_name = Input::get('last_name');
        $registration->company = Input::get('company');
        $registration->email = Input::get('email');
        $registration->address = Input::get('address');
        $registration->city = Input::get('city');
        $registration->zip = Input::get('zip');
        $registration->phone = Input::get('phone');
        $registration->commission_id = Input::get('commission_id');
        $registration->save();

        $user_data = array(
            'email'      => Input::get('email'),
        );

        // the data that will be passed into the mail view blade template
        $data = array();

        // use Mail::send function to send email passing the data and using the $user variable in the closure
        Mail::queue('emails.confirmation-email', $data, function ($message) use ($user_data)
        {
            $message->from('info@recyclenb.com', 'Recycle NB');
            $message->to($user_data['email'])->subject('Registration Recieved');
        });


        return View::make('thanks');

    }


}
