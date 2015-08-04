<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Another extends MY_Controller {

  public function index()
  {
    echo "laser butt";
    $data['title'] = 'Another Page!'; //$product->name;
    $data['content'] = 'another';
    $this->load->view($this->layout, $data);
  }

}
