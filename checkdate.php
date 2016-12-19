
<!DOCTYPE html>
 <table id="room-table">
	<tbody>
 
	<?php

	while( $row = mysqli_fetch_assoc($result) ) {
					$id          = $row['id'];
					$room_nr = $row['room_nr'];
					$type        = $row['type'];
					$price       = $row['price'];
					$text        = $row['text'];
					$pic			=$row['pic'];
					
					echo"
				
					 <tr>
						<td class=''><input type='radio' name='room_nr' value='$room_nr'></td>
						<td class='roompic'><img src='$pic' height='100px'/></td>
						<td class='roomtype-data'>
							<strong>$type</strong>
							<p>$text</p>
						</td>
						<td class='price-data'>$price kr/natt</td>
						
					</tr>
					<!-- Vissar att all info kommer in från DB -->
					<!-- $id, $room_nr,  $type, $price, $text -->
					";
					
	}	

	?>
	
	</tbody>
</table>
						

