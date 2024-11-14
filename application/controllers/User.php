<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

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

	public function AboutUs()
	{
		$this->load->view('User/AboutUs');
	}
	public function ContactUs()
	{
		$this->load->view('User/ContactUs');
	}

	public function TermsAndConditions()
	{
		$this->load->view('User/TermsAndConditions');
	}

	public function PrivacyPolicy()
	{
		$this->load->view('User/PrivacyPolicy');
	}

	public function ReturnAndRefundPolicy()
	{
		$this->load->view('User/ReturnAndRefundPolicy');
	}

	public function ShippingPolicy()
	{
		$this->load->view('User/ShippingPolicy');
	}

	public function TrackOrder()
	{
		$this->load->view('User/TrackOrder');
	}

	public function logout()
	{
		$this->load->view('User/Logout');
	}

	public function Luxury()
	{
		$this->load->view('User/Luxury');
	}

	public function ForMen()
	{
		$this->load->view('User/ForMen');
	}

	public function ForWomen()
	{
		$this->load->view('User/ForWomen');
	}

	public function Natural()
	{
		$this->load->view('User/Natural');
	}

	public function Science()
	{
		$this->load->view('User/Science');
	}

	public function Wellness()
	{
		$this->load->view('User/Wellness');
	}

	public function Offers()
	{
		$this->load->view('User/Offers');
	}

	public function Cart()
	{
		$this->load->view('User/Cart');
	}

	public function Checkout()
	{
		$this->load->view('User/Checkout');
	}

	public function ProductDiscription()
	{
		$this->load->view('User/ProductDiscription');
	}
}
