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
 * An activity to interface with WebEx.
 *
 * @package   mod_webexactvity
 * @copyright Eric Merrill (merrill@oakland.edu)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_webexactivity\exception;

defined('MOODLE_INTERNAL') || die();

/**
 * mod_webexactiviy meeting ended event.
 *
 * @package    mod_webexactvity
 * @copyright  2014 Eric Merrill (merrill@oakland.edu)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class webex_xml_exception extends \moodle_exception {
    /**
     * Constructor
     *
     * @param string $code Error code from WebEx.
     * @param string $errormsg Error message from WebEx.
     * @param string $debuginfo Additional info about the error.
     */
    public function __construct($code, $errormsg, $debuginfo=null) {
        $params = array('errorcode' => (string)$code, 'error' => (string)$errormsg);
        parent::__construct('webexxmlexception', 'mod_webexactivity', '', $params, $debuginfo);
    }
}
