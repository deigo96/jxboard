<?php
    function getAdminId(){
        $CI = get_instance();
        $CI->load->library('session');

        if($CI->session->userdata('id')){
            return $CI->session->userdata('id');
        }
        else{
            return FALSE;
        }
    }
    
    function setFlashData($class, $message, $url) {
        $CI = get_instance();
        $CI->load->library('session');
        $CI->session->set_flashdata('class', $class);
        $CI->session->set_flashdata('message', $message);
        redirect($url);
    }