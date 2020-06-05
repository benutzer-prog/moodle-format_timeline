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
 * Timeline Social course format services.
 *
 * @package    format_timeline
 * @copyright  2020 onwards Willian Mano {@link http://conecti.me}
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$functions = [
    'format_timeline_createpost' => [
        'classname' => 'format_timeline\api\posts',
        'classpath' => 'course/format/timeline/classes/api/posts.php',
        'methodname' => 'create',
        'description' => 'Creates a new post',
        'type' => 'write',
        'ajax' => true
    ],
    'format_timeline_deletepost' => [
        'classname' => 'format_timeline\api\posts',
        'classpath' => 'course/format/timeline/classes/api/posts.php',
        'methodname' => 'delete',
        'description' => 'Deletes a post',
        'type' => 'write',
        'ajax' => true
    ]
];