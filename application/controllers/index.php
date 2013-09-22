<?php if (!defined('BASEPATH')) die();
class Index extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('layout');
	}

    public function index() {
        $this->layout->view('index/index');
    }
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */
