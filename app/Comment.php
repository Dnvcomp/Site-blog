<?php

namespace Dnvcomp;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['name','text','site','user_id','article_id','parent_id','email'];
    public function article()
    {
        return $this->belongsTo('Dnvcomp\Article');
    }

    public function user()
    {
        return $this->belongsTo('Dnvcomp\User');
    }
}
