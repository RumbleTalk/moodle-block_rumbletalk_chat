<?php

defined('MOODLE_INTERNAL') || die();
require_once($CFG->libdir . '/formslib.php');

class create_account_form extends \moodleform {
 
    function definition() {

        global $CFG;

        $mform =& $this->_form;

        $this->context = $this->_customdata['context'];
        $this->user = $this->_customdata['user'];
        $this->course = $this->_customdata['course'];

        $mform->addElement('header', 'config_header', get_string('create_account', 'block_rumbletalk'));
 
        // A sample string variable with a default value.
        $mform->addElement('text', 'create_email', get_string('create_email', 'block_rumbletalk'), 'minlenght="10" maxlength="100" size="25"');
        $mform->addRule('create_email', get_string('error_email_required', 'block_rumbletalk'), 'required', null, 'client');
        // $mform->addRule('create_email', get_string('error_email_regex', 'block_rumbletalk'), 'regex', '^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$', 'client');
        $mform->setType('create_email', PARAM_NOTAGS);

        // A sample string variable with a default value.
        $mform->addElement('password', 'create_password', get_string('create_password', 'block_rumbletalk'), 'minlength="6" maxlength="12" size="25"');
        $mform->addRule('create_password', get_string('error_password_required', 'block_rumbletalk'), 'required', null, 'client');
        // $mform->addRule('create_password', get_string('error_password_regex', 'block_rumbletalk'), 'regex', '^[^,]{6,12}$', 'client');
        $mform->setType('create_password', PARAM_TEXT);

        // $mform->addElement('button', 'create_button', get_string('create_button', 'block_rumbletalk'));

        $this->add_action_buttons();
    }
}