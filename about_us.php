<?php
require_once(__DIR__ . '/../../config.php');

$PAGE->set_url(new moodle_url('/theme/easylaws/about_us.php'));
$PAGE->set_context(context_system::instance());
$PAGE->set_title('About Us'); 
$PAGE->set_pagelayout('base'); 
$primary = new core\navigation\output\primary($PAGE);
$renderer = $PAGE->get_renderer('core');
$primarymenu = $primary->export_for_template($renderer);

$header = $PAGE->activityheader;
$headercontent = $header->export_for_template($renderer);


echo $OUTPUT->header();

$templatecontext = [
    'sitename' => format_string($SITE->shortname, true, ['context' => context_course::instance(SITEID), "escape" => false]),
    'output' => $OUTPUT,
    'hasblocks' => 0,
    'mobileprimarynav' => $primarymenu['mobileprimarynav'],
    'usermenu' => $primarymenu['user'],
    'langmenu' => $primarymenu['lang'],
    'hasregionmainsettingsmenu' => 0,
    'overflow' => '',
    'headercontent' => $headercontent,
    'addblockbutton' => 0
];
 
echo $OUTPUT->render_from_template('theme_easylaws/aboutus', $templatecontext);

echo $OUTPUT->footer();
