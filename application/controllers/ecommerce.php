<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ecommerce extends CI_Controller {

	function __construct() {
        parent::__construct();
    }

	public function index()
	{
        $data['pagetitle']	= 'E-commerce';
        $data['time'] 		= date('Y/m/d');
		$this->template->display('ecommerce/ecommerce', $data);
	}

	function order()
	{
        $data['pagetitle']	= 'E-commerce Order';
		$this->template->display('ecommerce/order', $data);
	}
}

/* End of file ecommerce.php */
/* Location: ./application/controllers/ecommerce.php */