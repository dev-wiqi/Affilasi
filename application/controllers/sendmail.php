<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class sendmail extends CI_Controller {
    /*
     * BRP Application V.1.0 Copyright 2015
     * Build Date : 07 Agustus 2015
     * Founder & Programmer : Wisnu Groho Aji 
     * Website : http://wiqi.co
     */
    
    function index(){
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_port'] = 465;
        $config['smtp_user'] = 'brppromo@gmail.com';
        $config['smtp_pass'] = 'brpsucofindo@!';
        $config['mailtype'] = 'html';
        $config['charset']   = 'iso-8859-1';
        $config['newline'] = '\r\n';
        $config['crlf'] = "\n";
        
        $this->load->library('email',$config);
        $this->email->set_newline("\r\n");
        $this->email->from('brppromo@gmail.com','Program Affiliasi BRP Ballroom');
        $this->email->to('dev@wiqi.co');
        $this->email->subject('Program Affiliasi BRP');
        $this->email->message('<strong>PROMOSI</strong>');
        
        
        $this->email->send();
        
        echo $this->email->print_debugger();
    }
}