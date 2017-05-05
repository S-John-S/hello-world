 <html>
<body>

<form action="welcome.php" method="post" enctype="multipart/form-data">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
PDB: <input  type ="file" accept=".pdb" id="pdb_file" name ="file"><br>
 <input type="submit">
</form>
<?php
 echo exec("date");
?>
</body>
</html> 
