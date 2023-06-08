<div class="container">
    <h3>Giỏ Hàng</h3>
    <div class="row">
        <div class="col-lg-12 mt-3">
            <div class="card easion-card">

                <div class="card-body ">
                    <table id="datatable" class="table">
                        <thead>
                            <tr>
                                <th scope="col">Mã</th>
                                <th scope="col">Ảnh Sách</th>
                                <th scope="col">Tên Sách</th>
                                <th scope="col">Tác Giả</th>
                                <th scope="col">Đơn Giá</th>
                                <th scope="col">Số Lượng Mua</th>
                                <th scope="col">Thành tiền</th>
                                <th scope="col"> Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($carts as $cart) :?> <tr>
                                <td><?=$cart['infoSach'][0]['iMaSach']?></td>
                                <td><img src="/assets/book/img/<?=$cart['infoSach'][0]['sAnhSach']?>"
                                        alt="<?=$cart['infoSach'][0]['sTenSach']?>"></td>
                                <td><?=$cart['infoSach'][0]['sTenSach']?></td>
                                <td><?=$cart['infoSach'][0]['sTacGia']?></td>
                                <td><?=$cart['infoSach'][0]['iDonGia']?></td>
                                <td><?=$cart['soLuongMua']?></td>
                                <td class="a"><?=$cart['infoSach'][0]['iDonGia'] * $cart['soLuongMua']?></td>

                                <td class="text-center">
                                    <a href="deleteCart/<?=$cart['iMaGH']?>" class="btn btn-danger btn-del-confirm"><i
                                            class="far fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <?php endforeach?>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="pay">Tổng Tiền Thanh toán: <span class="b"></span></p>
                        <button class="btn  btn_pay">Đặt Hàng</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>