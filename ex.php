<?php
if(isset($_POST["sbm"])){

    // echo $_POST["mua"].", ";

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}

?>
<hr/>
<form method="POST">
    Xuân <input type="checkbox" name="mua[]" value="Xuân"/> 
    Hạ <input type="checkbox" name="mua[]" value="Hạ"/> 
    Thu <input type="checkbox" name="mua1[]" value="Thu"/> 
    Đông <input type="checkbox" name="mua1[]" value="Đông"/> 
    <input type="submit" name="sbm" value="Chọn"/> 
</form>