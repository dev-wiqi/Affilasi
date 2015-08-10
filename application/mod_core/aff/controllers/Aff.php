<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Aff extends MX_Controller {
    /*
     * BRP Application V.1.0 Copyright 2015
     * Build Date : 07 Agustus 2015
     * Founder & Programmer : Wisnu Groho Aji 
     * Website : http://wiqi.co
     */
    
    function index(){
        $a['title'] = "BRP Affilate Program";
        
        $this->load->view("aff/index",$a);
    }
}