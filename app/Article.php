<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable=['title','content','publshed_t'];
    protected $dates= ['published_at'];

    //setTitleAttribute
    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::createFormFormat('Y-m-d',$date);
    }

    public function scopePublished($query)
    {
      $query->where('published_at','<=',Carbon::now());
    }
}
