<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public $timestamps = false;
    const ACTION_TYPE = 'Action';
    const THRILLER_TYPE = "Thriller";
    const COMEDY_TYPE = "Comedy";
    const SCIFI_TYPE = "Sci-Fi";
    const HORROR_TYPE = "Horror";
}
