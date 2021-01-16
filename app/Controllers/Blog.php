<?php namespace App\Controllers;


class Blog extends BaseController
{
	public function index()
	{
		$data = [
			'meta_title' => 'Codeigniter 4 Blog',
			'title' => 'This is a Blog Page'
		];

		$posts = ['Title 1', 'Title 2', 'Title3'];
		$data['posts'] = $posts;

		return view('blog', $data);
	}

	// return single post
	public function post( )
	{
		$data = [
			'meta_title' => 'Codeigniter 4 Post Page',
			'title' => 'This is an Awesome blog'
		];

		return view('single_post', $data);
	}


}
