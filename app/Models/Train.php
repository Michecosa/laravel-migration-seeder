<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Train extends Model
{
    public function getStatusLabelAttribute()
    {
        return $this->is_cancelled ? 'Cancellato' : 'In orario';
    }

    public function getFormattedDateAttribute()
    {
        return Carbon::parse($this->departure_date)->translatedFormat('d F Y');
    }
}
