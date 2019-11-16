

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    user: <input type="text" name="username">
    sumit <input type="submit" value="submit">
    </form>

    <?php
    
        if($_SERVER['REQUEST_METHOD'] == "POST" ){
            $name = $_REQUEST['username'];
            if(empty($name)){
                echo "please sent address";
            }else{
                echo "you have submitted:" .$name;
            }
        }
    
    ?>