<?php
	defined('BASEPATH') OR die('No direct script access allowed');

	class Registration extends CORE_Controller
	{
		
		function __construct()
		{
			parent::__construct('');
		}

		public function index()	
		{
			$data['_switcher']=$this->load->view('templates/switcher','',TRUE);
			$data['_css_files']=$this->load->view('assets/css_files','',TRUE);
			$data['_js_files']=$this->load->view('assets/js_files','',TRUE);

			$this->load->view('register_view',$data);
		}
	}
?>