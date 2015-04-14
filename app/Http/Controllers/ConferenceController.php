<?php namespace App\Http\Controllers;

use App\Commission;
use App\ConferenceRegistrant;
use App\Invitee;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ConferenceRegistrationRequest;
use Maatwebsite\Excel\Facades\Excel;

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
        $registrant = ConferenceRegistrant::find(Input::get('id'));

        $commissions_result = Commission::all();

        $commissions = [];

        foreach ($commissions_result as $commission)
        {
            $commissions[$commission->id] = $commission->commission_name;
        }

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


    /**
     * @return mixed
     * @throws \Exception
     */
    public function getDeleteInvitee()
    {
        Invitee::find(Input::get('id'))->delete();

        return Redirect::to('/admin/conferences/all-invitees');

    }


    /**
     * @return mixed
     */
    public function getEditRegistrant()
    {
        $registrant = ConferenceRegistrant::find(Input::get('id'));

        $commissions_result = Commission::all();

        $commissions = [];

        foreach ($commissions_result as $commission)
        {
            $commissions[$commission->id] = $commission->commission_name;
        }

        return View::make("vcms5::custom.edit-conference-registrant")
            ->with('registrant', $registrant)
            ->with('commissions', $commissions);
    }


    /**
     * @param ConferenceRegistrationRequest $request
     * @return mixed
     */
    public function postEditRegistrant(ConferenceRegistrationRequest $request)
    {

        $registration = ConferenceRegistrant::find(Input::get('id'));

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


    /**
     * @return mixed
     */
    public function getInvitees()
    {
        $invitees = Invitee::orderBy('last_name')->get();

        return View::make('vcms5::custom.conference-invitees')
            ->with('invitees', $invitees);
    }


    /**
     * @return mixed
     */
    public function getEditInvitee()
    {
        $invitee = Invitee::find(Input::get('id'));
        $commissions_result = Commission::all();

        $commissions = [];

        foreach ($commissions_result as $commission)
        {
            $commissions[$commission->id] = $commission->commission_name;
        }

        return View::make('vcms5::custom.edit-invitee')
            ->with("registrant", $invitee)
            ->with("commissions", $commissions);
    }


    /**
     * @return mixed
     */
    public function postEditInvitee()
    {
        $invitee = Invitee::find(Input::get('id'));

        $invitee->first_name = Input::get('first_name');
        $invitee->last_name = Input::get('last_name');
        $invitee->company = Input::get('company');
        $invitee->email = Input::get('email');
        $invitee->city = Input::get('city');
        $invitee->email = Input::get('phone');
        $invitee->fax = Input::get('fax');
        $invitee->band = Input::get('band');
        $invitee->invite_type = Input::get('invite_type');
        $invitee->commission_id = Input::get('commission_id');
        $invitee->save();

        return Redirect::to('/admin/conferences/all-invitees');
    }


    /**
     * Export registrants to Excel
     */
    public function getExportRegistrantsToExcel()
    {
        $query = "select r.title, r.last_name, r.first_name, c.commission_name, r.company, r.email, r.address, "
            . "r.city, r.zip, r.phone, r.created_at, r.updated_at from conference_registrants r "
            . "left join commissions c on (r.commission_id = c.id) "
            . "order by last_name";
        $results = DB::select(DB::raw($query));

        $final = [];
        $final[] = ['', date("Y-m-d H:i")];
        $final[] = ['Title', 'Last Name', 'First Name', 'Commission', 'Company',
            'Email', 'Address', 'City', 'Postal', 'Phone', 'Created', 'Updated'];

        foreach ($results as $result)
        {
            $temp = (array) $result;
            $final[] = $temp;
        }

        Excel::create('Filename', function ($excel) use ($final)
        {
            $excel->sheet('Sheetname', function ($sheet) use ($final)
            {
                $sheet->fromArray($final);
            });
        })->export('xlsx');

    }

}
