<?php
	defined('BASEPATH') OR die('No direct script access allowed');

	class Group extends CORE_Controller
	{
		
		function __construct()
		{
			parent::__construct('');
			//$this->validate_session();
			$this->load->model('Group_model');
		}

		public function index()
		{
			$data['_css_files'] = $this->load->view('template/assets/css_files','',TRUE);
			$data['_js_files'] = $this->load->view('template/assets/js_files','',TRUE);
			$data['_side_bar_navigation'] = $this->load->view('template/elements/side_navigation','',TRUE);
			$data['_right_side_bar_navigation'] = $this->load->view('template/elements/right_navigation','',TRUE);
        	$data['_top_navigation'] = $this->load->view('template/elements/top_navigation','',TRUE);
        	$data['title'] = 'Group - His Life City Church';

			$this->load->view('group_view',$data);
		}

		function transaction($txn = null) {
	        switch ($txn) {
	            case 'list':
	            	$m_group = $this->Group_model;
	                $response['data'] = $m_group->get_list('groups.is_deleted=0');
	                echo json_encode($response);
	            	break;

	            case 'create':
	            	$m_group = $this->Group_model;

	            	//$m_group->set('date_created','NOW()');
                	//m_group->created_by_user = $this->session->user_id;

                	$m_group->group_name = $this->input->post('group_name', TRUE);
                	$m_group->group_description = $this->input->post('group_description', TRUE);           	

                	$m_group->save();	

                	$group_id = $m_group->last_insert_id();

                	$response['title'] = 'Success!';
	                $response['stat'] = 'success';
	                $response['msg'] = 'Group information successfully created.';

	                $response['row_added'] = $m_group->get_list($group_id);
	                echo json_encode($response);
	            	break;

	            case 'update':
	                $m_group = $this->Group_model;

	                $group_id = $this->input->post('group_id', TRUE);
	                $m_group->group_name = $this->input->post('group_name', TRUE);
                	$m_group->group_description = $this->input->post('group_description', TRUE); 

	                $m_group->modify($group_id);

	                $response['title'] = 'Success!';
	                $response['stat'] = 'success';
	                $response['msg'] = 'Group information successfully updated.';

	                $response['row_updated'] = $m_group->get_list($group_id);
	                echo json_encode($response);
	                break;

	            case 'delete':
	                $m_group = $this->Group_model;
	                $group_id = $this->input->post('group_id',TRUE);

	                $m_group->is_deleted = 1;

	                if($m_group->modify($group_id)){

	                    $response['title'] = 'Success!';
	                    $response['stat'] = 'success';
	                    $response['msg'] = 'Group information successfully deleted.';

	                    echo json_encode($response);
	                }
	                break;
	        }
	    }
	}
?>