<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use TCG\Voyager\Traits\Translatable;


class PageSlide extends Model {
    use Translatable, SoftDeletes;
    protected $translatable = ['main_head', 'sub_head'];

}
