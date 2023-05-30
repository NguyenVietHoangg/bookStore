<div class="body container">
    <h3 class="body_title">Sách Thiếu Nhi</h3>
    <!-- <div class="body_filter_block row">
                <div
                    class="col-12 col-xl-4 d-flex align-items-center body_filter_item"
                >
                    <label class="d-none d-xl-block"> Tên Sách</label>
                    <input type="text" name="" id="" />
                </div>
                <div
                    class="col-12 col-xl-4 d-flex align-items-center body_filter_item"
                >
                    <label class="d-none d-xl-block">Giá</label>
                    <select class="body_filter_item_menu">
                        <option value="volvo"><a href="">sdsdsdsd</a></option>
                        <option value="saab">0 đến 100000</option>
                        <option value="opel">100000 đến 200000</option>
                        <option value="audi">200000 đến 1.000.000</option>
                    </select>
                </div>
                <div
                    class="col-12 col-xl-4 d-flex align-items-center body_filter_item"
                >
                    <label class="d-none d-xl-block"> Thể Loại</label>
                    <select class="body_filter_item_menu">
                        <option value="volvo"><a href="">sdsdsdsd</a></option>
                        <option value="saab">0 đến 100000</option>
                        <option value="opel">100000 đến 200000</option>
                        <option value="audi">200000 đến 1.000.000</option>
                    </select>
                </div>
                <div
                    class="col-12 col-xl-4 d-flex align-items-center body_filter_item"
                >
                    <label class="d-none d-xl-block">Tác Giả</label>
                    <select class="body_filter_item_menu">
                        <option value="volvo"><a href="">sdsdsdsd</a></option>
                        <option value="saab">0 đến 100000</option>
                        <option value="opel">100000 đến 200000</option>
                        <option value="audi">200000 đến 1.000.000</option>
                    </select>
                </div>
            </div> -->

    <div class="row body_book-block  mt-3">
        <?php foreach($sach as $item): ?>

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


    <div class="row">
        <?=$page->links('default','custom_pagination')?>
    </div>

</div>