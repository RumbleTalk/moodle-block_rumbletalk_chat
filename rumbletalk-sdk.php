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

    define('AJAX_SCRIPT', true);

    require(__DIR__ . '/../config.php');
    require_once($CFG->libdir . '/filelib.php');

    header('Content-Type: application/json; charset=utf-8');

    echo $data['email'] . " ";
    echo $data['password'];
    // public function validateEmail(&$email)
    // {
    //     if (!is_string($email)) {
    //         return false;
    //     }
    //     $email = trim($email);

    //     return filter_var($email, FILTER_VALIDATE_EMAIL);
    // }

    
