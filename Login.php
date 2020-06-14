<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Login.css">
</head>
<body>
    <div class="login_sec">
        <div class="head_content">
            <h2>Login</h2>
        </div>
        <form action="login_action.php" method="POST" name="form1" novalidate>
            <label for="user_id">
                <input type="email" placeholder="Enter Your ID" name="user_id" id="User_id" onfocusout="myFunctionMail(document.form1.user_id)">
            </label><br><br>
            <label for="pass">
                <input type="password" placeholder="Your Password" name="pass" id="pass"  onfocusout="myFunctionPass(document.form1.pass)">
            </label><br><br>
            <label for="chkbox" class="in_text">
                <input type="checkbox" id="chkbox" name="chkbox">Remember Me
            </label><br>
            <input type="submit" name="login" value="Submit"><br>
            <a href="SiguUp.php">Register Yourself</a>
        </form>
    </div>
    <script>
        function myFunctionMail(){
            var letters = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if(inputtxt.value.match(letters))
                return true;
            else
            {
                alert('Please input correct Mail Address');
                return false;
            }
        }
        function myFunctionPass(){
            var letters = /^([a-zA-Z0-9@*#]{8,15})$/;
            if(inputtxt.value.match(letters))
                return true;
            else
            {
                alert('Please Enter Strong Password');
                return false;
            }
        }
    </script>
</body>
</html>