@extends('layouts.app')
@section('content')
    <!-- Main content inside start-->
    <main>
        <!-- Start Hero Section -->
        <section class="cs_hero cs_style_3 cs_filled_bg cs_center text-center" data-src="{{ asset('public/assets/img/bg/hero_bg_5.svg') }}">
            <div class="container">

                <div class="cs_height_45 cs_height_lg_45"></div>

                <h1 class="cs_hero_title cs_font_92 cs_extra_bold wow fadeInUp"><span class="cs_gradient_text_2">Portfolio</span></h1>

                <ol class="breadcrumb">

                    {{-- <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li> --}}

                    <li class="breadcrumb-item active">Portfolio</li>

                </ol>

            </div>

        </section>
        <!-- End Hero Section -->
        <!-- Start Portfolio Section -->

        <section>

            <div class="cs_height_150 cs_height_lg_80"></div>

            <div class="container">

                <div class="cs_isotop cs_isotop_col_3">

                    <div class="cs_grid_sizer"></div>



                    @foreach ($projects as $project)

                        <div class="cs_isotop_item cs_zoom">

                            <a href="{{ route('portfolio.details', $project->id) }}" class="cs_portfolio cs_style_1">

                                <div class="cs_portfolio_thumbnail">
                                    @if($project->images->isNotEmpty())
                                        <img class="cs_zoom_in w-100" src="{{ asset('public/assets/img/portfolio/' . $project->images->first()->image_url) }}" alt="{{ $project->title }}">
                                    @else
                                        <img class="cs_zoom_in w-100" src="{{ asset('public/assets/img/default.png') }}" alt="No Image Available">
                                    @endif
                                </div>
                                
                                

                               

                                <div class="cs_portfolio_info cs_white_color cs_medium position-absolute">

                                    <h2 class="cs_font_28 cs_white_color cs_medium mb-0">{{ $project->name }}</h2>

                                    <div class="cs_font_16 cs_gap_15 d-inline-flex cs_medium align-items-center">

                                        <span class="cs_text_btn cs_secondary_font cs_type_1 text-uppercase">View work</span>

                                        <svg width="5" height="9" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg">

                                            <path d="M0 0L5 4.5L0 9L0 0Z" fill="currentColor" />

                                        </svg>

                                    </div>

                                </div>

                            </a>

                        </div>

                    @endforeach



                </div>

                <div class="cs_height_60 cs_height_lg_40"></div>

                <div class="cs_center">

                    <a href="#" class="cs_btn cs_style_1"><span>Load More</span></a>

                </div>

            </div>

            <div class="cs_height_150 cs_height_lg_80"></div>

        </section>

        <!-- End Portfolio Section -->

    </main>

@endsection

