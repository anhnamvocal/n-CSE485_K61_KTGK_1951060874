<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <header>
        <i class="bi bi-pencil-square"></i>
        <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <h3 class="text-center text-primary mt-5">HỆ THỐNG QUẢN LÝ ĐẠI HỌC</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mã môn học</th>
                        <th scope="col">Tên môn học</th>
                        <th scope="col">Số tín chỉ</th>
                        <th scope="col">Số tiết lý thuyết</th>
                        <th scope="col">Số tiết bài tập</th>
                        <th scope="col">số tiết thực hành – thí nghiệm</th>
                        <th scope="col">số giờ tự học</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <!--vùng đặt dữ liệu-->
                    <?php
                        require_once 'configs/database.php';
                        $conn = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
                        if(!$conn){
                            die("disconneting...");
                        }
                        $sql = "select * from monhoc";
                        $result = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                                <tr>
                                    <th scope="row"><?php echo $row['mamh']; ?></th>
                                    <td><?php echo $row['ten_mh']; ?></td>
                                    <td><?php echo $row['sotinchi']; ?></td>
                                    <td><?php echo $row['sotiet_lt']; ?></td>
                                    <td><?php echo $row['sotiet_bt']; ?></td>
                                    <td><?php echo $row['sotiet_thtn']; ?></td>
                                    <td><?php echo $row['sogio_tuhoc']; ?></td>
                                    <td><a href="update_student"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a href="delete_student.php?id=<?php echo $row['mamh']; ?>"><i class="bi bi-trash"></i></a></td>
                            
                            </tr>
                    <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>