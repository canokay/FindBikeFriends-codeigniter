<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public $project = "";
	public $category = "";
	
	public function __construct()
	{
		parent::__construct();
		$this->project = "welcome";
		$this->category = "welcome_page";
	}


	public function welcome_message()
	{
		$context=array(
			"title"					=>	"Welcome to CodeIgniter",
			"project" 				=> 	$this->project,
			"category" 				=>	$this->category,
			"view" 					=>  $this->router->fetch_method(),
			"view_header_include" 	=>	"welcome_header",
		);
		$this->load->view("$this->project/base",$context);
	}
}
