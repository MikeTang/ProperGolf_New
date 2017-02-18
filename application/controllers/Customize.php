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
          $data['current']='Customize';
          $this->load->view('templates/header', $data);
          $this->load->view('templates/nav_simple', $data);
          $this->load->view('customize_main_view');
          $this->load->view('templates/footer');
     }

     public function submit()
     {
          $chipping = $this->input->post('chipping');
          $pitching = $this->input->post('pitching');
          $putting = $this->input->post('putting');
          $irons = $this->input->post('irons');
          $driver = $this->input->post('driver');

           //set the session variables
          $sessiondata = array();
          if ($chipping == 1)
               array_push($sessiondata, 'chipping');
          if ($pitching == 1)
               array_push($sessiondata, 'pitching');
          if ($putting == 1)
               array_push($sessiondata, 'putting');
          if ($irons == 1)
               array_push($sessiondata, 'irons');
          if ($driver == 1)
               array_push($sessiondata, 'driver');
          redirect('customize/area/1');

     }

     public function area()
     {
          $data['title']='ProperGolf';
          $data['current']='Customize';
          $this->load->view('templates/header', $data);
          $this->load->view('templates/nav_simple', $data);
          $this->load->view('customize_area_view');
          $this->load->view('templates/footer');
     }
}?>