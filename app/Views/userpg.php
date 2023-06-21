<?php
if(session()->has('data')):
    $result=session()->get('data');
 endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Option</title>
    <style>
                /* Google Fonts - Poppins */
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");

        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
        }
        .body {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #4070f4;
        }
        .container {
        position: relative;
        max-width: 370px;
        width: 100%;
        padding: 25px;
        border-radius: 8px;
        background-color: #fff;
        }
        .container header {
        font-size: 22px;
        font-weight: 600;
        color: #333;
        }
        .container form {
        margin-top: 30px;
        }
        form .field {
        margin-bottom: 20px;
        }
        form .input-field {
        position: relative;
        height: 55px;
        width: 100%;
        }
        .input-field input {
        height: 100%;
        width: 100%;
        outline: none;
        border: none;
        border-radius: 8px;
        padding: 0 15px;
        border: 1px solid #d1d1d1;
        }
        .input-field select{
            height: 100%;
        width: 100%;
        outline: none;
        border: none;
        border-radius: 8px;
        padding: 0 15px;
        border: 1px solid #d1d1d1;
        }
        .invalid input {
        border-color: #d93025;
        }
        .input-field .show-hide {
        position: absolute;
        right: 13px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 18px;
        color: #919191;
        cursor: pointer;
        padding: 3px;
        }
        .field .error {
        display: flex;
        align-items: center;
        margin-top: 6px;
        color: #d93025;
        font-size: 13px;
        display: none;
        }
        .invalid .error {
        display: flex;
        }
        .error .error-icon {
        margin-right: 6px;
        font-size: 15px;
        }
        .create-password .error {
        align-items: flex-start;
        }
        .create-password .error-icon {
        margin-top: 4px;
        }
        .button {
        margin: 25px 0 6px;
        }
        .button input {
        color: #fff;
        font-size: 16px;
        font-weight: 400;
        background-color: #4070f4;
        cursor: pointer;
        transition: all 0.3s ease;
        }
        .button input:hover {
        background-color: #0e4bf1;
        }
        .input-field button {
            margin: 30px 0 6px;
        }
        p {
            margin-bottom: 6px;
        }
        .Op_o {
            text-align: center;
        }
        .Op {
            font-size: 20px;
            text-decoration: none;
            background-color: #4070f4;
            color: white;
            padding: 5px;
            text-decoration: none;
            border-radius: 10px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            -ms-border-radius: 10px;
            -o-border-radius: 10px;
        }
        .Op:hover {
            background-color: #0e4bf1;
        }
    </style>
</head>
<body>
    
<nav><a href="logout" style="text-decoration: none;" onclick="return confirm('Are you sure want to Delete this Record?')">Logout</a></nav>
   <div class="body">
    <div class="container">
        <header>User Option</header>
        <div class="Op_o">
            <p><a class="Op" href="seller?id=<?php echo $result['Id']; ?>">Sell Car</a></p>
            <br>
            <a class="Op" href="buyer?id=<?php echo $result['Id']; ?>">Buy Car</a>
        </div>
    </div>
    </div>
</body>
</html>