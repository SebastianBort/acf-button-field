<?php    
/*
Plugin Name: Advanced Custom Fields: Button
Description: Dodaje możliwość dodania przycisku z własnym linkiem.
Version: 1.0.0
Author: Sebastian Bort
*/

add_action('acf/include_field_types', function() {
        require_once(__DIR__ . '/acf-button-class.php');
        new ACF_Button_Field();
}); 

?>