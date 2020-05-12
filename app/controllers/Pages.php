<?php
  class Pages extends Controller {
    public function __construct() {
      // echo 'Pages loaded';
      // $this->postModel = $this->model('Post');
    }

    public function index() {
      // $this->view('hello');
      // $this->view('pages/index', ['title' => 'Welcome']);

      // $posts = $this->postModel->getPosts();
      
      $data = [
        'title' => 'Nititpong MVC',
        // 'posts' => $posts
      ]; 
      
      // $this->view('pages/index', ['title' => 'Welcome']);
      $this->view('pages/index', $data);
    }

    public function about() {
      // echo $id;
      $data = [
        'title' => 'About Us'
      ];
      $this->view('pages/about', $data);
    }
  }