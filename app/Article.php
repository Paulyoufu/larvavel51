<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable=['title','content','publshed_t', 'user_id'];
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

    public function user()
    {
      return $this->belongsTo('App\User');//文章属于某个用户的
    }
}
