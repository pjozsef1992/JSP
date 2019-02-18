<!DOCTYPE html>
<?php
include './phpHtmLelEment$/Form.php';
include './phpHtmLelEment$/Link.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Advent Of Code$ Ta$k$</title>
              </style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous">
        </script>
        <style type="text/css">
            body,html{
                height:100%;
            }
            body{
                margin:0px;
            }
            input{
                border-radius: 4px;
                margin-top: 10px;
                margin-left:10px;
                margin-right:10px;
            }
            .regFrom label{
                margin-right: 10px;
            }
            #cb{
                margin-left:65px;
            }
            .btn-primary{
                color:white;
            }
            /*LinkButton*/
            .regForm,a {
                color:white;
            }
            a:hover{
                color:white;
                text-decoration: none;
            }
        </style>
        <script type="text/javascript">
        
            var cb = document.getElementById("#cb");
       
           
            if(cb.checked=true){
                alert("Szia");
            }
          
        
      
        </script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <?php
             
                $homepage = new Link();
                $homepage->sethtmlType("div");
                $homepage->sethtmlattribute("class", "btn btn-light");
                $homepage->sethtmlattribute("id", "fooldal");
                $homepage->setHref("index.php");
                $homepage->sethtmlcontain("Főoldal");
                $homepage->setLink();
                
                $registration = new Link();
                $registration->setHref("index.php?reg");
                $registration->sethtmlType("div");
                $registration->sethtmlattribute("class", "btn btn-light");
                $registration->sethtmlattribute("id", "regBtn");
                $registration->sethtmlcontain("REGISTRATION");
                $registration->setLink();
                
                $about = new Link();
                $about->setHref("index.php?about");
                $about->sethtmlType("div");
                $about->sethtmlattribute("class", "btn btn-light");
                $about->sethtmlattribute("id", "aboutBtn");
                $about->sethtmlcontain("ABOUT");
                $about->setLink();
                ?>
            </div>
        </div>
    <center>
        <?php   
     if(isset($_GET['reg'])){
       $form = new Form();
       $form->setType("text");
       $form->setClass("input-group text-center col-4");
       $form->setId("firstName");
       $form->setName("firstName");
       $form->setPlaceHolder("FIRSTNAME");
       
       $form->setType("text");
        $form->setClass("input-group text-center col-4");
       $form->setId("lastName");
       $form->setName("lastName");
       $form->setPlaceHolder("LASTNAME");
       
       $form->setType("password");
       $form->setClass("input-group text-center col-4");
       $form->setId("pass1");
       $form->setName("password");
       $form->setPlaceHolder("PASSWORD");
       
       $form->setType("checkbox");
       $form->setId("cb");
       $form->setClass("input-group text-center col-4");
       $form->setName("visiblePass");
       $form->setLabelText("Password set visibility on/off:");
       
       $form->setType("password");
       $form->setClass("input-group text-center col-4");
       $form->setId("pass2");
       $form->setName("repassword");
       $form->setPlaceHolder("RE-PASSWORD");
       
       $form->setType("email");
       $form->setId("email");
       $form->setClass("input-group text-center col-4");
       $form->setName("email");
       $form->setPlaceHolder("EMAIL ADRESS");
  
       
       $form->setType("submit");
       $form->setId("goReg");
       $form->setClass("btn btn-primary text-center col-4");
       $form->setName("reg");
       $form->setValue("REGISTER");
       $form->setForm("POST", "regForm", "regFormid");
       
       $menu1 = new Link();
       $menu1->sethtmlcontain("Vissza");
       $menu1->setHref("index.php");
       $menu1->sethtmlType("div");
       $menu1->sethtmlattribute("class","btn btn-primary col-4");
       $menu1->sethtmlattribute("id", "link1");
       $menu1->setLink();
       }
        ?>
    </center>
    </body>
</html>
