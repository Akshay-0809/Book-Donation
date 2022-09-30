<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style1.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
    
    <body>
    <?php require 'NavBars/_nav2.php' ?>
       
        

        <h2 class="text-white text-center">"Knowledge increases by sharing, but not saving".
            Please support us by donating books.</h2>

        
        <div class="container1" align="center">
            
            <div class="w-50 m-auto">
            <form action="submit.php" method="post" enctype="multipart/form-data">
                
                <div class="form-group">
                Enter your Name:
                    <input type="text" name="name" size="48" class="form-control" placeholder="name" required> 
                </div>

                <div class="form-group">
                Enter your Email:
                    <input type="email" name="email" size="48" class="form-control" placeholder="email" required> 
                </div>
                
                <div class="form-group">
                Enter your Contact number:
                    <input type="text" name="phone" size="68" class="form-control" placeholder="Phone Number" required> 
                </div>

                <div class="form-group">
                Enter Title :
                    <input type="text" name="title" size="48" class="form-control" placeholder="title" required> 
                </div>

                <div class="form-group">
                Author:  
                    <input type="text" name="author" size="48" class="form-control" placeholder="author" required> 
                </div>

                <div class="form-group">
                Enter Edition :
                    <input type="text" name="edition" size="48" class="form-control" placeholder="edition" required> 
                </div>

                <div class="form-group">
                Enter Publication: 
                    <input type="text" name="publication" size="48" class="form-control" placeholder="publication" required> 
                </div>

                <div class="form-group">
                Upload File:
                    <input type="file" name="file" size="48" class="form-control" required> 
                </div>
                <br>
                <div class="button" style="display: flex;flex-direction: row;justify-content: space-evenly;align-items: center;">
                <input type="Submit" value="Submit"  class="btn">
                <input type="Reset" value="Reset"  class="btn">
                </div>
                
            </form>
            </div> 
        </div>
    </body>
</html>