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

$services = array(
      'mypluginservice' => array(                      //the name of the web service
          'functions' => array ('create_account'), //web service functions of this service
          'requiredcapability' => '',                //if set, the web service user need this capability to access 
                                                     //any function of this service. For example: 'some/capability:specified'                 
          'restrictedusers' =>0,                      //if enabled, the Moodle administrator must link some user to this service
                                                      //into the administration
          'enabled'=>1,                               //if enabled, the service can be reachable on a default installation
          'shortname'=>'create_account' //the short name used to refer to this service from elsewhere including when fetching a token
       )
  );

$functions = array(
    'create_account_function' => array(
        'classname' => 'create_account_external',
        'methodname' => 'account_create',
        'classpath' => 'blocks/rumbletalk_chat/externallib.php',
        'description' => 'Create a new account in RumbleTalk',
        'type' => 'write',
        'ajax' => true,
        'loginrequired' => false
    )
);


