<div class="container-fluid">
    <h1 class="dash-title">Trang chủ / Tài khoản</h1>
    <div class="row">
        <div class="col-lg-12">
            <div class="card easion-card">
                <div class="card-header">
                    <div class="easion-card-icon">
                        <i class="fas fa-table"></i>
                    </div>
                    <div class="easion-card-title">Danh sách thể loại</div>
                </div>
                <div class="card-body ">
                    <table id="datatable" class="cell-border">
                        <thead>
                            <tr>
                                <th scope="col">Mã Thể Loại</th>
                                <th scope="col">Mã Danh Mục</th>
                                <th scope="col">Tên Thể Loại</th>
                                <th scope="col">Chức năng</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($theloai as $item) :?> <tr>
                                <td><?=$item['iMaTL']?></td>
                                <td><?=$item['iMaDM']?></td>
                                <td><?=$item['sTenTL']?></td>
                                <td class=" text-center">
                                    <a href="admin/theloai/edit/<?=$item['iMaTL']?>" class="btn btn-primary"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="admin/theloai/delete/<?=$item['iMaTL']?>"
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