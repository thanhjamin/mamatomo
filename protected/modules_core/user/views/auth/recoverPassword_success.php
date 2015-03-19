<div class="container" style="text-align: center;">
    <div class="auth-header" style='margin-bottom: 15px;'><?php echo Yii::t('UserModule.views_auth_recoverPassword_success', 'Password reset!'); ?></div>
    <div class="animated fadeIn" style="max-width: 450px; margin: 0 auto 20px; text-align: left;">     
        <div class="panel-body" style='text-align:center; font-size:20px;'>
            <p><?php echo Yii::t('UserModule.views_auth_recoverPassword_success', "We’ve sent you an email containing a link that will allow you to reset your password."); ?></p><br/>
            <a href="<?php echo $this->createUrl('//') ?>" class="btn btn-primary auth-btn" style="width: 60%;"><?php echo Yii::t('UserModule.views_auth_recoverPassword_success', 'back to home') ?></a>
        </div>
    </div>
</div>

<style type='text/css'>
    body{
        padding: 0px;
    }
</style>