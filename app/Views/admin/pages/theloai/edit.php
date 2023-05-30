<div class="container-fluid">
    <h1 class="dash-title">Trang chủ / Sách / Thêm mới</h1>
    <div class="row">
        <div class="col-xl-12">
            <div class="card easion-card">
                <div class="card-header">
                    <div class="easion-card-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="easion-card-title"> Thông tin Sách </div>
                </div>
                <div class="card-body ">
                    <form action="admin/book/update" id="form-add-user" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputMaSach">Mã Thể Loại</label>
                                <input name="iMaTL" rule="required" type="text" value="<?=$theloai['iMaTL']?>"
                                    class="form-control" id="inputMaSach" readonly>
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="inputTenSach">Tên Thể loại</label>
                                <input name="sTenSach" rule="required" type="text" value="<?=$theloai['sTenTL']?>"
                                    class="form-control" id="inputsTenSach" placeholder="Nhập Tên Thể Loại">
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Danh Mục</label>
                                <select name="iMaDM" id="inputState" class="form-control">
                                    <?php foreach($danhmuc as $item) :?>
                                    <?php if($item['iMaDM']=== $theloai['iMaDM']): ?>
                                    <option readonly>
                                        <?= $item['iMaDM']?>
                                        <p><?= $item['sTenDM']?></p>
                                    </option>
                                    <?php else:?>
                                    <option readonly>
                                        <?= $item['iMaDM']?>
                                        <p><?= $item['sTenDM']?></p>
                                    </option>
                                    <?php endif?>
                                    <?php endforeach?>
                                </select>
                            </div>

                        </div>


                </div>
                <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>