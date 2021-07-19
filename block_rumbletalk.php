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

class block_rumbletalk extends block_base {
    public function init() {
        $this->title = get_string('rumbletalk', 'block_rumbletalk');
        $this->site_id = SITEID;
    }
    
    function has_config() {return true;}

    public function get_content() {
        
        global $COURSE, $USER, $PAGE;

        $this->content         =  new stdClass;
        
        if($USER->username == null){
            $this->content->text = 'Hello guest, please login first to join our awesome chat.';

        } else {
            if (!empty($this->config->code)) {

                // Check Height
                if(empty($this->config->height)){

                    //Default Height of the chat: 500px;
                    $this->config->height = '500';
                    $this->content->text = '<div style="height: ' . $this->config->height . 'px;"><div id="rt-' . md5($this->config->code) . '"></div> <script src="https://rumbletalk.com/client/?' . $this->config->code . '"></script></div>';
                } else {
                    $this->content->text = '<div style="height: ' . $this->config->height . 'px;"><div id="rt-' . md5($this->config->code) . '"></div> <script src="https://rumbletalk.com/client/?' . $this->config->code . '"></script></div>';
                }

                // Check Members Login
                if($this->config->members == 1){

                    $userpicture = new user_picture($USER);
                    $url = $userpicture->get_url($PAGE);

                    $this->content->text .= "<script>
                        (function(g, v, w, d, s, a, b) {
                        w['rumbleTalkMessageQueueName'] = g;
                        w[g] = w[g] ||
                        function() {
                        (w[g].q = w[g].q || []).push(arguments)
                        };
                        a = d.createElement(s);
                        b = d.getElementsByTagName(s)[0];
                        a.async = 1;
                        a.src = 'https://d1pfint8izqszg.cloudfront.net/api/' + v + '/sdk.js';
                        b.parentNode.insertBefore(a, b);
                        })('rtmq', 'v1.0.0', window, document, 'script'); 
                    </script>";
                    $this->content->text .= '<script>rtmq(\'login\',{hash: \'' . $this->config->code . '\', username: \'' . $USER->username . '\', image: \'' . $url . '\', forceLogin: \'true\'})</script>';
                }

            } else {
                $this->content->text = 'There is no chat available.';
            }
        }
     
        $this->content->text .= '<p>&nbsp;</p>';
        $url = new moodle_url('/blocks/rumbletalk/create_account.php', array('blockid' => $this->instance->id, 'courseid' => $COURSE->id));
        // $this->content->footer = html_writer::link($url, get_string('create_account', 'block_rumbletalk'));
        $this->content->footer = 'RumbleTalk, LTD.';

        return $this->content;
    }

}
