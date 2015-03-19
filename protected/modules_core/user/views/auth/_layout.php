<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        </button>
	        <p id="app-title"><a href='/' style='color:white;'><?php echo CHtml::encode(Yii::app()->name); ?></a></p>
	        <p id="app-slogan">The social network for Eastside moms of all backgrounds.</p>
	    </div>

	    <div class="collapse navbar-collapse">
	    	<ul class="nav navbar-nav navbar-right">
	        	<li><a href="/index.php?r=user/auth/login">
	        		<div class="login-icon">
	        			<i class="fa fa-user"></i>
	        		</div> 
	        		<span>Login</span>
	        	</a></li>
	        </ul>
	    </div><!-- /.navbar-collapse -->
  	</div><!-- /.container-fluid -->
</nav>

    <?php echo $content; ?>


<style type="text/css">
    .login-icon {
    	padding: 5px;
    	border: 2px solid #fff;
    	width: 32px;
    	height: 32px;
    	border-radius: 50%;
    	float: left;
    	margin-right: 5px;
    	margin-top: 7px;
    }
    .fa-user {
    	font-size: 16px;
    	letter-spacing: 1px;
    	width: 16px;
    	margin-left: 2.5px;
    }
    #app-title {
    	font-family: 'Crafty Girls', cursive;
    	text-shadow: 0 0px 1px rgba(0, 0, 0, 0.5);
    	margin-top: 15px;
    	margin-bottom: 10px;
    	color: #ffffff;
    	font-size: 36px;
    	float: left;
    }
    #app-slogan {
    	color: #ffffff;
    	float: left;
    	margin-top: 35px;
    	margin-left: 10px;
    	opacity: 0.5;
    }
    .navbar-nav>li>a {
   		padding-bottom: 12px;
  		border-bottom: 2px solid transparent;
  		-webkit-animation-duration: 1s;
  		-webkit-animation-name: fadeInFromNone;
  		transition: border-color 0.5s ease, padding 0.5s ease;
    	display: inline-block;	
	}

	.navbar-nav>li>a>span {
		font-size: 18px;
		line-height: 45px;
	}
	.navbar-static-top .navbar-nav>li>a:hover {
		padding-bottom: 4px;
  		border-bottom: 2px solid rgba(255, 255, 255, 1);
  		color: #ffffff;
  	}

  	.navbar-static-top .navbar-nav>li>a:focus {
  		color: #ffffff;
  	}
</style>

