<!DOCTYPE html>
<html>
<head>
	<title>Check Turkish republic identification number</title>
	<style type="text/css">
		*{
			font-family: arial;
			font-size: 15px;
		}
	</style>
</head>
<body>


 <?php

/*
	sinan karayaman
*/
  
    function trin_check($trin){

        $Tek = 0;

        $Cift= 0;

        if($trin[0]==0)        
        	return false;

        if(strlen($trin)!=11)
        	return false;

        for($i=0; $i<10; $i++){             
        	if($i%2==0) 
        		$Tek+= $trin[$i]; 
        	else $Cift+= $trin[$i];      
        }

        if(($Tek+$Cift)%10!=$trin[10]) 
        	return false;      

        if((($Tek*7)-($Cift-$trin[9]))%10!=$trin[9]) 
        	return false;


        return true;     

    } 

?>

	<center><h1>Check Turkish republic identification number</h1>
	<form method="post" name="trin">
		
		<table style="width: 500px; border: white 1px ridge; padding: 10px; background: #DCF3FF; color: #E8940C; border-radius: 5px; border: 1px solid #0075B2;" border="0">
			<tbody>
				<tr>
					<td><center style="color: #333; font-weight: bold;"></center></td>
				</tr>
				<tr>
					<td><center><input type="text" maxlength="11" name="trin" placeholder="Check Turkish republic identification Number" style="padding: 5px;  border-radius: 5px; border: 1px solid #666; width: 97%;" /></center></td>
				</tr>
			</tbody>
		</table>

	</form>

<?php
    if(isset($_POST['trin']))
    {

    	 $trin = ($_POST['trin']);

        if(trin_check($trin)) 
        	$uyari = '<h1>it is true</h1>'; 
        else 
        	$uyari = '<h1>it is false</h1>';

        echo '<br /><br />'.$uyari;

    }
?>
</center>
</body>
</html>