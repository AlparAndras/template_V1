<?php
  /**
   *
   */
  class posts extends CI_Controller
  {

    public function index()
    {

      $data['title'] = 'Latest Post';

      $data['posts'] = $this->post_model->get_posts();

      $this->load->view('templates/header');
      $this->load->view('posts/index' , $data);
      $this->load->view('templates/footer');
    }
  }



?>
