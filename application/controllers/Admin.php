<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $akt_user_id = $this->session->userdata('id');
        if ($akt_user_id != null) {
            redirect('/dashboard');
        }
        $this->load->model('admin_model');

    }

	public function register()
	{
		$data = array();
		$data['title'] = " Akt-shop Register";
		$this->load->view('admin/register',$data);
	}

	public function save_register_user()
	{
        $this->form_validation->set_rules(
            'username', 'User Name', 'trim|required|max_length[255]',
            array(
                'required'      => 'You have not provided %s.'
            )
        );
		$this->form_validation->set_rules(
            'email', 'Email Address', 'trim|required|max_length[255]|is_unique[akt_users.email]',
            array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
            )
        );
		$this->form_validation->set_rules(
            'password', 'Password', 'trim|required|min_length[6]',
            array(
                'required'      => 'You have not provided %s.'
            )
        );
		$this->form_validation->set_rules(
            'confirm_password', 'Confirm Password', 'trim|required|min_length[6]|matches[password]',
            array(
                'required'      => 'You have not provided %s.'
            )
        );

		if ($this->form_validation->run()) {

            $data['username'] 		= $this->input->post('username', True);
            $data['email'] 			= $this->input->post('email', True);
            $data['password'] 		= md5($this->input->post('password', True));	
            $data['image'] 			= 'user.jpg';
            $data['phone_number'] 	= '';
            $data['role']			= 1;

			$this->admin_model->register_new_admin($data);
			redirect('/dashboard');
		}else{

			$data = array();
			$data['title'] = " Akt-shop Register";
			$this->load->view('admin/register',$data);
		}
	}

    public function login()
    {
        $data = array();
        $data['title'] = " Akt-shop Login";
        $this->load->view('admin/login', $data);
    }

  

    public function admin_login_check()
    {
        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);

        $this->load->model('admin_model');
        $result = $this->admin_model->check_admin_info($email, $password);

        $sdata = array();
        if ($result) {
            $sdata['id'] = $result->id;
            $sdata['username'] = $result->username;
            $this->session->set_userdata($sdata);
            redirect('/dashboard');

        } else {
            $sdata['message'] = "Your User id Password Invalid";
            $this->session->set_userdata($sdata);
            redirect('/login');
        }

    }



}
