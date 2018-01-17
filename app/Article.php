<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = [


        'title',
        'body',
        'published_at'
    ];


    /**
     * @var array
     * The dates array contain the dates in Carbon lib format,
     * which provides a better manipulation of then.
     *
     * The dates array contains by default the attributes created_at
     * and updated_at
     */
    protected $dates = ['published_at'];


    /**
     * @param $date
     * Mutator to alter the published_at attribute on save, to add the time to the date
     */

    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::parse($date);
    }


    /**
     * @param $query
     * scope methods to get only published (published_at <= now) and get only unpublished (published_at > now)
     */

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeUnpublished($query)
    {
        $query->where('published_at', '>', Carbon::now());
    }

}
