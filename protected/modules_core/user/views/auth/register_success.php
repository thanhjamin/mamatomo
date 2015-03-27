<?php
/**
 * After E-Mail was provided for registration, this view is shown.
 * This indicates an approval e-mail was sent to the given address.
 *
 * @property CFormModel $registerModel is the registration form.
 *
 * @package humhub.modules_core.user.views
 * @since 0.5
 *
 * @var $this AuthController
 */
?>
<div class="container" style="text-align: center;">
    <h1 id="app-title" class="animated fadeIn"><?php echo CHtml::encode(Yii::app()->name); ?></h1>
    <br/>
    <div class="row">
        <div class="panel panel-default" style="max-width: 300px; margin: 0 auto 20px; text-align: left;">
            <div class="panel-heading"><?php echo Yii::t('UserModule.views_auth_register_success', '<strong>Welcome</strong> to the mamatomo family!'); ?></div>
            <div class="panel-body">
                <p><?php echo Yii::t('UserModule.views_auth_register_success', 'Before we move on, let\'s get you fully signed up!'); ?></p>
                <p><?php echo Yii::t('UserModule.views_auth_register_success', 'Please check your email and click the <strong class="nowrap">Sign up</strong> link we\'ve sent you to complete registration.'); ?></p>
                <br/>
                <a href="<?php echo $this->createUrl('//') ?>" class="btn btn-primary"><?php echo Yii::t('UserModule.views_auth_register_success', 'Back to home') ?></a>
                <a href="<?php echo $this->createUrl('//user/auth/recoverPassword') ?>" class="btn btn-primary"><?php echo Yii::t('UserModule.views_auth_register_success', 'Log In') ?></a>
            </div>
        </div>
    </div>
</div>



