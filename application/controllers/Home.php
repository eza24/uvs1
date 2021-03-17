<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
        parent:: __construct();
		$this->load->database();
        $this->load->helper("url");
        $this->load->helper('form');
       
    }
	public function index()
	{
		$image = $this->db->query("SELECT * from back_image where status=1 limit 1")->row();
		$this->load->view('templates/header', $image);
		$this->load->view('home');
		$this->load->view('templates/footer');
	}
	public function sub_news($slug)
	{
		$data['slug'] = $slug;
		$this->load->view('templates/sub_header');
		$this->load->view('sub_news',$data);
		$this->load->view('templates/footer');
	}

	public function contact_user()
	{
		date_default_timezone_set("Etc/GMT-8");
		$ognoo = date("Y/m/d H:i:s");
		$data ['lastname']= $this->input->post('lname');
		$data ['firstname']= $this->input->post('fname');
		$data ['phone']= $this->input->post('phone');
		$data ['email']= $this->input->post('email');
		$data ['status'] = 0;
		$data ['created_date'] = $ognoo;
		$this->db->insert('contact_user', $data);
		redirect(base_url());
	}
}
