<?php
	defined('BASEPATH') OR die('No direct script access allowed');

	class Lifegroup extends CORE_Controller
	{
		
		function __construct()
		{
			parent::__construct('');
			//$this->validate_session();
			$this->load->model('Lifegroup_model');
			$this->load->model('Network_model');
			$this->load->model('Visitors_model');
		}

		public function index()
		{
			$data['_css_files'] = $this->load->view('template/assets/css_files','',TRUE);
			$data['_js_files'] = $this->load->view('template/assets/js_files','',TRUE);
			$data['_side_bar_navigation'] = $this->load->view('template/elements/side_navigation','',TRUE);
			$data['_right_side_bar_navigation'] = $this->load->view('template/elements/right_navigation','',TRUE);
        	$data['_top_navigation'] = $this->load->view('template/elements/top_navigation','',TRUE);
        	$data['title'] = 'Lifegroup - His Life City Church';

        	$data['network'] = $this->Network_model->get_list(array('network.is_active'=>TRUE,'network.is_deleted'=>FALSE));
        	$data['visitors'] = $this->Visitors_model->get_list(array('visitors.is_active'=>TRUE,'visitors.is_deleted'=>FALSE));

			$this->load->view('lifegroup_view',$data);
		}

		function transaction($txn = null) {
	        switch ($txn) {
	            case 'list':
	                $response['data'] = $this->response_rows(array('lifegroup.is_deleted'=>FALSE),
	                	'lifegroup.*, CONCAT(visitor_fname, " ", visitor_mname, " ", visitor_lname) AS fullname'
	                );
	                echo json_encode($response);
	            	break;

	            case 'create':
	            	$m_lifegroup = $this->Lifegroup_model;

	            	//$m_lifegroup->set('date_created','NOW()');
                	//m_lifegroup->created_by_user = $this->session->user_id;

                	$m_lifegroup->lifegroup_name = $this->input->post('lifegroup_name', TRUE);
                	$m_lifegroup->visitor_id = $this->input->post('visitor_id', TRUE); 
                	$m_lifegroup->network_id = $this->input->post('network_id', TRUE);           	

                	$m_lifegroup->save();	

                	$lifegroup_id = $m_lifegroup->last_insert_id();

                	$response['title'] = 'Success!';
	                $response['stat'] = 'success';
	                $response['msg'] = 'Lifegroup information successfully created.';

	                $response['row_added'] = $this->response_rows($lifegroup_id,
	                	'lifegroup.*, CONCAT(visitor_fname, " ", visitor_mname, " ", visitor_lname) AS fullname'
	                );
	                echo json_encode($response);
	            	break;

	            case 'update':
	                $m_lifegroup = $this->Lifegroup_model;

	                $lifegroup_id = $this->input->post('lifegroup_id', TRUE);
	                $m_lifegroup->lifegroup_name = $this->input->post('lifegroup_name', TRUE);
	                $m_lifegroup->visitor_id = $this->input->post('visitor_id', TRUE);
                	$m_lifegroup->network_id = $this->input->post('network_id', TRUE);     

	                $m_lifegroup->modify($lifegroup_id);

	                $response['title'] = 'Success!';
	                $response['stat'] = 'success';
	                $response['msg'] = 'Lifegroup information successfully updated.';

	                $response['row_updated'] = $this->response_rows($lifegroup_id,
	                	'lifegroup.*, CONCAT(visitor_fname, " ", visitor_mname, " ", visitor_lname) AS fullname'
	                );
	                echo json_encode($response);
	                break;

	            case 'delete':
	                $m_lifegroup = $this->Lifegroup_model;
	                $lifegroup_id = $this->input->post('lifegroup_id',TRUE);

	                $m_lifegroup->is_deleted = 1;

	                if($m_lifegroup->modify($lifegroup_id)){

	                    $response['title'] = 'Success!';
	                    $response['stat'] = 'success';
	                    $response['msg'] = 'Lifegroup information successfully deleted.';

	                    echo json_encode($response);
	                }
	                break;
	        }
	    }

	    //=======================================================//
        //                      USER DEFINE                      //
        //=======================================================//

	    function response_rows($filter){
	    	return $this->Lifegroup_model->get_list(
	    		$filter,

	    		'lifegroup.*,network.network_name,CONCAT(visitor_fname, " ", visitor_mname, " ", visitor_lname) AS fullname',

	    		array(
	    			array('network','network.network_id=lifegroup.network_id','left'),
	    			array('visitors','visitors.visitor_id=lifegroup.visitor_id','left')
	    		)
	    	);
	    }
	}
?>