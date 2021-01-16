<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;


class Users extends BaseController
{
	public function index()
	{
		echo '<h2>This is an User area</h2>';
	}


	public function getAllUsers()
	{
		echo '<h2>Show all users</h2>';
		// return view('product');
	}


	//--------------------------------------------------------------------

}
