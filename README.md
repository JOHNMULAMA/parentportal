# local_parentportal

## Description

ParentPortal is a Moodle plugin designed to give parents and guardians secure, read-only access to their child’s academic progress. The plugin enables parents to view grades, assignments, quizzes, attendance, upcoming deadlines, and engagement metrics without needing teacher or admin permissions.

Features

Parent Dashboard

View student grades per course, assignments, and quizzes

Track attendance and late submissions

See upcoming deadlines and course events

Analytics & Reports

Summary charts of student performance over time

Highlight areas where the student is struggling

Downloadable PDF reports for meetings or record-keeping

Notifications & Alerts

Email alerts for missed deadlines, low grades, or attendance issues

Optional SMS notifications (via integration with third-party services)

Secure Access

Parents only see their assigned children

Teachers can control which courses and modules are visible to parents

Role-based access control ensures security and privacy

Teacher/Admin Controls

Assign parent accounts to students

Enable or disable modules for parent visibility

Customize notification frequency and content

Multi-Child Support

Parents with multiple children can access all student accounts via a single login

Database Tables

parentportal_assignments

Tracks student grades and assignments visible to parents

Fields: id, studentid, courseid, assignmentid, grade, feedback

parentportal_attendance

Tracks attendance records visible to parents

Fields: id, studentid, courseid, sessiondate, status

parentportal_notifications

Stores notification logs

Fields: id, parentid, studentid, courseid, type, message, senttime

Capabilities

local/parentportal:viewgrades — Allows parent to view grades

local/parentportal:viewattendance — Allows parent to view attendance

local/parentportal:receivenotifications — Allows parent to receive alerts

local/parentportal:manageaccess — Allows teachers/admins to assign children to parents

Admin Settings

Global Settings

Enable/disable parent portal

Notification settings (email/SMS)

Maximum students per parent account

Course-Level Settings

Enable parent view per course

Select modules visible to parents

User Interactions

Parent Experience

Login to parent portal dashboard

View grades, assignments, attendance

Download PDF reports

Receive email/SMS notifications

Teacher/Admin Experience

Assign children to parent accounts

Control course/module visibility

Customize notifications and reports

Backup & Restore Support

Full backup/restore of portal configuration

Preserve parent-child assignments

Maintain notification history

Web Services Integration

Optional API endpoints for:

External reporting systems

SMS gateway integration

Security Features

Role-based access to prevent unauthorized viewing

Data validation and sanitization

Encrypted storage for sensitive information

Performance Optimization

Cached dashboards for faster loading

Lazy-loading reports for large classes

Cron-based notification sending

PHPUnit Tests

Coverage for:

Access control enforcement

Notification sending

Dashboard data accuracy

Backup and restore functionality

## Installation

1. Copy this directory to `local/parentportal` in your Moodle installation
2. Visit Site Administration > Notifications to complete the installation
3. Configure the plugin at Site Administration > Plugins

## Features

- Auto-generated Moodle plugin
- Secure and follows Moodle coding standards
- Ready for production use

## Requirements

- Moodle 4.5 or higher
- PHP 7.4 or higher

## License

GPL v3 or later

## Developer

**John Mulama**  
*Senior Software Engineer*  
Email: johnmulama001@gmail.com

For custom Moodle plugin development, contact: johnmulama001@gmail.com
