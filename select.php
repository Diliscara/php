 <link rel="stylesheet" href="colorchange2.css"></link>
 <style>
body {margin: 0; padding: 0;
background-color: #ffffff;
color:#996633;
font-family:"Arial","sans-serif";color:#700070;font-size:20px;}
pre{margin: 0; padding: 0;font-family:"Arial","sans-serif";color:#000000;font-size:20px;}


#content{
font-family: Arial, Helvetica, sans-serif;
font-size: 20px;
color: #330099;
background-color:white;	
position:absolute;
left:350px;
top:200px;
}


</style>

 <?php
 include 'db/db.php';
 
 
 try{
	 
# MySQL with PDO_MYSQL  
  $DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
  $STH = $DBH->query("select * from stream2.formdata order by id desc;");  
  $STH->setFetchMode(PDO::FETCH_OBJ); 
		//$therows = $STH->fetchColumn();
		//echo "$therows <hr />";
	while($row = $STH->fetch()){
		echo $row->id . " ~ \n";  
		echo $row->ip . " ~ \n";  
		echo $row->timein . " ~ \n";  
		echo $row->datein . " ~ \n";   
	    echo $row->name . " ~ \n";   
	    echo $row->number . " ~ \n";   
	    echo " <br />";
	   }
	
	}
    catch(Exception $e)

    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';

    }


# 

?>

