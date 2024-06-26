<x-blogzine.theme>
    <!-- =======================Main hero START -->
    <section class="p-0">
        <div class="container-fluid">
            <div class="row g-0">
                <div class="col-xxl-10 mx-auto rounded-3 overflow-hidden">
                    <div class="tiny-slider arrow-hover arrow-blur arrow-round position-relative">
                        <div class="tiny-slider-inner" data-autoplay="false" data-hoverpause="true" data-gutter="2" data-arrow="false" data-dots="true" data-items="1">
                            @foreach($posts as $index => $item)
                            <!-- Slide item -->
                            <div class="card bg-dark-overlay-3 rounded-0 h-400 h-lg-500 h-xl-700 position-relative overflow-hidden" style="background-image:url({{ asset($item->image_url) }}); background-position: center left; background-size: cover;">
                                <!-- Card Image overlay -->
                                <div class="card-img-overlay rounded-0 d-flex align-items-center">
                                    <div class="container px-3 my-auto">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <!-- Card category -->
                                                <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Diabetes</a>
                                                <!-- Card title -->
                                                <h2 class="text-white display-5"><a href="post-single-4.html" class="btn-link text-reset fw-normal">{{ $item->title }}</a></h2>
                                                <p class="text-white">{{ mb_substr($item->first_paragraph, 0, 140) }}</p>
                                                <!-- Card info -->
                                                <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                                    <li class="nav-item">
                                                        <div class="nav-link">
                                                            <div class="d-flex align-items-center text-white position-relative">
                                                                <div class="avatar avatar-sm">
                                                                    <img class="avatar-img rounded-circle" src="{{ asset('blogzine/11.jpg') }}" alt="avatar">
                                                                    <!-- <img class="avatar-img rounded-circle" src="assets/images/avatar/11.jpg" alt="avatar"> -->
                                                                </div>
                                                                <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">{{ $item->creator }}</a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item">{{ $item->pubDate }}</li>
                                                    <li class="nav-item">5 min read</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!-- Custom thumb START -->
                        <div class="col-xl-4 custom-thumb pe-5 position-absolute top-50 end-0 translate-middle-y d-none d-xxl-block" id="custom-thumb">
                            
                            <!-- Thumb 3 -->
                            <div class="row align-items-center g-3">
                                <div class="col-auto">
                                    <div class="avatar avatar-lg">
                                        <img class="avatar-img rounded-circle" src="{{ asset('blogzine/03.jpg') }}" alt="avatar">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <h4 class="fw-normal text-truncate mb-1">Initial problem of startups and their solution</h4>
                                    <p class="text-truncate d-block col-11 small mb-0">Drawings offended yet answered Jennings perceive</p>
                                </div>
                            </div>
                        </div>
                        <!-- Custom thumb END -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================Main hero END -->

    <!-- =======================Highlights START -->
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @foreach($posts as $index => $item)
                    <!-- Card item START -->
                    <div class="card border rounded-3 up-hover p-4 mb-4">
                        <div class="row g-3">
                            <div class="col-lg-5">
                                <!-- Categories -->
                                <!-- https://github.com/arc6828/samkhok/blob/main/components/latest-tail.php -->
                                @foreach (preg_grep("/[^A-z]+/", $item->category) as $c)
                                <!-- <a href="category.php?q=<?= $c ?>" class="category"><?= $c ?></a> | -->
                                <a href="https://blogzine.webestica.com/index-5.html#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>{{ $c }}</a>
                                @endforeach
                                <a href="https://blogzine.webestica.com/index-5.html#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Marketing</a>
                                <a href="https://blogzine.webestica.com/index-5.html#" class="badge bg-dark mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Startups</a>
                                <!-- Title -->
                                @php
                                $parts = explode("/",$item->guid);
                                $slug = end($parts);
                                @endphp

                                <h2 class="card-title">
                                    <!-- <a href="https://blogzine.webestica.com/post-single-6.html" class="btn-link text-reset stretched-link">7 common mistakes everyone makes while traveling</a> -->
                                    <a href="{{ url('post/'.$slug) }}" class="btn-link text-reset stretched-link">{{$item->title}}</a>
                                </h2>
                                <!-- Author info -->
                                <div class="d-flex align-items-center position-relative mt-3">
                                    <div class="avatar me-2">
                                        <img class="avatar-img rounded-circle" src="blogzine/07.jpg" alt="avatar">
                                    </div>
                                    <div>
                                        <h5 class="mb-1"><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">{{ $item->creator }}</a></h5>
                                        <ul class="nav align-items-center small">
                                            <li class="nav-item me-3">Mar 07, 2022</li>
                                            <li class="nav-item"><i class="far fa-clock me-1"></i>5 min read</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Detail -->
                            <div class="col-md-6 col-lg-4">
                                <p>{{ mb_substr($item->first_paragraph, 0, 140) }}</p>
                            </div>
                            <!-- Image -->
                            <div class="col-md-6 col-lg-3">
                                <img class="rounded-3" src="{{ $item->image_url }}" alt="Card image">
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->
                    @endforeach

                    <!-- Load more -->
                    <button type="button" class="btn btn-primary-soft w-100">Load more post <i class="bi bi-arrow-down-circle ms-2 align-middle"></i></button>

                </div>
            </div>
        </div>
    </section>
    <!-- =======================Highlights END -->

    <!-- =======================Adv START -->
    <section class="p-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="https://blogzine.webestica.com/index-5.html#" class="d-block card-img-flash">
                        <img src="blogzine/adv-3.png" alt="">
                    </a>
                    <small class="text-end d-block mt-1">Advertisement</small>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================Adv END -->

    <!-- =======================Small post START -->
    <section class="pt-4 pb-0">
        <div class="container">
            <div class="row">
                <!-- Card item START -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4">
                        <!-- Card img -->
                        <div class="card-fold position-relative">
                            <img class="card-img" src="blogzine/07(1).jpg" alt="Card image">
                        </div>
                        <div class="card-body px-0 pt-3">
                            <h4 class="card-title"><a href="https://blogzine.webestica.com/post-single.html" class="btn-link text-reset stretched-link fw-bold">7 common mistakes everyone makes while traveling</a></h4>
                            <!-- Card info -->
                            <ul class="nav nav-divider align-items-center text-uppercase small">
                                <li class="nav-item">
                                    <a href="https://blogzine.webestica.com/index-5.html#" class="nav-link text-reset btn-link">Louis Ferguson</a>
                                </li>
                                <li class="nav-item">Mar 07, 2022</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->
                <!-- Card item START -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4">
                        <!-- Card img -->
                        <div class="card-fold position-relative">
                            <img class="card-img" src="blogzine/08.jpg" alt="Card image">
                            <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                <!-- Card overlay Top -->
                                <div class="w-100 mb-auto d-flex justify-content-end">
                                    <div class="text-end ms-auto">
                                        <!-- Card format icon -->
                                        <div class="icon-md bg-white bg-opacity-10 bg-blur text-white fw-bold rounded-circle" title="8.5 rating">8.5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-3">
                            <h4 class="card-title"><a href="https://blogzine.webestica.com/post-single.html" class="btn-link text-reset stretched-link fw-bold">Skills that you can learn from business</a></h4>
                            <!-- Card info -->
                            <ul class="nav nav-divider align-items-center text-uppercase small">
                                <li class="nav-item">
                                    <a href="https://blogzine.webestica.com/index-5.html#" class="nav-link text-reset btn-link">Samuel Bishop</a>
                                </li>
                                <li class="nav-item">Aug 15, 2022</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->
                <!-- Card item START -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4">
                        <!-- Card img -->
                        <div class="card-fold position-relative">
                            <img class="card-img" src="blogzine/09.jpg" alt="Card image">
                        </div>
                        <div class="card-body px-0 pt-3">
                            <h4 class="card-title"><a href="https://blogzine.webestica.com/post-single.html" class="btn-link text-reset stretched-link fw-bold">10 tell-tale signs you need to get a new business</a></h4>
                            <!-- Card info -->
                            <ul class="nav nav-divider align-items-center text-uppercase small">
                                <li class="nav-item">
                                    <a href="https://blogzine.webestica.com/index-5.html#" class="nav-link text-reset btn-link">Dennis Barrett</a>
                                </li>
                                <li class="nav-item">Jun 01, 2022</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->
                <!-- Card item START -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4">
                        <!-- Card img -->
                        <div class="card-fold position-relative">
                            <img class="card-img" src="blogzine/10.jpg" alt="Card image">
                        </div>
                        <div class="card-body px-0 pt-3">
                            <h4 class="card-title"><a href="https://blogzine.webestica.com/post-single.html" class="btn-link text-reset stretched-link fw-bold">This is why this year will be the year of startups</a></h4>
                            <!-- Card info -->
                            <ul class="nav nav-divider align-items-center text-uppercase small">
                                <li class="nav-item">
                                    <a href="https://blogzine.webestica.com/index-5.html#" class="nav-link text-reset btn-link">Bryan Knight</a>
                                </li>
                                <li class="nav-item">Dec 07, 2022</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->
                <!-- Card item START -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4">
                        <!-- Card img -->
                        <div class="card-fold position-relative">
                            <img class="card-img" src="blogzine/11.jpg" alt="Card image">
                            <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                <!-- Card overlay Top -->
                                <div class="w-100 mb-auto d-flex justify-content-end">
                                    <div class="text-end ms-auto">
                                        <!-- Card format icon -->
                                        <div class="icon-md bg-success text-white fw-bold rounded-circle" title="This post has video"><i class="fas fa-video"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-3">
                            <h4 class="card-title"><a href="https://blogzine.webestica.com/post-single.html" class="btn-link text-reset stretched-link fw-bold">Best Pinterest Boards for learning about business</a></h4>
                            <!-- Card info -->
                            <ul class="nav nav-divider align-items-center text-uppercase small">
                                <li class="nav-item">
                                    <a href="https://blogzine.webestica.com/index-5.html#" class="nav-link text-reset btn-link">Judy Nguyen</a>
                                </li>
                                <li class="nav-item">Sep 07, 2022</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->
                <!-- Card item START -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4">
                        <!-- Card img -->
                        <div class="card-fold position-relative">
                            <img class="card-img" src="blogzine/12.jpg" alt="Card image">
                        </div>
                        <div class="card-body px-0 pt-3">
                            <h4 class="card-title"><a href="https://blogzine.webestica.com/post-single.html" class="btn-link text-reset stretched-link fw-bold">How did we get here? The real history of our business</a></h4>
                            <!-- Card info -->
                            <ul class="nav nav-divider align-items-center text-uppercase small">
                                <li class="nav-item">
                                    <a href="https://blogzine.webestica.com/index-5.html#" class="nav-link text-reset btn-link">Amanda Reed</a>
                                </li>
                                <li class="nav-item">Aug 06, 2022</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->
                <!-- Card item START -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4">
                        <!-- Card img -->
                        <div class="card-fold position-relative">
                            <img class="card-img" src="blogzine/13.jpg" alt="Card image">
                        </div>
                        <div class="card-body px-0 pt-3">
                            <h4 class="card-title"><a href="https://blogzine.webestica.com/post-single.html" class="btn-link text-reset stretched-link fw-bold">Facts about business that will put you in a good mood</a></h4>
                            <!-- Card info -->
                            <ul class="nav nav-divider align-items-center text-uppercase small">
                                <li class="nav-item">
                                    <a href="https://blogzine.webestica.com/index-5.html#" class="nav-link text-reset btn-link">Joan Wallace</a>
                                </li>
                                <li class="nav-item">Feb 18, 2022</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->
                <!-- Card item START -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4">
                        <!-- Card img -->
                        <div class="card-fold position-relative">
                            <img class="card-img" src="blogzine/14.jpg" alt="Card image">
                            <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                <!-- Card overlay Top -->
                                <div class="w-100 mb-auto d-flex justify-content-end">
                                    <div class="text-end ms-auto">
                                        <!-- Card format icon -->
                                        <div class="icon-md bg-danger text-white fw-bold rounded-circle" title="This post has audio"><i class="fas fa-volume-up"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-3">
                            <h4 class="card-title"><a href="https://blogzine.webestica.com/post-single.html" class="btn-link text-reset stretched-link fw-bold">Questions everyone working in IT should know how to answer</a></h4>
                            <!-- Card info -->
                            <ul class="nav nav-divider align-items-center text-uppercase small">
                                <li class="nav-item">
                                    <a href="https://blogzine.webestica.com/index-5.html#" class="nav-link text-reset btn-link">Lori Stevens</a>
                                </li>
                                <li class="nav-item">Jun 03, 2022</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->
            </div>
        </div>
    </section>
    <!-- =======================Small post END -->

    <!-- =======================Tab post START -->
    <section class="pt-4 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation"> <a class="nav-link fs-5 active" data-bs-toggle="tab" href="https://blogzine.webestica.com/index-5.html#tab-1-1" aria-selected="true" role="tab"> <i class="fab fa-readme me-2"></i> Most read </a> </li>
                        <li class="nav-item" role="presentation"> <a class="nav-link fs-5" data-bs-toggle="tab" href="https://blogzine.webestica.com/index-5.html#tab-1-2" aria-selected="false" tabindex="-1" role="tab"> <i class="fas fa-fire me-2"></i> Trending </a> </li>
                    </ul>
                    <div class="tab-content">
                        <!-- Most read tab START -->
                        <div class="tab-pane show active" id="tab-1-1" role="tabpanel">
                            <div class="row">
                                <!-- Tab items group START -->
                                <div class="col-md-4">
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">01</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">The most common business debate isn't as black and white as you might think</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">02</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">Never underestimate the influence of social media</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">03</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">Business ideas that will boom in upcoming years</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">04</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">How the 10 worst business fails of all time could have been prevented</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">05</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">8 initial problem of startups and their solution</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">06</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">Dirty little secrets about the business industry</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">07</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">Ten unconventional tips about startups that you can't learn from books</a></h5>
                                    </div>
                                </div>
                                <!-- Tab items group END -->
                                <!-- Tab items group START -->
                                <div class="col-md-4">
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">08</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">How did we get here? The history of the business told through tweets</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">09</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">Bad habits that people in the business industry need to quit</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">10</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">7 lessons that will teach you all you need to know a startup</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">11</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">12 worst types of business accounts you follow on Twitter</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">12</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">Around the web: 20 fabulous info-graphics about business</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">13</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">10 biggest problem of startups, and how you can fix it</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">14</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">The no. 1 question everyone working in business should know how to answer</a></h5>
                                    </div>
                                </div>
                                <!-- Tab items group END -->
                                <!-- Tab items group START -->
                                <div class="col-md-4">
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">15</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">Best Twitter accounts for learning about investment</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">16</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">This is why this year will be the year of startups</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">17</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">Best Pinterest Boards for learning about business</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">18</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">10 tell-tale signs you need to get a new business</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">19</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">The business debate isn't as black and white as you might think</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">20</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">Questions everyone working in IT should know how to answer</a></h5>
                                    </div>
                                </div>
                                <!-- Tab items group END -->
                            </div>
                        </div>
                        <!-- Most read tab END -->
                        <!-- Trending tab START -->
                        <div class="tab-pane show" id="tab-1-2" role="tabpanel">
                            <div class="row">
                                <!-- Tab items group START -->
                                <div class="col-md-4">
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">01</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">10 facts about business that will instantly put you in a good mood</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">02</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">Around the web: 20 fabulous info-graphics about business</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">03</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">The most common business debate isn't as black and white as you might think</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">04</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">The business debate isn't as black and white as you might think</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">05</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">12 worst types of business accounts you follow on Twitter</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">06</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">7 lessons that will teach you all you need to know a startup</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">07</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">Worst business fails of all time could have been prevented</a></h5>
                                    </div>
                                </div>
                                <!-- Tab items group END -->
                                <!-- Tab items group START -->
                                <div class="col-md-4">
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">08</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">8 initial problem of startups and their solution</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">09</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">This is why this year will be the year of startups</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">10</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">Dirty little secrets about the business industry</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">11</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">10 biggest problem of startups, and how you can fix it</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">12</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">The no. 1 question everyone working in business should know how to answer</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">13</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">Best Twitter accounts for learning about investment</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">14</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">Best Pinterest Boards for learning about business</a></h5>
                                    </div>
                                </div>
                                <!-- Tab items group END -->
                                <!-- Tab items group START -->
                                <div class="col-md-4">
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">15</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">10 tell-tale signs you need to get a new business</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">16</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">How 10 worst business fails of all time could have been prevented</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">17</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">Questions everyone working in IT should know how to answer</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">18</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">Business idea that will instantly put you in a good mood</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">19</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">How did we get here? The real history of our business</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">20</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">7 common mistakes everyone makes while traveling</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">21</span>
                                        <h5><a href="https://blogzine.webestica.com/index-5.html#" class="stretched-link text-reset btn-link">Worst business fails of all time could have been prevented</a></h5>
                                    </div>
                                </div>
                                <!-- Tab items group END -->
                            </div>
                        </div>
                        <!-- Trending tab END -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================Tab post END -->

</x-blogzine.theme>