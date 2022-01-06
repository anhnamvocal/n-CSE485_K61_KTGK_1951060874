
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
    <main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">Thêm mới Học Sinh</h5>
        <!-- Form thêm Dữ liệu nhân viên -->
        <form action="process_add_student.php" method="post">
            <div class="form-group">
                <label for="txtHoTen">Mã Môn Học</label>
                <input type="text" class="form-control" id="txtMaMonHoc" name="txtMaMonHoc" placeholder="Nhập mã môn học">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            
            <div class="form-group">
                <label for="txtChucVu">Tên Môn Học</label>
                <input type="text" class="form-control" id="txtTenMonHoc" name="txtTenMonHoc" placeholder="Nhập Tên môn học">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>

            <div class="form-group">
                <label for="txtSoMayBan">Số Tín Chỉ</label>
                <input type="text" class="form-control" id="txtSoTinChi" name="txtSoTinChi" placeholder="Nhập số tín chỉ">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            <div class="form-group">
                <label for="txtSoDiDong">Số Tiết Lý Thuyết</label>
                <input type="text" class="form-control" id="txtSoTietLyThuyet" name="txtSoTietLyThuyet" placeholder="Nhập Số tiết lý thuyết">
                
            </div>
            <div class="form-group">
                <label for="txtEmail">Số Tiết Bài tập</label>
                <input type="text" class="form-control" id="txtSoTietBaiTap" name="txtSoTietBaiTap" placeholder="Nhập Số Tiết Bài Tập">
               
            </div>
            <div class="form-group">
                <label for="txtEmail">Số Tiết Thực Hành</label>
                <input type="text" class="form-control" id="txtSoTietThucHanh" name="txtSoTietThucHanh" placeholder="Nhập số tiets thực hành">
               
            </div>
            <div class="form-group">
                <label for="txtEmail">Số Giờ Tự Học</label>
                <input type="text" class="form-control" id="txtSoGioTuHoc" name="txtSoGioTuHoc" placeholder="Nhập Số Giờ Tự Học">
               
            </div>
            <button type="submit" class="btn btn-primary mt-3">Lưu lại</button>
        </form>
    </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>