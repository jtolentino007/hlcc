<?php
	defined('BASEPATH') OR die('No direct script access allowed');

	class Network extends CORE_Controller
	{
		
		function __construct()
		{
			parent::__construct('');
			//$this->validate_session();
			$this->load->model('Network_model');
			$this->load->model('Visitors_model');
			$this->load->model('Group_model');
		}

		public function index()
		{
			$data['_css_files'] = $this->load->view('template/assets/css_files','',TRUE);
			$data['_js_files'] = $this->load->view('template/assets/js_files','',TRUE);
			$data['_side_bar_navigation'] = $this->load->view('template/elements/side_navigation','',TRUE);
			$data['_right_side_bar_navigation'] = $this->load->view('template/elements/right_navigation','',TRUE);
        	$data['_top_navigation'] = $this->load->view('template/elements/top_navigation','',TRUE);
        	$data['title'] = 'Network - His Life City Church';

        	$data['visitors'] = $this->Visitors_model->get_list(array('visitors.is_active'=>TRUE,'visitors.is_deleted'=>FALSE));
        	$data['groups'] = $this->Group_model->get_list(array('groups.is_active'=>TRUE,'groups.is_deleted'=>FALSE));

			$this->load->view('network_view',$data);
		}

		function transaction($txn = null) {
			 switch ($txn) {
	        	case 'list':
	                $response['data'] = $this->response_rows(array('network.is_deleted'=>FALSE),
	                	'network.*,CONCAT(visitor_fname, " ", visitor_mname, " ", visitor_lname) AS fullname'
	                );
	                echo json_encode($response);
	            	break;

	            case 'create':
	            	$m_network = $this->Network_model;

	            	//$m_network->set('date_created','NOW()');
                	//m_network->created_by_user = $this->session->user_id;

                	$m_network->network_name = $this->input->post('network_name', TRUE);
                	$m_network->visitor_id = $this->input->post('visitor_id', TRUE);   
                	$m_network->group_id = $this->input->post('group_id', TRUE);        	

                	$m_network->save();	

                	$network_id = $m_network->last_insert_id();

                	$response['title'] = 'Success!';
	                $response['stat'] = 'success';
	                $response['msg'] = 'Network information successfully created.';

	                $response['row_added'] = $this->response_rows($network_id,
	                	'network.*,CONCAT(visitor_fname, " ", visitor_mname, " ", visitor_lname) AS fullname'
	                );
	                echo json_encode($response);
	            	break;

	            case 'update':
	                $m_network = $this->Network_model;

	                $network_id = $this->input->post('network_id', TRUE);
	                $m_network->network_name = $this->input->post('network_name', TRUE);
                	$m_network->visitor_id = $this->input->post('visitor_id', TRUE); 
                	$m_network->group_id = $this->input->post('group_id', TRUE);

	                $m_network->modify($network_id);

	                $response['title'] = 'Success!';
	                $response['stat'] = 'success';
	                $response['msg'] = 'Network information successfully updated.';

	                $response['row_updated'] = $this->response_rows($network_id,
	                	'network.*,CONCAT(visitor_fname, " ", visitor_mname, " ", visitor_lname) AS fullname'
	                );
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

	    //=======================================================//
        //                      USER DEFINE                      //
        //=======================================================//

	    function response_rows($filter){
	    	return $this->Network_model->get_list(
	    		$filter,

	    		'network.*,groups.group_name,CONCAT(visitor_fname, " ", visitor_mname, " ", visitor_lname) AS fullname',

	    		array(
	    			array('visitors','visitors.visitor_id=network.visitor_id','left'),
	    			array('groups','groups.group_id=network.group_id','left')
	    		)
	    	);
	    }
	}
?>