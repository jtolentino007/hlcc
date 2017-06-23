<?php
	defined('BASEPATH') OR die('No direct script access allowed');

	class Members extends CORE_Controller
	{
		
		function __construct()
		{
			parent::__construct('');
			//$this->validate_session();
			$this->load->model('Visitors_model');
		}

		public function index()
		{
			$data['_css_files'] = $this->load->view('template/assets/css_files','',TRUE);
			$data['_js_files'] = $this->load->view('template/assets/js_files','',TRUE);
			$data['_side_bar_navigation'] = $this->load->view('template/elements/side_navigation','',TRUE);
			$data['_right_side_bar_navigation'] = $this->load->view('template/elements/right_navigation','',TRUE);
        	$data['_top_navigation'] = $this->load->view('template/elements/top_navigation','',TRUE);
        	$data['title'] = 'Members - His Life City Church';

			$this->load->view('members_view',$data);
		}

		function transaction($txn = null) {
	        switch ($txn) {
	            case 'list':
	            	$m_visitor = $this->Visitors_model;
	                $response['data'] = $m_visitor->get_list(
	                	array('visitors.is_deleted'=>FALSE),
	                	'visitors.*, CONCAT(visitor_fname, " ", visitor_mname, " ", visitor_lname) AS fullname'
	                );
	                echo json_encode($response);
	            	break;

	            case 'create':
	            	$m_visitor = $this->Visitors_model;

	            	//$m_visitor->set('date_created','NOW()');
                	//m_visitor->created_by_user = $this->session->user_id;

                	$m_visitor->visitor_fname = $this->input->post('visitor_fname', TRUE);
                	$m_visitor->visitor_mname = $this->input->post('visitor_mname', TRUE);
                	$m_visitor->visitor_lname = $this->input->post('visitor_lname', TRUE);
                	$m_visitor->visitor_address = $this->input->post('visitor_address', TRUE);
                	$m_visitor->visitor_contact_no = $this->input->post('visitor_contact_no', TRUE);
                	$m_visitor->visitor_email_add = $this->input->post('visitor_email_add', TRUE);
                	$m_visitor->visitor_school = $this->input->post('visitor_school', TRUE);
                	$m_visitor->date_visited=date('Y-m-d',strtotime($this->input->post('date_visited',TRUE))); 
                	$m_visitor->visitor_bday=date('Y-m-d',strtotime($this->input->post('visitor_bday',TRUE)));              	

                	$m_visitor->save();	

                	$visitor_id = $m_visitor->last_insert_id();

                	$response['title'] = 'Success!';
	                $response['stat'] = 'success';
	                $response['msg'] = 'Visitor information successfully created.';

	                $response['row_added'] = $m_visitor->get_list($visitor_id,
	                	'visitors.*, CONCAT(visitor_fname, " ", visitor_mname, " ", visitor_lname) AS fullname'
	                );
	                echo json_encode($response);
	            	break;

	            case 'update':
	                $m_visitor = $this->Visitors_model;

	                $visitor_id = $this->input->post('visitor_id', TRUE);
	                $m_visitor->visitor_fname = $this->input->post('visitor_fname', TRUE);
                	$m_visitor->visitor_mname = $this->input->post('visitor_mname', TRUE);
                	$m_visitor->visitor_lname = $this->input->post('visitor_lname', TRUE);
                	$m_visitor->visitor_address = $this->input->post('visitor_address', TRUE);
                	$m_visitor->visitor_contact_no = $this->input->post('visitor_contact_no', TRUE);
                	$m_visitor->visitor_email_add = $this->input->post('visitor_email_add', TRUE);
                	$m_visitor->visitor_school = $this->input->post('visitor_school', TRUE);
                	$m_visitor->date_visited=date('Y-m-d',strtotime($this->input->post('date_visited',TRUE))); 
                	$m_visitor->visitor_bday=date('Y-m-d',strtotime($this->input->post('visitor_bday',TRUE))); 

	                $m_visitor->modify($visitor_id);

	                $response['title'] = 'Success!';
	                $response['stat'] = 'success';
	                $response['msg'] = 'Visitor information successfully updated.';

	                $response['row_updated'] = $m_visitor->get_list($visitor_id,
	                	'visitors.*, CONCAT(visitor_fname, " ", visitor_mname, " ", visitor_lname) AS fullname'
	                );
	                echo json_encode($response);
	                break;

	            case 'delete':
	                $m_visitor = $this->Visitors_model;
	                $visitor_id = $this->input->post('visitor_id',TRUE);

	                $m_visitor->is_deleted = 1;

	                if($m_visitor->modify($visitor_id)){

	                    $response['title'] = 'Success!';
	                    $response['stat'] = 'success';
	                    $response['msg'] = 'Visitor information successfully deleted.';

	                    echo json_encode($response);
	                }
	                break;
	        }
	    }
	}
?>