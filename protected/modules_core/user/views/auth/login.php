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

<div class="container">

    <p class='auth-header'>Log in to <span class='logo-font'>mamatomo</span></p>

    <div class="animated fadeInUp" id="login-form" style="max-width: 350px; margin: 0 auto 20px; text-align: left;">

        <div class="panel-body">
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'account-login-form',
                'enableAjaxValidation' => false,
            ));
            ?>

            <div class="form-group">
                <?php echo $form->textField($model, 'username', array('class' => 'form-control', 'id' => 'login_username', 'placeholder' => Yii::t('UserModule.views_auth_login', 'username or email'))); ?>
                <?php echo $form->error($model, 'username'); ?>
            </div>

            <div class="form-group">
                <?php echo $form->passwordField($model, 'password', array('class' => 'form-control', 'id' => 'login_password', 'placeholder' => Yii::t('UserModule.views_auth_login', 'password'))); ?>
                <?php echo $form->error($model, 'password'); ?>
            </div>
<!-- 
            <div class="checkbox">
                <label>
                    <?php echo $form->checkBox($model, 'rememberMe'); ?> <?php echo Yii::t('UserModule.views_auth_login', 'Remember me next time'); ?>
                </label>
            </div> -->

            <div class="form-group">
                <div>
                    <?php echo CHtml::submitButton(Yii::t('UserModule.views_auth_login', 'Log in with email'), array('class' => 'btn btn-large btn-primary auth-btn')); ?>
                </div>
                <div>
                    <small>
                        <a href="<?php echo $this->createUrl('//user/auth/recoverPassword'); ?>" class='forgotpw'><br><?php echo Yii::t('UserModule.views_auth_login', 'Forgot your password?') ?></a>
                    </small>
                </div>
            </div>

            <?php $this->endWidget(); ?>

        </div>

    </div>

</div>

<div id='sign-up-bottom'>
    <p>Dont' have an account? <a href='/index.php?r=user/auth/signup'>Sign Up</p></a>
</div>

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

<style type='text/css'>
    body{
        padding: 0px;
    }
</style>

