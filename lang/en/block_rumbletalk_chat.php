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

$string['pluginname'] = 'RumbleTalk Group Chat';
$string['rumbletalk'] = 'RumbleTalk Group Chat';

// Block Strings
$string['hello_guest'] = 'Hello guest, please login first to join our awesome chat.';
$string['chat_div'] = '<div style="height: ' . $this->config->height . 'px;"><div id="rt-' . md5($this->config->code) . '"></div> <script src="https://rumbletalk.com/client/?' . $this->config->code . '"></script></div>';
$string['login_script'] = "<script>
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
$string['rtmq_script'] = '<script>rtmq(\'login\',{hash: \'' . $this->config->code . '\', username: \'' . $USER->username . '\', image: \'' . $url . '\', forceLogin: \'true\'})</script>';
$string['no_chat'] = 'There is no chat available.';
$string['line_break'] = '<p>&nbsp;</p>';
$string['trademark'] = 'RumbleTalk, LTD.';

// Create Account Strings
$string['create_account'] = 'Create Account';
$string['create_email'] = 'Email: ';
$string['create_password'] = 'Password: ';
$string['create_button'] = 'Create';
$string['title_create'] = 'RumbleTalk Group Chat: Create Account';
$string['heading_create'] = 'RumbleTalk: Create Account';

// Chat: Embed Strings (Edit Form.php)
$string['embed_chat'] = 'Embed a Chat';
$string['embed_height'] = 'Chat Height: ';
$string['embed_code'] = 'Chat Hashcode: ';
$string['code'] = 'How to get hashcode?';
$string['code_help'] = '<p>Where is a hashcode found?</p> 
<p>You can find it at you Administrator panel(https://cp.rumbletalk.com/login) at RumbleTalk.</p>';
$string['height'] = 'What is Chat Height?';
$string['height_help'] = '<p>Chat\'s Height is based on pixels(px).</p>
<p>Please enter numbers only.</p>';
$string['members'] = 'Read instructions first, before checking the box.';
$string['members_help'] = '<p>Before checking the box, you must first follow the steps below:</p>
<ol>
    <li>Login to your Administrator Panel(https://cp.rumbletalk.com/login)</li>
    <li>Choose your chat at "Selected Chat"</li>
    <li>Open "Settings"</li>
    <li>Select "General & Logins" at the drop-down list</li>
    <li>Click "Login Options" at the General tab</li>
    <li>Check the box for "User authentication required"</li>
</ol>';
$string['login_type'] = 'Login Type: ';
$string['members_only'] = 'Members Only';
$string['default_height'] = '500';

// Settings Strings
$string['headerconfig'] = 'Settings';
$string['descconfig'] = 'The RumbleTalk Group Chat settings can change your chat\'s settings.';

// Error Strings
$string['error_email_required'] = 'Please enter an email.';
$string['error_email_regex'] = 'Please enter a  valid email.';
$string['error_password_required'] = 'Please enter a password.';
$string['error_password_regex'] = 'Please enter a valid password.';
$string['error_numbers_only'] = 'Please enter numbers only';
$string['error_code_required'] = 'Please enter a hashcode';

$string['rumbletalk:addinstance'] = 'Add a RumbleTalk Chat block';
$string['rumbletalk:myaddinstance'] = 'Add a new RumbleTalk Chat block to the My Moodle page';
