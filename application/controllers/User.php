<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->view('User/Home');
	}

	public function login()
	{
		$this->load->view('User/Login');
	}

	public function register()
	{
		$this->load->view('User/Register');
	}

	public function forgotPassword()
	{
		$this->load->view('User/ForgotPassword');
	}

	public function profile()
	{
		$this->load->view('User/Profile');
	}	

	public function logout()
	{
		$this->load->view('User/Logout');
	}


	

}
