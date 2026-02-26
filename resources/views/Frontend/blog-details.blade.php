@extends('layouts.frontend')

@section('title')
    {{ $blog->meta_title }}
@endsection

@section('meta_description')
    {{ $blog->meta_description }}
@endsection

@section('content')
    <!-- your blog content -->
@section('structured_data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BlogPosting",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ url()->current() }}"
      },
      "headline": "{{ addslashes($blog->meta_title ?? $blog->title) }}",
      "description": "{{ addslashes(strip_tags($blog->meta_description ?? Str::limit($blog->content ?? '', 150))) }}",
      "author": {
        "@type": "Person",
        "name": "{{ addslashes($blog->author_name ?? 'Admin') }}"
      },
      "publisher": {
        "@type": "Organization",
        "name": "OEM Used Car Part",
        "logo": {
          "@type": "ImageObject",
          "url": "{{ url('/frontend/my-img/old-logo.webp') }}"
        }
      },
      "datePublished": "{{ $blog->created_at->toIso8601String() }}",
      "dateModified": "{{ $blog->updated_at->toIso8601String() }}"
    }
    @if(!empty($blog->faqs) && count($blog->faqs) > 0)
    ,
    {
      "@type": "FAQPage",
      "mainEntity": [
        @foreach($blog->faqs as $faq)
        {
          "@type": "Question",
          "name": "{{ addslashes($faq['question']) }}",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "{{ addslashes(strip_tags($faq['answer'])) }}"
          }
        }@if(!$loop->last),@endif
        @endforeach
      ]
    }
    @endif
  ]
}
</script>
@endsection



<style>

    /* Mobile */
@media (max-width: 768px) {
    .blog__details--content h2 { font-size: 24px; }
    .blog__details--content h3 { font-size: 20px; }
    .blog__details--content h4 { font-size: 18px; }
    .blog__details--content h5 { font-size: 16px; }
    .blog__details--content h6 { font-size: 15px; }
    .blog__details--content p,
    .blog__details--content ul,
    .blog__details--content ol {
        font-size: 15px;
    }
    .blog-details-right {
        position: static;
    }
}

/* ================================
   Blog Details Styling
================================ */
.blog__details--content h1,
.blog__details--content h2,
.blog__details--content h3,
.blog__details--content h4,
.blog__details--content h5,
.blog__details--content h6 {
    margin: 1.2em 0 0.5em;
    font-weight: 600;
    color: #1a1a1a;
}

/* Headings */
.blog__details--content h1 {
    font-size: 36px;
    line-height: 1.25;
    margin: 1.5em 0 0.6em;
    font-weight: 700;
    color: #111;
}

.blog__details--content h2 {
    font-size: 28px;
    line-height: 1.3;
    margin: 1.4em 0 0.6em;
    font-weight: 600;
}

.blog__details--content h3 {
    font-size: 24px;
    line-height: 1.35;
    margin: 1.3em 0 0.6em;
    font-weight: 600;
}

.blog__details--content h4 {
    font-size: 20px;
    line-height: 1.4;
    margin: 1.2em 0 0.5em;
    font-weight: 600;
}

.blog__details--content h5 {
    font-size: 18px;
    line-height: 1.45;
    margin: 1.1em 0 0.5em;
    font-weight: 600;
}

.blog__details--content h6 {
    font-size: 16px;
    line-height: 1.5;
    margin: 1em 0 0.4em;
    font-weight: 600;
}


.blog__details--content p {
    margin-bottom: 1rem;
    line-height: 1.7;
    color: #333;
    font-size: 16px;
}

.blog__details--content ul,
.blog__details--content ol {
    margin: 1rem 0 1rem 1.5rem;
    padding-left: 1.2rem;
    font-size: 16px;
}

.blog__details--content ul li,
.blog__details--content ol li {
    margin-bottom: 0.5rem;
    line-height: 1.6;
}

/* Checklist styling */
.blog__details--content ul.checklist {
    list-style: none;
    padding-left: 0;
}
.blog__details--content ul.checklist li {
    display: flex;
    align-items: center;
    margin-bottom: 0.8rem;
}
.blog__details--content ul.checklist li input[type="checkbox"] {
    margin-right: 10px;
    accent-color: #2e7d32;
}

/* Image Styling */
.blog__details--content .image-container {
    text-align: center;
    margin: 1.5rem 0;
}
.blog__details--content .image-container img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
}
.blog__details--content .image-container p.caption {
    font-size: 14px;
    color: #777;
    margin-top: 0.5rem;
    font-style: italic;
}

