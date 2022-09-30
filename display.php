<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>

    <style>
      table,
      th,
      td {
        border: 1px solid black;
        padding: 10px;
      }
      tr {
        height: 50px;
        width: 80px;
        padding : 20px;
      }
      td {
        height: 50px;
        width: 100px;
      }
   
    </style>

</head>
<body>

<?php require 'NavBars/_nav2.php' ?>

            <table class="center">
                        <th class="py-3 text-white"> Name </th>
                        <th> Email </th>
                        <th> Contact </th>
                        <th> Title </th>
                        <th> Author</th>
                        <th> Edition </th>
                        <th> Publication </th>
                        <th> File </th>
                        <th> Download Link </th>
                    </tr>

                <tbody>
                    <?php
                        include 'db.php';
                        $display = "SELECT * FROM books";
                        $query = mysqli_query($conn,$display);


                        while($result = mysqli_fetch_array($query))
                        {
                    ?>

                        <tr>
                            <td> <?php echo $result['Name']; ?> </td>
                            <td> <?php echo $result['Email']; ?> </td>
                            <td> <?php echo $result['Phone'];?> </td>
                            <td> <?php echo $result['Title']; ?> </td>
                            <td> <?php echo $result['Author']; ?> </td>
                            <td> <?php echo $result['Edition']; ?> </td>
                            <td> <?php echo $result['Publication']; ?> </td>
                            <td> <?php echo $result['File']; ?> </td>
                            <td> <?php echo "<a href='Books/".$result['File']."'> Download </a>"?></td>
                        </tr>


                    <?php
                        }

                        
                    ?>
                </tbody>

</table>
</body>
</html>