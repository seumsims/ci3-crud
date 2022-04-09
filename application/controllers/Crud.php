<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->library('parser');
		# return "SALAM from ci3 Crud Controller";
		# $data['title'] = "Codeigniter Ajax Crud With Jquery Data Tables And BootStrap Modals";
		# $data['heading_ci_ajax'] = "Codeigniter Ajax Crud With Jquery Data Tables And BootStrap Modals";
		$data = array(
			'title' => "Codeigniter Ajax Crud With Jquery Data Tables And BootStrap Modals",
			'parser_test' => 'Parser is working',
	);
	
	
		$this->parser->parse('crud_view_header', $data);
		$this->parser->parse('crud_view', $data);
		$this->parser->parse('crud_view_footer', $data);
		# $this->load->view('crud_view',$data);
	}
}
