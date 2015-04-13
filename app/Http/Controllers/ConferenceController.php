<?php namespace App\Http\Controllers;

use App\ConferenceRegistrant;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;

class ConferenceController extends Controller {

    public function getConferenceRegistrants()
    {
        $registrants = ConferenceRegistrant::orderBy('last_name')->get();

        return View::make('vcms5::custom.conference-registrations')
            ->with('registrants', $registrants);
    }


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

    public function getDeleteRegistrant()
    {
        ConferenceRegistrant::find(Input::get('id'))->delete();

        return Redirect::to('/admin/conferences/all-registrations');

    }
}
