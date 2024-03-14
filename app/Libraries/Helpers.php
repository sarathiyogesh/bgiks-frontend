<?php
use App\Models\Customfield;
use App\Models\Media;

class Helpers {

    public static function displaymsg(){
        if(Session::has('success')){
            return '<div class="alert alert-success">'.Session::get('success').'</div>';
        }elseif(Session::has('error')){
            return '<div class="alert alert-danger">'.Session::get('error').'</div>';
        }
    }

    public static function getcontent($key){
        $info = Customfield::where('field_slug', $key)->first();
        if($info){
            return html_entity_decode($info->field_value);
        }
        return '';
    }

    public static function getsingleimage($key){
        $info = Customfield::where('field_slug', $key)->first();
        if($info && $info->field_value){
            $image = Media::find($info->field_value);
            if($image){
                return 'http://bgiks.test/'.$image->image_link;
            }
        }
        return '';
    }

    public static function getcmsimagename($key){
        $info = Customfield::where('field_slug', $key)->first();
        if($info && $info->field_value){
            return Helpers::getmedianame($info->field_value);
        }
        return '';
    }

    public static function getmultipleimage($key){
        $info = Customfield::where('field_slug', $key)->first();
        $result = [];
        if($info && $info->field_value){
            $array = json_decode($info->field_value);
            foreach($array as $a){
                $image = Media::find($a);
                if($image){
                    array_push($result, asset($image->image_link));
                }
            }
        }
        return $result;
    }

    public static function getmedialink($id){
        $info = Media::find($id);
        if($info){
            return asset($info->image_link);
        }
        return '';
    }

    public static function getmedianame($id){
        $info = Media::find($id);
        if($info){
            return $info->file_name;
        }
        return '';
    }


    public static function emailvalidation($email){
        $api_key = env('NEVERBOUNCE_EMAIL_VALIDATION_API_KEY');
        try{
            \NeverBounce\Auth::setApiKey($api_key);
            $verification = \NeverBounce\Single::check($email, true, true);
            if(isset($verification->result) && $verification->result == 'valid'){
                return true;
            }
            return false;
        }catch(\Exception $e){
            return false;
        }
    }

}