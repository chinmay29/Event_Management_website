<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- TemplateBeginEditable name="doctitle" -->
<title>Event Home Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<link rel="stylesheet" type="text/css" href="css/style_sheet.css">
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/formvalidation.js"></script>
</head>

<body>
<script src="http://code.jquery.com/jquery.js"></script>
    
	<script src="js/bootstrap.min.js"></script>
 
    <!-- bootbox code -->
    <script src="js/bootbox.min.js"></script>
	
<div class="container">

  <header><div class="wrapper" ><h1 align="center">Event Management </h1></div>


<nav align="center">
<a href="./eventHomePage.php" class="currentpage">  Home</a> |
<a href="./eventpostingpage.php">Post Event</a> |
<a href="./grouphomepage.php">Group Home</a> |
<a href="./grouppostingpage.php">Post Group</a> |
<a href="./myaccount.php">Myaccount</a> |
<a href="./logout.php"> Logout</a>
</nav>


    </header>
  <div class="sidebar1">
<p></p>
    <ul class="nav">
      <li><a href="eventHomePage.php?cat=sports">Sports</a></li>
      <li><a href="eventHomePage.php?cat=concerts">Concerts</a></li>
      <li><a href="eventHomePage.php?cat=outdoor">Outdoor</a></li>
      <li><a href="eventHomePage.php?cat=party">Parties</a></li>
    </ul>

  
  <div class="menu">
			
	  <p class="search">Search Events</p>
			<ul>
<form action="./search1.php" method="post">
				<input type="search" name="parameter" style="width: 105px;" />
		
				<input type="submit" value="Search"/></form>
			</ul>
	  </div>

<div class="menu">

<p class="advancesearch"><a href="./advanceSearch.php">Advanced Search </a></p>


</div>
  <!-- end .sidebar1 -->
</div>





  <article class="content1" >
   <p align="center" style="font-size:26px"><b><u>Search Results </u></b></p>


<?php
$dbHost = "silo.cs.indiana.edu";
$dbUserAndName = "b561f13_ggomatom";
$dbPass = "my+sql=b561f13_ggomatom";



mysql_connect ($dbHost, $dbUserAndName, $dbPass) or die ("Cannot connect to host $dbHost with user $dbUserAndName and the password provided.");
mysql_select_db ($dbUserAndName) or die ("Database $dbUserAndName not found on host $dbHost");;
$parameter=$_POST['parameter'];
$result1=mysql_query("SELECT * FROM search  WHERE MATCH (title,body) AGAINST ('$parameter')");


	echo "SEARCH RESULT GIVES FOLLOWING EVENTS: \n";
	          echo "";
	       
while($info1 = mysql_fetch_array( $result1))
{
	$flag=0;

	$event_name = $info1["title"];
	$result=mysql_query("SELECT * FROM Events  WHERE name='$event_name'");

$info = mysql_fetch_array( $result);

$id=$info["eid"];

if($info==0)
{
	$flag=1;
	$result2=mysql_query("SELECT * FROM Groups  WHERE name='$event_name'");

$info2 = mysql_fetch_array( $result2);

$id=$info2["gid"];

}



	$body = $info1["body"];
	//$des = $info1["des"];
	if($flag==1)
	{
	echo "<br>"; 
			 echo "<li><a href='groupDes.php?gid=".$id."'>" . $event_name . "</a> <br> "; 
			 echo "Description :". $body .  "<br>"; 
	 }
	 else {
	 		 	echo "<br>"; 
			 echo "<li><a href='eventdes.php?eid=".$id."'>" . $event_name . "</a> <br> "; 
			 echo "Description :". $body .  "<br>"; 
	 		 }		 
                        
}
        


?>

<section>
  
</section>
  <!-- end .content --></article>
  
  <footer>
    
  </footer>
  <!-- end .container --></div>
</body>
</html>
