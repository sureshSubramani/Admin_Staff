<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff_list extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('recruitment_model','rm');
    }

	public function index(){

        $query = $this->rm->getStaff_List();

        $data['title'] = "Register Staff";

        if($query){
            $data['STAFF'] =  $query;
        }

        $this->load->view('common/header', $data);
        $this->load->view('staff_list', $data);
        $this->load->view('common/footer');
    }

    public function getSelect(){

        print_r($_POST); die();
        //$this->load->view('staff_list', $data);

        if(isset($_POST)){
            //$data = array('personal_id' => $this->input->post(), 'staff_status' => $this->input->post('staff_stauts'));

            print_r($_POST); die();
        } 
        $this->rm->select_staff($data);
    }
	

}