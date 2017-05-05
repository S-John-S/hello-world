<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
<?php
$pdb_file = "inputfile.pdb";
	move_uploaded_file($_FILES['file']['tmp_name'], $pdb_file);
      
	passthru("pdb_std -i $pdb_file $option > $output 2>&1");
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
