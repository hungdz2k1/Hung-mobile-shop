<?php
if(isset($_POST["keyword"])){
    $keyword = $_POST["keyword"];
}
else{
    header("location:index.php");
}
$arr_keyword = explode(" ", $keyword);
$str_keyword = "%".implode("%", $arr_keyword)."%";

$sql = "SELECT * FROM product
        WHERE prd_name LIKE '$str_keyword'";
$query = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($query);
?>
<!--	List Product	-->
<div class="products">
    <div id="search-result">Kết quả tìm kiếm với sản phẩm <span><?php echo $keyword;?></span></div>
    <?php
    $i=0;
    while($row=mysqli_fetch_array($query)){
        if($i==0){
    ?>
    <div class="product-list card-deck">
    <?php
        }
    ?>
        <div class="product-item card text-center">
            <a href="#"><img src="admin/img/products/<?php echo $row["prd_image"];?>"></a>
            <h4><a href="#"><?php echo $row["prd_name"];?></a></h4>
            <p>Giá Bán: <span><?php echo number_format($row["prd_price"]);?>đ</span></p>
        </div>
    <?php
    $i++;
    if($i==3){
        $i=0;
    ?>
        </div>
    <?php
    }
    }
    if($rows%3!=0){
    ?>
        </div>
    <?php
    }
    ?>
</div>
<!--	End List Product	-->

<div id="pagination">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Trang trước</a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Trang sau</a></li>
    </ul>
</div>