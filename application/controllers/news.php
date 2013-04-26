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
        $data['news_item'] = $this->News_Model->get_news($slug);
        if (empty($data['news_item'])) {
            show_404();
        }
        $data['title'] = $data['news_item']['title'];
        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer', $data);
    }
}
