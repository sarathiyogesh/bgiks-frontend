<?php
class Helpers {

    public static function displaymsg(){
  	    if(Session::has('success')){
  		    return '<div class="alert alert-success">'.Session::get('success').'</div>';
  	    }elseif(Session::has('error')){
  		    return '<div class="alert alert-danger">'.Session::get('error').'</div>';
  	    }
    }
 
}