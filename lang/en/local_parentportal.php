<?php
/**
 * English language strings for the ParentPortal local plugin.
 *
 * @package    local_parentportal
 * @copyright  2024 John Mulama <johnmulama001@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     John Mulama - Senior Software Engineer (johnmulama001@gmail.com)
 */

$string['pluginname'] = 'ParentPortal';
$string['parentportal_settings'] = 'ParentPortal Settings';
$string['parentportal_description'] = 'A Moodle plugin for secure parent/guardian access to student academic progress.';
$string['local/parentportal:view'] = 'View ParentPortal dashboard';
$string['local/parentportal:viewgrades'] = 'Allows parent to view student grades';
$string['local/parentportal:viewattendance'] = 'Allows parent to view student attendance';
$string['local/parentportal:receivenotifications'] = 'Allows parent to receive student performance alerts';
$string['local/parentportal:manageaccess'] = 'Allows teachers/admins to assign children to parent accounts';

$string['enableparentportal'] = 'Enable ParentPortal';
$string['enableparentportal_help'] = 'Globally enable or disable the ParentPortal plugin.';
$string['notificationsettings'] = 'Notification Settings';
$string['enablenotifications'] = 'Enable Notifications';
$string['enablenotifications_help'] = 'Enable or disable email and SMS notifications for parents.';
$string['notificationfrequency'] = 'Notification Frequency';
$string['notificationfrequency_help'] = 'How often parents should receive notifications (e.g., daily, weekly). (Currently not implemented, needs cron job.)';
$string['maxstudentsperparent'] = 'Maximum Students per Parent';
$string['maxstudentsperparent_help'] = 'Set the maximum number of students a single parent account can be linked to.';
$string['courselevelsettings'] = 'Course-Level Parent View Settings';
$string['courseparentview'] = 'Enable Parent View for this Course';
$string['courseparentview_help'] = 'Allow parents to view information for their children enrolled in this course.';
$string['visiblemodules'] = 'Visible Modules to Parents';
$string['visiblemodules_help'] = 'Select which Moodle modules (e.g., Assignment, Quiz) will be visible to parents in this course.';

$string['assignparents'] = 'Assign Parents to Students';
$string['assignparents_description'] = 'Manage the linkage between parent and student accounts.';
$string['student'] = 'Student';
$string['parent'] = 'Parent';
$string['assign'] = 'Assign';
$string['unassign'] = 'Unassign';
$string['parentassignedsuccess'] = 'Parent successfully assigned to student.';
$string['parentunassignedsuccess'] = 'Parent successfully unassigned from student.';
$string['errorassignparent'] = 'Error assigning parent to student.';
$string['errorunassignparent'] = 'Error unassigning parent from student.';
$string['noparentsfound'] = 'No parent accounts found.';
$string['nostudentsfound'] = 'No student accounts found.';

$string['dashboard'] = 'Parent Dashboard';
$string['mychildren'] = 'My Children';
$string['selectchild'] = 'Select a child to view their progress:';
$string['grades'] = 'Grades';
$string['attendance'] = 'Attendance';
$string['upcomingdeadlines'] = 'Upcoming Deadlines';
$string['noitemsfound'] = 'No items found.';
$string['course'] = 'Course';
$string['activity'] = 'Activity';
$string['grade'] = 'Grade';
$string['feedback'] = 'Feedback';
$string['date'] = 'Date';
$string['status'] = 'Status';
$string['dueto'] = 'Due To';
$string['overdue'] = 'Overdue';
$string['reportdownload'] = 'Download Report (PDF)';

$string['notificationsubjectgrade'] = 'Grade Alert: {$a->studentname} - {$a->gradetitle}';
$string['notificationsubjectattendance'] = 'Attendance Alert: {$a->studentname} - Missed Session';
$string['notificationbodyshort'] = 'Dear Parent, <br/><br/>This is an alert regarding your child, {$a->studentname}.<br/>{$a->message}<br/><br/>Sincerely,<br/>The Moodle Team';

$string['developer'] = 'Developed by John Mulama - Senior Software Engineer';
$string['developer_email'] = 'johnmulama001@gmail.com';
$string['pluginadministration'] = 'ParentPortal Administration';
$string['manageparentstudentassociations'] = 'Manage Parent-Student Associations';

$string['reportdownloadfailed'] = 'Failed to generate PDF report.';
$string['invalidparentstudentassociation'] = 'Invalid parent-student association request.';
