<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    private $site_name;
    private $copyrite_year;

    public function __construct() {
        parent::__construct();
        $this->site_name = "Bulkhouse Vendor Panel"." ";
        $this->copyrite_year = "2015";
    }

	public function index()
	{
                $data['title'] = $this->site_name."Welcome";
                $data['copyrite_year'] = $this->copyrite_year;
                $this->load->view('template/header',$data);
		$this->load->view('home');
                $this->load->view('template/footer',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */