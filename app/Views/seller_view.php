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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Seller View</title>
</head>
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
        max-width: 1200px;
        width: 100%;
        padding: 25px;
        border-radius: 8px;
        background-color: #fff;
    }
    .container header {
        align-items: center;
        font-size: 22px;
        font-weight: 600;
        color: #333;
    }
    .img-box{
        margin-top: 20px;
    }
    .img-block{
        float: left;
        margin-right: 5px;
        text-align: center;
    }
    img{
        width: 375px;
        min-height: 250px;
        margin-bottom: 10px;
        box-shadow: 0.125rem rgba(0,0,0,.075)!important;
        border:6px solid #f7f7f7;
    }
</style>
<body>
<?php $id = $_GET["id"];?>
<nav><a href="logout" style="text-decoration: none;" onclick="return confirm('Are you sure want to LogOut?')">Logout</a></nav>
<nav><a href="sold_view?id=<?php echo $id ?>" style="text-decoration: none;">Sold Car</a></nav>
    <div class="body">
    <div class="container">
        <header><center>Car Details</center></header>
        <?php if($result){?>
        <?php
            foreach($result as $d) {
        ?>
        <div class="img-box">
        <img height="30px" width="30px" src="<?php echo base_url();?><?php echo $d["Img"];?>">
            <b><p><?php echo $d["Company"];?></p></b>
            <b><p><?php echo $d["Model"];?></p></b>
            <p><?php echo $d["Color"];?></p>
            <p><?php echo $d["Year"];?></p>
            <p><?php echo $d["Type"];?></p>
            <p><?php echo $d["Price"];?></p>
            <a href="user_remove?id=<?php echo $d['Id']; ?>" onclick="return confirm('Are you sure want to Delete this Record?')">Remove</a>
            <br>
            <a href="user_edit?id=<?php echo $d['Id']; ?>">Edit</a>
        </div>
        <?php
            }
        ?>
        <?php } else{?>
            <div style="text-align: center; font-size: 50px"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>
            <span id="field_check" style="color:#808080;text-align:center;"><h4>No Data Found</h4></span>
       <?php }?>
    </div>
    </div>
</body>
</html>