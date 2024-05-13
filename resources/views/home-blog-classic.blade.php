<x-blogzine.theme>
    <!-- =======================Main hero START -->
    <section class="pt-0 card-grid">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tiny-slider arrow-hover arrow-blur arrow-dark arrow-round rounded-3 overflow-hidden">
                        <div class="tiny-slider-inner" data-autoplay="true" data-hoverpause="true" data-gutter="0" data-arrow="true" data-dots="false" data-items="1">
                            <!-- Slide 1 -->
                            @foreach($posts as $index => $item)
                            <div class="card card-overlay-bottom card-bg-scale h-400 h-sm-500 h-md-600 rounded-0" style="background-image:url({{ asset($item->image_url) }}); background-position: center left; background-size: cover;">
                                <!-- Card Image overlay -->
                                <div class="card-img-overlay d-flex align-items-center p-3 p-sm-5">
                                    <div class="w-100 mt-auto">
                                        <div class="col-md-10 col-lg-7">
                                            <!-- Card category -->
                                            <a href="#" class="badge bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Diabetes</a>
                                            <a href="#" class="badge bg-secondary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Health</a>
                                            <!-- Card title -->
                                            @php
                                                $parts = explode("/",$item->guid);
                                                $slug = end($parts);
                                            @endphp
                                            <h2 class="text-white display-5"><a href="{{ url('post/'.$slug) }}" class="btn-link text-reset fw-normal">{{ $item->title }}</a></h2>
                                            <p class="text-white"> {{ mb_substr($item->first_paragraph, 0, 200) }} </p>
                                            <!-- Card info -->
                                            <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                                <li class="nav-item">
                                                    <div class="nav-link">
                                                        <div class="d-flex align-items-center text-white position-relative">
                                                            <div class="avatar avatar-sm">
                                                                <img class="avatar-img rounded-circle" src="blogzine/01.jpg" alt="avatar">
                                                            </div>
                                                            <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">{{ $item->creator }}</a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">{{ $item->pubDate }}</li>
                                                <li class="nav-item">3 min read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @break
                            @endforeach
                        </div>
                    </div>
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================Main hero END -->

    <!-- =======================Highlights START -->
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @foreach($posts as $index => $item)
                    @if($loop->first)
                        @continue
                    @endif
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
                                <a href="https://blogzine.webestica.com/index-5.html#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Diabetes</a>
                                <a href="https://blogzine.webestica.com/index-5.html#" class="badge bg-dark mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Health</a>
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
                                            <li class="nav-item me-3">{{ $item->pubDate}}</li>
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
            <!-- Service START -->
            <h3 class="mb-3 mt-5">สิ่งที่เราทำ</h3>
            <div class="row text-center my-4">
                <!-- Service item-->
                <div class="col-md-6 col-lg-3 mb-4">
                    {{-- <img class="rounded-circle" src="blogzine/01(1).jpg" alt="Card image"> --}}
                    <div class="my-4 text-primary">
                        <i class="fas fa-cloud fs-1"></i>
                    </div>
                    <h4 class="mt-3">การบันทึกข้อมูล</h4>
                    <p>การบันทึกข้อมูลผู้ป่วย การบันทึกค่าระดับน้ำตาลในเลือด และการบันทึกตารางการนัดหมาย</p>
                </div>
                <!-- Service item-->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="my-4 text-warning">
                        <i class="far fa-folder-open fs-1"></i>
                    </div>
                    <h4 class="mt-3">ความรู้ทั่วไป</h4>
                    <p>ความรู้ทั่วไปเกี่ยวกับโรคเบาหวานและอาการแทรกซ้อน การรับประทานอาหาร การออกกำลังกาย การจัดการความเครียด และการใช้ยา </p>
                </div>
                <!-- Service item-->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="my-4 text-danger">
                        <i class="far fa-bell fs-1"></i>
                    </div>
                    <h4 class="mt-3">การแจ้งเตือน</h4>
                    <p>การแจ้งเตือนความผิดปกติของระดับน้ำตาลในเลือด และการแจ้งเตือนการนัดหมายที่กำลังจะมาถึง</p>
                </div>
                <!-- Service item-->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="my-4  text-success">
                        <i class="far fa-comments fs-1"></i>
                    </div>
                    <h4 class="mt-3">พูดคุย</h4>
                    <p>พูดคุยแชทกับทีมสุขภาพ ผ่านช่องทางที่ผู้ใช้งานสะดวก</p>
                </div>
            </div>
            <!-- Service END -->
            {{-- <div class="row">
                <div class="col">
                    <a href="https://blogzine.webestica.com/index-5.html#" class="d-block card-img-flash">
                        <img src="blogzine/adv-3.png" alt="">
                    </a>
                    <small class="text-end d-block mt-1">Advertisement</small>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- =======================Adv END -->

    <!-- =======================Small post START -->
    <section class="pt-4 pb-0">
        <div class="container">
            <h3 class="mb-3 mt-5">วิดีโอ</h3>
            <div class="row">
                @foreach ($items as $index => $item)
                    <!-- Card item START -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card mb-4">
                            <!-- Card img -->
                            <div class="card-fold position-relative">
                                <img class="card-img" src="{{ $item->snippet->thumbnails->medium->url }}" alt="Card image">
                            </div>
                            <div class="card-body px-0 pt-3">
                                <h5 class="card-title">
                                    <a href="{{ url('watch/'.$item->id) }}" class="btn-link text-reset stretched-link fw-bold">{{ $item->snippet->title }}</a>
                                </h5>
                                <!-- Card info -->
                                <ul class="nav nav-divider align-items-center text-uppercase small">
                                    <li class="nav-item">
                                        <a href="#{{ $item->snippet->videoOwnerChannelId  }}" class="nav-link text-reset btn-link">{{ mb_substr($item->snippet->videoOwnerChannelTitle,0,20)  }}</a>
                                    </li>
                                    <li class="nav-item">{{ date("M d, Y",strtotime($item->snippet->publishedAt)) }}</li>
                                    {{-- <li class="nav-item">Mar 07, 2022</li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->
                @endforeach
            </div>
        </div>
    </section>
    <!-- =======================Small post END -->

    <!-- =======================Tab post START -->
    <section class="pt-4 pb-0 d-none">
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
