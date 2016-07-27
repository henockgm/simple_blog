<?php

 class PostController extends BaseController 
 {
 	public function getShow($slug) 
 	{
 		$post = Post::where('slug', '=', $slug)->first();
 		return View::make('posts.show')->with('post', $post);
 	}

 	public function getCreateBlogPost()  
 	{
 		return View::make('posts.create');
 	}

 	public function postCreateBlogPost() 
 	{      
         $validator =  Validator::make(Input::all(), 
            array(
                    'blog_post_title' => 'required|max:200',
                    'blog_post_body'  => 'required'
                 )
            );

         if($validator->fails()) {
            return Redirect::route('post-create-blog-post')->withErrors($validator)->withInput();
         }

         else {
            // create Post 
            $post_title = Input::get('blog_post_title'); 
            $post_slug  = strtolower(preg_replace('/[^A-Za-z0-9-]+!/', '-', $post_title));
            $post_body  = Input::get('blog_post_body'); 

            $post_draft       = 0;

            $post =  Post::create(array(
         					'title' => $post_title,
         					'slug'  => $post_slug,
         					'draft' => $post_draft,
         					'body'  => $post_body
         					));
            if($post) return Redirect::route('home')->with('global', 'You posted successfully');       
        }

 	}
 
 }