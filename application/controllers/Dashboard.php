<?php
	defined('BASEPATH') OR die('No direct script access allowed');

	class Dashboard extends CORE_Controller
	{
		
		function __construct()
		{
			parent::__construct('');
		}

		public function index()
		{
			$data['_switcher']=$this->load->view('template/elements/switcher','',TRUE);
			$data['_css_files']=$this->load->view('template/assets/css_files','',TRUE);
			$data['_js_files']=$this->load->view('template/assets/js_files','',TRUE);
			//$data['_side_bar_navigation']=$this->load->view('template/elements/side_navigation','',TRUE);
        	//$data['_top_navigation']=$this->load->view('template/elements/top_navigation','',TRUE);
        	$data['title'] = 'Dashboard - His Life City Church';

			$this->load->view('dashboard_view',$data);
		}
	}
?>