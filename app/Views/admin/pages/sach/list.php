<div class="container-fluid">
    <h1 class="dash-title">Trang chủ / Tài khoản</h1>
    <div class="row">
        <div class="col-lg-12">
            <div class="card easion-card">
                <div class="card-header">
                    <div class="easion-card-icon">
                        <i class="fas fa-table"></i>
                    </div>
                    <div class="easion-card-title">Danh sách Sách</div>
                </div>
                <div class="card-body ">
                    <table id="datatable" class="cell-border">
                        <thead>
                            <tr>
                                <th scope="col">Mã Sách</th>
                                <th scope="col">Mã Thể Loại</th>
                                <th scope="col">Tên Sách</th>
                                <th scope="col">Tác Giả</th>
                                <th scope="col">Đơn Giá</th>
                                <th scope="col">Số Lượng</th>
                                <th scope="col">NXB</th>
                                <th scope="col">Chức năng</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($sach as $item) :?> <tr>
                                <td><?=$item['iMaSach']?></td>
                                <td><?=$item['iMaTL']?></td>
                                <td><?=$item['sTenSach']?></td>
                                <td><?=$item['sTacGia']?></td>
                                <td><?=$item['iDonGia']?></td>
                                <td><?=$item['iSoLuong']?></td>
                                <td><?=$item['sNXB']?></td>
                                <td class=" text-center">
                                    <a href="admin/sach/edit/<?=$item['iMaSach']?>" class="btn btn-primary"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="admin/sach/delete/<?=$item['iMaSach']?>"
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