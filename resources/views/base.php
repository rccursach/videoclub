<!DOCTYPE html>
<html lang="es" ng-app="videoclub">
<head>
	<link rel="stylesheet" type="text/css" href="components/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="components/bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="components/angular-bootstrap/ui-bootstrap-csp.css">
	<title></title>
</head>
<style type="text/css">
/* Sticky footer styles
-------------------------------------------------- */
html {
  position: relative;
  min-height: 100%;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 60px;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 60px;
  background-color: #f5f5f5;
}


/* Custom page CSS
-------------------------------------------------- */
/* Not required for template or sticky footer method. */

body > .container {
  /*padding: 60px 15px 0;*/
}
.container .text-muted {
  margin: 20px 0;
}

.footer > .container {
  padding-right: 15px;
  padding-left: 15px;
}

code {
  font-size: 80%;
}

</style>
<body>

<!-- ////////// -->
<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header">
		 
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
		</button> <a class="navbar-brand" href="#">Videoclub</a>
	</div>
	
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li class="active">
				<a href="#">Link</a>
			</li>
			<li>
				<a href="#">Link</a>
			</li>
			<li class="dropdown">
				 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
				<ul class="dropdown-menu">
					<li>
						<a href="#">Action</a>
					</li>
					<li>
						<a href="#">Another action</a>
					</li>
					<li>
						<a href="#">Something else here</a>
					</li>
					<li class="divider">
					</li>
					<li>
						<a href="#">Separated link</a>
					</li>
					<li class="divider">
					</li>
					<li>
						<a href="#">One more separated link</a>
					</li>
				</ul>
			</li>
		</ul>
		<form class="navbar-form navbar-left" role="search">
			<div class="form-group">
				<input type="text" class="form-control">
			</div> 
			<button type="submit" class="btn btn-default">
				Submit
			</button>
		</form>
		<ul class="nav navbar-nav navbar-right">
			<li>
				<a href="#">Link</a>
			</li>
			<li class="dropdown">
				 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
				<ul class="dropdown-menu">
					<li>
						<a href="#">Action</a>
					</li>
					<li>
						<a href="#">Another action</a>
					</li>
					<li>
						<a href="#">Something else here</a>
					</li>
					<li class="divider">
					</li>
					<li>
						<a href="#">Separated link</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
	
