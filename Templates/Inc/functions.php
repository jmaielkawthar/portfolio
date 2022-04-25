<?php

function ce($type, $config = []) {
    $template_filename = 'ContentElements/ce-' . $type . '.php';
    
    if (file_exists($template_filename)) {
        
        // provide variables for template
        foreach ($config as $var => $value) {
            ${$var} = $value;
        }
        
        // include template
        include($template_filename);
        
    } else {
        echo '<div style="color: red; border: 1px solid red; padding: 10px 20px;">Content element template not found! (' . $type . ')</div>';
    }
}

function currentPageActive($filenames = []) {
    foreach ($filenames as $filename) {
        if (strpos($_SERVER['SCRIPT_NAME'], $filename) !== false) {
            echo 'active';
            break;
        }
    }
}