<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ConferenceRegistrant extends Model {

	public function conference()
    {
        return $this->hasOne('Conference');
    }

}
