<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use TCG\Voyager\Facades\Voyager;

class About extends \TCG\Voyager\Models\DataRow
{
    use HasFactory,Translatable;

    protected $translatable = ['slug', 'name'];

    protected $table = 'abouts';

    protected $fillable = ['slug', 'name', 'order'];
}
