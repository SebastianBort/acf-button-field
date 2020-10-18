<?php
class ACF_Button_Field extends acf_field {
	
    const field_options = [
        [
            'label'			=> 'Tekst przycisku',
            'instructions'	=> 'Tekst znajdujący się na przycisku',
            'type'			=> 'text',
            'name'			=> 'tekst_przycisku',
        ],        
        [
            'label'			=> 'Link przycisku',
            'instructions'	=> 'Adres na który ma zostać przekierowany użytkownik po kliknięciu',
            'type'			=> 'text',
            'name'			=> 'link_przycisku',
        ],
        [
            'label'			=> 'Otwarcie linku w',
            'instructions'	=> 'Określa czy link ma się otworzyć w obecnej czy w nowej karcie',
            'type'			=> 'radio',
            'name'			=> 'target_przycisku',
            'choices' => [
                '_blank' => 'Otwórz link w nowym oknie',
                '' => 'Otwórz link w obecnym oknie',
            ],
            'required' => 0,
            'default_value' => '',
        ],             
        [
            'label'			=> 'Położenie przycisku',
            'instructions'	=> 'Wyrównanie przycisku',
            'type'			=> 'select',
            'name'			=> 'link_polozenie',
            'choices' => [
                'left' => 'Do lewej',
                'center' => 'Wyśrodkuj',
                'right' => 'Do prawej',
            ],
            'required' => 0,
            'default_value' => 'left',
        ]        
    ];    
    
	function __construct() {

    	$this->name = 'field_button';
    	$this->label = 'Przycisk z linkiem'; 
    	$this->category = 'layout';
    
      	parent::__construct();     	
	}
	
	function render_field_settings($field) {

        if(!empty(self::field_options)) {
            foreach(self::field_options AS $current_field) {
                    acf_render_field_setting($field, $current_field);
            }
        }
	}  	

	function render_field($field) {
    
          if(empty($field['tekst_przycisku'])) {
                $field['tekst_przycisku'] = $field['label'];
          }
		
          echo '<div style="text-align:'.$field['link_polozenie'].';">
                      <a href="'.$field['link_przycisku'].'" target="'.$field['target_przycisku'].'" class="button button-primary button-large">'.$field['tekst_przycisku'].'</a>
                </div>';
	}
}
?>