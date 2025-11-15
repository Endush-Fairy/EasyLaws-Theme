<?php
// Every file should have GPL and copyright in the header

// This line protects the file from being accessed by a URL directly.                                                               
defined('MOODLE_INTERNAL') || die();                                                                                                 
                                                                                                                                    
// This is the version of the plugin.                                                                                               
$plugin->version = 2025012800; // Set your theme version here (YearMonthDayXX).                                                                                                    
    
// This is the version of Moodle this plugin requires.                                                                              
$plugin->requires = 2022041900; // Minimum Moodle version required (for example, Moodle 4.0).                                                                                                   
    
// This is the component name of the plugin - it always starts with 'theme_'                                                         
// for themes and should be the same as the name of the folder.                                                                     
$plugin->component = 'theme_easylaws'; // The name of your theme component.                                                                                                 
    
// This is a list of plugins, this plugin depends on (and their versions).                                                          
$plugin->dependencies = [                                                                                                           
    'theme_boost' => 2022041900 // Your theme depends on Boost theme, set its version here.                                                                                                   
];
