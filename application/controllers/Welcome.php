<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('simple_html_dom');
	}
	public function index()
	{
		
		// Create a DOM object from a URL
		$html = file_get_html('http://ayodonor.pmi.or.id/');
		// Find all images
		// Find all article blocks
		$scripts = $html->find('script');
		foreach($scripts as $s) {
			if(strpos($s->innertext, 'datasets') !== false) {
				$script = $s;
			}
		}

		print_r($script);
	}
}
