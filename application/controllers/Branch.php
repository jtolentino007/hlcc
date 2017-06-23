<?php
	defined('BASEPATH') OR die('No direct script access allowed');

	class Branch extends CORE_Controller
	{
		
		function __construct()
		{
			parent::__construct('');
			//$this->validate_session();
			$this->load->model('Branch_model');
		}

		public function index()
		{
			$data['_css_files'] = $this->load->view('template/assets/css_files','',TRUE);
			$data['_js_files'] = $this->load->view('template/assets/js_files','',TRUE);
			$data['_side_bar_navigation'] = $this->load->view('template/elements/side_navigation','',TRUE);
			$data['_right_side_bar_navigation'] = $this->load->view('template/elements/right_navigation','',TRUE);
        	$data['_top_navigation'] = $this->load->view('template/elements/top_navigation','',TRUE);
        	$data['title'] = 'Branch - His Life City Church';

			$this->load->view('branch_view',$data);
		}

		function transaction($txn = null) {
	        switch ($txn) {
	            case 'list':
	            	$m_branch = $this->Branch_model;
	                $response['data'] = $m_branch->get_list('branch.is_deleted=0');
	                echo json_encode($response);
	            	break;

	            case 'create':
	            	$m_branch = $this->Branch_model;

	            	//$m_branch->set('date_created','NOW()');
                	//m_branch->created_by_user = $this->session->user_id;

                	$m_branch->branch_name = $this->input->post('branch_name', TRUE);
                	$m_branch->branch_description = $this->input->post('branch_description', TRUE);           	

                	$m_branch->save();	

                	$branch_id = $m_branch->last_insert_id();

                	$response['title'] = 'Success!';
	                $response['stat'] = 'success';
	                $response['msg'] = 'Branch information successfully created.';

	                $response['row_added'] = $m_branch->get_list($branch_id);
	                echo json_encode($response);
	            	break;

	            case 'update':
	                $m_branch = $this->Branch_model;

	                $branch_id = $this->input->post('branch_id', TRUE);
	                $m_branch->branch_name = $this->input->post('branch_name', TRUE);
                	$m_branch->branch_description = $this->input->post('branch_description', TRUE); 

	                $m_branch->modify($branch_id);

	                $response['title'] = 'Success!';
	                $response['stat'] = 'success';
	                $response['msg'] = 'Branch information successfully updated.';

	                $response['row_updated'] = $m_branch->get_list($branch_id);
	                echo json_encode($response);
	                break;

	            case 'delete':
	                $m_branch = $this->Branch_model;
	                $branch_id = $this->input->post('branch_id',TRUE);

	                $m_branch->is_deleted = 1;

	                if($m_branch->modify($branch_id)){

	                    $response['title'] = 'Success!';
	                    $response['stat'] = 'success';
	                    $response['msg'] = 'Branch information successfully deleted.';

	                    echo json_encode($response);
	                }
	                break;
	        }
	    }
	}
?>