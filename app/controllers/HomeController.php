<?php

class HomeController extends BaseController {


	public function index()
	{

        $posts = Post::orderBy('created_at', 'descs')->get();
		return View::make('home')->with('posts', $posts);
	}

}
