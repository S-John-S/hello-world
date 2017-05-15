<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
<?php
$data = array();                // define array
exec('chmod +x a.out');
exec('./a.out',$hello,$re);
	echo $re;
	
exec('ls -l', $data, $ret);     // execute command, output is array

echo "<pre>";
if ($ret == 0) {                // check status code. if successful
    foreach ($data as $line) {  // process array line by line
        echo "$line \n";
    }
} else {
    echo "Error in command";    // if unsuccessful display error
}
echo "</pre>";

	//if ( $_FILES['file']['name']){
	//$pdb_file = "inputfile.pdb";
	//move_uploaded_file($_FILES['file']['tmp_name'], $pdb_file);
        //$option = "-j";
	
	//passthru("./pdb_std -i $pdb_file $option > $output 2>&1");
	//$output_file = fopen($output, "r");
	//$content = fread($output_file, filesize($output));
	//$lines = explode("\n", $content);
	//fclose($output_file);
        //foreach ( $lines as $lin ) {
        //	echo $lin . "<br/>";
	//}//}
	//	echo "Error";
	
  ?>   
</body>
</html> 
