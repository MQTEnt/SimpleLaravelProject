<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model {

	protected $table='cates';
	protected $fillable=['id','name','des'];
	public function product()
	{
		return $this->hasMany('App\Product','cate_id');
	}
}
