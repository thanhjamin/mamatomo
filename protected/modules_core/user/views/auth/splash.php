<?php
/**
 * Login and registration page by AuthController
 *
 * @property CFormModel $model is the login form.
 * @property CFormModel $registerModel is the registration form.
 * @property Boolean $canRegister indicates that anonymous registrations are enabled.
 *
 * @package humhub.modules_core.user.views
 * @since 0.5
 */
$this->pageTitle = Yii::t('UserModule.views_auth_login', '<strong>Please</strong> sign in');
?>

<section id="splash-intro" class='animated fadeIn'>
<div class="omnibox-header">Nagivate motherhood together.</div>

	<div class="container">
		<div class="omnibox-form">
			<h4>Start connecting with other moms in your area.</h4>

	    	<?php if ($canRegister) : ?>
	        <div id="register-form">
	            <div class="panel-body">
	                <?php
	                $form = $this->beginWidget('CActiveForm', array(
	                    'id' => 'account-register-form',
	                    'enableAjaxValidation' => false,
	                ));
	                ?>

	                <div class="form-group">
	                	<?php echo $form->error($registerModel, 'email'); ?>
	                    <?php echo $form->textField($registerModel, 'email', array('class' => 'form-control splash-inputform', 'id' => 'register-email', 'placeholder' => Yii::t('UserModule.views_auth_login', 'Enter your email address'))); ?>
	               		<?php echo CHtml::submitButton(Yii::t('UserModule.views_auth_login', 'Sign up'), array('class' => 'awesome-button')); ?>
	               	</div>
	                <?php $this->endWidget(); ?>
	            </div>
	        </div>
	    </div>

	    <?php endif; ?>
	</div>
</section>
<section id="splash-why">
<!-- 	<div class="why-header">Connect</div>
	<div class="why-header">Learn</div>
	<div class="why-header">Collaborate</div> -->
</section>
<script type="text/javascript">
    $(function() {
        // set cursor to login field
        $('#login_username').focus();
    })

    // Shake panel after wrong validation
<?php if ($form->errorSummary($model) != null) { ?>
        $('#login-form').removeClass('bounceIn');
        $('#login-form').addClass('shake');
        $('#register-form').removeClass('bounceInLeft');
        $('#app-title').removeClass('fadeIn');
<?php } ?>

    // Shake panel after wrong validation
<?php if ($form->errorSummary($registerModel) != null) { ?>
        $('#register-form').removeClass('bounceInLeft');
        $('#register-form').addClass('shake');
        $('#login-form').removeClass('bounceIn');
        $('#app-title').removeClass('fadeIn');
<?php } ?>

</script>

<style type="text/css">
body {
	padding-top: 0px;
	overflow: hidden;
}
#splash-intro {
    background-image: url('../img/BeFunky_hero-image.jpg');
    background-color: #ffffff;
    min-height: 720px;
    background-position: center;
    background-repeat: no-repeat;
}
.omnibox-header {
	color: #ffffff;
	font-weight: 300;
	font-size: 42px;
    line-height: 44px;
    text-align: center;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
    padding: 200px 0px 30px 0px;
}
.omnibox-form {
	margin: auto;
	width: 620px;
	background-color: #333;
	background-color: rgba(0, 0, 0, 0.6);
	border-top: none;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	padding: 20px;
	color: #ffffff;
}

.omnibox-form h4 {
	text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.4);
	margin-bottom: 0px;
}

.splash-inputform {
	padding: 9px 15px;
	width: 75%;
	float: left;
	margin-right: 5px;
	font-size: 16px;
	height: 44px;
	border-radius: 2px;
}

.splash-inputform:focus {
	border: 3px solid #ff8989;
	background: #FFF9F9;
}

.awesome-button {
	border: 0;
	background: #0087cc;
	border-radius: 4px;
	box-shadow: 0 5px 0 #006599;
	color: #fff;
	cursor: pointer;
	font: inherit;
	margin: -4px 0px 0px 0px;
	outline: 0;
	padding: 12px 20px;
	transition: all .1s linear;
}

.awesome-button:active {
	box-shadow: 0 2px 0 #006599;
	transform: translateY(3px);
}

.errorMessage {
	padding: 0px;
}

.navbar {
	margin-bottom: 0px;
}

</style>
