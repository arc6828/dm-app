<x-blogzine.theme>
    <!-- =======================Main START -->
    <section>
        <div class="container position-relative" data-sticky-container="">
            <div class="row">
                <!-- Main Content START -->
                <div class="col-lg-8 mb-5">
                    <a href="https://blogzine.webestica.com/post-single-6.html#"
                        class="badge bg-danger bg-opacity-10 text-danger mb-2"><i
                            class="fas fa-circle me-2 small fw-bold"></i>Video</a>
                    <span class="ms-2 small">Updated: 15 April 2022 07:30 IST</span>
                    <h1 class="display-5">{{ $post->snippet->title }}</h1>

                    <div class="ratio ratio-16x9 overflow-hidden rounded my-4 d-none">
                        <!-- HTML video START -->
                        <div class="player-wrapper rounded overflow-hidden">
                            {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $post->snippet->resourceId->videoId }}?si=0HlmdWD2cb7L2NWW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
                        </div>
                        <!-- HTML video END -->
                    </div>
                    <style>
                        .youtube-container {
                            position: relative;
                            width: 100%;
                            padding-bottom: 56.25%;
                            /* Aspect ratio for 16:9 videos */
                            height: 0;
                        }

                        .youtube-container iframe {
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                        }
                    </style>
                    <div class="youtube-container">
                        <iframe src="https://www.youtube-nocookie.com/embed/{{ $post->snippet->resourceId->videoId }}"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>



                </div>
                <!-- Main Content END -->
                <!-- Right sidebar START -->
                <div class="col-lg-4">
                    <div data-sticky="" data-margin-top="80" data-sticky-for="991">
                        <!-- About me -->
                        <div class="bg-light rounded p-3 p-md-4">
                            <div class="d-flex mb-3">
                                <!-- Avatar -->
                                <a class="flex-shrink-0" href="https://blogzine.webestica.com/post-single-6.html#">
                                    <div class="avatar avatar-xl border border-4 border-danger rounded-circle">
                                        <img class="avatar-img rounded-circle" src="../blogzine/05.jpg" alt="avatar">
                                    </div>
                                </a>
                                <div class="flex-grow-1 ms-3">
                                    <span>Hello, I'm </span>
                                    <h3 class="mb-0">{{ $post->snippet->videoOwnerChannelTitle }}</h3>
                                    <p>Writer</p>
                                </div>
                            </div>
                            <!-- <p>Louis Ferguson is a senior editor for the blogzine and also reports on breaking news based in London. He has written about government, criminal justice, and the role of money in politics since 2015. </p> -->
                            <a href="https://blogzine.webestica.com/post-single-6.html#"
                                class="btn btn-danger-soft btn-sm ">View articles</a>
                        </div>

                        <!-- Most read -->
                        <div>
                            <h5 class="mt-5 mb-3">Most read</h5>
                            <div class="d-flex position-relative mb-3">
                                <span class="me-3 fa-fw fw-bold fs-3 opacity-5">01</span>
                                <h6><a href="https://blogzine.webestica.com/post-single-6.html#"
                                        class="stretched-link">Bad habits that people in the business industry need to
                                        quit</a></h6>
                            </div>
                            <div class="d-flex position-relative mb-3">
                                <span class="me-3 fa-fw fw-bold fs-3 opacity-5">03</span>
                                <h6><a href="https://blogzine.webestica.com/post-single-6.html#"
                                        class="stretched-link">How 10 worst business fails of all time could have been
                                        prevented</a></h6>
                            </div>
                            <div class="d-flex position-relative mb-3">
                                <span class="me-3 fa-fw fw-bold fs-3 opacity-5">04</span>
                                <h6><a href="https://blogzine.webestica.com/post-single-6.html#"
                                        class="stretched-link">10 facts about business that will instantly put you in a
                                        good mood</a></h6>
                            </div>
                            <div class="d-flex position-relative mb-3">
                                <span class="me-3 fa-fw fw-bold fs-3 opacity-5">05</span>
                                <h6><a href="https://blogzine.webestica.com/post-single-6.html#"
                                        class="stretched-link">How did we get here? The history of the business told
                                        through tweets</a></h6>
                            </div>
                            <div class="d-flex position-relative mb-3">
                                <span class="me-3 fa-fw fw-bold fs-3 opacity-5">06</span>
                                <h6><a href="https://blogzine.webestica.com/post-single-6.html#"
                                        class="stretched-link">Ten tips about startups that you can't learn from
                                        books</a></h6>
                            </div>
                            <div class="d-flex position-relative mb-3">
                                <span class="me-3 fa-fw fw-bold fs-3 opacity-5">07</span>
                                <h6><a href="https://blogzine.webestica.com/post-single-6.html#"
                                        class="stretched-link">How to worst business fails of all time could have been
                                        prevented</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right sidebar END -->
            </div>
        </div>
    </section>
    <!-- =======================Main END -->

</x-blogzine.theme>
