<?php
/**
 * Main library file for the ParentPortal local plugin.
 *
 * Contains core functions for navigation, data retrieval, and helper methods.
 *
 * @package    local_parentportal
 * @copyright  2024 John Mulama <johnmulama001@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     John Mulama - Senior Software Engineer (johnmulama001@gmail.com)
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Extends the global navigation with ParentPortal links.
 *
 * This function is called by Moodle when building the navigation structure.
 *
 * @param navigation_node $navigation The navigation node to extend.
 * @param context         $context    The current context.
 */
function local_parentportal_extend_navigation(navigation_node $navigation, context $context) {
    global $CFG, $USER, $DB;

    // Only add navigation for authenticated users who are parents or managers.
    if (!isloggedin() || isguestuser()) {
        return;
    }

    // Check if ParentPortal is globally enabled.
    if (!get_config('local_parentportal', 'enableparentportal')) {
        return;
    }

    // Check if the current user has the 'local/parentportal:view' capability.
    if (has_capability('local/parentportal:view', context_system::instance(), $USER->id)) {
        // Check if the user is linked to any student as a parent.
        $haschildren = $DB->get_record('local_parentportal_associations', ['parentid' => $USER->id]);

        if ($haschildren || has_capability('local/parentportal:manageaccess', context_system::instance())) {
            $url = new moodle_url('/local/parentportal/dashboard.php');
            $node = navigation_node::create(
                get_string('pluginname', 'local_parentportal'),
                $url,
                navigation_node::TYPE_CUSTOM,
                'parentportal',
                'parentportal',
                new pix_icon('i/grades', get_string('pluginname', 'local_parentportal'))
            );
            $navigation->add_node($node);
        }
    }

    // Add admin/teacher management link if user has capability.
    if (has_capability('local/parentportal:manageaccess', context_system::instance(), $USER->id)) {
        $url = new moodle_url('/local/parentportal/manage.php');
        $node = navigation_node::create(
            get_string('manageparentstudentassociations', 'local_parentportal'),
            $url,
            navigation_node::TYPE_CUSTOM,
            'parentportalmanage',
            'parentportalmanage',
            new pix_icon('i/users', get_string('manageparentstudentassociations', 'local_parentportal'))
        );
        // Add under 'Site administration' if the user is an admin, or to custom menu otherwise if preferred.
        // For simplicity, let's just make sure it's accessible.
        // Adding to settings block is more conventional for local plugins.
        // The admin_externalpage in settings.php already handles admin menu.
    }
}

/**
 * Extends the settings navigation with ParentPortal links.
 *
 * @param settings_navigation $settingsnav The settings navigation.
 * @param context             $context     The current context.
 */
function local_parentportal_extend_settings_navigation(settings_navigation $settingsnav, context $context) {
    global $CFG, $USER;

    if (!isloggedin() || isguestuser()) {
        return;
    }
    
    // Check if ParentPortal is globally enabled.
    if (!get_config('local_parentportal', 'enableparentportal')) {
        return;
    }

    // Only show 