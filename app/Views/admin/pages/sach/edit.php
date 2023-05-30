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
                <div class="card-body">
                    <form action="admin/sach/update" id="form-add-user" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="iMaSach">Mã Sách</label>
                                <input name="iMaSach" rule="required" value="<?=$sach['iMaSach']?>" readonly type="text"
                                    class="form-control" id="iMaTL" placeholder="Nhập Tên Sách">
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="inputTenTL">Tên sách</label>
                                <input name="sTenSach" rule="required" value="<?=$sach['sTenSach']?>" type="text"
                                    class="form-control" id="inputsTenTL" placeholder="Nhập Tên Sách">
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Chọn thể loại</label>
                                <select name="iMaTL" id="inputState" class="form-control">
                                    <?php foreach($theloai as $item) :?>
                                    <?php if($item['iMaTL']=== $sach['iMaTL']): ?>
                                    <option readonly>
                                        <?= $item['iMaTL']?>
                                        <p><?= $item['sTenTL']?></p>
                                    </option>
                                    <?php else:?>
                                    <option readonly>
                                        <?= $item['iMaTL']?>
                                        <p><?= $item['sTenTL']?></p>
                                    </option>
                                    <?php endif?>
                                    <?php endforeach?>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="sTacGia">Tác Giả</label>
                                <input name="sTacGia" rule="required" value="<?=$sach['sTacGia']?>" type="text"
                                    class="form-control" id="sTacGia" placeholder="Nhập Tên Tác Giả">
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="iDonGia">Đơn Giá</label>
                                <input name="iDonGia" rule="required" value="<?=$sach['iDonGia']?>" type="text"
                                    class="form-control" id="iDonGia" placeholder="Nhập Đơn Giá Sách">
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="iSoLuong">Số Lượng</label>
                                <input name="iSoLuong" rule="required" value="<?=$sach['iSoLuong']?>" type="text"
                                    class="form-control" id="iSoLuong" placeholder="Nhập Số Lượng Sách">
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="iAnhSach">Ảnh Mô Tả</label>
                                <input name="sAnhSach" rule="required" value="<?=$sach['sAnhSach']?>" type="text"
                                    class="form-control" id="iAnhSach">
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="sNXB">Tên Nhà Xuất Bản Sách</label>
                                <input name="sNXB" rule="required" type="text" value="<?=$sach['sNXB']?>"
                                    class="form-control" id="sNXB" placeholder="Nhập Tên Nhà Xuất Bản">
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="sNamXB">Năm Xuất Bản</label>
                                <input name="sNamXB" rule="required" type="text" value="<?=$sach['sNamXB']?>"
                                    class="form-control" id="sNamXB" placeholder="Nhập Tên Sách">
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="sKichThuoc">Kích Thước</label>
                                <input name="sKichThuoc" rule="required" type="text" value="<?=$sach['sKichThuoc']?>"
                                    class="form-control" id="sKichThuoc" placeholder="Nhập Kích Thước Sách">
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="sTrongLuong">Trọng Lượng</label>
                                <input name="sTrongLuong" rule="required" type="text" value="<?=$sach['sTrongLuong']?>"
                                    class="form-control" id="sTrongLuong" placeholder="Nhập Trọng Lượng Sách">
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="sLoaiBia">Loại Bìa</label>
                                <input name="sLoaiBia" rule="required" type="text" value="<?=$sach['sLoaiBia']?>"
                                    class="form-control" id="sLoaiBia" placeholder="Nhập Tên Loại Bìa Sách">
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="sSoTrang">Số Trang</label>
                                <input name="sSoTrang" rule="required" type="text" value="<?=$sach['sSoTrang']?>"
                                    class="form-control" id="sSoTrang" placeholder="Nhập Số Trang Sách">
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="sGioiThieu">Mô Tả Sách</label>
                                <input name="sGioiThieu" rule="required" type="text" value="<?=$sach['sGioiThieu']?>"
                                    class="form-control" id="sGioiThieu" placeholder="Nhập Lời Mô Tả Sách">
                                <span class="form-message"></span>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success">Update Sách</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>