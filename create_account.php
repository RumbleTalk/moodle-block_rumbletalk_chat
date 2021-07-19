<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Handles displaying the rumbletalk block.
 *
 * @package    block_rumbletalk
 * @copyright  2021 RumbleTalk, LTD {@link https://www.rumbletalk.com/}
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
*/

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
