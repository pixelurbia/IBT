<?php
/*-----------------------------------------------------------------------------------*/
/*	Word Rotate
/*-----------------------------------------------------------------------------------*/

function word_rotate( $atts, $content = null ) {  

	extract(shortcode_atts( array(
							'style' => '',
							), $atts));  
							
	$content = explode(", ", $content);		
	
	$words = "";
	foreach ($content as $contents) {
	
		$words .= "<span class='word'>".$contents."</span>";
    }
    
    $word_count = count($content);
    		 
	$words .= "<span class='word'>".$content[0]."</span>";						
    return "<span class='word-rotate' data-word-count='".$word_count."'>
    			<span class='word-rotate-items'>
    				".$words."
    			</span>
    		</span>";  
}
add_shortcode("word_rotate", "word_rotate");

?>