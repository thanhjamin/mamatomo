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

    <p class='auth-header' style='margin-bottom: 15px;'>Sign up for <span class='logo-font'>mamatomo</span></p>

    <?php if ($canRegister) : ?>
        <div id="register-form" class="animated fadeInUp"
             style="max-width: 350px; margin: 0 auto 20px; text-align: left;">

            <div class="panel-body">

                <p><?php echo Yii::t('UserModule.views_auth_login', "Join the Eastside's fastest growing mom network."); ?></p>
                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'account-register-form',
                    'enableAjaxValidation' => false,
                ));
                ?>

                <div class="form-group">
                    <?php echo $form->textField($registerModel, 'email', array('class' => 'form-control', 'id' => 'register-email', 'placeholder' => Yii::t('UserModule.views_auth_login', 'email'))); ?>
                    <?php echo $form->error($registerModel, 'email'); ?>
                </div>
        
                <?php echo CHtml::submitButton(Yii::t('UserModule.views_auth_login', 'Sign up with email'), array('class' => 'btn btn-primary auth-btn')); ?>

                <?php $this->endWidget(); ?>
            </div>
        </div>

    <?php endif; ?>

</div>

<div id='sign-up-bottom'>
    <p>Already have an account? <a href='/index.php?r=user/auth/login'>Log In</p></a>
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

