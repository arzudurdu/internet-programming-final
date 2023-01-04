<?php

require 'baglan.php'

?>



<!DOCTYPE html>
<html>
    <head>
        <title> LOGİN</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form action="login.php" method="post">
            <h2>LOGİN</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
                
            <label>User Name</label>
            <input type="text" name="uname" placeholder="User Name"><br>

            <label>User Name</label>
            <input type="password" name="password" placeholder="Password"><br>

            <button type="Submit">Login</button>
        </form>
    </body>
</html>