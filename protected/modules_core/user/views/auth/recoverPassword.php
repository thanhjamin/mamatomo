<?php
$this->pageTitle = Yii::t('UserModule.views_auth_recoverPassword', '<strong>Password</strong> recovery');
?>
<div class="container" style="text-align: center;">
            <div class="auth-header" style="margin-bottom:15px;"><?php echo Yii::t('UserModule.views_auth_recoverPassword', 'Forgot Password?'); ?></div>
    <div id="password-recovery-form" class="animated fadeInUp" style="max-width: 350px; margin: 0 auto 20px; text-align: left;">

        <div class="panel-body" style='text-align:center;'>


            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'recover-password-form',
                "enableClientValidation" => false,
                'enableAjaxValidation' => false,
            ));
            ?>

            <div class="form-group">
                <?php //echo $form->labelEx($model, 'email');  ?>
                <?php echo $form->textField($model, 'email', array('class' => 'form-control', 'id' => 'email_txt', 'placeholder' => Yii::t('UserModule.views_auth_recoverPassword', 'your email'))); ?>
                <?php echo $form->error($model, 'email'); ?>
            </div>



            <div class="form-group">
                <?php /* $this->widget('CCaptcha'); ?>                            
                <?php echo $form->textField($model, 'verifyCode', array('class' => 'form-control', 'placeholder' => Yii::t('UserModule.views_auth_recoverPassword', 'enter security code above'))); ?>
                <?php echo $form->error($model, 'verifyCode'); */?>

            </div>

            <?php echo CHtml::submitButton(Yii::t('UserModule.views_auth_recoverPassword', 'Reset password'), array('class' => 'btn btn-primary auth-btn', 'style' => 'margin-bottom:10px;')); ?>

            <?php $this->endWidget(); ?>

            <small><?php echo Yii::t('UserModule.views_auth_recoverPassword', 'Enter your e-mail. We´ll send you recovery instructions!'); ?></small>


        </div>
    </div>
</div>

<div id='sign-up-bottom'>
    <p>Remember your password? <a href='/index.php?r=user/auth/login'>Log In</p></a>
</div>

<script type="text/javascript">

    $(function() {
        // set cursor to email field
        $('#email_txt').focus();
    })

    // Shake panel after wrong validation
<?php if ($form->errorSummary($model) != null) { ?>
        $('#password-recovery-form').removeClass('bounceIn');
        $('#password-recovery-form').addClass('shake');
        $('#app-title').removeClass('fadeIn');
<?php } ?>
</script>

<style type='text/css'>
    body{
        padding: 0px;
    }
</style>