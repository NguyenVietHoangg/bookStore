<div class="container-fluid">
    <div id="carouselExampleControls" class="carousel slide body_slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/assets/client/img/slide-show01.jpg" alt="First slide" />
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/assets/client/img/slide-show02.jpg" alt="Second slide" />
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/assets/client/img/slide-show03.jpg" alt="Third slide" />
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/assets/client/img/silde-show04.jpg" alt="Third slide" />
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="container">
    <div class="body_book_list">
        <h3>Sách Thiếu Nhi</h3>
        <div class="row grid-row-gap-3 mt-3">
            <?php foreach($sachTN as $item): ?>

            <div class="col-full col-xl-3">
                <div class="card body_book_item">
                    <img class="card-img-top" src="/assets/book/img/<?=$item['sAnhSach']?>" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">
                            <?=$item['sTenSach']?>
                        </h5>
                        <p class="card-text">
                            Tác giả: <span><?=$item['sTacGia']?></span>
                        </p>
                        <p class="card-text">
                            Giá : <span><?=$item['iDonGia']?></span><span>đ</span>
                        </p>
                        <div class="d-flex align-items-center body_book_item_button">
                            <a href="chi-tiet-sach/<?=$item['iMaSach']?>" class="">Xem chi tiết </a>
                            <span>
                                <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach?>


        </div>

        <div class="body_book_list_action d-flex justify-content-center">
            <a href="list-book"> Xem tất cả </a>
        </div>
    </div>
    <div class="container-fluid body_banner">
        <h5>NHẬN BẢN TIN LÀM ĐẸP</h5>
        <p>
            Đừng bỏ lỡ hàng ngàn sản phẩm và chương trình siêu hấp
            dẫn
        </p>
    </div>
