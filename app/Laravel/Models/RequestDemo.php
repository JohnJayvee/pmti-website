<?php

namespace App\Laravel\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RequestDemo extends Model
{
    use SoftDeletes;
    protected $table = "request_demo";


}
