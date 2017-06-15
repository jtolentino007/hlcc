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
			$data['_css_files']=$this->load->view('template/assets/css_files','',TRUE);
			$data['_js_files']=$this->load->view('template/assets/js_files','',TRUE);

			$this->load->view('register_view',$data);
		}
	}
?>