</div>
<div class="container">
    <div class="body_book_list">
        <h3>Sách Kinh Tế</h3>
        <div class="row grid-row-gap-3 mt-3">
            <div class="row grid-row-gap-3 mt-3">
                <?php foreach($sachGT as $item): ?>
                <div class="col-full col-xl-3">
                    <div class="card body_book_item">
                        <img class="card-img-top" src="/assets/book/img/<?=$item['sAnhSach']?>" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">
                                <?=$item['sTenSach']?>
                            </h5>
                            <p class="card-text">
                                Tác giả: <span><?=$item['sTacGia']?></span>
                            </p>
                            <p class="card-text">
                                Giá : <span><?=$item['iDonGia']?></span><span>đ</span>
                            </p>
                            <div class="d-flex align-items-center body_book_item_button">
                                <a href="chi-tiet-sach/<?=$item['iMaSach']?>" class="">Xem chi tiết </a>
                                <span>
                                    <i class="fa-solid fa-arrow-right"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach?>
            </div>


        </div>
        <div class="body_book_list_action d-flex justify-content-center">
            <a href="#"> Xem tất cả </a>
        </div>
        <div class="container-fluid body_banner">
            <h5>NHẬN BẢN TIN LÀM ĐẸP</h5>
            <p>
                Đừng bỏ lỡ hàng ngàn sản phẩm và chương trình siêu hấp
                dẫn
            </p>
        </div>
    </div>
    <div class="container">
        <div class="body_book_list">
            <h3>Sách Kinh Tế</h3>
            <div class="row grid-row-gap-3 mt-3">
                <div class="col-full col-xl-3">
                    <div class="card body_book_item" st>
                        <img class="card-img-top" src="/assets/img/KNS-AmThiTamLy.png" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">
                                Nhớ một trời ta đã quên Nhớ một trời ta
                                đã quên Nhớ một trời ta đã quên Nhớ một
                                trời ta đã quên
                            </h5>
                            <p class="card-text">
                                Tác giả: <span>Nam Cao</span>
                            </p>
                            <p class="card-text">
                                Giá : <span>100000</span><span>đ</span>
                            </p>
                            <div class="d-flex align-items-center body_book_item_button">
                                <a href="#" class="">Xem chi tiết </a>
                                <span>
                                    <i class="fa-solid fa-arrow-right"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-full col-xl-3">
                    <div class="card body_book_item" st>
                        <img class="card-img-top" src="/assets/img/KNS-AmThiTamLy.png" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">
                                Nhớ một trời ta đã quên Nhớ một trời ta
                                đã quên Nhớ một trời ta đã quên Nhớ một
                                trời ta đã quên
                            </h5>
                            <p class="card-text">
                                Tác giả: <span>Nam Cao</span>
                            </p>
                            <p class="card-text">
                                Giá : <span>100000</span><span>đ</span>
                            </p>
                            <div class="d-flex align-items-center body_book_item_button">
                                <a href="#" class="">Xem chi tiết </a>
                                <span>
                                    <i class="fa-solid fa-arrow-right"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-full col-xl-3">
                    <div class="card body_book_item" st>
                        <img class="card-img-top" src="/assets/img/KNS-AmThiTamLy.png" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">
                                Nhớ một trời ta đã quên Nhớ một trời ta
                                đã quên Nhớ một trời ta đã quên Nhớ một
                                trời ta đã quên
                            </h5>
                            <p class="card-text">
                                Tác giả: <span>Nam Cao</span>
                            </p>
                            <p class="card-text">
                                Giá : <span>100000</span><span>đ</span>
                            </p>
                            <div class="d-flex align-items-center body_book_item_button">
                                <a href="#" class="">Xem chi tiết </a>
                                <span>
                                    <i class="fa-solid fa-arrow-right"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-full col-xl-3">
                    <div class="card body_book_item" st>
                        <img class="card-img-top" src="/assets/img/KNS-AmThiTamLy.png" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">
                                Nhớ một trời ta đã quên Nhớ một trời ta
                                đã quên Nhớ một trời ta đã quên Nhớ một
                                trời ta đã quên
                            </h5>
                            <p class="card-text">
                                Tác giả: <span>Nam Cao</span>
                            </p>
                            <p class="card-text">
                                Giá : <span>100000</span><span>đ</span>
                            </p>
                            <div class="d-flex align-items-center body_book_item_button">
                                <a href="#" class="">Xem chi tiết </a>
                                <span>
                                    <i class="fa-solid fa-arrow-right"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="body_book_list_action d-flex justify-content-center">
                <a href="#"> Xem tất cả </a>
            </div>
        </div>
        <div class="container-fluid body_banner">
            <h5>NHẬN BẢN TIN LÀM ĐẸP</h5>
            <p>
                Đừng bỏ lỡ hàng ngàn sản phẩm và chương trình siêu hấp
                dẫn
            </p>
        </div>
    </div>
    <div class="container">
        <div class="body_book_list">
            <h3>Sách Chính Trị</h3>
            <div class="row grid-row-gap-3 mt-3">
                <div class="col-full col-xl-3">
                    <div class="card body_book_item" st>
                        <img class="card-img-top" src="/assets/img/KNS-AmThiTamLy.png" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">
                                Nhớ một trời ta đã quên Nhớ một trời ta
                                đã quên Nhớ một trời ta đã quên Nhớ một
                                trời ta đã quên
                            </h5>
                            <p class="card-text">
                                Tác giả: <span>Nam Cao</span>
                            </p>
                            <p class="card-text">
                                Giá : <span>100000</span><span>đ</span>
                            </p>
                            <div class="d-flex align-items-center body_book_item_button">
                                <a href="#" class="">Xem chi tiết </a>
                                <span>
                                    <i class="fa-solid fa-arrow-right"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-full col-xl-3">
                    <div class="card body_book_item" st>
                        <img class="card-img-top" src="/assets/img/KNS-AmThiTamLy.png" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">
                                Nhớ một trời ta đã quên Nhớ một trời ta
                                đã quên Nhớ một trời ta đã quên Nhớ một
                                trời ta đã quên
                            </h5>
                            <p class="card-text">
                                Tác giả: <span>Nam Cao</span>
                            </p>
                            <p class="card-text">
                                Giá : <span>100000</span><span>đ</span>
                            </p>
                            <div class="d-flex align-items-center body_book_item_button">
                                <a href="#" class="">Xem chi tiết </a>
                                <span>
                                    <i class="fa-solid fa-arrow-right"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-full col-xl-3">
                    <div class="card body_book_item" st>
                        <img class="card-img-top" src="/assets/img/KNS-AmThiTamLy.png" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">
                                Nhớ một trời ta đã quên Nhớ một trời ta
                                đã quên Nhớ một trời ta đã quên Nhớ một
                                trời ta đã quên
                            </h5>
                            <p class="card-text">
                                Tác giả: <span>Nam Cao</span>
                            </p>
                            <p class="card-text">
                                Giá : <span>100000</span><span>đ</span>
                            </p>
                            <div class="d-flex align-items-center body_book_item_button">
                                <a href="#" class="">Xem chi tiết </a>
                                <span>
                                    <i class="fa-solid fa-arrow-right"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-full col-xl-3">
                    <div class="card body_book_item" st>
                        <img class="card-img-top" src="/assets/img/KNS-AmThiTamLy.png" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">
                                Nhớ một trời ta đã quên Nhớ một trời ta
                                đã quên Nhớ một trời ta đã quên Nhớ một
                                trời ta đã quên
                            </h5>
                            <p class="card-text">
                                Tác giả: <span>Nam Cao</span>
                            </p>
                            <p class="card-text">
                                Giá : <span>100000</span><span>đ</span>
                            </p>
                            <div class="d-flex align-items-center body_book_item_button">
                                <a href="#" class="">Xem chi tiết </a>
                                <span>
                                    <i class="fa-solid fa-arrow-right"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="body_book_list_action d-flex justify-content-center">
                <a href="#"> Xem tất cả </a>
            </div>
        </div>
    </div>