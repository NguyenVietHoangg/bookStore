<div class="container-fluid">
    <h1 class="dash-title">Trang chủ / Tài khoản</h1>
    <div class="row">
        <div class="col-lg-12">
            <div class="card easion-card">
                <div class="card-header">
                    <div class="easion-card-icon">
                        <i class="fas fa-table"></i>
                    </div>
                    <div class="easion-card-title">Danh sách tài khoản</div>
                </div>
                <div class="card-body ">
                    <table id="datatable" class="cell-border">
                        <thead>
                            <tr>
                                <th scope="col">Mã Sách</th>
                                <th scope="col">Ảnh Bìa</th>
                                <th scope="col">Tên Sách</th>
                                <th scope="col">Tác Giả</th>
                                <th scope="col">Thể Loại</th>
                                <th scope="col">Đơn Giá</th>
                                <th scope="col">Số Lượng</th>
                                <th scope="col">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($books as $book) :?> <tr>
                                <td><?=$book['iMaSach']?></td>
                                <td><img class="book__img" src="assets/book/img/<?=$book['sAnhSach']?>"
                                        alt="<?=$book['sTenSach']?>">
                                </td>
                                <td><?=$book['sTenSach']?></td>
                                <td><?=$book['sTacGia']?></td>
                                <td><?=$book['sTheLoai']?></td>
                                <td><?=$book['iDonGia']?></td>
                                <td><?=$book['iSoLuong']?></td>
                                <td class=" text-center">
                                    <a href="admin/book/edit/<?=$book['iMaSach']?>" class="btn btn-primary"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="admin/book/delete/<?=$book['iMaSach']?>"
                                        class="btn btn-danger btn-del-confirm"><i class="far fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <?php endforeach?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>