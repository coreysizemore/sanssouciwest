<?php

	$homes = get_field('available_homes','options');
						
	if( $homes ):
		
		echo '<div class="homes_wrapper">';
		
		echo '<div class="homes_item">';
			
			echo '<span class="lot_number">Lot Number</span><span class="sale_price">Sale Price</span><span class="lot_rent">Lot Rent</span><span class="style">Style</span><span class="contact_information">Contact Information</span></div>';
									
		foreach( $homes as $home ):

			echo '<div class="homes_item">';
			
			echo '<span class="lot_number">';
			
			echo $home['lot_number'];
			
			echo '</span><span class="sale_price">';
			
			echo $home['sale_price'];
			
			echo '</span><span class="lot_rent">';
			
			echo $home['lot_rent'];
			
			echo '</span><span class="style">';
			
			echo $home['style'];
			
			echo '</span><span class="contact_information">';
			
			echo $home['contact_information'];
			
			echo '</span>';

			echo '</div>';
																		
		endforeach;
		
		echo '</div>';
									
	endif;	

?>