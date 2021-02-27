<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


    <style>
        @font-face {
            font-family: iransans;
            src: url(./A-Iranian-Sans/IranianSans.ttf);
        }

        body {
            font-family: iransans;
        }

        #main-content {
            color: #cbd5e0;
        }


    </style>

    <title>BORNA</title>
</head>
<body>
<div class="container-fluid">

    <!-- navbar -->
    <h5> <span class="badge bg-secondary mt-2">                    021-22998856

                    </span></h5>

    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"> تماس با ما
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"> درباره ما
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">مقالات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">خدمات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#"> محصولات
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">صفحه اصلی</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{--    slider--}}
    <div id="carouselExampleCaptions" class="carousel slide mt-4" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./images/slide1.jpg" class="d-block w-100" alt="..." width="1116" height="464">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./images/slide2.jpg" class="d-block w-100" alt="..." width="1116" height="464">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./images/slide3.jpg" class="d-block w-100" alt="..." width="1116" height="464">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="row px-2 mt-2">
        <div class="col-12 bg-dark text-center p-5" id="main-content">
            <p class="">
            <h5>آب آرا</h5>
            شرکت آب‌آرا با هدف ارتقای کیفی لوازم، بهبود روش‌های کاربردی سیستم‌های آبیاری تحت فشار و کاهش هزینه‌ها در
            واحد سطح از سال 1374 فعالیت خود را در زمینه‌ی تولید و عرضه‌ی تجهیزات آبیاری بارانی آغاز نمود. آب‌آرا با
            ارتقای سطح کیفی محصولات خود و تجهیز خط تولید و استفاده از کارشناسان باتجربه موفق به افزایش چشمگیر حجم و تنوع
            تولید گردیده، بطوری‌که هم اکنون با بهینه‌سازی سیستم‌های خود توانایی پاسخ‌گویی به مشتریان را در کمترین زمان و
            با قیمت‌های مناسب دارد.
            </p>

        </div>
    </div>


    {{--    footer--}}
    <div class="footer">
        <div class="row">
            <div class="col-4 text-center p4-2 py-3">
                <p> آدرس : تهران، ضلع جنوب‌غربی میدان شیخ بهایی، کوچه وحدت، پلاک ۶
                </p>
                <p>
                    تلفن: ۴۲۶۹۶-۰۲۱
                </p>
                <p> فکس: ۹-۸۸۶۱۰۵۵۸-۰۲۱</p>
            </div>
            <div class="col-3 text-center px-4 py-3">
                center content
            </div>
            <div class="col-4 text-center px-4 py-3">
                <p>
                    شرکت آب‌آرا با هدف ارتقای کیفی لوازم، بهبود روش‌های کاربردی سیستم‌های آبیاری تحت فشار و کاهش
                    هزینه‌ها در واحد سطح از سال 1374 فعالیت خود را در زمینه‌ی تولید و عرضه‌ی تجهیزات آبیاری بارانی آغاز
                    نمود.
                </p>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
        crossorigin="anonymous"></script>

</body>
</html>
