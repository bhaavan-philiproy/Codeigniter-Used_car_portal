<?php if (session()->has('data')) :
     $result = session()->get('data');
   endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
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
            max-width: 900px;
            width: 100%;
            padding: 25px;
            border-radius: 8px;
            background-color: #fff;
        }
        .container table{
            border: 1px solid black;
            width: 100%;
        }
        table th{
            text-align: center;
        }
        table td{
            text-align: center;
            padding: 7px 0px;
        }
        .viewop{
            background-color: greenyellow;
            color: white;
            padding: 5px;
            text-decoration: none;
            border-radius: 10px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            -ms-border-radius: 10px;
            -o-border-radius: 10px;
        }
        .deleteop{
            background-color: red;
            color: white;
            padding: 5px;
            text-decoration: none;
            border-radius: 10px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            -ms-border-radius: 10px;
            -o-border-radius: 10px;
        }
    </style>
</head>
<body>
<nav><a href="logout" style="text-decoration: none;" onclick="return confirm('Are you sure want to LogOut?')">Logout</a></nav>
    <div class="body">
    <div class="container">
    <?php if($result){?>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach($result as $d){?>
            <tr>
                <td><?php echo $d["Name"];?></td>
                <td><?php echo $d["Email"];?></td>
                <td><a href="admin_view?id=<?php echo $d['Id']; ?>" class="viewop">View</a></td>
                <td><a href="admin_user_delete?id=<?php echo $d['Id']; ?>" onclick="return confirm('Are you sure want to Delete this Record?')" class="deleteop">Delete</a></td>
            </tr>
            <?php } ?>
            <?php } else{?>
            <div style="text-align: center; font-size: 50px"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>
            <span id="field_check" style="color:#36454F;text-align:center;"><h2>No Data Found</h2></span>
       <?php }?>
        </table>
    </div>
    </div>
</body>
</html>