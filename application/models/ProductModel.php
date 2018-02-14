<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model {

	protected $table = 'products';
	protected $fillable = ['name','price'];

}