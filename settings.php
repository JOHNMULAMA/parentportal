<?php
/**
 * Admin settings for the ParentPortal local plugin.
 *
 * @package    local_parentportal
 * @copyright  2024 John Mulama <johnmulama001@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     John Mulama - Senior Software Engineer (johnmulama001@gmail.com)
 */

defined('MOODLE_INTERNAL') || die();

if (is_siteadmin()) {

    $settings = new admin_settingpage('local_parentportal_settings',
                                      get_string('parentportal_settings', 'local_parentportal'));
    $settings->add(new admin_setting_heading('local_parentportal_mainheading',
                                           get_string('parentportal_settings', 'local_parentportal'),
                                           get_string('parentportal_description', 'local_parentportal')));

    // Global Settings
    $settings->add(new admin_setting_configcheckbox('local_parentportal/enableparentportal',
                                                  get_string('enableparentportal', 'local_parentportal'),
                                                  get_string('enableparentportal_help', 'local_parentportal'),
                                                  0,
                                                  true,
                                                  false));

    // Notification Settings
    $settings->add(new admin_setting_heading('local_parentportal_notificationheading',
                                           get_string('notificationsettings', 'local_parentportal'),
                                           ''));
    $settings->add(new admin_setting_configcheckbox('local_parentportal/enablenotifications',
                                                  get_string('enablenotifications', 'local_parentportal'),
                                                  get_string('enablenotifications_help', 'local_parentportal'),
                                                  0,
                                                  true,
                                                  false));

    $settings->add(new admin_setting_configselect('local_parentportal/notificationfrequency',
                                                get_string('notificationfrequency', 'local_parentportal'),
                                                get_string('notificationfrequency_help', 'local_parentportal'),
                                                'daily',
                                                [
                                                    'daily' => 'Daily',
                                                    'weekly' => 'Weekly',
                                                    'disabled' => 'Disabled'
                                                ]));

    $settings->add(new admin_setting_configtext('local_parentportal/maxstudentsperparent',
                                                get_string('maxstudentsperparent', 'local_parentportal'),
                                                get_string('maxstudentsperparent_help', 'local_parentportal'),
                                                5,
                                                PARAM_INT));

    $ADMIN->add('localplugins', $settings);

    // Course-level settings are handled via course_modinfo and course settings form, not global admin settings.
    // Here we'll just add a link to the association management page.
    $ADMIN->add('localplugins', new admin_category('local_parentportal_administration',
                                                  get_string('pluginadministration', 'local_parentportal')));
    $ADMIN->add('local_parentportal_administration', new admin_externalpage('local_parentportal_manageassociations',
                                                                            get_string('manageparentstudentassociations', 'local_parentportal'),
                                                                            new moodle_url('/local/parentportal/manage.php'),
                                                                            'local/parentportal:manageaccess'));
}

// Add course-level settings to course editing form
function local_parentportal_extend_course_form(\$mform) {
    global $CFG, $DB;

    if (empty($mform->current->id)) {
        return;
    }

    // Check if the current user can manage parent access.
    if (!has_capability('local/parentportal:manageaccess', context_system::instance())) {
        return;
    }

    $mform->addElement('header', 'local_parentportal_courseheader', get_string('courselevelsettings', 'local_parentportal'));

    $mform->addElement('checkbox', 'local_parentportal_courseparentview', get_string('courseparentview', 'local_parentportal'));
    $mform->setDefault('local_parentportal_courseparentview', get_config('local_parentportal', 'courseparentview_' . $mform->current->id));
    $mform->addHelpButton('local_parentportal_courseparentview', 'courseparentview', 'local_parentportal');

    // Get all modules for the current course
    $visiblemodulesoptions = [];
    $modules = $DB->get_records('modules', [], '', 'id, name');
    foreach ($modules as $module) {
        $visiblemodulesoptions[$module->name] = get_string('modulenameplural', $module->name);
    }

    $currentvisiblestring = get_config('local_parentportal', 'visiblemodules_' . $mform->current->id);
    $currentvisible = $currentvisiblestring ? explode(',', $currentvisiblestring) : [];

    $mform->addElement('select_multiple', 'local_parentportal_visiblemodules',
                       get_string('visiblemodules', 'local_parentportal'),
                       $visiblemodulesoptions);
    $mform->setDefault('local_parentportal_visiblemodules', $currentvisible);
    $mform->addHelpButton('local_parentportal_visiblemodules', 'visiblemodules', 'local_parentportal');
}

// Save course-level settings
function local_parentportal_process_course_form_data(\$course) {
    global $CFG, $DB;

    if (!has_capability('local/parentportal:manageaccess', context_system::instance())) {
        return;
    }

    $data = (object)$course;

    // Save enable parent view checkbox
    $enableview = isset($data->local_parentportal_courseparentview) ? 1 : 0;
    set_config('courseparentview_' . $course->id, $enableview, 'local_parentportal');

    // Save visible modules
    $visiblemodules = isset($data->local_parentportal_visiblemodules) ? implode(',', $data->local_parentportal_visiblemodules) : '';
    set_config('visiblemodules_' . $course->id, $visiblemodules, 'local_parentportal');
}
