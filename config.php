<?php

// Every file should have GPL and copyright in the header.

// This line protects the file from being accessed by a URL directly.                                                               
defined('MOODLE_INTERNAL') || die();

// $THEME is defined before this page is included and we can define settings by adding properties to this global object.            
$CFG->slasharguments = true;
// The first setting we need is the name of the theme. This should be the last part of the component name, and the same              
// as the directory name for our theme.                                                                                             
$THEME->name = 'easylaws'; // Set your theme name here. Make sure it matches your theme folder name.                                                                  

// This setting lists the style sheets we want to include in our theme. We will use SCSS for styling instead of CSS.               
$THEME->sheets = ['style']; // Leave this empty or add specific SCSS files later if needed.                                                                                                                

// This setting is for TinyMCE editor styles. We won't use this as we're using Atto editor by default. 
$THEME->editor_sheets = [];

$THEME->scss = function($theme) {
    return theme_easylaws_get_main_scss_content($theme);
};

// This is a critical setting. We want to inherit from theme_boost because it provides a great starting point for SCSS bootstrap4   
// themes.                                                                                                                      
$THEME->parents = ['boost']; // Inherit from the Boost theme.                                                                  

// Disable dock for this theme. Boost does not support it, and neither will we. 
$THEME->enable_dock = false;

// We don't need to load specific CSS for YUI JS in Boost-based themes. 
$THEME->yuicssmodules = array();

// This allows the theme to override other renderers if needed. 
$THEME->rendererfactory = 'theme_overridden_renderer_factory';

// Specify required blocks. Boost does not require any specific blocks, so we leave this empty.
$THEME->requiredblocks = '';

// This feature disables the "Add a block" block, which is unnecessary in Boost-based themes. 
$THEME->addblockposition = BLOCK_ADDBLOCK_POSITION_FLATNAV;

// Allow editing switch to be displayed in the theme. 
$THEME->haseditswitch = true;

$THEME->csspostprocess = 'theme_easylaws_process_css';  // Optional: Custom CSS processing function

// Make sure the theme is visible in the theme selector.
$THEME->hidefromselector = false;
// Add CSS for particles effect
$THEME->sheets[] = 'mouseeffect';  // Make sure the CSS file is included

// Add JavaScript for particles effect
$THEME->javascripts_footer[] = 'mouseeffect';  // Ensure the JS file is included in the footer

$THEME->javascripts_footer[] = 'particles';

$THEME->javascripts_footer[] = 'animations';

$THEME->javascripts_footer[] = 'illustrations';

$THEME->layouts = [
    // The site home page.
    'frontpage' => array(
        'file' => 'frontpage.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
        'options' => array('nonavbar' => true,'nofooter'=> true),
    ),
    'aboutus' => array(
        'file' => 'about_us.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
        'options' => array('nonavbar' => true,'nofooter'=> true),
    ),
];
