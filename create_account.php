<?php
require_once('../../config.php');
require_once('create_account_form.php');

$create_account_params = [
    'id' => $USER->id
];

require_login();
$PAGE->set_context(context_system::instance());
$PAGE->set_url(new moodle_url('/blocks/rumbletalk/create_account.php'), $create_account_params);
$PAGE->set_title('RumbleTalk: Create Account');
$PAGE->set_heading('RumbleTalk: Create Account');
$PAGE->navbar->add(get_string('pluginname', 'block_rumbletalk'));
$PAGE->navbar->add(get_string('create_account', 'block_rumbletalk'));
$PAGE->requires->js(new moodle_url('/blocks/rumbletalk/module.js'));

echo $OUTPUT->header();

$mform = new create_account_form();
if ($mform->is_cancelled()) {
    // form cancelled, redirect
    // redirect(new moodle_url('create_account_form.php', array()));
    redirect(new moodle_url('/', ['redirect' => 0]));
} else if ($data = $mform->get_data()) {
    // form has been submitted
    $email = $data->create_email;
    $password = $data->create_password;
    $create_params = array(
        'email' => $email,
        'password' => $password);
    $PAGE->requires->js_call_amd('block_rumbletalk/create_account', 'init', array($create_params));
    // $PAGE->requires->js_init_call('M.block_rumbletalk.create_account', null, false, $create_params);
    // $PAGE->requires->js_init_call('M.block_rumbletalk.create_account', $create_params);
    // create_account_form($data);
} else {
    // Form has not been submitted or there was an error
    // Just display the form
    $mform->set_data($create_account_params);
    $mform->display();
}