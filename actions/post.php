 <!-- URL format /post.php?postId=<number> -->
<?php echo file_get_contents("../html/common/header.html"); ?>

<!-- Get posts from database -->
<?php
 //----------connect to MySQL system-------------- 
   $dbhost = "localhost:3306";
   $dbuser = "root";
   $dbpass = "";
   $conn = new mysqli($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) 
   {
      die("Could not connect: " . mysql_error());
   }
   else
   {
	   //print("connected <br/>");
   }

   $conn->select_db("blogs");

   $postId = -1;
   // Basic input validation
    if (isset($_GET['postId']) && is_numeric($_GET['postId'])) {
        $postId = $_GET['postId'];
   }
   if ( $postId == -1 ) {
       http_response_code(404);
       die();
   }
   //---------Perform a query------------------------ 
   $sql = "SELECT * FROM posts where p_Id={$postId}"; 
   $retval = $conn->query($sql);
   
   if(! $retval ) 
   {
      die("Could not retrieve data : " . mysql_error());
   }   
   else
   {
	//  print("data is retrieved<br/>");  
   }   

   while($row = $retval->fetch_assoc()) 
   {
      echo "{$row['text']} <br/>".
         "--------------------------------<br/><br/>";
   } 
   $conn->close();
?>


<?php echo file_get_contents("../html/common/footer.html"); ?>