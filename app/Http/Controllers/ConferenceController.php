<?php namespace App\Http\Controllers;

use App\ConferenceRegistrant;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ConferenceRegistrationRequest;

/**
 * Class ConferenceController
 * @package App\Http\Controllers
 */
class ConferenceController extends Controller {

    /**
     * @return mixed
     */
    public function getConferenceRegistrants()
    {
        $registrants = ConferenceRegistrant::orderBy('last_name')->get();

        return View::make('vcms5::custom.conference-registrations')
            ->with('registrants', $registrants);
    }


    /**
     * @return mixed
     */
    public function getRegistrant()
    {
        $commissions = [
            0 => "N/A",
            1 => "Northwest Regional Service Commission",
            2 => "Restigouche Regional Service Commission",
            3 => "Chaleur Regional Service Commission",
            4 => "Acadian Peninsula Regional Service Commission",
            5 => "Greater Miramichi Regional Service Commission",
            6 => "Kent Regional Service Commission",
            7 => "Southeast Regional Service Commission",
            8 => "Regional Service Commission 8 ",
            9 => "Fundy Regional Service Commission",
            10 => "Southwest New Brunswick Service Commission ",
            11 => "Regional Service Commission 11",
            12 => "Regional Service Commission 12 (Western Valley Regional Service Commission)",
        ];
        $registrant = ConferenceRegistrant::find(Input::get('id'));

        return View::make('vcms5::custom.conference-registrant')
            ->with('registrant', $registrant)
            ->with('commissions', $commissions);
    }


    /**
     * @return mixed
     * @throws \Exception
     */
    public function getDeleteRegistrant()
    {
        ConferenceRegistrant::find(Input::get('id'))->delete();

        return Redirect::to('/admin/conferences/all-registrations');

    }


    public function getEditRegistrant()
    {
        $registrant = ConferenceRegistrant::find(Input::get('id'));

        return View::make("vcms5::custom.edit-conference-registrant")
            ->with('registrant', $registrant);
    }


    public function postEditRegistrant(ConferenceRegistrationRequest $request)
    {

        $registration =  ConferenceRegistrant::find(Input::get('id'));

        $registration->conference_id = Input::get('conference_id');
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

        return Redirect::to('/admin/conferences/all-registrations');

    }
}
