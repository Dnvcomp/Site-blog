<?php

namespace Dnvcomp;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public function filter()
    {
        return $this->belongsTo('Dnvcomp\Filter','filter_alias','alias');
    }
}
