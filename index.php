<?php
include_once("dbconnect.php");

?>

<!DOCTYPE >

<html >
<head>
    <meta charset="utf-8">
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Coming soon, Bootstrap, Bootstrap 3.0, Free Coming Soon, free coming soon, free template, coming soon template, Html template, html template, html5, Code lab, codelab, codelab coming soon template, bootstrap coming soon template">
    <title>Bootstrap Templates</title>
    <!-- ============ Google fonts ============ -->
    <link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet'
        type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300,800'
        rel='stylesheet' type='text/css' />
    <!-- ============ Add custom CSS here ============ -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <link href="css/style.css" rel="stylesheet" type="text/css" />    
   
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />

</head>
<body>
    <div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
    <div class="container">
        <div class="navbar-header"><a class="navbar-brand" href="#">VOTING</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="">Home</a>
                </li>
                <li><a href="">Products</a>
                </li>
                <li><a href="">About Us</a>
                </li>
                <li><a href="">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</div>

        <div class="container">

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="registrationform">
            <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <legend>Registration Form <i class="fa fa-pencil pull-right"></i></legend>
                    <div class="form-group">
                        <label for="inputName" class="col-lg-2 control-label">
                            Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputName" name="name" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">
                            Email</label>
                        <div class="col-lg-10">
                            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="reason" class="col-lg-2 control-label">
                            Reason</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="reason" name="reason" ></textarea>
                        <!--    <span class="help-block">A longer block of help text that breaks onto a new line and
                                may extend beyond one line.</span>-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">
                            Select Favourite browser</label>
                        <div class="col-lg-10">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="browser" id="options1" value="IntenetExplore" checked>
                                    Internet Explorer
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="browser" id="options2" value="FireFox">
                                    FireFox
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="browser" id="options3" value="Safari">
                                    Safari
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="browser" id="options4" value="Chrome">
                                    Chrome
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="browser" id="options5" value="Opera">
                                    Opera
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="browser" id="options6" value="Konqueror">
                                    Konqueror
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="browser" id="options7" value="Lynx">
                                    Lynx
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-warning">
                                Reset</button>
                            <input type="submit" name="val_submit" id="val_submit" class="btn btn-primary">
                                
                        </div>
                    </div>
                </fieldset>
            </form>
         </div>



         </div>

         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
           <div id="banner">
           <?php


            if(isset($_POST['val_submit']))
            {
                //echo "entered";
                $name=$_POST['name'];
                $email=$_POST['email'];
                $reason=$_POST['reason'];
                $browser=$_POST['browser'];



                $sql = "SELECT * from `information` where `email`='$email'";
                if ($result=mysqli_query($connection, $sql))
                {
                    if(mysqli_fetch_array($result))
                    {
                        $sql = "UPDATE `information` SET `name` = '$name',`reason`='$reason',`browser`='$browser' WHERE `email` = '$email';";
                        if ($res=mysqli_query($connection, $sql))
                        {
                          //  echo "UPDATE";
                        }
                        else
                        {
                            echo "error";
                        }
                    }
                    else    
                    {
                        $sql = "INSERT INTO `information`(`name`, `email`, `reason`, `browser`) VALUES ('$name','$email','$reason','$browser');";

                        if (mysqli_query($connection, $sql)) 
                        {
                            echo "successfully entered<br> ";
                            echo "$name<br>$email<br>$reason<br>$browser";
                            /*
                            $sql = "SELECT DISTINCT FROM `information`;";
                            if (mysqli_query($connection, $sql)) 
                            {

                            }*/
                        } 
                        
                        else 
                        {
                            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
                        }
                    }

                    $sql = "SELECT count(*) FROM `information`;";
                    if ($result=mysqli_query($connection, $sql)) 
                    {
                        if($data=mysqli_fetch_array($result))
                        {
                               
                            $total=$data["count(*)"];
                            echo '<p size=60>'."total=".$total.'</p><br>';
                        }    
                    }

                    $browser=['IntenetExplore','FireFox', 'Safari', 'Chrome', 'Opera', 'Konqueror', 'Lynx'];
                    for($i=0;$i<7;$i++)
                    {    
                        $sql = "SELECT count(*) FROM `information` where browser='$browser[$i]';";

                        if ($result=mysqli_query($connection, $sql)) 
                        {
                            if($data=mysqli_fetch_array($result))
                            {
                               
                                $per=($data["count(*)"]/$total)*100;
                                echo '<p size=30><h1>'.$browser[$i].'</h1><br>total='.$data["count(*)"].'<br>percentage='.$per.'%</p><br><br>';

                            }    
                        }
                    }

                    include_once("PhpMail/mail.php");

                }
                

                mysqli_close($connection);

            }

           ?>
           </div>
          
              
         </div>
        </div>
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.backstretch.js" type="text/javascript"></script>
        <script type="text/javascript">
            'use strict';

            /* ========================== */
            /* ::::::: Backstrech ::::::: */
            /* ========================== */
            // You may also attach Backstretch to a block-level element
            $.backstretch(
        [
            "img/44.jpg",
            "img/colorful.jpg",
            "img/34.jpg",
            "img/images.jpg"
        ],

        {
            duration: 4500,
            fade: 1500
        }
    );
        </script>

</body>
</html>
