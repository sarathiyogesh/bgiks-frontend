<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Media extends Model 
{
	protected $table = 'media';
	protected $fillable = ['image_link', 'status', 'created_by'];
}
