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
 * Strings for component 'enrol_payfast', language 'en'.
 *
 * @package    enrol_payfast
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['assignrole'] = 'Assign role';
$string['businessemail'] = 'PayFast business email';
$string['businessemail_desc'] = 'The email address of your business PayFast account';
$string['cost'] = 'Enrol cost';
$string['costerror'] = 'The enrolment cost is not numeric';
$string['costorkey'] = 'Please choose one of the following methods of enrolment.';
$string['currency'] = 'Currency';
$string['defaultrole'] = 'Default role assignment';
$string['defaultrole_desc'] = 'Select role which should be assigned to users during PayFast enrolments';
$string['enrolenddate'] = 'End date';
$string['enrolenddate_help'] = 'If enabled, users can be enrolled until this date only.';
$string['enrolenddaterror'] = 'Enrolment end date cannot be earlier than start date';
$string['enrolperiod'] = 'Enrolment duration';
$string['enrolperiod_desc'] = 'Default length of time that the enrolment is valid. If set to zero, the enrolment duration will be unlimited by default.';
$string['enrolperiod_help'] = 'Length of time that the enrolment is valid, starting with the moment the user is enrolled. If disabled, the enrolment duration will be unlimited.';
$string['enrolstartdate'] = 'Start date';
$string['enrolstartdate_help'] = 'If enabled, users can be enrolled from this date onward only.';
$string['expiredaction'] = 'Enrolment expiration action';
$string['expiredaction_help'] = 'Select action to carry out when user enrolment expires. Please note that some user data and settings are purged from course during course unenrolment.';
$string['mailadmins'] = 'Notify admin';
$string['mailstudents'] = 'Notify students';
$string['mailteachers'] = 'Notify teachers';
$string['messageprovider:payfast_enrolment'] = 'PayFast enrolment messages';
$string['merchant_id'] = 'PayFast Merchant ID';
$string['merchant_id_desc'] = 'The Merchant ID provided by PayFast';
$string['merchant_key'] = 'PayFast Merchant Key';
$string['merchant_key_desc'] = 'The Merchant Key provided by PayFast';
$string['merchant_passphrase'] = 'PayFast Secure Passphrase';
$string['merchant_passphrase_desc'] = 'DO NOT SET THIS UNLESS YOU HAVE SET IT ON THE PAYFAST WEBSITE';
$string['nocost'] = 'There is no cost associated with enrolling in this course!';
$string['payfast:config'] = 'Configure PayFast enrol instances';
$string['payfast:manage'] = 'Manage enrolled users';
$string['payfast:unenrol'] = 'Unenrol users from course';
$string['payfast:unenrolself'] = 'Unenrol self from the course';
$string['payfast_live'] = 'Live Mode';
$string['payfast_test'] = 'Sandbox Mode';
$string['payfast_mode'] = 'PayFast Mode';
$string['payfast_mode_desc'] = 'Testing or Live Mode';
$string['payfast_debug'] = 'Debug Mode';
$string['payfast_debug_desc'] = 'Log ITN callbacks for debugging';
$string['payfastaccepted'] = 'PayFast payments accepted';
$string['pluginname'] = 'PayFast';
$string['pluginname_desc'] = 'The PayFast module allows you to set up paid courses.  If the cost for any course is zero, then students are not asked to pay for entry.  There is a site-wide cost that you set here as a default for the whole site and then a course setting that you can set for each course individually. The course cost overrides the site cost.';
$string['sendpaymentbutton'] = 'Send payment via PayFast';
$string['status'] = 'Allow PayFast enrolments';
$string['status_desc'] = 'Allow users to use PayFast to enrol into a course by default.';
$string['unenrolselfconfirm'] = 'Do you really want to unenrol yourself from course "{$a}"?';
