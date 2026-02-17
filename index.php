<?php
/**
 * Main page for local_parentportal
 *
 * @package    local_parentportal
 * @copyright  2026 John Mulama <johnmulama001@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     John Mulama - Senior Software Engineer (johnmulama001@gmail.com)
 */

require_once('../../config.php');
require_once($CFG->libdir.'/adminlib.php');

require_login();
$context = context_system::instance();
require_capability('local/parentportal:view', $context);

$PAGE->set_context($context);
$PAGE->set_url('/local/parentportal/index.php');
$PAGE->set_title(get_string('pluginname', 'local_parentportal'));
$PAGE->set_heading(get_string('pluginname', 'local_parentportal'));
$PAGE->set_pagelayout('admin');

echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('pluginname', 'local_parentportal'));

echo html_writer::tag('p', get_string('pluginname_desc', 'local_parentportal'));

echo $OUTPUT->footer();
