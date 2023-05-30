<div class="container-fluid">
    <h1 class="dash-title">Trang chủ / Sách / Thêm mới</h1>
    <div class="row">
        <div class="col-xl-12">
            <div class="card easion-card">
                <div class="card-header">
                    <div class="easion-card-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="easion-card-title"> Thông tin Thể loại </div>
                </div>
                <div class="card-body">
                    <form action="admin/theloai/create" id="form-add-user" method="POST">
                        <div class="form-row">

                            <div class="form-group col-md-8">
                                <label for="inputTenTL">Tên thể loại</label>
                                <input name="sTenTL" rule="required" type="text" class="form-control" id="inputsTenTL"
                                    placeholder="Nhập Tên thể loại">
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputsTheLoai">Danh Mục</label>
                                <select name="iMaDM" id="inputsTheLoai" class="form-control">
                                    <?php foreach($danhmuc as $item) :?>
                                    <div>
                                        <option>
                                            <?= $item['iMaDM']?>
                                            <p><?= $item['sTenDM']?></p>
                                        </option>

                                    </div>
                                    <?php endforeach?>
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success">Thêm Sách</button>
                        <button type="reset" class="btn btn-secondary">Nhập lại</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>