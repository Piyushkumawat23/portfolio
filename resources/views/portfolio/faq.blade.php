@extends('layouts.app')

@section('content')

  <!-- End Header Section -->
  @if(session('success'))
  <div class="alert alert-success">
      {{ session('success') }}
  </div>
@endif

  <!-- Main content inside start-->
  <main>
    <section>
      <div class="cs_height_90 cs_height_lg_90"></div>
      <div class="cs_height_145 cs_height_lg_65"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="cs_section_heading cs_style_1 text-center">
              <p class="cs_section_subtitle cs_center cs_accent_color_2 cs_font_16 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <span>FAQ’s</span>
                <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17.7546 7.74905C17.1131 8.09364 17.076 8.18291 17.2611 9.1908C17.878 12.5974 14.8553 18.2114 8.43958 16.6548C6.83568 16.2721 6.51483 16.2975 5.24406 17.012C3.93626 17.7393 3.94864 17.7393 4.12137 16.4889C4.33111 14.8941 4.30639 14.7027 3.76353 13.9499C1.12323 10.3392 2.0856 5.10801 5.82397 2.69659C10.7344 -0.480363 14.5961 1.01242 16.3481 4.66145C16.8416 5.69491 17.1871 5.86077 18.3098 5.63113C18.8157 5.52905 18.8157 5.2356 18.3098 4.38076C14.4482 -2.12626 4.72588 -0.799338 1.49338 4.53386C-0.357295 7.5832 -0.406626 11.6788 2.38172 14.9196C2.8629 15.4809 2.91224 16.0806 2.61613 17.6627C2.32002 19.2576 2.93693 19.3852 5.46618 18.2624L7.0454 17.5606L8.2175 17.8924C10.5863 18.5686 13.0539 18.2496 15.3857 16.9482C16.3605 16.4123 18.1001 14.3837 18.9391 11.2323C19.6423 8.54017 19.1365 7.02184 17.7546 7.74905Z" fill="#342EAD"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.99893 4.04285C7.53821 4.24926 6.15685 5.20191 6.02454 7.13897C5.92927 8.58382 5.93986 8.5944 7.3265 8.3139C8.49614 8.07573 8.43262 8.13925 8.43262 7.25011C8.43262 6.49328 8.64432 6.06459 9.22121 5.76821C10.502 5.11723 11.4229 6.832 11.4229 7.37184C11.4229 7.96461 10.9995 8.27685 9.66577 8.6632C8.57552 8.98075 8.22623 9.43063 8.18386 10.5579C8.17328 10.8914 8.13627 11.156 8.09921 11.1983C7.93515 11.3994 8.50672 11.5847 9.11536 11.5318C10.9413 11.3677 10.9148 11.3836 10.8142 10.6955C10.7508 10.2669 10.7931 10.2033 11.2271 10.071C12.275 9.75345 12.873 9.15013 13.1906 8.09162C14.0215 5.36069 12.1956 3.59828 8.99893 4.04285ZM10.7084 4.36041C11.8992 4.53506 13.0107 6.07518 12.8042 7.27658C12.6137 8.38801 12.0103 9.07075 10.809 9.52059C10.2268 9.7376 10.0415 10.0128 10.0363 10.6585V11.0184C9.39059 11.0819 9.34822 11.0819 8.92482 11.1454C8.99893 9.58411 8.89307 9.42531 10.8249 8.74789C12.0369 8.32448 12.3015 7.31363 11.5129 6.13868C10.248 4.25455 6.99307 5.50358 7.61229 7.63647C7.63876 7.73701 7.65464 7.82701 7.64405 7.83759C7.62817 7.85344 6.94013 8.00693 6.88721 8.00693C6.88191 8.00693 6.84487 7.35596 6.81312 7.13367C6.53261 5.22308 8.55967 4.05344 10.7084 4.36041ZM8.69727 12.1351C7.74461 12.5691 7.70755 13.7334 8.63374 14.0669C10.4808 14.7337 12.1533 13.6382 11.1106 12.4474C10.8037 12.0875 9.2371 11.8864 8.69727 12.1351ZM10.0522 12.4527C10.4755 12.5162 10.846 12.8549 10.846 13.1724C10.846 13.7599 9.40648 14.051 8.88781 13.5694C8.63374 13.3312 8.54909 12.2251 10.0522 12.4527Z" fill="#342EAD"/>
                  </svg>
              </p>
              <h2 class="cs_section_title cs_font_48 cs_semi_bold">Frequently <span class="cs_accent_color">asked question</span>
              </h2>
              <div class="cs_height_20 cs_height_lg_20"></div>
              <p class="m-0"> Have questions about my services? Here are some common queries I receive from clients.
              </p>
              <div class="cs_height_40 cs_height_lg_40"></div>
            </div>
            <div class="cs_form cs_style_1 cs_white_bg cs_radius_10">
              <form action="{{ route('faq.store') }}" method="POST">
                @csrf
                <h4 class="cs_form_title cs_font_24 cs_semi_bold">Leave your question</h4>
                <div class="row">
                  <div class="col-lg-6">
                    <input class="form-control" type="text"  name="name" placeholder="Name" required>
                  </div>
                  <div class="col-lg-6">
                    <input class="form-control" type="text" name="email" placeholder="Email" required>
                  </div>
                  <div class="col-lg-12">
                    <textarea class="form-control" name="message" placeholder="Your message" required></textarea>
                  </div>
                </div>
                <button type="submit" class="cs_btn cs_style_1 cs_primary_font"><span>Ask Me</span></button>
              </form>
            </div>
            <div class="cs_faq_wrap">

              <!-- FAQ 1 -->
              <div class="cs_faq cs_style_1 cs_radius_10">
                <h4 class="cs_faq_title cs_semi_bold cs_font_20">Do you offer freelance services?</h4>
                <p class="cs_faq_text m-0">
                  Yes, I am available for freelance projects. Whether you need a custom web application, Laravel development, 
                  or API integration, I can help. Contact me for more details!
                </p>
              </div>
            
              <!-- FAQ 2 -->
              <div class="cs_faq cs_style_1 cs_radius_10">
                <h4 class="cs_faq_title cs_semi_bold cs_font_20">Which technologies do you specialize in?</h4>
                <p class="cs_faq_text m-0">
                  I specialize in Laravel, Core PHP, MySQL, RESTful APIs, HTML, CSS, JavaScript, Bootstrap, and SEO optimization. 
                  I also work with Git for version control and database optimization techniques.
                </p>
              </div>
            
              <!-- FAQ 3 -->
              <div class="cs_faq cs_style_1 cs_radius_10">
                <h4 class="cs_faq_title cs_semi_bold cs_font_20">Can you build e-commerce websites?</h4>
                <p class="cs_faq_text m-0">
                  Yes, I have experience building custom e-commerce platforms with features like cart management, 
                  payment gateway integration, and SEO optimization for better online visibility.
                </p>
              </div>
            
              <!-- FAQ 4 -->
              <div class="cs_faq cs_style_1 cs_radius_10">
                <h4 class="cs_faq_title cs_semi_bold cs_font_20">Do you work with existing projects?</h4>
                <p class="cs_faq_text m-0">
                  Absolutely! I can improve, optimize, and extend existing web applications, ensuring better performance, 
                  security, and scalability.
                </p>
              </div>
            
              <!-- FAQ 5 -->
              <div class="cs_faq cs_style_1 cs_radius_10">
                <h4 class="cs_faq_title cs_semi_bold cs_font_20">How do you handle API integrations?</h4>
                <p class="cs_faq_text m-0">
                  I develop and integrate RESTful APIs using Laravel, ensuring seamless communication between 
                  frontend and backend systems.
                </p>
              </div>
            
              <!-- FAQ 6 -->
              <div class="cs_faq cs_style_1 cs_radius_10">
                <h4 class="cs_faq_title cs_semi_bold cs_font_20">Do you optimize websites for SEO?</h4>
                <p class="cs_faq_text m-0">
                  Yes, I implement On-Page, Off-Page, and Technical SEO strategies to improve website rankings 
                  on search engines like Google.
                </p>
              </div>
            
              <!-- FAQ 7 -->
              <div class="cs_faq cs_style_1 cs_radius_10">
                <h4 class="cs_faq_title cs_semi_bold cs_font_20">What security measures do you implement?</h4>
                <p class="cs_faq_text m-0">
                  I follow best practices for security, including authentication, authorization, database encryption, 
                  and protection against SQL injection and XSS attacks.
                </p>
              </div>
            
              <!-- FAQ 8 -->
              <div class="cs_faq cs_style_1 cs_radius_10">
                <h4 class="cs_faq_title cs_semi_bold cs_font_20">Can you help in website performance optimization?</h4>
                <p class="cs_faq_text m-0">
                  Yes, I optimize database queries, reduce page load times, and improve website speed for 
                  a seamless user experience.
                </p>
              </div>
            
              <!-- FAQ 9 -->
              <div class="cs_faq cs_style_1 cs_radius_10">
                <h4 class="cs_faq_title cs_semi_bold cs_font_20">What industries have you worked with?</h4>
                <p class="cs_faq_text m-0">
                  I have developed projects for e-commerce, finance (crypto & USDT systems), 
                  matrimonial portals, and business automation solutions.
                </p>
              </div>
            
              <!-- FAQ 10 -->
              <div class="cs_faq cs_style_1 cs_radius_10">
                <h4 class="cs_faq_title cs_semi_bold cs_font_20">How can I contact you for a project?</h4>
                <p class="cs_faq_text m-0">
                  You can reach out to me via email at <strong>piyushkumawat90607@gmail.com</strong> or 
                  connect with me on LinkedIn for inquiries.
                </p>
              </div>
            
            </div>
          </div>
        </div>
      </div>
      <div class="cs_height_125 cs_height_lg_55"></div>
    </section>
  </main>
  <!-- Main content inside end-->
  @endsection
