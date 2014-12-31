<?php require_once("./recipe.php"); ?>
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