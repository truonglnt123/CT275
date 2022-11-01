<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin tức</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="../asset/css/style.css" type="text/css">
    
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <?php require_once '../partials/header.php' ?>
    <!-- Chèn header -->
    <main>
        <div id="breadcrumb-background">
            <p class="text-center" id="title-page">Tin tức</p>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center" id="bread-crumb">
                    <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                    <li class="breadcrumb-item active" style="color: rgb(247, 148, 29); font-weight: 600;" aria-current="page">Tin tức</li>
                </ol>
            </nav>
        </div>
        <div id="news-content" class="container">
            <div id="box-header" class="row">
                <p><span>TIN TỨC</span></p>
            </div>
            <div id="news-body" class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <img src="../asset/img/news/news-main1.webp" alt="">
                    <div class="d-flex justify-content-center align-items-center news-author">
                        <i class="fas fa-calendar-check"></i>&nbsp;<b>17/04/2022</b>&nbsp;&nbsp;Đăng bởi:<b>LUXENUS</b>
                    </div>
                    <div class="blogs">
                        <a class="news-blog" href="">Mẹo bảo quản & vệ sinh các đồ nội thất</a>
                        <p class="blog-summary">Đối với nội thất bằng kim loại, khi xử lý các vết bẩn thông thường, bạn chỉ cầ...</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <img src="../asset/img/news/news-main2.webp" alt="">
                    <div class="d-flex justify-content-center align-items-center news-author">
                        <i class="fas fa-calendar-check"></i>&nbsp;<b>14/11/2022</b>&nbsp;&nbsp;Đăng bởi:<b>LUXENUS</b>
                    </div>
                    <div class="blogs">
                        <a class="news-blog" href="">Thư thái trong chính căn hộ của bạn</a>
                        <p class="blog-summary">Nét thư thái và thanh lịch là cảm nhận đầu tiên mà nhà nghĩ tới khi kể cho khách ...</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <img src="../asset/img/news/news-main3.webp" alt="">
                    <div class="d-flex justify-content-center align-items-center news-author">
                        <i class="fas fa-calendar-check"></i>&nbsp;<b>3/5/2022</b>&nbsp;&nbsp;Đăng bởi:<b>LUXENUS</b>
                    </div>
                    <div class="blogs">
                        <a class="news-blog" href="">Bảo quản đồ gỗ khi độ ẩm không khí cao</a>
                        <p class="blog-summary">Đồ nội thất bằng gỗ chất lượng cao là một sự đầu tư tuyệt vời để trang trí ngôi nhà ...</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <img src="../asset/img/news/news-main4.webp" alt="">
                    <div class="d-flex justify-content-center align-items-center news-author">
                        <i class="fas fa-calendar-check"></i>&nbsp;<b>15/5/2022</b>&nbsp;&nbsp;Đăng bởi:<b>LUXENUS</b>
                    </div>
                    <div class="blogs">
                        <a class="news-blog" href="">Chọn kích thước bàn ăn như nào cho phù hợp?</a>
                        <p class="blog-summary">Chiều cao tiêu chuẩn của bàn ăn phụ thuộc vào chiều cao trung bình của người sử dụng ...</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <img src="../asset/img/news/news-main5.webp" alt="">
                    <div class="d-flex justify-content-center align-items-center news-author">
                        <i class="fas fa-calendar-check"></i>&nbsp;<b>15/01/2022</b>&nbsp;&nbsp;Đăng bởi:<b>LUXENUS</b>
                    </div>
                    <div class="blogs">
                        <a class="news-blog" href="">Nhà đẹp không thể thiếu những món decor này?</a>
                        <p class="blog-summary">Đồ decor luôn là một nhân tố không thể thiếu trong không gian nội thất, bởi lẽ ch ...</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <img src="../asset/img/news/news-main6.webp" alt="">
                    <div class="d-flex justify-content-center align-items-center news-author">
                        <i class="fas fa-calendar-check"></i>&nbsp;<b>01/09/2022</b>&nbsp;&nbsp;Đăng bởi:<b>LUXENUS</b>
                    </div>
                    <div class="blogs">
                        <a class="news-blog" href="">Có nên dùng gỗ công nghiệp cho đồ nội thất ?</a>
                        <p class="blog-summary">Đối với không ít người, việc lựa chọn đồ gỗ nội thất là một việc cực kỳ đau đầu ...</p>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- Chèn footer -->
    <?php require_once '../partials/footer.php' ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>
</html>