<?php 
namespace Ijdb\Controllers;

class Check{
	public function __construct(){

	}
	public function ContainsNumbers($password){
		if (preg_match('/[0-9]/', $password)){
			return true;
		}
		else{
			return false;
		}
	}
	public function min8($password){
		if (strlen($password)>=8){
			return true;
		}
		else{
			return false;
		}
	}
}