<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
    
</head>
<body>
    <div class="container">
        <h1 style="text-align: center;" class="mt-3">Webboard KaKKak</h1>
        <?php include "nav.php" ?>
        <div class="row mt-4">
            <div class="col-lg-3 col-md-2 col-sm-1"></div>
            <div class="col-lg-6 col-md-8 col-sm-10">
            <?php
                    if(isset($_SESSION['add_name'])){
                        if($_SESSION['add_name']=="success"){
                            echo "<div class='alert alert-success'>เพิ่มหมวดหมู่เรียบร้อยแล้ว</div>";
                        }
                        unset($_SESSION['add_name']);
                    }
                ?>
                <table class="table table-striped"  style="text-align:center" >
                    <tr><th>ลำดับ</th><th>ชื่อหมวดหมู่</th><th>จัดการ</th></tr>
                        <?php
                            $i=1;
                            $conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
                            $sql="SELECT * FROM category";
                            foreach($conn->query($sql) as $row){
                                echo "<tr><td>$i</td><td>$row[1]</td><td><a href=# class='btn btn-warning btn-sm'>
                                <i class='bi bi-pencil-fill'></i></a> <a href=# class='btn btn-danger btn-sm' >
                                <i class='bi bi-trash'></i></a></td></tr>";
                                $i++;
                            }
                        ?>
                </table>
                <div class="d-flex justify-content-center"><button class=" btn btn-success btn-sm " data-bs-target="#showForm" data-bs-toggle="modal"><i class="bi bi-bookmark-plus"></i> เพิ่มหมวดหมู่ใหม่</button></div>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-1"></div>
        </div>

        <div class="modal fade" id="showForm">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">เพิ่มหมวดหมู่ใหม่</h5>
                        <button class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form action="category_save.php" method="post">
                            <div class="form-group">
                                <label for="name">ชื่อหมวดหมู่:</label>
                                <input id="name" name="name" type="text" class="form-control" required  >
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        
                        <a href="category_save.php" class="btn btn-primary">Save changes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>