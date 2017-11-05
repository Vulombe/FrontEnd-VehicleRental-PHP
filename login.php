<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <script src="js/bootstrapRequirements/jquery-1.12.4.js"></script>
    <script src="js/bootstrapRequirements/jquery-ui.js"></script>
    <script src="js/bootstrapRequirements/popper.min.js"></script>
    <link rel="stylesheet" href="css/navigation.css">
    <style>
        .footer{
            font-size: 1em;
            -webkit-box-shadow: 0 8px 6px -6px #999;
            -moz-box-shadow: 0 8px 6px -6px #999;
            box-shadow: 0 8px 6px -6px #999;
            position: static;
            bottom: 0;
            width: 100%;
            height: 60px;
            line-height: 60px;
            background-color: #e3f2fd;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand"><img src="images/car.svg" height="90" weight="90">&nbsp;<span style="font-size: 2em">Vehicle Rentals</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <br />
</div>

<script>
    var URLlink = "http://localhost:8080";
    function validateEmail(email) {

        if (email === "") {
            $("#errorEmail").text("Please enter a Email address.").show();

            //fade out the error text when the user clicks on the textbox
            $("#txtEmail").click(function () {
                $("#errorEmail").fadeOut('slow');
            });

            //prevent the form from being submitted if there is an error
            event.preventDefault();
            return false;
        }
        else if(validEmail(email) === false) {
            $("#errorEmail").text("Email is invalid! Please try again.").show();
            //++errorInput;
            //fade out the error text when the user clicks on the textbox
            $("#txtEmail").click(function () {
                $("#errorEmail").fadeOut('slow');
            });
        }
        else
            return email;

        function validEmail(eEmail)
        {
            var filter = /^([0-9a-zA-Z]+[-._+&amp;])*[0-9a-zA-Z]+@([-0-9a-zA-Z]+[.])+[a-zA-Z]{2,6}$/;
            if(filter.test(eEmail))
                return true;
            else
                return false;
        }

    }


    function validatePassword(password) {
        if (password === "") {
            $("#errorPassword").text("Please enter a password.").show();

            //fade out the error text when the user clicks on the textbox
            $("#txtPassword").click(function () {
                $("#errorPassword").fadeOut('slow');
            });

            //prevent the form from being submitted if there is an error
            event.preventDefault();
            return false;
        }
        else if (/[^a-zA-Z0-9-, ]/.test(password)) {
            $("#errorPassword").text("Only alphabetic characters allowed in the field.").show();
            //++errorInput;

            //fade out the error text when the user clicks on the textbox
            $("#txtPassword").click(function () {
                $("#errorPassword").fadeOut('slow');
            });
            return false;

            //prevent the form from being submitted if there is an error
            event.preventDefault();
        }
        else if(password.length <6)
        {
            $("#errorPassword").text("Password is too short, length of password must be greater than 6 characters.").show();
            //++errorInput;
            //fade out the error text when the user clicks on the textbox
            $("#txtPassword").click(function(){
                $("#errorPassword").fadeOut('slow');
            });
            return 0;

            //prevent the form from being submitted if there is an error
            event.preventDefault();
        }
        else
            return password;
    }

    function validateLogin() {

        var email = validateEmail($("#txtEmail").val());
        var password = validatePassword($("#txtPassword").val());

        if (email == false || password == false) {
            event.preventDefault();
            return;
        }
        else {
            location.href = "homepage.php";
            event.preventDefault();
            return;
        }
    }

</script>
<script src="js/login/Login.js"></script>
<div id="container" class="container-fluid">
        <ul class="list-group">
            <li class="list-group-item">
                <h1>Login</h1>
                <!-- buttons to select the category for the car -->
                <!--<form name="loginForm" id="loginForm">-->

                    <!-- Capture Login details -->
<form name="login" id="login" method="post" >

                    <!-- Username input textfield -->
                    <div class="form-group row">
                        <!--suppress XmlInvalidId -->
                        <label for="username" class="col-sm-1 col-form-label">Username</label>
                        <div class="col-sm-5">
                            <input type="text" id="txtEmail" placeholder="Enter an email" class="form-control">
                            <small id="errorEmail" class="text-danger"></small>
                        </div>
                    </div>
                    <!-- End of Username text field  -->

                    <!-- Password input textfield -->
                    <div class="form-group row">
                        <!--suppress XmlInvalidId -->
                        <label for="password" class="col-sm-1 col-form-label">Password</label>
                        <div class="col-sm-5">
                            <input type="password" id="txtPassword" class="form-control">
                            <small id="errorPassword" class="text-danger"></small>
                        </div>
                    </div>
                    <!-- End of Password text field  -->


                    <!--Button to submit the form -->
                    <div class="form-group row">
                        <button type="submit" name="submitAddCar" class="btn btn-outline-success" value="Login" onclick="validateLogin()">Login</button>
                    </div>
                    <!-- End of submit button  -->
                </form>
            </li>
        </ul>

    <br />
</div>
<?php include("templates/inc_footer.html"); ?>

