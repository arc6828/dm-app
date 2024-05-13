<x-blogzine.theme>
    <!-- =======================    Inner intro START -->
    <section class="pt-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bg-success bg-opacity-10 text-center rounded-3 p-4">
                        <h1 class="text-success">คลังวีดิโอ</h1>
                        <nav class="d-flex justify-content-center" aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dots mb-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}"><i
                                            class="bi bi-house me-1"></i>
                                        หน้าหลัก</a></li>
                                <li class="breadcrumb-item active">คลังวีดิโอ</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Inner intro END -->

    <!-- =======================
    Main content START -->
    <section class="position-relative pt-0">
        <div class="container">
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
            </div> <!-- Row end -->

            <!-- Pagination START -->
            <nav class="mb-5 d-flex justify-content-center d-none" aria-label="navigation">
                <ul class="pagination pagination-bordered ">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Prev</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#">..</a></li>
                    <li class="page-item"><a class="page-link" href="#">15</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
            <!-- Pagination END -->
        </div>
    </section>
    <!-- =======================    Main content END -->

</x-blogzine.theme>
