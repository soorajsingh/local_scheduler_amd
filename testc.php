<?php
require('../../config.php');
global $CFG,$DB;
require_login();
$PAGE->set_context(context_system::instance());
$PAGE->set_title('Register For Courses');
$PAGE->set_heading('Register For Courses');
$PAGE->set_pagelayout('standard');

$PAGE->set_url(new moodle_url('/local/scheduler/testc.php'));
$PAGE->requires->js_call_amd('local_scheduler/scheduler', 'init');
echo $OUTPUT->header();


echo $OUTPUT->footer();
?>