/* Table Styling */
.blog__details--content table.editor-table {
    width: 100%;
    border-collapse: collapse;
    margin: 1.5rem 0;
}
.blog__details--content table.editor-table td,
.blog__details--content table.editor-table th {
    border: 1px solid #ddd;
    padding: 8px;
    font-size: 15px;
}
.blog__details--content table.editor-table tr:nth-child(even) {
    background-color: #f9f9f9;
}
.blog__details--content table.editor-table tr:hover {
    background-color: #f1f1f1;
}
.blog__details--content table.editor-table th {
    background-color: #f0f0f0;
    font-weight: bold;
}

/* Delimiter Styling */
.blog__details--content hr {
    border: none;
    border-top: 1px solid #ccc;
    margin: 2rem 0;
}

/* Link Styling */
.blog__details--content a {
    color: #fdb819;
    text-decoration: underline;
}
.blog__details--content a:hover {
    color: #fdb819;
}

.blog__details--content ul {
    list-style-type: disc !important;
    padding-left: 1.5rem;
    margin-bottom: 1rem;
    color: #333;
}

.blog__details--content ul li {
    margin-bottom: 1.9rem;
    line-height: 1.6;
}

.blog__details--content .image-container p.caption {
    font-size: 14px;
    color: #777;
    margin-top: 0.5rem;
    font-style: italic;
    display: none;
}

.blog__details--content table.editor-table td, .blog__details--content table.editor-table th {
    border: 1px solid #ddd;
    padding: 8px;
    font-size: 15px;
    color: #000000;
}
/* ================================
   Sidebar (Recent Blogs)
================================ */
.blog-details-right {
    position: sticky;
    top: 100px; /* distance from top when scrolling */
    align-self: start;
}
.blog-details-recent {
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0,0,0,0.05);
}
.blog-details-recent h3 {
    margin-bottom: 20px;
    font-weight: 600;
}
.blog-details-inner {
    display: flex;
    gap: 15px;
    margin-bottom: 20px;
    align-items: center;
}
.blog-details-inner img {
    border-radius: 6px;
}
.blog-details-inner a {
    color: #222;
    font-weight: 500;
    text-decoration: none;
    line-height: 1.3;
}
.blog-details-inner a:hover {
    color: #fdb819;
}
.blog-details-inner ul {
    padding: 0; 
    margin: 5px 0 0;
    list-style: none;
    font-size: 14px;
    color: #777;
}
.blog-details-inner ul li {
    display: inline-block;
    margin-right: 10px;
}

.blog__details--content ul li, .blog__details--content ol li {
    margin-bottom: 0.5rem;
    line-height: 1.6;
    color: #333333;
}

.blog__details--content ul,
.blog__details--content ol {
    text-align: left !important;
    list-style-position: outside;
    padding-left: 22px !important;
    margin-left: 0 !important;
    max-width: 100% !important;
    border-top: none !important;
    padding-top: 0 !important;
    margin-top: 1rem !important;
}

.blog__details--content ul {
    list-style: disc !important;
}

.blog__details--content ol {
    list-style: decimal !important;
}

.blog__details--content li {
    display: list-item !important;
}

.blog-details-item .blog-details-head ul li {
    list-style-type: disc;
    display: inline-block;
    font-size: 14px;
    margin-left: 8px;
    margin-right: 8px;
}



/* ================================
   Responsive Adjustments
================================ */
@media (max-width: 991px) {
    .blog-details-right {
        position: static;
        top: auto;
    }
}

@media (max-width: 768px) {
    .blog__details--content {
        font-size: 15px;
    }

    .blog__details--content ul,
    .blog__details--content ol {
        margin-left: 1rem;
    }
}

.blog-details-img__image {
    width: 100%;
    max-width: 856px;
    height: auto;
    object-fit: cover;
    display: block;
    border-radius: 10px;
}

/* Mobile */
@media (max-width: 768px) {
    .blog-details-img__image {
        width: 100%;
        height: auto;
    }
}


</style>

<!-- Page Title -->
<div class="page-title-area">
    <img src="/frontend/assets/img/home-one/footer-car.png" alt="Title">
    <div class="container">
        <div class="page-title-content">
            <h2>{{ $blog->title }}</h2>
            <ul>
                <li><a href="/">Home</a></li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>{{ $blog->title }}</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title -->

