<div class="container body">
    <form method="GET" action="addCart" class="row p-3">
        <div class="col-12 col-xl-7 body_content">
            <div class="text-center row">
                <img class="body_content_img col-12 col-xl-6 offset-xl-3"
                    src="assets/client/img/<?=$sachItem['sAnhSach']?>" alt="<?=$sachItem['sTenSach']?>" />
            </div>
            <h6>Chi tiết sách</h6>
            <table>
                <tbody>
                    <tr>
                        <th>Nhà xuất bản</th>
                        <td><?=$sachItem['sNXB']?></td>
                    </tr>
                    <tr>
                        <th>Năm xuất bản</th>
                        <td><?=$sachItem['sNamXB']?></td>
                    </tr>
                    <tr>
                        <th>Kích thước</th>
                        <td><?=$sachItem['sKichThuoc']?></td>
                    </tr>
                    <tr>
                        <th>Trọng lượng</th>
                        <td><?=$sachItem['sTrongLuong']?></td>
                    </tr>
                    <tr>
                        <th>Loại bìa</th>
                        <td><?=$sachItem['sLoaiBia']?></td>
                    </tr>
                    <tr>
                        <th>Số trang</th>
                        <td><?=$sachItem['sSoTrang']?></td>
                    </tr>
                </tbody>
            </table>
            <h6>Giới Thiệu</h6>
            <p><?=$sachItem['sGioiThieu']?></p>
        </div>
        <div class="col-12 body_info col-xl-5">
            <h5><?=$sachItem['sTenSach']?></h5>
            <p>Tác Giả: <span><?=$sachItem['sTacGia']?></span></p>
            <p>Thể Loại: <span><?=$sachItem['iMaTL']?></span></p>
            <p class="body_info_dongia"><?=$sachItem['iDonGia']?> <span>đ</span></p>
            <p>Tình Trạng <span><?= $sachItem['iSoLuong'] > 0 ? 'Còn Hàng' :'Hết Hàng'?></span></p>
            <p>Số Lượng</p>
            <div class="body-buy d-flex align-items-center">
                <button class="btn" type="button" id="reduce" onclick="reduceAction()">
                    -
                </button>


                <input class="ml-3 mr-3" id="soLuong" name="iSoLuongMua" type="text" />
                <button class="btn" type="button" id="increase" onclick="increaseAction()">
                    +
                </button>
            </div>
            <input class="ml-3 mr-3 d-none" id="iMaSach" name='iMaSach' value="<?=$sachItem['iMaSach']?>" type="text" />
            <input class="ml-3 mr-3 d-none" id="iMaTK" name="iMaTK" value="<?=session()->get('user_login')['iMaTK']?>"
                type="text" />
            <button class="btn" type="submit">Giỏ
                Hàng</button>
            <button class="btn ml-3">Mua Sách</button>
        </div>
    </form>
</div>