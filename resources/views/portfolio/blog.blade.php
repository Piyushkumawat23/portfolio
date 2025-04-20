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
                                <h3 class="cs_blog_title cs_font_36 cs_semi_bold"><a class="cs_accent_color_2_hover" href="blog-details">How to design a user-centric mobile application?</a></h3>
                                <p class="cs_blog_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <span class="cs_font_16">26 July 2022</span>
                                        <a href="blog-details" class="cs_blog_author_name cs_accent_color_2 cs_accent_color_2_hover cs_text_btn cs_type_2 cs_font_16">John
                      Smith</a>
                                    </div>
                                    <a href="blog-details" class="cs_circle_btn cs_style_1 cs_accent_color cs_center rounded-circle">
                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 10L10 1" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M1 1H10V10" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 10L10 1" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M1 1H10V10" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
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
                        <input class="form-control h-100 w-100 cs_white_bg" type="search" name="search-blog" id="search-blog" placeholder="Search..." required>
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
                                <li class="active"><a href="#">All</a></li>
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">UI/UX</a></li>
                                <li><a href="#">WordPress</a></li>
                                <li><a href="#">Branding Design</a></li>
                                <li><a href="#">Responsive Design</a></li>
                                <li><a href="#">Mobile Interface</a></li>
                                <li><a href="#">Web Development</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 offset-lg-1">
                        <div class="cs_height_lg_40"></div>
                        <div class="cs_blog_wrap">
                            <div class="cs_blog cs_style_1 cs_transition_4">
                                <div class="flex-none">
                                    <a href="blog-details" class="cs_blog_thumbnail cs_zoom">
                    <img class="cs_zoom_in" src="public/assets/img/blog/blog_1.jpg" alt="">
                  </a>
                                </div>
                                <div class="cs_blog_info">
                                    <div class="cs_blog_date text-nowrap cs_secondary_color">
                                        <div class="cs_font_36 cs_semi_bold cs_primary_font">10</div>
                                        <span class="cs_font_16 d-inline-block">Jul 2022</span>
                                    </div>
                                    <h2 class="cs_blog_title cs_font_20 cs_semi_bold"><a class="cs_accent_color_2_hover" href="blog-details">10
                      common UI design mistakes to avoid as a beginner.</a></h2>
                                    <span class="cs_secondary_color">10 mins read</span>
                                    <a href="blog-details" class="cs_circle_btn cs_style_1 cs_type_1 cs_accent_color_2 cs_center rounded-circle">
                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 10L10 1" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M1 1H10V10" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 10L10 1" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M1 1H10V10" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </a>
                                </div>
                            </div>
                            <div class="cs_blog cs_style_1 cs_transition_4">
                                <div class="flex-none">
                                    <a href="blog-details" class="cs_blog_thumbnail cs_zoom">
                    <img class="cs_zoom_in" src="public/assets/img/blog/blog_2.jpg" alt="">
                  </a>
                                </div>
                                <div class="cs_blog_info">
                                    <div class="cs_blog_date text-nowrap cs_secondary_color">
                                        <div class="cs_font_36 cs_semi_bold cs_primary_font">09</div>
                                        <span class="cs_font_16 d-inline-block">Jul 2022</span>
                                    </div>
                                    <h2 class="cs_blog_title cs_font_20 cs_semi_bold"><a class="cs_accent_color_2_hover" href="blog-details">How to
                      design a user-centric mobile application?</a></h2>
                                    <span class="cs_secondary_color">7 mins read</span>
                                    <a href="blog-details" class="cs_circle_btn cs_style_1 cs_type_1 cs_accent_color_2 cs_center rounded-circle">
                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 10L10 1" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M1 1H10V10" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 10L10 1" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M1 1H10V10" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </a>
                                </div>
                            </div>
                            <div class="cs_blog cs_style_1 cs_transition_4">
                                <div class="flex-none">
                                    <a href="blog-details" class="cs_blog_thumbnail cs_zoom">
                    <img class="cs_zoom_in" src="public/assets/img/blog/blog_3.jpg" alt="">
                  </a>
                                </div>
                                <div class="cs_blog_info">
                                    <div class="cs_blog_date text-nowrap cs_secondary_color">
                                        <div class="cs_font_36 cs_semi_bold cs_primary_font">06</div>
                                        <span class="cs_font_16 d-inline-block">Jul 2022</span>
                                    </div>
                                    <h2 class="cs_blog_title cs_font_20 cs_semi_bold"><a class="cs_accent_color_2_hover" href="blog-details">Product
                      research at every stage of the design process</a></h2>
                                    <span class="cs_secondary_color">8 mins read</span>
                                    <a href="blog-details" class="cs_circle_btn cs_style_1 cs_type_1 cs_accent_color_2 cs_center rounded-circle">
                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 10L10 1" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M1 1H10V10" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 10L10 1" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M1 1H10V10" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </a>
                                </div>
                            </div>
                            <div class="cs_blog cs_style_1 cs_transition_4">
                                <div class="flex-none">
                                    <a href="blog-details" class="cs_blog_thumbnail cs_zoom">
                    <img class="cs_zoom_in" src="public/assets/img/blog/blog_1.jpg" alt="">
                  </a>
                                </div>
                                <div class="cs_blog_info">
                                    <div class="cs_blog_date text-nowrap cs_secondary_color">
                                        <div class="cs_font_36 cs_semi_bold cs_primary_font">10</div>
                                        <span class="cs_font_16 d-inline-block">Jul 2022</span>
                                    </div>
                                    <h2 class="cs_blog_title cs_font_20 cs_semi_bold"><a class="cs_accent_color_2_hover" href="blog-details">10
                      common UI design mistakes to avoid as a beginner.</a></h2>
                                    <span class="cs_secondary_color">10 mins read</span>
                                    <a href="blog-details" class="cs_circle_btn cs_style_1 cs_type_1 cs_accent_color_2 cs_center rounded-circle">
                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 10L10 1" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M1 1H10V10" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 10L10 1" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M1 1H10V10" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </a>
                                </div>
                            </div>
                            <div class="cs_blog cs_style_1 cs_transition_4">
                                <div class="flex-none">
                                    <a href="blog-details" class="cs_blog_thumbnail cs_zoom">
                    <img class="cs_zoom_in" src="public/assets/img/blog/blog_2.jpg" alt="">
                  </a>
                                </div>
                                <div class="cs_blog_info">
                                    <div class="cs_blog_date text-nowrap cs_secondary_color">
                                        <div class="cs_font_36 cs_semi_bold cs_primary_font">09</div>
                                        <span class="cs_font_16 d-inline-block">Jul 2022</span>
                                    </div>
                                    <h2 class="cs_blog_title cs_font_20 cs_semi_bold"><a class="cs_accent_color_2_hover" href="blog-details">How to
                      design a user-centric mobile application?</a></h2>
                                    <span class="cs_secondary_color">7 mins read</span>
                                    <a href="blog-details" class="cs_circle_btn cs_style_1 cs_type_1 cs_accent_color_2 cs_center rounded-circle">
                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 10L10 1" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M1 1H10V10" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 10L10 1" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M1 1H10V10" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </a>
                                </div>
                            </div>
                            <div class="cs_blog cs_style_1 cs_transition_4">
                                <div class="flex-none">
                                    <a href="blog-details" class="cs_blog_thumbnail cs_zoom">
                    <img class="cs_zoom_in" src="public/assets/img/blog/blog_3.jpg" alt="">
                  </a>
                                </div>
                                <div class="cs_blog_info">
                                    <div class="cs_blog_date text-nowrap cs_secondary_color">
                                        <div class="cs_font_36 cs_semi_bold cs_primary_font">06</div>
                                        <span class="cs_font_16 d-inline-block">Jul 2022</span>
                                    </div>
                                    <h2 class="cs_blog_title cs_font_20 cs_semi_bold"><a class="cs_accent_color_2_hover" href="blog-details">Product
                      research at every stage of the design process</a></h2>
                                    <span class="cs_secondary_color">8 mins read</span>
                                    <a href="blog-details" class="cs_circle_btn cs_style_1 cs_type_1 cs_accent_color_2 cs_center rounded-circle">
                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 10L10 1" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M1 1H10V10" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 10L10 1" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M1 1H10V10" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cs_height_60 cs_height_lg_40"></div>
                <div class="cs_pagenation cs_style_1 cs_center">
                    <ul class="cs_mp_0">
                        <li class="prev"><a href="#"><span><i class="fa-solid fa-angle-left"></i></span></a></li>
                        <li class="active"><a href="#"><span>1</span></a></li>
                        <li><a href="#"><span>2</span></a></li>
                        <li><a href="#"><span>3</span></a></li>
                        <li><a href="#"><span>...</span></a></li>
                        <li><a href="#"><span>10</span></a></li>
                        <li class="next"><a href="#"><span><i class="fa-solid fa-angle-right"></i></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="cs_height_150 cs_height_lg_80"></div>
        </section>
        <!-- End Blog Section -->

    </main>
    <!-- Main content inside end-->
    @endsection