</nav>
<div class="container">

	<div class="row">
		<div class="col-md-12">
			<!--ul class="breadcrumb">
				<li>
					<a href="#">Home</a> <span class="divider">/</span>
				</li>
				<li>
					<a href="#">Library</a> <span class="divider">/</span>
				</li>
				<li class="active">
					Data
				</li>
			</ul-->
			<div class="page-header">
				<h1>
					Videoclub <small>Administrar</small>
				</h1>
			</div>
			<div class="row">
				<div class="col-md-3">
					<!-- Menu -->
					<div class="panel-group" id="panel-636607">
						<!-- peliculas -->
						<div class="panel panel-default">
							<div class="panel-heading">
								 <a class="panel-title" data-toggle="collapse" data-parent="#panel-636607" href="#panel-menu-peliculas">Pel&iacute;culas</a>
							</div>
							<div id="panel-menu-peliculas" class="panel-collapse collapse in">
								<div class="list-group panel-body" contenteditable="false">
									<a href="#" class="list-group-item active">Buscar</a>
									<a href="#" class="list-group-item">Nuevo</a>
								</div>
							</div>
						</div>
					<!-- Directores -->
						<div class="panel panel-default">
							<div class="panel-heading">
								 <a class="panel-title" data-toggle="collapse" data-parent="#panel-636607" href="#panel-menu-directores">Directores</a>
							</div>
							<div id="panel-menu-directores" class="panel-collapse collapse">
								<div class="list-group panel-body" contenteditable="false">
									<a href="#" class="list-group-item">Buscar</a>
									<a href="#" class="list-group-item">Nuevo</a>
								</div>
							</div>
						</div>
						<!-- Generos -->
						<div class="panel panel-default">
							<div class="panel-heading">
								 <a class="panel-title" data-toggle="collapse" data-parent="#panel-636607" href="#panel-menu-generos">G&eacute;neros</a>
							</div>
							<div id="panel-menu-generos" class="panel-collapse collapse">
								<div class="list-group panel-body" contenteditable="false">
									<a href="#" class="list-group-item">Buscar</a>
									<a href="#" class="list-group-item">Nuevo</a>
								</div>
							</div>
						</div>
						<!-- arriendos -->
						<div class="panel panel-default">
							<div class="panel-heading">
								 <a class="panel-title" data-toggle="collapse" data-parent="#panel-636607" href="#panel-menu-arriendos">Arriendos</a>
							</div>
							<div id="panel-menu-arriendos" class="panel-collapse collapse">
								<div class="list-group panel-body" contenteditable="false">
									<a href="#" class="list-group-item">Buscar</a>
									<a href="#" class="list-group-item">Nuevo</a>
								</div>
							</div>
						</div>
					</div><!-- fin menu -->
				</div>
				<div class="col-md-9" ng-view>
					<!-- -->
					<!--table class="table">
						<thead>
							<tr>
								<th>
									#
								</th>
								<th>
									Product
								</th>
								<th>
									Payment Taken
								</th>
								<th>
									Status
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									1
								</td>
								<td>
									TB - Monthly
								</td>
								<td>
									01/04/2012
								</td>
								<td>
									Default
								</td>
							</tr>
							<tr class="active">
								<td>
									1
								</td>
								<td>
									TB - Monthly
								</td>
								<td>
									01/04/2012
								</td>
								<td>
									Approved
								</td>
							</tr>
							<tr class="success">
								<td>
									2
								</td>
								<td>
									TB - Monthly
								</td>
								<td>
									02/04/2012
								</td>
								<td>
									Declined
								</td>
							</tr>
							<tr class="warning">
								<td>
									3
								</td>
								<td>
									TB - Monthly
								</td>
								<td>
									03/04/2012
								</td>
								<td>
									Pending
								</td>
							</tr>
							<tr class="danger">
								<td>
									4
								</td>
								<td>
									TB - Monthly
								</td>
								<td>
									04/04/2012
								</td>
								<td>
									Call in to confirm
								</td>
							</tr>
						</tbody>
					</table>
					<form role="form">
						<div class="form-group">
							 
							<label for="exampleInputEmail1">
								Email address
							</label>
							<input type="email" class="form-control" id="exampleInputEmail1">
						</div>
						<div class="form-group">
							 
							<label for="exampleInputPassword1">
								Password
							</label>
							<input type="password" class="form-control" id="exampleInputPassword1">
						</div>
						<div class="form-group">
							 
							<label for="exampleInputFile">
								File input
							</label>
							<input type="file" id="exampleInputFile">
							<p class="help-block">
								Example block-level help text here.
							</p>
						</div>
						<div class="checkbox">
							 
							<label>
								<input type="checkbox"> Check me out
							</label>
						</div> 
						<button type="submit" class="btn btn-default">
							Submit
						</button>
					</form-->
				</div>
			</div>
		</div>
	</div>
</div>
<div class="footer">
	<div class="container">
		<p>
			<small>Videoclub (C) 2015-2016 Ricardo Carrasco, Mat&iacute;as Barrera, Felipe</small>
		</p>
	</div>
</div>
<!-- //////////-->


<script type="text/javascript" src="components/angular/angular.js"></script>
<script type="text/javascript" src="components/angular-resource/angular-resource.js"></script>
<script type="text/javascript" src="components/angular-route/angular-route.js"></script>
<script type="text/javascript" src="components/angular-bootstrap/ui-bootstrap.js"></script>
<script type="text/javascript" src="components/jquery/jquery.js"></script>
<script type="text/javascript" src="components/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="components/app/app.js"></script>
<script type="text/javascript" src="components/app/controllers/controller.js"></script>
<script type="text/javascript" src="components/app/routes/route.js"></script>
<script type="text/javascript" src="components/app/services/service.js"></script>
</body>
</html>