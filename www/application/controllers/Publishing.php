<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publishing extends CI_Controller {
	function __construct () {
		parent::__construct();
	}

	function index () {
		$this->load->view('publishing/main/index');
	}
}
