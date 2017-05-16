<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Newproy extends CI_Controller {
	function __construct(){
		parent ::__construct();
	}
	function index(){
		$this ->load->view('Newproy/Bienvenido');
	}
	function primeraprueba(){
		$this ->load->view('Newproy/headers');
		$this ->load->view('Newproy/Bienvenido');
}
}