<!doctype html> 
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="/public/css/main.css">  
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="/public/css/bootstrap.min.css" rel="stylesheet">
	<title> @yield('title') | Blog</title>
</head>
	<body>
   
		<nav class="navbar navbar-top">
			<div class="container-fluid">
    			<div class="navbar-header">Blog</div>
    			<div>
					<ul class="navbar-nav">
						<li class="nav-item"> <a href="{{ URL::route('home') }}"> Home </a></li>	
						<li class="nav-item"> <a href="{{ URL::route('create-blog-post') }}">Create a post </a></li>
					</ul>
			   	</div>
			</div>	
		</nav>

		

		