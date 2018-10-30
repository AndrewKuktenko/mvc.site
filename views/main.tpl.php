<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $pageData['title']; ?></title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/fontawesome.min.css">
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>

	<header id="header" class="">
		
	</header><!-- /header -->

	<div id="content">
		<div class="container table-block">
		    <div class="row table-cell-block">
		        <div class="col-sm-6 col-md-4 col-md-offset-4">
		            <h1 class="text-center login-title">Sign in to continue to Bootsnipp</h1>
		            <div class="account-wall">
		                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
		                    alt="">
			            	<form class="form-signin" id="form-signin" method="post">
			            		<?php if(!empty($pageData['error'])) : ?>
			            			<p><?php echo $pageData['error']; ?></p>
			            		<?php endif;?>
			            		<input type="text" id="login" class="form-control" name="login" placeholder="Логин" >
			            		<input type="password" id="password" class="form-control" name="password" placeholder="Пароль" >
			            		<button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
			            		<label class="checkbox pull-left">
			                	<input type="checkbox" value="remember-me">
			                		Remember me
			            		</label>
			            		<a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
			            	</form>
	            		</div>
	            	<a href="#" class="text-center new-account">Create an account </a>
	        	</div>
	    	</div>
		</div>
	</div>


	<script src="/js/jquery-3.3.1.min.js" type="text/javascript"></script>
	<script src="/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/js/angular.min.js" type="text/javascript"></script>
	<script src="/js/script.js" type="text/javascript"></script>
</body>
</html>