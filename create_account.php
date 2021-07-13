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
    redirect(new moodle_url('/', ['redirect' => 0]));
} else if ($data = $mform->get_data()) {
    // form has been submitted
    $email = $data->create_email;
    $password = $data->create_password;
    $create_params = array(
        'email' => $email,
        'password' => $password);
    $PAGE->requires->js_call_amd('block_rumbletalk/create_account', 'init', array($create_params));
} else {
    // Just display the form
    $mform->set_data($create_account_params);
    $mform->display();
}
