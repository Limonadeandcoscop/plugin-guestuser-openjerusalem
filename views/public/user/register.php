<?php
queue_js_file('guest-user-password');
queue_css_file('skeleton');
$css = "form > div { clear: both; padding-top: 10px;}";
queue_css_string($css);
$pageTitle = get_option('guest_user_register_text') ? get_option('guest_user_register_text') : __('Register');
echo head(array('bodyclass' => 'register', 'title' => $pageTitle));
?>
<h1><?php echo $pageTitle; ?></h1>
<div id='primary'>

<h2><?php echo __('Enter personnal information') ?></h2>
<p><?php echo __('Your informations will be used in accordance with ours') ?> <a href="#"><?php echo __('Privacy policy') ?></a></p>

<h2><?php echo __('Enter your details below') ?></h2>

<?php echo flash(); ?>
<?php echo $this->form; ?>
<p id='confirm'></p>
</div>
<?php echo foot(); ?>


