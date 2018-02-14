<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('ProductModel');
	}

	public function index()
	{
		$products = $this->ProductModel->get();
		foreach ($products as $product) {
			echo $product->name."<br>";
			echo $product->price."<br>";
		}
	}
}
