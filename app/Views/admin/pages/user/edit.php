<div class="container-fluid">
    <h1 class="dash-title">Trang chủ / Tài khoản / Thêm mới</h1>
    <div class="row">
        <div class="col-xl-12">
            <div class="card easion-card">
                <div class="card-header">
                    <div class="easion-card-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="easion-card-title"> Thông tin tài khoản </div>
                </div>
                <div class="card-body ">
                    <form action="admin/user/update" id="form-add-user" method="POST">
                        <div class="form-group">
                            <label for="iMaNV">Mã nhân viên</label>
                            <input name="iMaNV" rule="required" type="text" value="<?=  (int)$user['iMaNV']?>" readonly
                                class="form-control" id="sMaNV">
                            <span class="form-message"></span>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="inputEmai">Email</label>
                                <input name="sEmail" rule="required|email" type="text" value="<?= $user['sEmail']?>"
                                    class="form-control" id="inputEmail" placeholder="Email">
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Quyền</label>
                                <select name="sQuyen" id="inputState" class="form-control">
                                    <option selected readonly><?= $user['sQuyen']?></option>
                                    <option selected>ADMIN</option>
                                    <option selected>Người dùng</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Tên hiển thị</label>
                            <input name="sTenNV" type="text" class="form-control" rule="required"
                                value="<?= $user['sTenNV']?>" id="inputAddress" placeholder="Tên hiển thị người dùng">
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group">
                            <label for="inputMap">Địa chỉ</label>
                            <input name="sDiaChi" type="text" class="form-control" value="<?= $user['sDiaChi']?>"
                                rule="required" id="inputMap" placeholder="Địa chỉ">
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group">
                            <label for="inputPhone">Số điện thoại</label>
                            <input name="sSDT" type="text" class="form-control" value="<?= $user['sSDT']?>"
                                rule="required|min:9|max:11" id="inputPhone" placeholder="Số điện thoại">
                            <span class="form-message"></span>
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>