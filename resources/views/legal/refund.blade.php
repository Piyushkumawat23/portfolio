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
                    <span class="cs_gradient_text">Refund Policy</span>
                    <span class="cs_gradient_border_text">for PHP & Laravel Development Services</span>
                </h1>

                <ol class="breadcrumb mt-3">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Refund Policy</li>
                </ol>
            </div>
        </section>

        <!-- End Hero Section -->


        <section
            style="background: #fff; padding: 30px; margin: 40px auto; max-width: 900px; border-radius: 10px; box-shadow: 0 0 15px rgba(0,0,0,0.05); font-family: 'Segoe UI', sans-serif;">
            <h1>🔁 Return & Refund Policy</h1>
            <p><strong>Effective Date:</strong> february 23, 2025</p>

            <p><strong>Website:</strong> <a href="https://piyushkumawat.in">piyushkumawat.in</a></p>
            <p><strong>Contact:</strong> piyushkumawat90607@gmail.com</p>

            <h2>Overview</h2>
            <p>We provide custom digital services including web development, app development, and IT consultancy. Due to the
                digital and tailor-made nature of these services, our return and refund policy is outlined below:</p>

            <h2>1. No Refund on Completed Projects</h2>
            <p>Once a project is delivered—either partially or fully—it is considered complete and non-refundable. This is
                because of the time, resources, and effort invested in each custom-built solution.</p>

            <h2>2. Cancellation Before Development Begins</h2>
            <p>If you cancel the project before development begins, a partial refund may be issued. However, consultation,
                project planning, or research-related charges will be deducted from the refund amount.</p>

            <h2>3. Delays and Non-Delivery</h2>
            <p>If we fail to deliver the agreed service within the committed timeline and fail to communicate or resolve the
                delay, you may be eligible for a partial or full refund upon review.</p>

            <h2>4. Digital Nature of Services</h2>
            <p>Unlike physical goods, digital services cannot be returned or exchanged once delivered and accepted. All
                deliverables are shared in digital formats through email, cloud drives, or client dashboards.</p>

            <h2>5. Revisions and Maintenance</h2>
            <p>We offer 2 free rounds of revisions within 15 days of delivery. Any changes or fixes requested after this
                period or beyond the initial scope will be billed separately.</p>

            <h2>6. Refund Process</h2>
            <p>To initiate a refund request, send an email to <strong>piyushkumawat90607@gmail.com</strong> with detailed
                reasons and reference material. If the request is approved, refunds will be processed to the original
                payment method within 7–10 working days.</p>

            <h2>7. Payment Disputes and Chargebacks</h2>
            <p>We encourage clients to reach out and resolve issues directly with us before initiating a chargeback.
                Unjustified disputes or chargebacks will be treated seriously, and clients may be blacklisted from future
                services.</p>

            <h2>8. Changes to This Policy</h2>
            <p>We reserve the right to update this policy at any time. Clients will be notified through email or website
                updates.</p>

            <h2>9. Legal Jurisdiction</h2>
            <p>All refund-related matters are governed by the laws of Rajasthan, India.</p>
        </section>
    @endsection
