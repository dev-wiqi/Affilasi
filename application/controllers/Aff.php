<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Aff extends CI_Controller {
    /*
     * BRP Application V.1.0 Copyright 2015
     * Build Date : 07 Agustus 2015
     * Founder & Programmer : Wisnu Groho Aji 
     * Website : http://wiqi.co
     */
    
    function index(){
        $a['title'] = "BRP Affiliate Program";
        
        $this->load->view("aff/index",$a);
    }
    
    function submit(){
        if($this->input->post("agree")==TRUE){
            $datamember['tb_name_user']=  $this->input->post("name");
            $datamember['tb_contact_user']=  $this->input->post("contact");
            $datamember['tb_email_user']=  $this->input->post("email");
            //insert data affiliasi
            $this->db->insert("affilate_user",$datamember);
            $data['tb_affilate_wedding'] = $this->db->insert_id();
            $data['tb_couple_wedding']=  $this->input->post("couple");
            $data['tb_contact_wedding']=  $this->input->post("contactcouple");
            $data['tb_email_wedding']=  $this->input->post("emailcouple");
            $data['tb_ballroom_wedding']= $this->input->post("ballroom");
            //$data['tb_package_wedding']=  $this->input->post("wedding");
            $data['tb_date_wedding']=  $this->input->post("date");
            //insert data wedding
            $this->db->insert("affilate_wedding",$data);
            $message = '<strong><u>DATA AFFILIASI</u></strong><br/>'
                    . 'Nama Member : '.$this->input->post("name").'<br/>'
                    . 'Contact Number : '.$this->input->post("contact").'<br/>'
                    . 'Email : '.$this->input->post("email").'<br/>'
                    . '<br/><br/>'
                    . '<strong><u>DATA CUSTOMER</u></strong><br/>'
                    . 'Nama Pasangan : '.$this->input->post("couple").'<br/>'
                    . 'Contact : '.$this->input->post("contactcouple").'<br/>'
                    . 'Email : '.$this->input->post("emailcouple").'<br/>'
                    . 'Ballroom : '.$this->input->post("ballroom").'<br/>'
                    . 'Date Wedding : '.$this->input->post("date").'<br/>';
            $this->model_basic->mail("sagafbasry@gmail.com","dev@wiqi.co",$message);
            $this->session->set_flashdata("result_succes",'<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">x</button><strong>Sukses!</strong>Terimakasih Telah Bermitra Dengan Kami</div>');
            redirect();
            //echo '<meta http-equiv="refresh" content="0; url=http://gedungperkawinan.com/affiliasi/" />';
        }
        else{
            show_error();
            $this->session->set_flashdata("result_succes",'<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">x</button><strong>Sukses!</strong>Terimakasih Telah Bermitra Dengan Kami</div>');
        }
    }
}