<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller
{
	public function index()
	{
		$this->smarty->assign('title', 'Test Smarty');
		$this->smarty->assign(array(
			'message' => 'It works!',
			'php_version' => phpversion()
		));
		$this->smarty->display('test.tpl');
	}
}
