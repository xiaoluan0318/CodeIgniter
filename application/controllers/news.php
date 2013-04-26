<?php

class news extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('news_model', 'News_Model');
	}
	
	public function index() {
		$data['news'] = $this->News_Model->get_news();
		$data['title'] = 'News archive';
		$this->load->view('templates/header', $data);
		$this->load->view('news/index', $data);
		$this->load->view('templates/footer', $data);
	}
	
	public function view($slug) {
		$data['news'] = $this->News_model->get_news($slug);
	}
}