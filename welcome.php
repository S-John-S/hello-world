<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
<?php
$data = array();                // define array
exec('chmod +x pdb_std');
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
?>

	Testing
	
	<?php
	//if ( $_FILES['file']['name']){
	//$pdb_file = "inputfile.pdb";
	//move_uploaded_file($_FILES['file']['tmp_name'], $pdb_file);
        //$option = "-j";
	$output = array();
	exec('pdb_std -i inputfile.pdb -j', $output, $return);
	echo "<pre>";
	if ($return == 0) {                // check status code. if successful
	    foreach ($output as $lins) {  // process array line by line
        	echo "$lins \n";
    	}
	} else {
    	echo "Error in command";    // if unsuccessful display error
	}
	echo "</pre>";
	//passthru("pdb_std -i $pdb_file $option > $output 2>&1");
	//$output_file = fopen(getcwd()."/".$output, "r");
	//$content = fread($output_file, filesize(getcwd()."/".$output));
	//$lines = explode("\n", $content);
	//fclose($output_file);
        //foreach ( $lines as $line ) {
       // 	echo $line . "<br/>";
	//}//}
		echo "Error";
	
  ?>   
</body>
</html> 
