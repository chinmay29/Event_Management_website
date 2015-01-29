   <?php 
	  echo "ff";
	  include "dbconnect.php";

     
    
	  		$EventName=$_POST['EventName'];
	  		$Owner=$_POST['Owner'];
	  		$Category=$_POST['Category']; 
	  		echo $EventName;
	  			  		$sql= "SELECT * FROM $_TABLE_NAME WHERE  name='$EventName' and owner='$Owner' and category='$Category'"; 
	  		
	  		$result=mysql_query($sql);
	  		while($row=mysql_fetch_array($result))
	  		{ 
	          $EName  =$row[$_EVENT_NAME]; 
	          $Description=$row[$_DES]; 
	          $StartTime=$row[$_START_TIME];
	          $EndTime=$row[$_END_TIME]; 
	 		 //-display the result of the array 
	 		 echo "<ul>\n"; 
			  echo "<li>" . $EName . "   " . $Description .  "</li>\n"; 
	 		 echo "<li>" . $StartTime . " " . $EndTime .  "</li>\n"; 
			  echo "</ul>"; 
		  } 
	 
	  
	  //do  something here in code 
	  
		?>