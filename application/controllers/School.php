<?php
	defined('BASEPATH') OR die('No direct script access allowed');

	class School extends CORE_Controller
	{
		
		function __construct()
		{
			parent::__construct('');
			//$this->validate_session();
			$this->load->model('School_model');
		}

		public function index()
		{
			$data['_css_files'] = $this->load->view('template/assets/css_files','',TRUE);
			$data['_js_files'] = $this->load->view('template/assets/js_files','',TRUE);
			$data['_side_bar_navigation'] = $this->load->view('template/elements/side_navigation','',TRUE);
			$data['_right_side_bar_navigation'] = $this->load->view('template/elements/right_navigation','',TRUE);
        	$data['_top_navigation'] = $this->load->view('template/elements/top_navigation','',TRUE);
        	$data['title'] = 'Schools - His Life City Church';

			$this->load->view('school_view',$data);
		}

		function transaction($txn = null) {
	        switch ($txn) {
	            case 'list':
	            	$m_school = $this->School_model;
	                $response['data'] = $m_school->get_list('schools.is_deleted=0');
	                echo json_encode($response);
	            	break;

	            case 'create':
	            	$m_school = $this->School_model;

	            	//$m_school->set('date_created','NOW()');
                	//m_school->created_by_user = $this->session->user_id;

                	$m_school->school_name = $this->input->post('school_name', TRUE);
                	$m_school->school_description = $this->input->post('school_description', TRUE);           	

                	$m_school->save();	

                	$school_id = $m_school->last_insert_id();

                	$response['title'] = 'Success!';
	                $response['stat'] = 'success';
	                $response['msg'] = 'School information successfully created.';

	                $response['row_added'] = $m_school->get_list($school_id);
	                echo json_encode($response);
	            	break;

	            case 'update':
	                $m_school = $this->School_model;

	                $school_id = $this->input->post('school_id', TRUE);
	                $m_school->school_name = $this->input->post('school_name', TRUE);
                	$m_school->school_description = $this->input->post('school_description', TRUE); 

	                $m_school->modify($school_id);

	                $response['title'] = 'Success!';
	                $response['stat'] = 'success';
	                $response['msg'] = 'School information successfully updated.';

	                $response['row_updated'] = $m_school->get_list($school_id);
	                echo json_encode($response);
	                break;

	            case 'delete':
	                $m_school = $this->School_model;
	                $school_id = $this->input->post('school_id',TRUE);

	                $m_school->is_deleted = 1;

	                if($m_school->modify($school_id)){

	                    $response['title'] = 'Success!';
	                    $response['stat'] = 'success';
	                    $response['msg'] = 'School information successfully deleted.';

	                    echo json_encode($response);
	                }
	                break;
	        }
	    }
	}
?>