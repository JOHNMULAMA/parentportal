<?php
/**
 * Upgrade script for local_parentportal
 *
 * @package    local_parentportal
 * @copyright  2026 John Mulama <johnmulama001@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     John Mulama - Senior Software Engineer (johnmulama001@gmail.com)
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Upgrade the local_parentportal plugin.
 *
 * @param int $oldversion The old version of the plugin
 * @return bool
 */
function xmldb_local_parentportal_upgrade($oldversion) {
    global $DB;
    $dbman = $DB->get_manager();

    // Example upgrade step:
    // if ($oldversion < 2026021700) {
    //     // Upgrade code here
    //     upgrade_plugin_savepoint(true, 2026021700, 'local', 'parentportal');
    // }

    return true;
}
