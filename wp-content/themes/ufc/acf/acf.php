<?php

// Add fields
foreach(glob(get_template_directory() . '/acf/fields/*.php') as $file) {
    require $file;
}

?>