<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
        public function __construct() {
        parent::__construct();
        $this->load->helper('url');
         }
	
        public function index()
	{
            $this->flight();
	}
        
        public function flight()
	{
            $this->load->view('header');
            $this->load->view('flight');
            $this->load->view('footer');
	}
        
        public function flightsearch()
	{
            $this->load->view('header');
            $this->load->view('flightresult');
            $this->load->view('footer');
	}

         public function flight_step_1()
    {
            $this->load->view('header');
            $this->load->view('flight_step_1');
            $this->load->view('footer');
    }

         public function flight_step_2()
    {
            $this->load->view('header');
            $this->load->view('flight_step_2');
            $this->load->view('footer');
    }
        
        public function travel()
	{
            $this->load->view('header');
            $this->load->view('travel');
            $this->load->view('footer');
	}

        public function travel_step_1()
    {
            $this->load->view('header_travel');
            $this->load->view('travel_step_1');
            $this->load->view('footer');
    }

        public function travel_step_2()
    {
            $this->load->view('header_travel');
            $this->load->view('travel_step_2');
            $this->load->view('footer');
    }


        
        public function sewamobil()
	{
            $this->load->view('header');
            $this->load->view('sewamobil');
            $this->load->view('footer');
	}
        
}
