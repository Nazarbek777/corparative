@extends('layouts.frontend2')
@section('content')
<main id="content" class="wrapper layout-page">
    <section class="page-title z-index-2 position-relative">

        <div class="bg-body-secondary">
            <div class="container">
                <nav class="py-4 lh-30px" aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center py-1">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog Update</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="text-center py-13">
            <div class="container">
                <h2 class="mb-0">Blog Update</h2>
            </div>
        </div>
    </section>

    <div class="container mb-lg-18 mb-15 pb-3">
        <div class="row gy-50px">
            @foreach($news as $new)
                <div class="col-md-6 col-lg-4">
                    <article class="card card-post-grid-1 bg-transparent border-0" data-animate="fadeInUp">
                        <figure class="card-img-top position-relative mb-10">
                            <a href="#" class="hover-shine hover-zoom-in d-block" title="{{ $new->{'title_' . app()->getLocale()} }}">
                                <img data-src="{{ asset('storage/' . $new->image) }}"
                                     class="img-fluid lazy-image w-100"
                                     alt="{{ $new->{'title_' . app()->getLocale()} }}"
                                     width="370" height="450" style="width: 370px!important; height: 450px !important;">
                            </a>
                            <a href="#" class="post-item-cate btn btn-light btn-text-light-body-emphasis btn-hover-bg-dark btn-hover-text-light fw-500 post-cat position-absolute top-100 start-50 translate-middle py-2 px-7 border-0"
                               title="Category">Life style</a>
                        </figure>
                        <div class="card-body text-center px-md-9 py-0">
                            <h4 class="card-title lh-base mb-9">
                                <a class="text-decoration-none" href="details-01.html"
                                   title="{{ $new->{'title_' . app()->getLocale()} }}">
                                    {{ $new->{'title_' . app()->getLocale()} }}
                                </a>
                            </h4>
                            <ul class="post-meta list-inline lh-1 d-flex flex-wrap justify-content-center m-0">
                                <li class="list-inline-item border-end pe-5 me-5">By <a href="#" title="Admin">Admin</a></li>
                                <li class="list-inline-item">{{ \Carbon\Carbon::parse($new->date)->format('M d, Y') }}</li>
                            </ul>
                        </div>
                    </article>
                </div>
            @endforeach


        </div>
        <nav class="d-flex mt-13 pt-3 justify-content-center" aria-label="pagination" data-animate="fadeInUp">
            <ul class="pagination m-0">
                {{-- Previous Page Link --}}
                @if ($news->onFirstPage())
                    <li class="page-item disabled">
                <span class="page-link rounded-circle d-flex align-items-center justify-content-center" aria-label="Previous">
                    <svg class="icon">
                        <use xlink:href="#icon-angle-double-left"></use>
                    </svg>
                </span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link rounded-circle d-flex align-items-center justify-content-center" href="{{ $news->previousPageUrl() }}" aria-label="Previous">
                            <svg class="icon">
                                <use xlink:href="#icon-angle-double-left"></use>
                            </svg>
                        </a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($news->links()->elements[0] as $page => $url)
                    @if ($page == $news->currentPage())
                        <li class="page-item active"><a class="page-link" href="#">{{ $page }}</a></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($news->hasMorePages())
                    <li class="page-item">
                        <a class="page-link rounded-circle d-flex align-items-center justify-content-center" href="{{ $news->nextPageUrl() }}" aria-label="Next">
                            <svg class="icon">
                                <use xlink:href="#icon-angle-double-right"></use>
                            </svg>
                        </a>
                    </li>
                @else
                    <li class="page-item disabled">
                <span class="page-link rounded-circle d-flex align-items-center justify-content-center" aria-label="Next">
                    <svg class="icon">
                        <use xlink:href="#icon-angle-double-right"></use>
                    </svg>
                </span>
                    </li>
                @endif
            </ul>
        </nav>

    </div>

</main>
@endsection
