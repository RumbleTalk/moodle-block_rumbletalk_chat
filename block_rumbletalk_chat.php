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
 * Handles displaying the rumbletalk group chat block.
 *
 * @package    block_rumbletalk_chat
 * @copyright  2021 RumbleTalk, LTD {@link https://www.rumbletalk.com/}
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
*/

class block_rumbletalk_chat extends block_base {
    public function init() {
        $this->title = get_string('rumbletalk', 'block_rumbletalk_chat');
        $this->site_id = SITEID;
    }
    
    function has_config() {return true;}

    public function get_content() {
        
        global $COURSE, $USER, $PAGE;

        if ($this->content !== NULL) {
            return $this->content;
        }
        
        $this->content         =  new stdClass;
        
        if($USER->username == null){
           $this->content->text = get_string('hello_guest', 'block_rumbletalk_chat');

        } else {
            if (!empty($this->config->code)) {

                // Check Height
                if(empty($this->config->height)){

                    //Default Height of the chat: 500px;
                    $this->config->height = '500';
                    $this->content->text = get_string('chat_div', 'block_rumbletalk_chat');
                } else {
                    $this->content->text = get_string('chat_div', 'block_rumbletalk_chat');
                }

                // Check Members Login
                if($this->config->members == 1){

                    $userpicture = new user_picture($USER);
                    $url = $userpicture->get_url($PAGE);

                    $this->content->text .= get_string('login_script', 'block_rumbletalk_chat');
                    $this->content->text .= get_string('rtmq_script', 'block_rumbletalk_chat');
                }

            } else {
                $this->content->text = get_string('no_chat', 'block_rumbletalk_chat');
            }
        }
     
        $this->content->text .= get_string('line_break', 'block_rumbletalk_chat');
        $url = new moodle_url('/blocks/rumbletalk_chat/create_account.php', array('blockid' => $this->instance->id, 'courseid' => $COURSE->id));
        // $this->content->footer = html_writer::link($url, get_string('create_account', 'block_rumbletalk_chat'));
        $this->content->footer = get_string('trademark', 'block_rumbletalk_chat');

        return $this->content;
    }

}
