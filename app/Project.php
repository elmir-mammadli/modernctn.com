<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use TCG\Voyager\Traits\Translatable;


class Project extends Model {
    use Translatable, SoftDeletes;
    protected $translatable = ['title', 'body', 'address', 'description'];
}
