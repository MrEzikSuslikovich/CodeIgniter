<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width ">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
	<link rel="stylesheet" media="screen and (max-width: 600px)" href="/Assets/css/mobile.css"/>
	<link rel="stylesheet" media="screen and (min-width: 600px)" href="/Assets/css/computer.css"/>
	<link rel="stylesheet" href="/Assets/css/style.css"/>
</head>
<body>
	<header>
  		<nav class="navbar navbar-expand-md fixed-top border-bottom bg-white ">
  			<div class="container-xl">
	  				<a href="/" class="navbar-brand">
						<img src="/Assets/img/svg/Logo.PNG">
					</a>
		    	<button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		      		<span class="navbar-toggler-icon green"></span>
		    	</button>
		    	<div class="collapse navbar-collapse" id="navbarCollapse">
		      		<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link text-dark" href="#">Why Alivio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-dark" href="#">Solutions</a>
						</li>
						<li class="nav-item">
							<a class="nav-link  text-dark" href="#">Community</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-dark" href="#">Pricing</a>
						</li>
					</ul>
				    <form class="form-inline mt-2 mt-md-0">
				        <a  class="nav-link text-dark" href="#">Sign in</a>
						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Start Trial</button>
		      		</form>
		    	</div>
  			</div>
  		</nav>
	</header>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Start Trial</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body ">
					<div class="mt-3" id="result">
						<div class="input-group mb-3 d-flex flex-column">
							<form id="modal_form">
								<div class="p-2">
									<input autocomplete="off" id="nameinput" placeholder="Name"  name="name" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
								</div>
								<br>
								<div class="p-2">
									<input autocomplete="off" id="phoneinput"  placeholder="Phone"  name="phonenumber" value="" class=" form-control tel">
								</div>
							</form>
							<div class="mt-3" id="error">
							</div>		
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary" data-dismiss="modal" id="modal_confirm">Send</button>
				</div>
			</div>
  		</div>
	</div>
    <main class="main">