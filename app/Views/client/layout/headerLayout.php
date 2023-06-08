<div class="header_banner">
    <p>100% sách chính hãng - freeship cho đơn hàng trên 10 cuốn</p>
</div>
<div class="container">
    <div class="row header_top align-items-center">
        <div class="col-6 col-xl-3">
            <img src="/assets/client/img/logo01.webp" alt="logo" />
        </div>
        <div class="input-group position-relative header_top_search d-none d-xl-flex col-xl-6 ">
            <input type="text" class="form-control" placeholder="Tìm kiếm sách, tác giả, ..."
                aria-label="Recipient's username" aria-describedby="basic-addon2" />
            <div class="input-group-append position-absolute">
                <button class="btn" type="button">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
        </div>
        <div
            class="col-6 col-xl-3 <?= session()->get('user_login') ? 'd-none' : 'd-flex' ?> header_top_action  justify-content-between">
            <a href="loginPage"> Đăng nhập </a>
            <a href="#" class="d-none d-xl-block"> Đăng ký </a>
        </div>

        <div
            class="col-6 col-xl-3 <?=session()->get('user_login') ? 'd-flex' : 'd-none disabled' ?> align-items-center justify-content-between">
            <a href="carts/<?=session()->get('user_login')['iMaTK']?>" class="header_top_cart"><i
                    class="fa-solid fa-cart-shopping"></i></a>
            <div class="header_top_user d-flex">
                <img src="assets/user/images/avatar/test.jpg" alt="avatar">
                <p><?= !session()->get('user_login') ? 'aa' : session()->get('user_login')['sTenTK']?></p>
                <div class="dropdown tools-item">
                    <a href="#" class="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="fa-solid fa-caret-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item" href="javascript::void()">
                            <i class="fa-solid fa-user-pen"></i> Chỉnh sửa thông tin
                        </a>
                        <a class="dropdown-item" href="admin/logoutAction"><i
                                class="fa-solid fa-arrow-right-from-bracket"></i> Đăng Xuất
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_nav mt-3 position-relative">
        <ul class="d-flex header_nav_list">
            <li>Sách Thiếu Nhi</li>
            <li>Sách Giới Trẻ</li>
            <li>Sách Gia Đình</li>
            <li>Sách chính Trị</li>
        </ul>
        <ul class="position-absolute d-none header_nav_item">
            <li>Sách Thiếu Nhi</li>
            <li>Sách Giới Trẻ</li>
            <li>Sách Gia Đình</li>
            <li>Sách chính Trị</li>
        </ul>
    </div>
</div>