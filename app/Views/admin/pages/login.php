<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <base href="<?= base_url()?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <!-- css file -->
    <link rel="stylesheet" href="/assets/client/css/global.css" />
    <link rel="stylesheet" href="/assets/client/css/login.css" />
    <!-- font icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Đăng nhập</title>
</head>

<body>
    <!-- header -->

    <!-- body -->
    <div class="container-fluid position-relative p-0 body">
        <img src="/assets/client/img/login-bg02.png" alt="login" />
        <div class="position-absolute body_login">
            <div class="body_login_form position-absolute">
                <p>Đăng Nhập</p>
                <form action="/loginAction" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên đăng nhập</label>
                        <input type="email" name="sEmail" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Nhập email" />

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mật khẩu</label>
                        <input type="password" name="sPassword" class="form-control" id="exampleInputPassword1"
                            placeholder="Nhập mật khẩu" />
                    </div>
                    <a href="#">Bạn chưa có tài khoản?</a>
                    <button type="submit" class="btn">
                        Đăng nhập
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>