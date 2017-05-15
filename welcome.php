<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
<?php
$data = array();                // define array
$hello = array();
exec('chmod 777 a.out');
exec('chmod 777 pdb_std');
exec('chmod 777 inputfile.pdb');
exec('chmod 777 output_file');	
exec('./a.out',$hello,$re);
	 foreach($hello as $he){
	 	echo "$he \n";
	 }
	
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

	$output = output_file;
	passthru("./pdb_std -i inputfile.pdb -j > $output 2>&1");
	$output_file = fopen(getcwd()."/".$output, "r");
	$content = fread($output_file, filesize(getcwd()."/".$output));
	$lines = explode("\n", $content);
	fclose($output_file);
        foreach ( $lines as $line ) {
        	echo $line . "<br/>";
        	}
	
  ?>   
</body>
</html> 
