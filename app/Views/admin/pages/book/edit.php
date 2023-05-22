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
                                <label for="inputMaSach">Mã Sách</label>
                                <input name="iMaSach" rule="required" type="text" value="<?=$book['iMaSach']?>"
                                    class="form-control" id="inputMaSach" readonly>
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="inputTenSach">Tên Sách</label>
                                <input name="sTenSach" rule="required" type="text" value="<?=$book['sTenSach']?>"
                                    class="form-control" id="inputsTenSach" placeholder="Nhập Tên Sách">
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputsTheLoai">Thể Loại</label>
                                <select name="sTheLoai" id="inputsTheLoai" class="form-control">
                                    <option selected>
                                        <?=$book['sTheLoai']?>
                                    </option>
                                    <?php foreach($theLoai as $item) :?>
                                    <div>
                                        <option>
                                            <?= $item['iMaTL']?>
                                            <p><?= $item['sTenTL']?></p>
                                        </option>

                                    </div>
                                    <?php endforeach?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputsTacGia">Tên Tác Giả</label>
                            <input name="sTacGia" value="<?=$book['sTacGia']?>" type="text" class="form-control"
                                rule="required" id="inputsTacGia" placeholder="Tác Giả">
                            <span class="form-message"></span>
                        </div>

                        <div class="form-group">
                            <label for="inputsAnhSach">Ảnh Bìa Sách</label>
                            <input name="sAnhSach" type="text" class="form-control" value="<?=$book['sAnhSach']?>"
                                rule="required" id="inputsAnhSach">
                            <span class="form-message"></span>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputiDonGia">Nhập Đơn Giá</label>
                                <input name="iDonGia" value="<?=$book['iDonGia']?>" type="text" rule="required"
                                    class="form-control" id="inputiDonGia" placeholder="Nhập Đơn Giá">
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputiSoLuong">Nhập số lượng</label>
                                <input name="iSoLuong" value="<?=$book['iSoLuong']?>" type="text" rule="required"
                                    class="form-control" id="inputiSoLuong" placeholder="Nhập Số Lượng">
                                <span class="form-message"></span>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>