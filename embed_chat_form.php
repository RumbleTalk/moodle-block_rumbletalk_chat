<?php

defined('MOODLE_INTERNAL') || die();
require_once($CFG->libdir . '/formslib.php');

class embed_chat_form extends \moodleform {

    function definition() {

        $mform =& $this->_form;

        $mform->addElement('html', '<div style="height: 500px;"><div id="rt-b63589e32226951683a12498f654722c"></div> <script src="https://rumbletalk.com/client/?~yMm7LYM"></script></div>');

    }
}