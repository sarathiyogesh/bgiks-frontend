<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cms extends Model
{
    protected $table='cms';

    public static function getvalue($key){
    	$info = Cms::where('field_slug', $key)->first();
    	if($info){
    		return $info->content;
    	}
    	return '';
    }

}