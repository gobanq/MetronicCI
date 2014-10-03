<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
        parent::__construct();
    }


	public function index()
	{
        $data['pagetitle']	= 'Dashboard';
        $data['time'] 		= date('Y/m/d');
		$this->template->display('dashboard', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */