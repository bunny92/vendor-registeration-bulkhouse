<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    private $site_name;

    public function __construct() {
        parent::__construct();
        $this->site_name = "Bulkhouse Vendor Panel"." ";
    }

	public function index()
	{
                $data['title'] = $this->site_name."Register";
		$this->load->view('home',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */