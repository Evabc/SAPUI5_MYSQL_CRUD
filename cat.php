<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Find your cat</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.html">Find your cat</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="adopter.html">Adopter</a></li>
                        <li class="nav-item"><a class="nav-link" href="cat.php">Cat</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="manage.php">Manage</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Content-->
        <?php
        header("Content-Type:text/html; charset=utf-8");
        ?>
        <section class="py-5">
            <div class="container">
                <!-- Page Heading/Breadcrumbs-->
                <h1>
                    待領養貓
                </h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Cat</li>
                </ol>
                <div class="row">
                    <!-- 加入搜尋功能-->
                    <div class="col-lg-6"> 
                        <h3>尋找貓咪</h3>
                        性別<br>
                        <form  method="POST" action="cat.php">   
                        <input type="checkbox" name="cat_sex" value="男生">男生
                        <input type="checkbox" name="cat_sex" value="女生">女生 <br>
                        
                        <br>
                        <br>
                        年齡<br>
                        <form  method="POST" action="cat.php">   
                        <input type="checkbox" name="cat_years" value="成貓">成貓
                        <input type="checkbox" name="cat_years" value="幼貓">幼貓 <br>
                        
                        <br>
                        <br>
                        花色<br>
                        <form  method="POST" action="cat.php">   
                        <input type="checkbox" name="cat_flower" value="三花">三花
                        <input type="checkbox" name="cat_tiger" value="虎斑">虎斑
                        <input type="checkbox" name="cat_orange" value="橘">橘
                        <input type="checkbox" name="cat_black" value="黑">黑
                        <input type="checkbox" name="cat_cow" value="黑白">黑白 <br>
                        <input type="submit" value="送出查詢">
                        <input type="reset" value="重新選擇">
                           
                    </div>
                    <div class="col-lg-6">
                        <!-- form引進資料庫-->
                        <?php                
                        include("db.php");
                        ?>
                        <!-- table內容-->
                        <style>
	                        .demo {
		                        border:1px solid #C0C0C0;
		                        border-collapse:collapse;
		                        padding:5px;
	                        }
                            .demo caption {
		                        text-align:center;
                            }
	                        .demo th {
		                        border:1px solid #C0C0C0;
                                text-align:center;
		                        padding:5px;
		                        background:#F0F0F0;
	                        }   
	                        .demo td {
		                        border:1px solid #C0C0C0;
                                text-align:center;
		                        padding:5px;
	                        }
                        </style>
                        <table class="demo">
                            <caption>貓咪列表</caption>
	                        <thead>
	                        <tr>
                                <th>貓咪編號</th>
                                <th>貓咪性別</th>
                                <th>貓咪花色</th>
                                <th>貓咪年齡</th>
                                <th>貓咪領養連結</th>
                            </tr>
                        <?php
                        // <!-- 依貓咪性別判斷搜尋條件-->
                        $cat_sex= $_POST['cat_sex'];
                        $cat_years= $_POST['cat_years'];
                        $cat_flower= $_POST['cat_flower'];
                        $cat_tiger= $_POST['cat_tiger'];
                        $cat_orange= $_POST['cat_orange'];
                        $cat_black= $_POST['cat_black'];
                        $cat_cow= $_POST['cat_cow'];

                        if (isset($_POST['cat_sex']))
                            if (isset($_POST['cat_years']))
                                if(isset($_POST['cat_flower']))
                                    $sql = "SELECT * FROM cat_id WHERE years='$cat_years' AND sex='$cat_sex' AND color='$cat_flower'";
                                elseif(isset($_POST['cat_tiger']))
                                    $sql = "SELECT * FROM cat_id WHERE years='$cat_years' AND sex='$cat_sex' AND color='$cat_tiger'";
                                elseif(isset($_POST['cat_orange']))
                                    $sql = "SELECT * FROM cat_id WHERE years='$cat_years' AND sex='$cat_sex' AND color='$cat_orange'";
                                elseif(isset($_POST['cat_black']))
                                    $sql = "SELECT * FROM cat_id WHERE years='$cat_years' AND sex='$cat_sex' AND color='$cat_black'";
                                elseif(isset($_POST['cat_cow']))
                                    $sql = "SELECT * FROM cat_id WHERE years='$cat_years' AND sex='$cat_sex' AND color='$cat_cow'";
                                else
                                    $sql = "SELECT * FROM cat_id WHERE years='$cat_years' AND sex='$cat_sex' ";
                            

                            elseif(isset($_POST['cat_flower']))
                                $sql = "SELECT * FROM cat_id WHERE sex='$cat_sex' AND color='$cat_flower'";
                            elseif(isset($_POST['cat_tiger']))
                                $sql = "SELECT * FROM cat_id WHERE sex='$cat_sex' AND color='$cat_tiger'";
                            elseif(isset($_POST['cat_orange']))
                                $sql = "SELECT * FROM cat_id WHERE sex='$cat_sex' AND color='$cat_orange'";
                            elseif(isset($_POST['cat_black']))
                                $sql = "SELECT * FROM cat_id WHERE sex='$cat_sex' AND color='$cat_black'";
                            elseif(isset($_POST['cat_cow']))
                                $sql = "SELECT * FROM cat_id WHERE sex='$cat_sex' AND color='$cat_cow'";
                            else
                                $sql = "SELECT * FROM cat_id WHERE sex='$cat_sex' ";

                        elseif(isset($_POST['cat_years']))
                            $sql = "SELECT * FROM cat_id WHERE years='$cat_years'";
                        elseif(isset($_POST['cat_flower']))
                            $sql = "SELECT * FROM cat_id WHERE color='$cat_flower'";
                        elseif(isset($_POST['cat_tiger']))
                            $sql = "SELECT * FROM cat_id WHERE color='$cat_tiger'";
                        elseif(isset($_POST['cat_orange']))
                            $sql = "SELECT * FROM cat_id WHERE color='$cat_orange'";
                        elseif(isset($_POST['cat_black']))
                            $sql = "SELECT * FROM cat_id WHERE color='$cat_black'";
                        elseif(isset($_POST['cat_cow']))
                            $sql = "SELECT * FROM cat_id WHERE color='$cat_cow'";    
                        else 
                            $sql = "SELECT * FROM cat_id ";

                        $result = $conn->query($sql);
                        //如果搜尋資料大於0
                        if ($result->num_rows > 0) {
                            //則列出table內容
                    
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>".$row["id"] . "</td>" ;
                                echo "<td>".$row["sex"] . "</td>" ;
                                echo "<td>".$row["color"] . "</td>" ;
                                echo "<td>".$row["years"] . "</td>" ;
                                echo "<td>".$row["where_adopt"] . "</td>" ;
                            }
                        } else {
                            echo "0 结果";
                        }
                        $conn->close();

                        ?>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
