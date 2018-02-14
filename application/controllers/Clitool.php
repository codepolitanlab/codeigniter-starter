<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clitool extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	/* Run database migration
	 *
	 */
	public function migrate()
	{
		if($this->migration->latest() !== false){
			$migrations = $this->migration->find_migrations();
			$current_version = $this->db->get('migrations')->row()->version;
			$file = basename($migrations[$current_version]);
			echo "current version is $file\n";
		} else
			echo $this->migration->error_string()."\n";
	}
}
