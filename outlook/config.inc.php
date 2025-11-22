<?php
// Configuration settings for the Outlook theme
$config = array();

// Theme name
$config['name'] = 'Outlook Theme';

// Theme version
$config['version'] = '1.0.0';

// Paths
$config['path'] = array(
    'css' => 'skins/outlook/css/',
    'js' => 'skins/outlook/js/',
    'templates' => 'skins/outlook/templates/',
);

// Enable or disable specific features
$config['features'] = array(
    'responsive' => true,
    'custom_fonts' => true,
);

// Additional settings can be added here

return $config;
?>