<x-blogzine.theme>
    <!-- =======================Main START -->
    <section>
        <div class="container position-relative" data-sticky-container="">
            <div class="row">
                <!-- Main Content START -->
                <div class="col-lg-8 mb-5">
                    <a href="#" class="badge bg-primary bg-opacity-10 text-primary mb-2 me-2">
                        <i class="fas fa-circle me-2 small fw-bold"></i>Diabetes
                    </a>
                    <a href="#" class="badge bg-secondary bg-opacity-10 text-secondary mb-2 me-2">
                        <i class="fas fa-circle me-2 small fw-bold"></i>Health
                    </a>
                    <span class="ms-2 small">Updated: {{ $post->pubDate }}</span>
                    <h1 class="display-5">{{ $post->title }}</h1>

                    <div class="ratio ratio-16x9 overflow-hidden rounded my-4 d-none">
                        <!-- HTML video START -->
                        <div class="player-wrapper rounded overflow-hidden">
                            <!-- <img src="{{ $post->image_url }}" /> -->
                        </div>
                        <!-- HTML video END -->
                    </div>

                    <?= $post->contentEncoded ?>
                    
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
                                    <h3 class="mb-0">{{ $post->creator }}</h3>
                                    <p>Writer</p>
                                </div>
                            </div>
                            <!-- <p>Louis Ferguson is a senior editor for the blogzine and also reports on breaking news based in London. He has written about government, criminal justice, and the role of money in politics since 2015. </p> -->
                            {{-- <a href="https://blogzine.webestica.com/post-single-6.html#" class="btn btn-danger-soft btn-sm ">View articles</a> --}}
                        </div>

                        <!-- Most read -->
                        <div>
                            <h5 class="mt-5 mb-3">บทความที่เกี่ยวข้อง</h5>

                            @foreach ($relates as $index => $item)
                            @php
                                $parts = explode('/', $item->guid);
                                $slug = end($parts);
                            @endphp
                            <div class="d-flex position-relative mb-3">
                                <span class="me-3 fa-fw fw-bold fs-3 opacity-5">0{{ $index +1 }}</span>
                                <h6><a href="{{ url('post/' . $slug) }}" class="stretched-link">{{ $item->title }}</a></h6>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
                <!-- Right sidebar END -->
            </div>
        </div>
    </section>
    <!-- =======================Main END -->

</x-blogzine.theme>