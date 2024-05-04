<x-blogzine.theme>
    <!-- =======================    Inner intro START -->
    <section class="pt-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bg-primary bg-opacity-10 p-4 p-md-5 rounded-3 text-center">
                        <h1 class="text-primary">Knowledge</h1>
                        <nav class="d-flex justify-content-center" aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dots m-0">
                                <li class="breadcrumb-item"><a href="index.html"><i class="bi bi-house me-1"></i>
                                        Home</a></li>
                                <li class="breadcrumb-item active">All posts</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================    Inner intro END -->

    <!-- =======================    Main content START -->
    <section class="position-relative pt-0">
        <div class="container">
            <div class="row">
                <!-- Main Post START -->
                <div class="col-12">

                    @foreach ($posts as $index => $item)
                        <!-- Card item START -->
                        <div class="card border rounded-3 up-hover p-4 mb-4">
                            <div class="row g-3">
                                <div class="col-lg-5">
                                    <!-- Categories -->
                                    <!-- https://github.com/arc6828/samkhok/blob/main/components/latest-tail.php -->
                                    @foreach (preg_grep('/[^A-z]+/', $item->category) as $c)
                                        <!-- <a href="category.php?q=<?= $c ?>" class="category"><?= $c ?></a> | -->
                                        <a href="https://blogzine.webestica.com/index-5.html#"
                                            class="badge text-bg-danger mb-2"><i
                                                class="fas fa-circle me-2 small fw-bold"></i>{{ $c }}</a>
                                    @endforeach
                                    <a href="https://blogzine.webestica.com/index-5.html#"
                                        class="badge text-bg-danger mb-2"><i
                                            class="fas fa-circle me-2 small fw-bold"></i>Diabetes</a>
                                    <a href="https://blogzine.webestica.com/index-5.html#" class="badge bg-dark mb-2"><i
                                            class="fas fa-circle me-2 small fw-bold"></i>Health</a>
                                    <!-- Title -->
                                    @php
                                        $parts = explode('/', $item->guid);
                                        $slug = end($parts);
                                    @endphp

                                    <h2 class="card-title">
                                        <!-- <a href="https://blogzine.webestica.com/post-single-6.html" class="btn-link text-reset stretched-link">7 common mistakes everyone makes while traveling</a> -->
                                        <a href="{{ url('post/' . $slug) }}"
                                            class="btn-link text-reset stretched-link">{{ $item->title }}</a>
                                    </h2>
                                    <!-- Author info -->
                                    <div class="d-flex align-items-center position-relative mt-3">
                                        <div class="avatar me-2">
                                            <img class="avatar-img rounded-circle" src="blogzine/07.jpg" alt="avatar">
                                        </div>
                                        <div>
                                            <h5 class="mb-1"><a href="https://blogzine.webestica.com/index-5.html#"
                                                    class="stretched-link text-reset btn-link">{{ $item->creator }}</a>
                                            </h5>
                                            <ul class="nav align-items-center small">
                                                <li class="nav-item me-3">{{ $item->pubDate }}</li>
                                                <li class="nav-item"><i class="far fa-clock me-1"></i>5 min read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Detail -->
                                <div class="col-md-6 col-lg-4">
                                    <p>{{ mb_substr($item->first_paragraph, 0, 256) }}</p>
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
                    <button type="button" class="btn btn-primary-soft w-100">
                        Load more post <i class="bi bi-arrow-down-circle ms-2 align-middle"></i>
                    </button>

                </div>
                <!-- Main Post END -->
            </div> <!-- Row end -->
        </div>
    </section>
    <!-- =======================    Main content END -->

</x-blogzine.theme>