<div class="blog-details-area pt-100 pb-70">
    <div class="blog-details-shape">
        <img src="/frontend/assets/img/blog-details-shape.png" alt="Blog Details">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <!-- Main Blog Content -->
            <div class="col-lg-8">
                <div class="blog-details-item">
                    <div class="blog-details-img">
                        <img 
                            src="{{ asset(Storage::url($blog->photo)) }}" 
                            alt="Blog Details"
                            class="blog-details-img__image">
                        <div class="date">
                            <p>{{ \Carbon\Carbon::parse($blog->publish_date)->timezone('Asia/Kolkata')->format('d') }}</p>
                            <span>{{ \Carbon\Carbon::parse($blog->publish_date)->timezone('Asia/Kolkata')->format('M') }}</span>
                        </div>
                        <ul>
                            <li>
                                <a href="#0">
                                    <i class='bx bx-user'></i>
                                    {{ $blog->author }}
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="blog-details-head blog__details--content">
                        
                        @php
                            $description = json_decode($blog->description, true);
                            if (!empty($description['blocks']) && is_array($description['blocks'])) {
                                foreach ($description['blocks'] as $d) {
                                    switch ($d['type']) {
                                        case 'header':
                                            $level = $d['data']['level'] ?? 2;
                                            echo "<h{$level}>{$d['data']['text']}</h{$level}>";
                                            break;
                                        case 'paragraph':
                                            echo "<p>{$d['data']['text']}</p>";
                                            break;
                                        case 'delimiter':
                                            echo '<hr>';
                                            break;
                                        case 'image':
                                            if (!empty($d['data']['file']['url'])) {
                                                $url = htmlspecialchars($d['data']['file']['url']);
                                                $caption = $d['data']['caption'] ?? '';
                                                $align = $d['data']['alignment'] ?? 'center';
                                                echo "<div class='image-container {$align}'><img src='{$url}' alt='".strip_tags($caption)."'>";
                                                if ($caption) echo "<p class='caption'>{$caption}</p>";
                                                echo "</div>";
                                            }
                                            break;
                                        case 'list':
                                            $items = $d['data']['items'] ?? [];
                                            $style = $d['data']['style'] ?? 'unordered';
                                            if ($style === 'ordered') {
                                                echo "<ol>";
                                                foreach ($items as $item) echo "<li>{$item['content']}</li>";
                                                echo "</ol>";
                                            } elseif ($style === 'unordered') {
                                                echo "<ul>";
                                                foreach ($items as $item) echo "<li>{$item['content']}</li>";
                                                echo "</ul>";
                                            } elseif ($style === 'checklist') {
                                                echo "<ul class='checklist'>";
                                                foreach ($items as $item) {
                                                    $checked = !empty($item['meta']['checked']) ? 'checked' : '';
                                                    echo "<li><input type='checkbox' disabled {$checked}> {$item['content']}</li>";
                                                }
                                                echo "</ul>";
                                            }
                                            break;
                                        case 'table':
                                            if (!empty($d['data']['content'])) {
                                                echo '<table class="editor-table">';
                                                foreach ($d['data']['content'] as $row) {
                                                    echo '<tr>';
                                                    foreach ($row as $cell) echo "<td>{$cell}</td>";
                                                    echo '</tr>';
                                                }
                                                echo '</table>';
                                            }
                                            break;
                                        case 'linkTool':
                                            if (!empty($d['data']['link'])) {
                                                $href = htmlspecialchars($d['data']['link']);
                                                $text = $d['data']['meta']['title'] ?? $href;
                                                echo "<a href='{$href}' target='_blank'>{$text}</a>";
                                            }
                                            break;
                                    }
                                }
                            } else {
                                echo '<p>No description available.</p>';
                            }
                        @endphp
                    </div>

                </div>
            </div>
                                                                                                                                                                   
            <!-- Right Sidebar -->
            <div class="col-lg-4">
                <div class="blog-details-right">
                    <div class="blog-details-recent">
                        <h3>Recent Blogs</h3>
                        @foreach($latestBlogs as $latest)
                        <div class="blog-details-inner">
                            <img 
                                src="{{ asset(Storage::url($latest->photo)) }}" 
                                alt="Blog Details"
                                style="width: 104px; height: 96px; object-fit: cover; display: block;">
                            <div>
                                <a href="{{ route('blogs.details', $latest->slug) }}">
                                    {{ $latest->title }}
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ route('blogs.details', $latest->slug) }}">
                                            <i class='bx bxs-user'></i>
                                            {{ $latest->author }}
                                        </a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-calendar'></i>
                                        {{ $latest->publish_date }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    document
        .querySelectorAll(".blog__details--content a")
        .forEach(function (link) {
            link.setAttribute("target", "_blank");
            link.setAttribute("rel", "noopener noreferrer");
        });
});
</script>

@endsection
