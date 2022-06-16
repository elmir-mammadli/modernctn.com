<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use TCG\Voyager\Traits\Translatable;


class Service extends Model {
    use Translatable, SoftDeletes;
    protected $translatable = ['title', 'description'];
}
