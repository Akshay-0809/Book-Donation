<?php 
 
include 'db.php';

$Name = $_REQUEST['name']; 
$Email = $_REQUEST['email']; 
$Phone = $_REQUEST['phone']; 
$Title = $_REQUEST['title']; 
$Author = $_REQUEST['author']; 
$Edition = $_REQUEST['edition']; 
$Publication = $_REQUEST['publication']; 

// upload pdf and check the extension of the file
$files=$_FILES['file']['name'];
$files_size=$_FILES['file']['size'];

// extract the extension of file
$ext=explode(".", $files);

$cn=count($ext);

    if($ext[$cn-1]=='pdf'|| $ext[$cn-1]=='doc')
    {
        $tm = $_FILES['file']['tmp_name'];
        move_uploaded_file($tm,"Books/".$files);

        // sql query to insert values into the table
         $sql = "INSERT INTO books VALUES ('$Name','$Email','$Phone',
        '$Title','$Author','$Edition','$Publication','$files')"; 

            if(mysqli_query($conn, $sql))
                {
                    echo "<h1>data stored in a database successfully.</h1>";
                } 

            else
                {
                    echo "<br> <h1> Data not inserted successfully.</h1>";
                } 
     }
    else{
         echo "<h1> File type not allowed.</h1>";
     }


     header("location:book.php");




?> 
