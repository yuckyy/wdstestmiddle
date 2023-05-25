<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="antialiased">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container bd-subnavbar py-2">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/Logo.svg') }}" alt="Khan Tech">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Book now</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container mt-5">
    <div class="row ">
        <div class="col-8 ">
            <div class="row">
                <div class="col-6" style="padding-right: 0px!important;">
                    <img src="{{ asset('img/Pic.svg') }}" alt="Khan Tech">
                </div>
                <div class="col-6" style="padding-left: 0px!important;background-color: #F5F5F5">
                    <div class="container pr-0">
                        <div class="mt-4">
                            <h6 class="text-primary">Pharmaceuticals</h6>
                            <h4 class="font-weight-medium">A Sure Way To Get Rid Of Your Back </h4>
                            <h4 class="font-weight-medium">Ache Problem</h4>
                            <span class="text-dark">If you have tried everything, but still seem to suffer from snoring, don’t give up. Before turning to surgery, consider shopping for anti-snore devices. These products do not typically require a prescription, are economically priced and may just be the answer that you are looking for. However, as is the case when shopping for anything, there are a lot of anti-snore devices out there and…</span>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="col-4 ">
            <h2 class="">Our Latest News</h2>
            <div class="mt-3 news-item"
                 style="height: 114.66666412353516px;width: 425px;left: 1195px;top: 216px;border-radius: 0px;padding: 16px 32px 16px 32px;background: linear-gradient(0deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{ asset('img/anti-cellulite-massage-luxury-spa.jpg') }});background-size: cover, 425px;background-position: center center;">
                <h5 style="color:white;font-weight: medium;">Basic Swedish Back Massage Techniques</h5><small
                    style="font-weight: medium; color:white">28 Feb 2021</small></div>
            <div class="mt-3"
                 style="height: 114.66666412353516px;width: 425px;left: 1195px;top: 216px;border-radius: 0px;padding: 16px 32px 16px 32px;background: linear-gradient(0deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{ asset('img/close-up-man-writing-code-laptop.jpg') }});background-size: cover, 425px;background-position: center center;">
                <h5 style="color:white;font-weight: medium;">How to Learn Coding for Beginners</h5><small
                    style="font-weight: medium; color:white">28 Feb 2021</small></div>
            <div class="mt-3"
                 style="height: 114.66666412353516px;width: 425px;left: 1195px;top: 216px;border-radius: 0px;padding: 16px 32px 16px 32px;background: linear-gradient(0deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{ asset('img/side-view-cropped-unrecognizable-business-people-working-common-desk.jpg') }});background-size: cover, 425px;background-position: center center;">
                <h5 style="color:white;font-weight: medium;">Google’s Influence Over Think Tanks</h5><small
                    style="font-weight: Medium; color:white">28 Feb 2021</small></div>
        </div>

    </div>
</div>
<div class="container-fluid mt-5 pt-5" style="background-color: #F5F5F5">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 text-center mt-5">
                <h1>Testimonials</h1>
            </div>
            <div class="col-2 mt-5  ">
                <div class="testimonial-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <span class="testimonial-name">Jane Cooper</span><br>
                                <span class="testimonial-position">CTO - Dovas Inc.</span><br>
                                <span class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sapien, nec, egestas neque ipsum duis habitasse enim. Id ullamcorper at posuere mauris adipiscing aliquet risus. Malesuada amet.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">
                        <div class="">
                            <img class="testimonial-avatar"
                                 src="{{asset('img/d5ccbad2112445bc5336399da1f1aefa.png')}} ">
                        </div>
                    </div>
                    <div class="col-9 ">
                        <span class="testimonial-name">Dianne Russell</span>
                    </div>
                </div>
            </div>
            <div class="col-2 mt-5  ">
                <div class="testimonial-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <span class="testimonial-name">Jane Cooper</span><br>
                                <span class="testimonial-position">CTO - Dovas Inc.</span><br>
                                <span class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sapien, nec, egestas neque ipsum duis habitasse enim. Id ullamcorper at posuere mauris adipiscing aliquet risus. Malesuada amet.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">
                        <div class="">
                            <img class="testimonial-avatar"
                                 src="{{asset('img/d5ccbad2112445bc5336399da1f1aefa.png')}} ">
                        </div>
                    </div>
                    <div class="col-9 ">
                        <span class="testimonial-name">Dianne Russell</span>
                    </div>
                </div>
            </div>
            <div class="col-2 mt-5  ">
                <div class="testimonial-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <span class="testimonial-name">Jane Cooper</span><br>
                                <span class="testimonial-position">CTO - Dovas Inc.</span><br>
                                <span class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sapien, nec, egestas neque ipsum duis habitasse enim. Id ullamcorper at posuere mauris adipiscing aliquet risus. Malesuada amet.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">
                        <div class="">
                            <img class="testimonial-avatar"
                                 src="{{asset('img/d5ccbad2112445bc5336399da1f1aefa.png')}} ">
                        </div>
                    </div>
                    <div class="col-9 ">
                        <span class="testimonial-name">Dianne Russell</span>
                    </div>
                </div>
            </div>
            <div class="col-2 mt-5  ">
                <div class="testimonial-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <span class="testimonial-name">Jane Cooper</span><br>
                                <span class="testimonial-position">CTO - Dovas Inc.</span><br>
                                <span class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sapien, nec, egestas neque ipsum duis habitasse enim. Id ullamcorper at posuere mauris adipiscing aliquet risus. Malesuada amet.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">
                        <div class="">
                            <img class="testimonial-avatar"
                                 src="{{asset('img/d5ccbad2112445bc5336399da1f1aefa.png')}} ">
                        </div>
                    </div>
                    <div class="col-9 ">
                        <span class="testimonial-name">Dianne Russell</span>
                    </div>
                </div>
            </div>
            <div class="col-2 mt-5 five-columns ">
                <div class="testimonial-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <span class="testimonial-name">Jane Cooper</span><br>
                                <span class="testimonial-position">CTO - Dovas Inc.</span><br>
                                <span class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sapien, nec, egestas neque ipsum duis habitasse enim. Id ullamcorper at posuere mauris adipiscing aliquet risus. Malesuada amet.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">
                        <div class="">
                            <img class="testimonial-avatar"
                                 src="{{asset('img/d5ccbad2112445bc5336399da1f1aefa.png')}} ">
                        </div>
                    </div>
                    <div class="col-9 ">
                        <span class="testimonial-name">Dianne Russell</span>
                    </div>
                </div>
            </div>
            <div class="col-2 mt-5  ">
                <div class="testimonial-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <span class="testimonial-name">Jane Cooper</span><br>
                                <span class="testimonial-position">CTO - Dovas Inc.</span><br>
                                <span class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sapien, nec, egestas neque ipsum duis habitasse enim. Id ullamcorper at posuere mauris adipiscing aliquet risus. Malesuada amet.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">
                        <div class="">
                            <img class="testimonial-avatar"
                                 src="{{asset('img/d5ccbad2112445bc5336399da1f1aefa.png')}} ">
                        </div>
                    </div>
                    <div class="col-9 ">
                        <span class="testimonial-name">Dianne Russell</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
