<?php
//If no search string is passed, then we can't search 
	$drink = $_REQUEST['drink']; 
	if (empty($drink)) { $drink = 'TEA'; } else  {    //Remove whitespace from beginning & end of passed search.    
		$search = trim($drink);
		switch($search) {      
			case "TEA" :         
				$result = "<h3>Hot Tea</h3><p>Boil water. ".
							"Pour over tea leaves. Steep five minutes. ".                   
							"Strain and serve</p>";         
			break;      
			case "APPLETINI" :         
				$result = "<h3>Appletini</h3><p>Mix 1 oz vodka and 1/2 oz Sour Apple Pucker or ". 
							"apple schnapps in a glass filled with ice. Strain into martini glass. ".                   
							"Garnish with an apple slice or raisin.</p>";         
			break;      
			case "NONCHAMP" :         
				$result = "<h3>Non-Alcoholic Champagne</h3><p>Mix 32 ounces club soda".                   
							" with 12 ounces frozen white grape juice concentrate.</p>";         
			break;      
			case "SWMPMARGARITA" :         
				$result = "<h3>Swamp Margarita</h3>".                   
							"<p>Mix 1 1/2 ounce good quality tequila, 3/4 ounce Cointreau, ".                   
							"3/4 ounce Grand Marnier, 1/2 ounce lime juice, and 2 ounces sour mix. Chill an hour. ".                   
							"Fill bottom of tall glass with several green olives and a few drops olive juice. ".                   
							"Pour margarita over the olives and let sit for ten minutes. ".                   
							"Strain and serve with a few olives stuffed with pimento on a toothpick.</p>";         
			break;
			case "LEMON" :         
				$result = "<h3>Lemon Drop</h3><p>Mix 1 ounce lemon vodka ".                   
				"with 1 ounce lemon juice and 1 teaspoon sugar. Shake with ice, ".                   
				"strain and serve.</p>";         
			break;      
			default :         
				$result = "No recipes found";         
			break;      
		} 
    } 
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
	<head> 
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		<title>Drinks</title> 
		<link rel="stylesheet" href="drink.css" type="text/css" media="screen" /> 
	</head> 
    <body> 
    	<h1>Drinks</h1>
    	<div id="drinkblock">      
    		<form action="" id="myform" method="get">        
    			<fieldset legend="drinks">          
	    			<label for="drink">Select drink:</label> 
	    			<select name="drink" id="drink">            
	    				<option value="TEA" <?php if ($drink == 'TEA') printf('selected="selected"'); ?>> Hot Tea</option>
	            		<option value="APPLETINI" <?php if ($drink == 'APPLETINI') printf('selected="selected"'); ?>> Appletini</option>
	           			<option value="NONCHAMP" <?php if ($drink == 'NONCHAMP') printf('selected="selected"'); ?>> Non-alcoholic Champagne</option>
	            		<option value="SWMPMARGARITA" <?php if ($drink == 'SWMPMARGARITA') printf('selected="selected"'); ?>> Swamp Margarita</option>
	            		<option value="LEMON" <?php if ($drink == 'LEMON') printf('selected="selected"'); ?>> Lemon Drop</option>          
	            	</select> 
	            	<input type="submit" value="Get Recipe" />        
            	</fieldset>      
            </form>   
        </div>
    	<div id="drinkblock">
    		<?php echo $result; ?>    
    	</div> 
    </body> 
</html>