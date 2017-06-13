<?php
	defined('BASEPATH') OR die('No direct script access allowed');

	class Network extends CORE_Controller
	{
		
		function __construct()
		{
			parent::__construct('');
			//$this->validate_session();
			$this->load->model('Network_model');
		}

		public function index()
		{
			$data['_css_files'] = $this->load->view('template/assets/css_files','',TRUE);
			$data['_js_files'] = $this->load->view('template/assets/js_files','',TRUE);
			$data['_side_bar_navigation'] = $this->load->view('template/elements/side_navigation','',TRUE);
			$data['_right_side_bar_navigation'] = $this->load->view('template/elements/right_navigation','',TRUE);
        	$data['_top_navigation'] = $this->load->view('template/elements/top_navigation','',TRUE);
        	$data['title'] = 'Network - His Life City Church';

			$this->load->view('network_view',$data);
		}

		function transaction($txn = null) {
	        switch ($txn) {
	            case 'list':
	            	$m_network = $this->Network_model;
	                $response['data'] = $m_network->get_list('network.is_deleted=0');
	                echo json_encode($response);
	            	break;

	            case 'create':
	            	$m_network = $this->Network_model;

	            	//$m_network->set('date_created','NOW()');
                	//m_network->created_by_user = $this->session->user_id;

                	$m_network->network_name = $this->input->post('network_name', TRUE);
                	$m_network->network_leader = $this->input->post('network_leader', TRUE);           	

                	$m_network->save();	

                	$network_id = $m_network->last_insert_id();

                	$response['title'] = 'Success!';
	                $response['stat'] = 'success';
	                $response['msg'] = 'Network information successfully created.';

	                $response['row_added'] = $m_network->get_list($network_id);
	                echo json_encode($response);
	            	break;

	            case 'update':
	                $m_network = $this->Network_model;

	                $network_id = $this->input->post('network_id', TRUE);
	                $m_network->network_name = $this->input->post('network_name', TRUE);
                	$m_network->network_leader = $this->input->post('network_leader', TRUE); 

	                $m_network->modify($network_id);

	                $response['title'] = 'Success!';
	                $response['stat'] = 'success';
	                $response['msg'] = 'Network information successfully updated.';

	                $response['row_updated'] = $m_network->get_list($network_id);
	                echo json_encode($response);
	                break;

	            case 'delete':
	                $m_network = $this->Network_model;
	                $network_id = $this->input->post('network_id',TRUE);

	                $m_network->is_deleted = 1;

	                if($m_network->modify($network_id)){

	                    $response['title'] = 'Success!';
	                    $response['stat'] = 'success';
	                    $response['msg'] = 'Network information successfully deleted.';

	                    echo json_encode($response);
	                }
	                break;
	        }
	    }
	}
?>