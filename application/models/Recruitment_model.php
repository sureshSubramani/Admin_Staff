<?php

class Recruitment_model extends CI_Model{
    
    public function checkExist($email,$phone){ 
        //checks ajax requests
         $this->db->where("status",1);
         $this->db->where("phone_no",$phone);
         $this->db->where("email_id",$email);
         $query=$this->db->get(PERSONAL);
         
         $count = $query->num_rows(); 

         if($count == 1){
          print_r(json_encode($query->row_array()));
         }else{
          echo 0;
         }
    }

    /*Insert row*/
    public function Insert_Update_personal($insert_up_personal){
       
        if($insert_up_personal['personal_id'] == 0){

            $this->db->insert(PERSONAL,$insert_up_personal);
           
            $personal_id = $this->db->insert_id();           
        }
        else{
          
            $this->db->where('personal_id',$insert_up_personal['personal_id']);
            $this->db->update(PERSONAL,$insert_up_personal);
            
            $personal_id = $insert_up_personal['personal_id']; 
        }

        $this->db->select('*');
        $this->db->where('personal_id', $personal_id);
        
        $getExist = $this->db->get(COMMUNICATION)->result();

        $common_array = array('personal_id'=>$personal_id, 'communication'=>$getExist);

        print_r(json_encode($common_array));
    }

    public function Insert_Update_communication($get){
       
        if($get['per_com_id'] == 0){

            $this->db->insert(COMMUNICATION,$get);
           
            $personal_id = $this->db->insert_id();           
        }
        else{

            for($i=0; $i<count($get['type_of_address']); $i++){

                $update_array = array('personal_id'=>$get['per_com_id'],'type_of_address'=>$get['type_of_address'][$i],'phone_no'=>$get['phone_no'][$i],
                'street_address'=>$get['street_address'][$i],'city'=>$get['city'][$i],'state'=>$get['state'][$i],'country'=>$get['country'][$i],'pin_no'=>$get['pin_no'][$i]);          

                $this->db->where('personal_id', $get['per_com_id']);
                $this->db->update(COMMUNICATION,$update_array);
            }                  
            
            $personal_id =  $get['per_com_id']; 
        }

        $this->db->select('*');
        $this->db->where('personal_id', $personal_id);
        
        $getExist = $this->db->get(EDUCATION)->result();
 
        $common_array = array('personal_id'=>$personal_id, 'education'=>$getExist);

        print_r(json_encode($common_array));
    }

    public function insert_personal(){ 
         //checks ajax requests
         $this->db->where("status",1);
         $this->db->where("phone_no",$phone);
         $query=$this->db->get(COMMUICATION);
         
         $count = $query->num_rows(); 

         if($count == 1){
          print_r(json_encode($query->row_array()));
         }else{
          echo 0;
         }
    }

    public function check_PhoneExist1($phone){ 
        //checks ajax requests
         $this->db->where("status",1);
         $this->db->where("phone",$phone);
         $query=$this->db->get(PERSONAL);
         if($query->num_rows() == 1){
          return $query->row_array()['personal_id'];
         }else{
          return 0;
         }
    }
    
    // insert multi row
    public function insert_csv($get_all){
        $this->db->insert_batch('members', $get_all);
    }

    // display regars on row
    public function get_members(){
        //$this->db->where('status', 1);        
        $data = $this->db->get('members')->result();
        return $data;
    }

    public function get_members_csv(){
        $response = array();    
        //$this->db->where('status', 1);        
        $data = $this->db->get('members');
        $response = $data->result_array();
        return $response;
    }
	
}

?>