<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cmsimage extends Model
{
    protected $table='cmsimages';

    public static function getsingle($key){
    	$info = Cmsimage::where('label_name', $key)->first();
    	if($info){
    		return $info->file_path;
    	}
    	return '';
    }

}