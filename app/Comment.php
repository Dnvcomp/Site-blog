<?php

namespace Dnvcomp;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function article()
    {
        return $this->belongsTo('Dnvcomp\Article');
    }

    public function user()
    {
        return $this->belongsTo('Dnvcomp\User');
    }
}
