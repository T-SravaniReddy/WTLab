<form method="post">  
Enter String: <input type="text" name="mystring"><br>
Enter String to be searched: <input type="text" name="word"><br><br>  
<input type="submit" name="submit" value="Submit">  
</form>  
<?php  
if($_POST)  {  
	$mystring=$_POST['mystring'];
	$word = $_POST['word'];
	echo 'Length of '.$mystring.' is '.strlen($mystring);
	echo "</br></br>";
	echo 'Number Of Words in '.$mystring.' : '.str_word_count($mystring);
	echo "</br></br>";
	echo 'Reverse of '.$mystring.' is ';
	$length = strlen($mystring);
	for ($i=($length-1) ; $i >= 0 ; $i--) {
 	   echo $mystring[$i];
	}
	echo "</br></br>";
	if(strpos($mystring, $word) !== false){
  	  echo "Word Found In Main String!";
	} else{
		echo "Word Not Found In Main String!";
	}
}
?>
