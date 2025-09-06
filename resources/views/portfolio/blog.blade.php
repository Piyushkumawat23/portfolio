@extends('layouts.app')

@section('content')
    <!-- End Header Section -->

    <!-- Main content inside start-->
    <main>
        <!-- Start Blog Section -->
        <div class="cs_height_90 cs_height_lg_90"></div>
        <div class="cs_height_120 cs_height_lg_80"></div>
        <section>
            <div class="container">
                <div class="cs_blog cs_style_4">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <a href="blog-details" class="cs_image_box cs_style_4 cs_radius_10 overflow-hidden">
                                <img class="w-100" src="public/assets/img/blog/blog_d1.jpg" alt="blog_details_img">
                            </a>
                            <div class="cs_height_lg_40"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cs_pl_50">
                                <span class="cs_blog_meta cs_radius_10 cs_font_16 cs_accent_color">Featured</span>
                                <h3 class="cs_blog_title cs_font_36 cs_semi_bold"><a class="cs_accent_color_2_hover"
                                        href="blog-details">How to design a user-centric mobile application?</a></h3>
                                <p class="cs_blog_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                    commodo ligula eget dolor.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <span class="cs_font_16">26 July 2022</span>
                                        <a href="blog-details"
                                            class="cs_blog_author_name cs_accent_color_2 cs_accent_color_2_hover cs_text_btn cs_type_2 cs_font_16">John
                                            Smith</a>
                                    </div>
                                    <a href="blog-details"
                                        class="cs_circle_btn cs_style_1 cs_accent_color cs_center rounded-circle">
                                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 10L10 1" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M1 1H10V10" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 10L10 1" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M1 1H10V10" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Section -->

        <!-- Start Blog Section -->
        <section>
            <div class="cs_height_115 cs_height_lg_70"></div>
            <div class="container">
                <div class="cs_title_search_wrap">
                    <h3 class="cs_title">Recent Articles</h3>
                    <form class="cs_search_form cs_style_1 position-relative overflow-hidden cs_radius_10 cs_white_bg">
                        <input class="form-control h-100 w-100 cs_white_bg" type="search" name="search-blog"
                            id="search-blog" placeholder="Search..." required>
                        <button type="submit" class="cs_center position-absolute h-100 top-0 end-0">
                            <img src="public/assets/img/icon/search_icon.svg" alt="search">
                        </button>
                    </form>
                </div>
                <div class="cs_height_60 cs_height_lg_30"></div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="cs_category cs_style_1 cs_white_bg cs_radius_10 overflow-hidden">
                            <h4 class="cs_category_title">Categories</h4>
                            <ul class="cs_mp_0">
                                {{-- Check if no category is selected, then make 'All' active --}}
                                <li class="{{ !request('category') ? 'active' : '' }}">
                                    <a href="{{ url('/blog') }}">All</a>
                                </li>
                                @foreach ($categories as $cat)
                                    {{-- Check if the current category ID matches the category ID in the request --}}
                                    <li class="{{ request('category') == $cat->id ? 'active' : '' }}">
                                        <a href="{{ url('/blog?category=' . $cat->id) }}">
                                            {{ $cat->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-8 offset-lg-1">
                        <div class="cs_height_lg_40"></div>
                        <div class="cs_blog_wrap">

                            @if ($blogs->count() > 0)
                                @foreach ($blogs as $blog)
                                    <div class="cs_blog cs_style_1 cs_transition_4">
                                        <div class="flex-none">
                                            <a href="{{ route('blog.details', $blog->slug) }}"
                                                class="cs_blog_thumbnail cs_zoom">
                                                <img class="cs_zoom_in"
                                                    src="{{ $blog->featured_image ? asset('public/uploads/blogs/' . $blog->featured_image) : asset('public/assets/img/blog/default.jpg') }}"
                                                    alt="{{ $blog->title }}">
                                            </a>
                                        </div>
                                        <div class="cs_blog_info">
                                            <div class="cs_blog_date text-nowrap cs_secondary_color">
                                                <div class="cs_font_36 cs_semi_bold cs_primary_font">
                                                    {{ $blog->created_at->format('d') }}
                                                </div>
                                                <span class="cs_font_16 d-inline-block">
                                                    {{ $blog->created_at->format('M Y') }}
                                                </span>
                                            </div>
                                            <h2 class="cs_blog_title cs_font_20 cs_semi_bold">
                                                <a class="cs_accent_color_2_hover"
                                                    href="{{ route('blog.details', $blog->slug) }}">
                                                    {{ $blog->title }}
                                                </a>
                                            </h2>
                                            <p class="cs_secondary_color">
                                                {{ Str::limit($blog->description, 120) }}
                                            </p>
                                            <span class="cs_secondary_color">
                                                {{ $blog->read_time_minutes ?? 3 }} mins read
                                            </span>
                                            <a href="{{ route('blog.details', $blog->slug) }}"
                                                class="cs_circle_btn cs_style_1 cs_type_1 cs_accent_color_2 cs_center rounded-circle">
                                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 10L10 1" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M1 1H10V10" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 10L10 1" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M1 1H10V10" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="cs_empty_state text-center cs_white_bg cs_radius_10 p-5">
                                    <img src="{{ asset('public/uploads/blogs/nobloge.webp') }}" alt="No Blogs"
                                        class="mb-4" width="120">
                                    <h4 class="cs_font_24 cs_semi_bold mb-2">No blogs found in this category</h4>
                                    <p class="cs_secondary_color">Check back later or explore other categories.</p>
                                    <a href="{{ url('/blog') }}" class="btn btn-outline-primary mt-3">View All Blogs</a>
                                </div>
                            @endif

                        </div>

                        {{-- Pagination --}}
                        @if ($blogs->count() > 0)
                            <div class="cs_height_60 cs_height_lg_40"></div>
                            <div class="cs_pagenation cs_style_1 cs_center">
                                {{ $blogs->links('vendor.pagination.custom') }}
                            </div>
                        @endif
                    </div>







                </div>
                <div class="cs_height_150 cs_height_lg_80"></div>
        </section>
        <!-- End Blog Section -->

    </main>
    <!-- Main content inside end-->
@endsection
