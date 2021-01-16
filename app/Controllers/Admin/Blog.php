<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;


class Blog extends BaseController
{
	public function index()
	{
		echo '<h2>A list of Blog Post</h2>';
	}


	// display new blog form
	public function createNew()
	{
		return view('blog_form');
	}

	// save blog post
	public function saveBlog()
	{
		echo '<pre>';
			print_r($_POST);
		echo '</pre>';
	}


	//--------------------------------------------------------------------

}
