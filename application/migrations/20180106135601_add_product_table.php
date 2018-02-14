<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Capsule\Manager as Capsule;

class Migration_Add_product_table extends CI_Migration {

	public function up()
	{
		Capsule::schema()->create('products', function ($table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('price');
			$table->timestamps();
		});
	}

	public function down()
	{
		$this->dbforge->drop_table('products');
	}
}