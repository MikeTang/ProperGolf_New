<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Customize extends CI_Controller
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

     public function index()
     {
          $data['title']='ProperGolf';  
          $this->load->view('templates/header', $data);
          $this->load->view('templates/nav_simple', $data);
          $this->load->view('customize_main_view');
          $this->load->view('templates/footer');
     }

     public function area($page)
     {
          
     }
}?>