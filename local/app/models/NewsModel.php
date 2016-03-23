<?php

class NewsModel extends Eloquent 
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'max_news';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('created_at','updated_at');

    /**
     * Set the primary key field
     *
     * @var String
     */
    protected $primaryKey = 'id';
    

    protected $fillable =  [];

    protected $guarded =  array('created_at','updated_at');
    /**
     * Set timestamp
     *
     * @var Boolean
     */
    public $timestamps = false;
} 