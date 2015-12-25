<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /*
     * the database table used by model;
     *
     * @var string
     */
    protected $table='article';
    protected $fillable=array('title','content','pid','publish_at');

    /**
     * @param $data
     */
    public function setPublishAtAttribute($data)
    {
        $this->attributes['publish_at']=Carbon::createFromFormat('Y-m-d',$data);
    }

    /**
     * @param $query
     */
    public function scopePublished($query)
    {
        $query->where('publish_at','<=',Carbon::now());
    }
}
