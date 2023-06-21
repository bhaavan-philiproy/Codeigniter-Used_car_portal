<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller</title>
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
            margin: 25px 0 6px;
        }
    </style>
</head>
<body>
    <?php 
   $id = $_GET["id"];
   ?>
   <nav><a href="logout" style="text-decoration: none;" onclick="return confirm('Are you sure want to LogOut?')">Logout</a></nav>
   <div class="body">
    <div class="container">
        <header>Car Details</header>
        <form method="post" enctype="multipart/form-data" action="<?php echo base_url("sell")?>">
        <div class="field">
            <div class="input-field">
                <input type="text" name="Company" placeholder="Company" class="email" required/>
            </div>
        </div>
        <div class="field">
            <div class="input-field">
                <input type="text" name="Model" placeholder="Model" class="email" required/>
            </div>
        </div>
        <div class="field">
            <div class="input-field">
                <input type="text" name="Color" placeholder="Color" class="email" required/>
            </div>
        </div>
        <div class="field">
            <div class="input-field">
                <input type="number" name="Year" placeholder="Year" class="email" required min='1950'/>
            </div>
        </div>
        <div class="field">
            <div class="input-field">
                <input type="Text" name="Type" placeholder="Fuel Type" class="email" required/>
            </div>
        </div>
        <div class="field">
            <div class="input-field">
                <input type="number" name="Price" placeholder="Expected Price" class="email" required min='0'/>
            </div>
        </div>
        <!-- <div class="field"> -->
            <div>
                <input type="file" name="Image" id="img" required>
            </div>
        <!-- </div> -->
        <input type="hidden" name="Id" value="<?php echo $id?>">
        <div class="input-field button">
            <input type="submit" name="Submit" value="Submit" />
        </div>
        </form>
        <form method="post" action="<?php echo base_url("seller_view?id=".$id)?>">
            <div class="input-field button">
                <input type="submit" name="View" value="View" />
            </div>
        </form>
        <form method="post" action="<?php echo base_url("seller_message?id=".$id)?>">
            <div class="input-field button">
                <input type="submit" name="Message" value="Message" />
            </div>
        </form>
    </div>
    </div>
</body>
</html>
