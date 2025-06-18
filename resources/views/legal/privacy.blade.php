@extends('layouts.app')

@section('content')
    <!-- End Header Section -->

    <!-- Main content inside start-->
    <main>
        <!-- Start Hero Section -->
        <section class="cs_hero cs_style_3 cs_filled_bg cs_center text-center"
            data-src="{{ asset('public/assets/img/bg/hero_bg_4.svg') }}">
            <div class="container">
                <div class="cs_height_45 cs_height_lg_45"></div>
                <h1 class="cs_hero_title cs_font_92 cs_black wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <span class="cs_gradient_text">Privacy Policy</span>
                    <span class="cs_gradient_border_text">for PHP & Laravel Development Services</span>
                </h1>
                <ol class="breadcrumb mt-3">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
                </ol>
            </div>
        </section>



        <section class="legal-policy"
            style="background: #fff; padding: 30px; margin: 40px auto; max-width: 900px; border-radius: 10px; box-shadow: 0 0 15px rgba(0,0,0,0.05); font-family: 'Segoe UI', sans-serif;">
            <h1>🔒 Privacy Policy</h1>
            <p><strong>Effective Date:</strong> february 23, 2025</p>
            <p><strong>Website:</strong> <a href="https://piyushkumawat.in">piyushkumawat.in</a></p>
            <p><strong>Contact:</strong> piyushkumawat90607@gmail.com</p>

            <h2>Introduction</h2>
            <p>At piyushkumawat.in, we respect and protect the privacy of our clients, users, and website visitors. This
                Privacy Policy outlines how we collect, store, process, and share your information when you engage with our
                services.</p>

            <h2>1. Information We Collect</h2>
            <ul>
                <li><strong>Personal Information:</strong> Name, email address, phone number, location, social handles</li>
                <li><strong>Project Information:</strong> Documents, credentials, files shared voluntarily</li>
                <li><strong>Payment & Billing:</strong> Transaction details (no card/bank data stored)</li>
                <li><strong>Technical Info:</strong> IP, browser, analytics, cookies</li>
            </ul>

            <h2>2. How We Use Your Data</h2>
            <ul>
                <li>Service delivery and communication</li>
                <li>Progress updates and invoicing</li>
                <li>Improving service and site</li>
                <li>Legal and fraud prevention</li>
            </ul>

            <h2>3. Data Protection Measures</h2>
            <ul>
                <li>Encrypted storage and limited access</li>
                <li>Secure backups and HTTPS enabled</li>
            </ul>

            <h2>4. Data Sharing & Disclosure</h2>
            <p>We never sell or rent your data. Information is shared only with trusted third parties such as payment
                processors or subcontractors when essential for service delivery, or when required by law.</p>

            <h2>5. Cookies and Analytics</h2>
            <p>Our site uses cookies and analytics tools like Google Analytics to enhance user experience. You can disable
                cookies via your browser settings.</p>

            <h2>6. Your Rights</h2>
            <p>You have the right to access, correct, or delete your personal data. You may also withdraw consent at any
                time by contacting us.</p>

            <h2>7. Confidentiality & NDA</h2>
            <p>All project-related files, source code, and communications remain confidential. NDAs are available upon
                request.</p>

            <h2>8. Data Retention</h2>
            <p>We retain project and client data only as long as necessary for project history, legal compliance, or future
                support, unless a deletion request is submitted.</p>

            <h2>9. International Transfers</h2>
            <p>If you're accessing this service outside India, you agree that your data may be transferred, stored, and
                processed in India.</p>

            <h2>10. Policy Updates</h2>
            <p>This policy may be updated from time to time. We recommend reviewing this page periodically to stay informed.
            </p>

            <h2>11. Consent</h2>
            <p>By using this site or our services, you agree to this Privacy Policy.</p>
        </section>
    </main>
@endsection
