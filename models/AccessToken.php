<?php

class AccessToken extends \Illuminate\Database\Eloquent\Model {
    protected $fillable = [
        'id',
        'token',
        'username',
        'u_type',
    ];


    public $timestamps = false;
}

?>