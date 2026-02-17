<?php
/**
 * Capabilities for the ParentPortal local plugin.
 *
 * @package    local_parentportal
 * @copyright  2024 John Mulama <johnmulama001@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     John Mulama - Senior Software Engineer (johnmulama001@gmail.com)
 */

defined('MOODLE_INTERNAL') || die();

$capabilities = array(

    'local/parentportal:view' => array(
        'captype' => 'read',
        'contextlevel' => CONTEXT_SYSTEM,
        'archetypes' => array(
            'user' => CAP_ALLOW
        ),
        'description' => 'Allows users (parents) to view the ParentPortal dashboard.'
    ),

    'local/parentportal:viewgrades' => array(
        'captype' => 'read',
        'contextlevel' => CONTEXT_USER,
        'archetypes' => array(
            'user' => CAP_ALLOW
        ),
        'description' => 'Allows parents to view student grades in courses they are linked to.'
    ),

    'local/parentportal:viewattendance' => array(
        'captype' => 'read',
        'contextlevel' => CONTEXT_USER,
        'archetypes' => array(
            'user' => CAP_ALLOW
        ),
        'description' => 'Allows parents to view student attendance records.'
    ),

    'local/parentportal:receivenotifications' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_USER,
        'archetypes' => array(
            'user' => CAP_ALLOW
        ),
        'description' => 'Allows parents to receive email/SMS notifications based on student performance.'
    ),

    'local/parentportal:manageaccess' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_SYSTEM,
        'archetypes' => array(
            'editingteacher' => CAP_ALLOW,
            'manager' => CAP_ALLOW
        ),
        'description' => 'Allows teachers and administrators to assign/unassign children to parent accounts.'
    ),
);
