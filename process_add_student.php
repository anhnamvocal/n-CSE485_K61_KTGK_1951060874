<?php
    // Xử lý giá trị GỬI TỚI
    
    $maMon = $_POST['txtMaMonHoc'];
    

    $chucVu = $_POST['txtTenMonHoc'];
    $soMayBan = $_POST['txtSoTinChi'];
    $soDiDong = $_POST['txtSoTietLyThuyet'];
    $email = $_POST['txtSoTietBaiTap'];
    $maDonVi = $_POST['txtSoTietThucHanh'];
    $maDonVi2 = $_POST['txtSoGioTuHoc'];
    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','1951060874_dhtl');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "INSERT INTO monhoc(mamh, ten_mh, sotinchi, sotiet_lt, sotiet_bt, sotiet_thtn,sogio_tuhoc) VALUES ('$maMon','$chucVu','$soMayBan','$soDiDong','$email', '$maDonVi','$maDonVi2')";
    // echo $sql;
    $ketqua = mysqli_query($conn,$sql);
    
    if(!$ketqua){
        header("location: error.php"); //Chuyển hướng lỗi
    }else{
        header("location: index.php"); //Chuyển hướng lại Trang Quản trị
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);

?>