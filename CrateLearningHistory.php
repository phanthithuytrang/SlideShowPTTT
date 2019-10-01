<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quá Trình Học Tập</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/qtcss.css">
</head>

<body>
<?php    

     include_once("header.php");
     include_once("nav.php"); 
?>     
    <div class=" container">
    	<div class="row">
    		<div class="col-md-12" style="text-align: center; margin-bottom:20px; margin-top: 20px;"> 
    			<h2>Thông Tinh Sinh Viên</h2>
    			</div>
    	</div>


        <form method="post" action="/temp/view/CrateLearningHistory.php">
            <div class="row">       
                <div class="col-md-2">
                    <p><strong> STT:</strong> </p>
                    <input type="text" name="txtSTT">
                </div>
                <div class="col-md-2">
                    <p><strong> Từ Năm:</strong> </p>
                    <input type="text" name="txtTuNam">
                </div>
                <div class="col-md-2">
                    <p><strong> Đến Năm:</strong> </p>
                    <input type="text" name="txtDenNam">
                </div>
                <div class="col-md-2">
                    <p><strong> Lớp : </strong></p>
                    <input type="text" name="txtLop">
                </div>
                <div class="col-md-2">
                    <p><strong> Nơi học :</strong></p>
                    <input type="text" name="txtAddress">
                </div>
                <div class="col-md-2" style="text-align: center; margin-top: 10px;">
                    <button type="submit"><i class="fas fa-plush"></i>OK</button>
                </div>

            </div>            
        </form>



<?php

include_once("../model/enity/learninghistory.php");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    

    Learninghistory::saveToFile("../resource/demo.txt", $_POST["txtSTT"], $_POST["txtTuNam"], $_POST["txtDenNam"], $_POST["txtLop"], $_POST["txtAddress"]);

}


?>


    </div>
    <?php include_once("footer.php"); ?>
</body>

</html>     