@extends('layouts.frontend')
@section('title') Blogs | OEM Used Car Parts @endsection

@section('content')

<style>
    /* ================= PAGINATION ================= */
    .pagination__list {
        list-style-type: none !important;
        text-decoration: none !important;
    }

    .pagination__item--arrow {
        font-size: 18px;
        font-weight: bold;
        padding: 12px 20px;
        color: #fff;
        background-color: #f39200;
        border-radius: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .pagination__item--arrow:hover {
        background-color: #333;
        color: #fff;
        transform: scale(1.1);
        cursor: pointer;
    }

    .pagination__list.disabled .pagination__item--arrow {
        color: #ccc;
        background-color: #f1f1f1;
        cursor: not-allowed;
    }

    .pagination__item {
        padding: 10px 15px;
        font-size: 16px;
        color: #333;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        margin: 0 6px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .pagination__item:hover {
        background-color: #f39200;
        color: white;
    }

    .pagination__item--current {
        background-color: #f39200;
        color: white;
    }

    .pagination__wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }

    /* ================= BLOG CARDS ================= */
    .blog-area-two {
        padding-bottom: 0px;
    }

    .blog-item {
        display: flex;
        flex-direction: column;
        height: 100%;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        background-color: #fff;
        transition: transform 0.3s ease;
    }

    .blog-item:hover {
        transform: translateY(-5px);
    }

    .blog-top img {
    width: 100%;
    aspect-ratio: 626 / 391;
    object-fit: cover;
    border-radius: 8px;
    display: block;
}

/* Optional fallback for very old browsers */
.blog-top {
    position: relative;
    overflow: hidden;
}


    .blog-date {
        position: absolute;
        top: 15px;
        left: 15px;
        background-color: #f39200;
        color: #fff;
        padding: 10px 12px;
        text-align: center;
        border-radius: 8px;
    }

    .blog-date p {
        font-size: 18px;
        font-weight: bold;
        margin: 0;
    }

    .blog-date span {
        display: block;
        font-size: 14px;
    }

    .blog-bottom {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 15px;
    }

    .blog-bottom h3 a {
        display: -webkit-box;
        -webkit-line-clamp: 2; /* max 2 lines */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-decoration: none;
        color: #333;
        font-weight: 600;
    }

    .blog-bottom ul {
        display: flex;
        justify-content: space-between;
        padding: 0;
        margin: 10px 0 0 0;
        list-style: none;
    }

    .blog-bottom ul li a {
        color: #f39200;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .blog-bottom ul li a:hover {
        color: #333;
    }

    /* Force 3 cards per row */
    @media (min-width: 992px) {
        .col-lg-4 {
            flex: 0 0 33.3333%;
            max-width: 33.3333%;
        }
    }
    @media (min-width: 768px) and (max-width: 991px) {
        .col-md-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }
    }
    @media (max-width: 767px) {
        .col-sm-12 {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    .blog-img {
    width: 900px;
    height: 494px;
    object-fit: cover;
    border-radius: 10px;
}

/* Mobile */
@media (max-width: 768px) {
    .blog-img {
        width: 100%;
        height: 220px;
    }
}
</style>

<section class="page-title-area">
    <img src="/frontend/assets/img/home-one/footer-car.png" alt="Title">
    <div class="container">
        <div class="page-title-content">
            <h2>Blogs</h2>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <i class='bx bx-chevron-right'></i>
                </li>
                <li>Blogs</li>
            </ul>
        </div>
    </div>
</section>

<section class="blog-area blog-area-two pt-100">
    <div class="container">
        <div class="row justify-content-center">

            @forelse($blogs as $blog)
                @php
                    $content = json_decode($blog->description, true);
                    $previewText = '';
                    if (isset($content['blocks'][0]['data']['text'])) {
                        $previewText = strip_tags($content['blocks'][0]['data']['text']);
                    } else {
                        $previewText = strip_tags($blog->description);
                    }
                @endphp

                <div class="col-sm-12 col-md-6 col-lg-4 d-flex mb-4">
                    <div class="blog-item">
                        <div class="blog-top">
                            <div class="blog-date">
                               <p>{{ \Carbon\Carbon::parse($blog->publish_date)->timezone('Asia/Kolkata')->format('d') }}</p>
                                <span>{{ \Carbon\Carbon::parse($blog->publish_date)->timezone('Asia/Kolkata')->format('M') }}</span>
                            </div>
                            <a href="{{ route('blogs.details', $blog->slug) }}">
                                <img 
                                    src="{{ $blog->photo ? asset(Storage::url($blog->photo)) : asset('frontend/assets/img/default-blog.jpg') }}" 
                                    alt="Blog">
                            </a>
                        </div>
                        <div class="blog-bottom">
                            <h3>
                                <a href="{{ route('blogs.details', $blog->slug) }}">{{ $blog->title }}</a>
                            </h3>
                            <ul>
                                <li>
                                    <a href="{{ route('blogs.details', $blog->slug) }}">{{ $blog->author }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('blogs.details', $blog->slug) }}">Read More
                                        <i class='bx bx-chevron-right'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            @empty
                <div class="col-12 text-center py-5">
                    <h4>No blogs available right now.</h4>
                </div>
            @endforelse
        </div>

        {{-- Pagination --}}
        @if($blogs->hasPages())
            <div class="pagination__area bg__gray--color mt-5">
                <nav class="pagination justify-content-center">
                    <ul class="pagination__wrapper d-flex align-items-center justify-content-center">

                        {{-- Previous --}}
                        <li class="pagination__list {{ $blogs->onFirstPage() ? 'disabled' : '' }}">
                            @if(!$blogs->onFirstPage())
                                <a href="{{ $blogs->previousPageUrl() }}" class="pagination__item--arrow link">
                                    <i class="bx bx-chevron-left"></i> Prev
                                </a>
                            @else
                                <span class="pagination__item--arrow"><i class="bx bx-chevron-left"></i> Prev</span>
                            @endif
                        </li>

                        {{-- Page numbers --}}
                        @for($i = 1; $i <= $blogs->lastPage(); $i++)
                            <li class="pagination__list">
                                @if($i == $blogs->currentPage())
                                    <span class="pagination__item pagination__item--current">{{ $i }}</span>
                                @else
                                    <a href="{{ $blogs->url($i) }}" class="pagination__item link">{{ $i }}</a>
                                @endif
                            </li>
                        @endfor

                        {{-- Next --}}
                        <li class="pagination__list {{ $blogs->hasMorePages() ? '' : 'disabled' }}">
                            @if($blogs->hasMorePages())
                                <a href="{{ $blogs->nextPageUrl() }}" class="pagination__item--arrow link">
                                    Next <i class="bx bx-chevron-right"></i>
                                </a>
                            @else
                                <span class="pagination__item--arrow">Next <i class="bx bx-chevron-right"></i></span>
                            @endif
                        </li>
                    </ul>
                </nav>
            </div>
        @endif

    </div>
</section>

@endsection
