<?php  
           
            $validateName = "";
            $validateUserName = "";
            $validateEmail = "";
            $validateDob = "";
            $validateGender = "";
            $validatePassword = "";
            $validateConfirmPassword = "";

            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $name = $_REQUEST["name"];
                $email = $_REQUEST["email"];
                $userName = $_REQUEST["username"];
                $password = $_REQUEST["password"];
                $confirmpassword = $_REQUEST["confirmpassword"];

             
                if(empty($name) || strlen($name)<3)
                {
                    $validateName = "You must Enter a valid Name";
                }
                if(empty($userName) || strlen($userName)<5)
                {
                    $validateUserName = "Please enter an Username";
                }
                if(empty($email) || !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i",$email))
                {
                    $validateEmail = "You must Enter a valid Email";
                }
                
                if(empty($_REQUEST["gender"]))
                {
                   
                    $validateGender = "Please select a gender";
                }
                if(empty($_REQUEST["dob"]))
                {
                    $validateDob = "Please Enter a Date of birth";
                }
                
                if(empty($password) || strlen($password)<6)
                {
                    $validatePassword = "You must Enter a valid Password";
                }
                if( $password !=  $confirmpassword)
                {
                    $validateConfirmPassword = "Confirm Password isn't match";
                }
               
                
            }

        ?>