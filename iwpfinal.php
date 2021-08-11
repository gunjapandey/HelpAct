<html>
    <head>
        
<body style="background-color:powderblue;">
<h1>Registration for an event</h1>
<h2>The tickets for TEDxVITChennai are out!</h2>

<style>
h1 {text-align: center;}
h2{text-align: center;}
div {text-align: center;}
</style>
    </head>
    <body>
        <form name="form" action="" method="post">
            <label for="name">Name:</label>
            <br>
            <input type="text" name="name">
            <br>
            <label for="regno">Reg no.:</label>
            <br>
            <input type="text" name="regno">
            <br><br>
            <input type="submit" name="d_insert" class="button" value="Insert into the database">
            <input type="submit" name="f_insert" class="button" value="Insert into the file">
            <br><br>
            <input type="submit" name="d_delete" class="button" value="Delete from database">
            <input type="submit" name="f_delete" class="button" value="Delete from file">
            <br><br>
            <input type="submit" name="d_search" class="button" value="Search in database">
            <input type="submit" name="f_search" class="button" value="Search in file">
            <br><br>
            <input type="submit" name="update" class="button" value="Update">
            <br><br>
        </form>
        <?php
        if(array_key_exists('d_insert',$_POST)){
            d_insert();
        }
        else if(array_key_exists('f_insert',$_POST)){
            f_insert();
        }
        else if(array_key_exists('d_delete',$_POST)){
            d_delete();
        }
        else if(array_key_exists('f_delete',$_POST)){
            f_delete();
        }
        else if(array_key_exists('update',$_POST)){
            update();
        }
        else if(array_key_exists('d_update',$_POST)){
            d_update();
        }
        else if(array_key_exists('f_update',$_POST)){
            f_update();
        }
        else if(array_key_exists('d_search',$_POST)){
            d_search();
        }
        else if(array_key_exists('f_search',$_POST)){
            f_search();
        }
        function d_insert(){
            echo "database is selected<br>";
            echo "Inserting name: ".$_POST["name"]." and regno: ".$_POST["regno"];
            $con=mysqli_connect("localhost","root","","register");
            if(mysqli_connect_errno())
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            $nam=$_POST["name"];
            $reg=$_POST["regno"];
            $sql="INSERT INTO student VALUES('$nam','$reg')";
            if(mysqli_query($con,$sql))
            {
                echo"<br>Inserted value successfully";
            }
            else
            {
                echo "Inserting failed " . mysqli_error($con);
            }
        }
        function f_insert(){
            echo "file is selected<br>";
            $nam=$_POST["name"];
            $reg=$_POST["regno"];
            $file=fopen("student_file.txt",'a+');
            $text=$nam.",".$reg."\n";
            fwrite($file,$text);
            echo "Successfuly inseted into the file.";
            fclose($file);
        }
        function d_delete(){
            echo "database is selected<br>";
            echo "Deleting name: ".$_POST["name"]." and regno: ".$_POST["regno"];
            $con=mysqli_connect("localhost","root","","register");
            if(mysqli_connect_errno())
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            $nam=$_POST["name"];
            $reg=$_POST["regno"];
            $sql="Delete from student where name='$nam' and regno='$reg'";
            if(mysqli_query($con,$sql))
            {
                echo"<br>Deleted value successfully";
            }
            else
            {
                echo "Deletion failed " . mysqli_error($con);
            }
        }
        function f_delete(){
            $id=$_POST["name"].",".$_POST["regno"];
            $dir="student_file.txt";
            $contents = file_get_contents($dir);
            $new_contents = "";
            if (strpos($contents, $id) !== false) { // if file contains ID
                $contents_array = explode("\n", $contents);
                foreach ($contents_array as &$record) {    // for each line
                    if (strcmp($record, $id) == false) { // if we have found the correct line
                        continue; // we've found the line to delete - so don't add it to the new contents.
                    } else {
                        $new_contents =$new_contents. $record . "\n"; // not the correct line, so we keep it
                    }
                }
                file_put_contents($dir, $new_contents); // save the records to the file
                echo("Successfully updated record!");
            }
            else {
                echo json_encode("failed - user ID ". $id ." doesn't exist!");
            }
        }
        function update(){
            echo '<form name="form" action="" method="post">
            <label for="name">Name:</label>
            <br>
            <input type="text" name="name">
            <br>
            <label for="u_name">Update Name:</label>
            <br>
            <input type="text" name="u_name">
            <br>
            <label for="regno">Reg no.:</label>
            <br>
            <input type="text" name="regno">
            <br>
            <label for="u_regno">Update Reg no.:</label>
            <br>
            <input type="text" name="u_regno">
            <br><br>
            <input type="submit" name="d_update" class="button" value="Update in database">
            <input type="submit" name="f_update" class="button" value="Update in file">
            </form>';   
        }
        function d_update(){
            echo "Updating name: ".$_POST["name"]." and regno: ".$_POST["regno"];
            echo "<br> With name: ".$_POST["u_name"]."and regno: ".$_POST["u_regno"];
            $con=mysqli_connect("localhost","root","","register");
            if(mysqli_connect_errno())
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            $h_nam=$_POST["name"];
            $h_reg=$_POST["regno"];
            $u_nam=$_POST["u_name"];
            $u_reg=$_POST["u_regno"];
            $sql="Update student set name='$u_nam',regno='$u_reg' where name='$h_nam' and regno='$h_reg';";
            if(mysqli_query($con,$sql))
            {
                echo"<br>Updated value successfully";
            }
            else
            {
                echo "Updation failed " . mysqli_error($con);
            }
        }
        function f_update()
        {
            $id=$_POST["name"].",".$_POST["regno"];
            $update=$_POST["u_name"].",".$_POST["u_regno"];
            $dir="student_file.txt";
            $contents = file_get_contents($dir);
            $new_contents = "";
            if (strpos($contents, $id) !== false) { // if file contains ID
                $contents_array = explode("\n", $contents);
                foreach ($contents_array as &$record) {    // for each line
                    if (strcmp($record, $id) == false) { // if we have found the correct line
                        $new_contents=$new_contents.$update;
                        continue; // we've found the line to delete - so don't add it to the new contents.
                    } else {
                        $new_contents =$new_contents. $record . "\n"; // not the correct line, so we keep it
                    }
                }
                file_put_contents($dir, $new_contents); // save the records to the file
                echo("Successfully updated record!");
            }
            else {
                echo json_encode("failed - user ID ". $id ." doesn't exist!");
            }
        }
        function d_search()
        {
            echo "database is selected<br>";
            $con=mysqli_connect("localhost","root","","register");
            if(mysqli_connect_errno())
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            $nam=$_POST["name"];
            $reg=$_POST["regno"];
            $sql="select * from student WHERE name='$nam' and regno='$reg'";
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) > 0)
            {
                echo"<br>Row present in the database";
            }
            else
            {
                echo "No rows present";
            }
        }
        function f_search()
        {
            $id=$_POST["name"].",".$_POST["regno"];
            $dir="student_file.txt";
            $contents = file_get_contents($dir);
            if (strpos($contents, $id) !== false) { // if file contains ID
                $contents_array = explode("\n", $contents);
                foreach ($contents_array as &$record) {    // for each line
                    if (strcmp($record, $id) == false) { // if we have found the correct line
                        echo "The data is present in the file <br>";
                        return; // we've found the line to delete - so don't add it to the new contents.
                    }
                }
            }
            echo "The data is not present in the file.";
        }
    ?>
    </body>
</html>