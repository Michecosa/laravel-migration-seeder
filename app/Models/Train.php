<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    public function getStatusLabelAttribute()
    {
        return $this->is_cancelled ? 'Cancellato' : 'In orario';
    }
}
