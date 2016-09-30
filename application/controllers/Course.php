<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->database();
          $this->load->library('form_validation');
          //load the login model
     }

     public function path()
     {
          $data['title']='ProperGolf';
          $data['current']='course';
          $this->load->view('templates/header', $data);
          $this->load->view('templates/nav_simple', $data);
          $this->load->view('course_main_view');
          $this->load->view('templates/footer');
     }

     public function course($course_code)
     {
          $data['title']='ProperGolf';
          $data['current']='course';
          $this->load->view('templates/header', $data);
          $this->load->view('templates/nav_simple', $data);
          $this->load->view('course_lesson_view');
          $this->load->view('templates/footer');
     }
      public function lesson($course_code, $lesson_code)
     {
          $data['title']='ProperGolf';
          $data['current']='course';
          $this->load->view('templates/header', $data);
          $this->load->view('templates/nav_simple', $data);
          $this->load->view('course_lesson_view');
          $this->load->view('templates/footer');
     }



}?>