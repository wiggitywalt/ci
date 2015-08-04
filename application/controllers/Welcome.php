<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function index()
	{
        /*load model*/
        $this->load->model('data_model', '', TRUE);
        $dataSet = $this->data_model->getTestData();

        /*build $data array */
        $data['title'] = 'Howdy Page!';
        $data['content'] = 'howdy';
        $data['dataSet'] = $dataSet;

        $this->load->view($this->layout, $data);
	}

    public function another(){
        $data['title'] = 'Another Page!';
        $data['content'] = 'another';
        $this->load->view($this->layout, $data);
    }

    public function about(){
        $data['title'] = 'About Page!';
        $data['content'] = 'about';
        $this->load->view($this->layout, $data);
    }

    public function contact(){
        $data['title'] = 'Contact Page!';
        $data['content'] = 'contact';
        $this->load->view($this->layout, $data);
    }
}
