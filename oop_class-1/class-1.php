<?php
    include "function.php";
?>

<form action="" method="post">
    <table>
        <tr>
            <td>enter First number:</td>
            <td><input type="number" name="num1"></td>
        </tr>
        <tr>
            <td>enter First number:</td>
            <td><input type="number" name="num2"></td>
        </tr>
        <tr>
            <td>submit here:</td>
            <td><input type="submit" name="calculation" value="submit"></td>
        </tr>
    </table>
</form>

<?php

    if (isset($_POST['calculation'])) {
        $valueOne = $_POST['num1'];
        $valueTwo = $_POST['num2'];
        if (empty($valueOne) or empty($valueTwo)) {
           echo "<span style='color:red'>field empty here</span>";
        }else {
            
        $main = new Calculation;
        $main->add($valueOne,$valueTwo);
        $main->sub($valueOne,$valueTwo);
        $main->mul($valueOne,$valueTwo);
        $main->div($valueOne,$valueTwo);
            
        }
    }

?>