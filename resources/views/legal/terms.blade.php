@extends('layouts.app')

@section('content')
    <main>
        <!-- Hero Section -->
        <section class="cs_hero cs_style_3 cs_filled_bg cs_center text-center"
            data-src="{{ asset('public/assets/img/bg/hero_bg_4.svg') }}">
            <div class="container">
                <div class="cs_height_45 cs_height_lg_45"></div>

                <h1 class="cs_hero_title cs_font_92 cs_black wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <span class="cs_gradient_text">Terms & Conditions</span>
                    <span class="cs_gradient_border_text">by Piyush Kumawat</span>
                </h1>



                <ol class="breadcrumb mt-3">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Terms & Conditions</li>
                </ol>
            </div>
        </section>


        <!-- Terms Section -->
        <section
            style="background: #fff; padding: 30px; margin: 40px auto; max-width: 900px; border-radius: 10px; box-shadow: 0 0 15px rgba(0,0,0,0.05); font-family: 'Segoe UI', sans-serif;">
            <h1>📄 Terms & Conditions</h1>
            <p><strong>Effective Date:</strong> february 23, 2025</p>

            <p><strong>Website:</strong> <a href="https://piyushkumawat.in">piyushkumawat.in</a></p>
            <p><strong>Contact:</strong> <a href="mailto:piyushkumawat90607@gmail.com">piyushkumawat90607@gmail.com</a></p>

            <h2>1. Services We Offer</h2>
            <ul>
                <li>Custom Website & Web App Development</li>
                <li>Laravel & PHP Backend Systems</li>
                <li>UI/UX Design, CMS Customization, API Integration</li>
                <li>IT Consultation & Technical Support</li>
            </ul>

            <h2>2. Engagement & Communication</h2>
            <p>We communicate via Email, WhatsApp, or Zoom. Our working hours are Monday to Saturday, 10 AM to 7 PM IST. All
                important decisions should be confirmed in writing.</p>

            <h2>3. Payment & Invoicing</h2>
            <ul>
                <li>50% advance payment is mandatory before project initiation.</li>
                <li>Remaining 50% is due upon project completion, prior to delivery/deployment.</li>
                <li>Accepted modes: UPI, Bank Transfer (India), PayPal or Wise (International).</li>
                <li>All invoices are sent via email with clear scope mentioned.</li>
            </ul>

            <h2>4. Timelines</h2>
            <p>Estimated timelines will be discussed and agreed upon at project start. Delays from the client (e.g., late
                content, approvals) may extend the timeline.</p>

            <h2>5. Project Scope & Changes</h2>
            <p>Any work outside the initially agreed scope will be billed additionally. Scope changes will require written
                confirmation and may affect timeline and cost.</p>

            <h2>6. Revisions & Support</h2>
            <ul>
                <li>2 complimentary revision rounds are included for minor changes.</li>
                <li>Post-delivery support is valid for 15 days for bug fixing only.</li>
                <li>New features or enhancements post-delivery are chargeable.</li>
            </ul>

            <h2>7. Intellectual Property</h2>
            <ul>
                <li>All code, designs, and data belong to the client after full payment.</li>
                <li>We may showcase completed work in our portfolio unless you request otherwise in writing.</li>
            </ul>

            <h2>8. Use of Third-Party Tools</h2>
            <p>We may use third-party tools (plugins, scripts, themes, APIs) as required. We are not liable for their future
                compatibility, licensing, or performance issues.</p>

            <h2>9. Refund & Cancellation</h2>
            <ul>
                <li>Work already delivered or in progress is non-refundable.</li>
                <li>Advance payment is non-refundable once project planning/design begins.</li>
                <li>In rare failure to deliver (from our side), partial refund may be considered.</li>
            </ul>

            <h2>10. Suspension & Termination</h2>
            <ul>
                <li>We reserve the right to suspend services for delayed payments or inappropriate behavior.</li>
                <li>Clients may terminate the project with written notice. Work till date will be billed.</li>
            </ul>

            <h2>11. Legal & Jurisdiction</h2>
            <p>All legal matters, if any, will be subject to the jurisdiction of courts in Rajasthan, India.</p>

            <h2>12. Consent</h2>
            <p>By using this site and hiring our services, you consent to our Terms & Conditions.</p>
        </section>
    </main>
@endsection
