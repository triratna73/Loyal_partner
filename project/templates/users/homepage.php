<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title; ?></title>
    <script type="text/javascript" src="../css/js.js"></script>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <div class="logo">
           <a href="index.php"> <img src="../images/logo/logo.png" alt="Local Partners Pty Ltd"></a>
        </div>

        <nav>
    
        <div class="homepg">
            <a href="index.php">Home</a>
            <?php
                if(isset($_SESSION['login']) && $_SESSION['login'] == 1){
                    echo '<a href="index.php?page=history">History</a>';
                    echo '<a href="index.php?page=chatnow">Chat</a>';}
            ?>
        </div>
        <div class="userinfo">
            <?php
                if(isset($_SESSION['login']) && $_SESSION['login'] == 1){
                    echo 'User:<a href="index.php?page=userprofile"> '. $_SESSION['username'] .'</a>';
            ?> 
            <!-- notification bell -->
            <div class="dropdown" id="dropdown">
                <button class="dropbtn" onclick="myFunction()"><i class="fa fa-bell"></i></button>
                <div class="dropdown-content" id="dropdown-content">
                    <?php 
                        $connN=new DatabaseTable('notification');
                        $allnotif=$connN->notifAll();
                        foreach ($allnotif as $value) { 
                            if($value['role']==$_SESSION['role'] || $value['role']=="Everyone" ||$value['role']==$_SESSION['username']){
                    ?>
                    <div class="itms">
                        <img src="../images/logo/avatar1.png" alt="logo">
                        <div class="text">
                            <h4><?php echo $value['notif_title'];?></h4>
                            <p><?php echo $value['notif_msg'];?></p>
                        </div><br>
                    </div>
                    <?php }} ?>
                </div>
            </div>
            <!-- logout -->
            <form method="POST" action="index.php?page=login">
            <input class ="login" type="submit" value="LogOut" name="logout">
            </form>
            
                <?php
        } //if logged in
                else{
                   echo '<a class="login" href="index.php?page=login">Login</a>';
                }
                    ?>
            </div>
        </nav>
    </header>

    <main>
        <?php echo $content; ?>
    </main>

    <footer>

    </footer>
    <script src="../scripts/main.js"></script>
    <script src="https://kit.fontawesome.com/6d2ea823d0.js"></script>
</body>
</html>