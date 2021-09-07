<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function index()
    {
        $this->load->view('admin/login');
    }

    public function checkData()
    {
        $data['email'] = $this->input->post('email', true);
        $data['password'] = $this->input->post('password', true);

        if(!empty($data['email']) && !empty($data['password'])) {
            $admindata = $this->mAdmin->checkAdmin($data);
            if(count($admindata) == 1) {
                $forSession = array(
                    'id' => $admindata[0]['id'],
                    'nama' => $admindata[0]['nama'],
                    'email' => $admindata[0]['email']
                );
                $this->session->set_userdata($forSession);
                if($this->session->userdata('id')) {
                    redirect('admin');
                }
                else {

                }
            }
            else {
                $this->session->set_flashdata('error', 'Email atau Password salah');
                redirect('login');
            }
        }
        else {
            $this->session->set_flashdata('error', 'Email dan Password Harus Diisi');
            redirect('login');
        }

    }
}
