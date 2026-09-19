@extends('layouts.app2')

@section('content')
<!-- Header Area -->
<div class="header-area header-two">
<div class="sticky-area">
<div class="navigation">
<div class="container">
<div class="header-inner-box">
<div class="logo">
<a class="navbar-brand" href="{{ route('home') }}"><img alt="AHTC Logo" src="{{ asset('assets/images/Primary-Logo-Trimmed.png') }}" style="height: 48px; width: auto; object-fit: contain;"/></a>
</div>
<div class="main-menu">
<nav class="navbar navbar-expand-lg">
<button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button">
<span class="navbar-toggler-icon"></span>
<span class="navbar-toggler-icon"></span>
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
<ul class="navbar-nav m-auto">
<li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
<li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
<li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
<li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
</ul>
</div>
</nav>
</div>
<a class="header-contact" href="https://wa.me/60192680787" target="_blank" rel="noopener">
<div class="header-contact-icon"><i class="las la-comments"></i></div>
<div class="header-contact-info">
<p>Let's Chat (+6019-268 0787)</p>
</div>
</a>
</div>
</div>
</div>
</div>
</div>
<!-- Hero Area  -->
<div class="hero-area hero-area-two">
<div class="homepage-slides owl-carousel">
<div class="single-slide-item">
<div class="slider-bg bg-cover" data-background="{{ asset('template2_assets/img/slider/slide-4.jpg') }}">
<div class="overlay-2"></div>
<div class="container">
<div class="hero-area-content">
<h3>Islamic Finance &amp; Advisory</h3>
<h1 class="text-white hero-title">Elevating Institutional <br/>Excellence</h1>
<p class="text-white">Empowering financial institutions and corporate leaders through Shariah-compliant capability development, executive training, and strategic advisory.</p>
<a class="main-btn" href="#services">Explore Our Programs</a>
</div>
<div class="social-link">
<a href="#">.FACEBOOK</a>
<a href="#">.TELEGRAM</a>
</div>
</div>
</div>

</div>
<div class="single-slide-item">
<div class="slider-bg bg-cover" data-background="{{ asset('template2_assets/img/slider/slide-2.jpg') }}">
<div class="overlay-2"></div>
<div class="container">
<div class="hero-area-content">
<h3>Shariah Compliance &amp; VBI</h3>
<h2 class="text-white hero-title">Value-Based <br/>Financial Solutions</h2>
<p class="text-white">Bridging technical market complexities with practical, ethical financial frameworks to drive long-term institutional resilience and growth.</p>
<a class="main-btn" href="#about">Learn About AHTC</a>
</div>
<div class="social-link">
<a href="#">.FACEBOOK</a>
<a href="#">.TELEGRAM</a>
</div>
</div>
</div>

</div>
<div class="single-slide-item">
<div class="slider-bg bg-cover" data-background="{{ asset('template2_assets/img/slider/slide-4.jpg') }}">
<div class="overlay-2"></div>
<div class="container">
<div class="hero-area-content">
<h3>Talent Development &amp; Training</h3>
<h2 class="text-white hero-title">Strategic Growth for <br/>Modern Finance</h2>
<p class="text-white">Tailored executive programs in Sukuk structuring, Shariah governance, risk management, and Islamic capital markets.</p>
<a class="main-btn" href="#contact">Consult Our Experts</a>
</div>
<div class="social-link">
<a href="#">.FACEBOOK</a>
<a href="#">.TELEGRAM</a>
</div>
</div>
</div>

</div>
</div>
</div>
<!-- Feature Area  -->
<div class="feature-section feature-two section-padding">
<div class="container">
<div class="row">
<div class="col-xl-4 col-lg-4 col-md-6 col-12 wow fadeInLeft animated" data-wow-delay="200ms">
<div class="single-feature-item">
<div class="feature-item-inner">
<div class="feature-icon">
<i class="flaticon-money-2"></i>
</div>
<div class="feature-title">
<h4 class="text-white">Islamic Banking 
                                    Operations</h4>
</div>
</div>
<p>Technical mastery in Murabahah, Ijarah, Musharakah, Mudarabah, and asset-liability management.</p>
<a class="service-details-link" href="#services">
<i class="las la-arrow-right"></i>
</a>
</div>
</div>
<div class="col-xl-4 col-lg-4 col-md-6 col-12 wow fadeInLeft animated" data-wow-delay="400ms">
<div class="single-feature-item">
<div class="feature-item-inner">
<div class="feature-icon">
<i class="flaticon-bar-chart"></i>
</div>
<div class="feature-title">
<h4 class="text-white">Shariah GRC &amp; 
                                    Audit</h4>
</div>
</div>
<p>Comprehensive governance, risk management, and regulatory compliance aligned with BNM guidelines.</p>
<a class="service-details-link" href="#services">
<i class="las la-arrow-right"></i>
</a>
</div>
</div>
<div class="col-xl-4 col-lg-4 col-12 wow fadeInLeft animated" data-wow-delay="600ms">
<div class="single-feature-item">
<div class="feature-item-inner">
<div class="feature-icon">
<i class="flaticon-hr"></i>
</div>
<div class="feature-title">
<h4 class="text-white">Executive Leadership 
                                    Development</h4>
</div>
</div>
<p>Custom leadership initiatives building organizational agility, Shariah governance, and board expertise.</p>
<a class="service-details-link" href="#services">
<i class="las la-arrow-right"></i>
</a>
</div>
</div>
</div>
</div>
<!-- Feature Section -->
<div class="feature-section section-padding pb-60">
<div class="container">
<div class="row">
<div class="col-xl-12 text-center">
<div class="section-title">
<h2>Over Two Decades of Dedicated Advisory <br/>
in Islamic Banking &amp; Financial <br/>
Consulting</h2>
</div>
</div>
</div>
<div class="row mt-60">
<div class="col-xl-4 col-lg-4 col-md-6 col-12 wow fadeInUp animated" data-wow-delay="100ms">
<div class="feature-item-wrap">
<div class="feature-icon">
<i class="flaticon-goal"></i>
</div>
<div class="feature-content">
<h4>Shariah GRC &amp; Audit Advisory</h4>
<p>Rigorous governance, risk management, and regulatory compliance frameworks tailored for financial institutions.</p>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-4 col-md-6 col-12 wow fadeInUp animated" data-wow-delay="200ms">
<div class="feature-item-wrap">
<div class="feature-icon">
<i class="flaticon-group"></i>
</div>
<div class="feature-content">
<h4>Industry-Leading Practitioners</h4>
<p>Led by veteran Shariah scholars, banking practitioners, and executive talent developers.</p>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-4 col-md-6 col-12 wow fadeInUp animated" data-wow-delay="300ms">
<div class="feature-item-wrap">
<div class="feature-icon">
<i class="flaticon-customer-service"></i>
</div>
<div class="feature-content">
<h4>Custom Institutional Solutions</h4>
<p>Bespoke learning roadmaps designed specifically around your organization's operational needs.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- About Section -->
<div id="about" class="about-section about-two section-padding pt-0">
<div class="container">
<div class="row">
<div class="col-xl-6 col-lg-6 col-12 wow fadeInDown animated" data-wow-delay="200ms">
<div class="about-left-wrap">
<div class="section-title">
<p>ABOUT AL-HIJRAH</p>
<h2>Elevating Institutional Standards <br/>
in Islamic Financial Ecosystems</h2>
</div>
<div class="about-left-img wow fadeInUp animated" data-wow-delay="400ms">
<img alt="AHTC advisory team collaborating on an Islamic banking engagement" src="{{ asset('template2_assets/img/about/about-3.jpg') }}"/>
<a href="#about">Discover Our Firm</a>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-6 col-12 wow fadeInRight animated" data-wow-delay="200ms">
<div class="about-right-wrap">
<div class="about-right-img">
<img alt="AHTC consultants reviewing an Islamic finance advisory strategy" src="{{ asset('template2_assets/img/about/about-4.jpg') }}"/>
</div>
<p>Al-Hijrah Training &amp; Consultancy (AHTC) is a premier specialist advisory firm. We work alongside Islamic banks, financial institutions, and corporate entities to sharpen technical competencies, enforce Shariah compliance, and foster sustainable organizational evolution.</p>
<div class="about-feature-list">
<div class="row">
<div class="col-md-6 col-12">
<ul>
<li><i class="las la-check-circle"></i> Islamic Banking &amp; Sukuk Structuring</li>
<li><i class="las la-check-circle"></i> Shariah Governance &amp; Risk Audit</li>
</ul>
</div>
<div class="col-md-6 col-12">
<ul>
<li><i class="las la-check-circle"></i> Value-Based Intermediation (VBI)</li>
<li><i class="las la-check-circle"></i> Board &amp; Executive Development</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- CTA Section  -->
<div class="cta-area cta-two" data-background="{{ asset('template2_assets/img/cta_bg_2.jpg') }}">
<div class="container">
<div class="cta-inner-text">
<div class="text-left">
<h2 class="text-white">50+ Partner Institutions</h2>
</div>
<div class="text-right">
<h2 class="text-white">100+ Programs Delivered</h2>
</div>
</div>
</div>
</div>
<!-- Service Section  -->
<div id="services" class="service-section service-two section-padding">
<div class="container">
<div class="row justify-content-center">
<div class="col-xl-8 col-lg-8 text-center">
<div class="section-title">
<p>Specialist Solutions</p>
<h2>Comprehensive Learning &amp; Strategic <br/>
Advisory Services</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-12">
<div class="single-service-item mt-30">
<div class="single-service-inner">
<h5><a href="#services">01/   Islamic Banking Operations &amp; Contracts</a></h5>
<p>Technical mastery covering Murabahah, Ijarah, Musharakah, Mudarabah, and asset-liability management.</p>
<a class="details-link" href="#services"><i class="las la-arrow-right"></i></a>
</div>
</div>
<div class="single-service-item">
<div class="single-service-inner">
<h5><a href="#services">02/   Shariah Governance, Risk &amp; Audit</a></h5>
<p>Frameworks for Shariah compliance, risk mitigation, and Bank Negara Malaysia regulatory alignment.</p>
<a class="details-link" href="#services"><i class="las la-arrow-right"></i></a>
</div>
</div>
<div class="single-service-item">
<div class="single-service-inner">
<h5><a href="#services">03/   Sukuk &amp; Capital Markets Advisory</a></h5>
<p>Specialized talent development and consultancy in Sukuk structuring, green Sukuk, and Islamic equity markets.</p>
<a class="details-link" href="#services"><i class="las la-arrow-right"></i></a>
</div>
</div>
<div class="single-service-item">
<div class="single-service-inner">
<h5><a href="#services">04/   Value-Based Intermediation (VBI) Integration</a></h5>
<p>Embedding sustainability, ESG, and ethical Islamic financial principles into institutional strategy.</p>
<a class="details-link" href="#services"><i class="las la-arrow-right"></i></a>
</div>
</div>
<div class="single-service-item">
<div class="single-service-inner">
<h5><a href="#services">05/   Executive Leadership Development</a></h5>
<p>Custom leadership and capacity building for senior executives, board members, and Shariah committee experts.</p>
<a class="details-link" href="#services"><i class="las la-arrow-right"></i></a>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-12 text-center mt-60">
<a class="main-btn" href="#contact">Inquire For Custom Program</a>
</div>
</div>
</div>
</div>

<!-- Collaboration Section  -->
<div class="collaboration-section section-padding">
<div class="container">
<div class="row justify-content-center">
<div class="col-xl-10 col-lg-10 text-center">
<div class="section-title">
<p>LET'S COLLABORATE</p>
<h2>Empower Your Organization With Strategic <br/>
Islamic Finance Advisory</h2>
</div>
<a class="main-btn" href="#contact">Enquire Now</a>
</div>
</div>
</div>
</div>
<!-- FAQ & Request A Call Back Section  -->
<div id="contact" class="faq-section faq-two dark-bg section-padding">
<div class="container">
<div class="row">
<div class="col-xl-6 col-lg-6 col-md-6 col-12 wow fadeInDown animated" data-wow-delay="200ms">
<div class="section-title">
<p>General Questions</p>
<h2 class="text-white">Frequently Asked <br/>
Question.</h2>
</div>
<div class="accordion faqs" id="accordionFaq">
<div class="card">
<div class="card-header" id="heading1">
<h5 class="mb-0 subtitle">
<button aria-controls="collapse1" aria-expanded="true" class="btn btn-link collapsed active" data-bs-target="#collapse1" data-bs-toggle="collapse" type="button">
What services does AHTC provide?
</button>
</h5>
</div>
<div aria-labelledby="heading1" class="collapse show" data-parent="#accordionFaq" id="collapse1">
<div class="card-body">
<div class="content">
<p>We deliver Islamic banking operations training, Shariah GRC and audit advisory, executive leadership development, and Value-Based Intermediation (VBI) consulting for financial institutions and corporate clients.</p>
</div>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="heading2">
<h5 class="mb-0 subtitle">
<button aria-controls="collapse2" aria-expanded="false" class="btn btn-link collapsed" data-bs-target="#collapse2" data-bs-toggle="collapse" type="button">
Who are your programs designed for?
</button>
</h5>
</div>
<div aria-labelledby="heading2" class="collapse" data-parent="#accordionFaq" id="collapse2">
<div class="card-body">
<div class="content">
<p>Our programs serve banking practitioners, compliance officers, Shariah committee members, and board or C-suite executives across Islamic financial institutions.</p>
</div>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="heading3">
<h5 class="mb-0 subtitle">
<button aria-controls="collapse3" aria-expanded="false" class="btn btn-link collapsed" data-bs-target="#collapse3" data-bs-toggle="collapse" type="button">
Do you offer customized in-house training?
</button>
</h5>
</div>
<div aria-labelledby="heading3" class="collapse" data-parent="#accordionFaq" id="collapse3">
<div class="card-body">
<div class="content">
<p>Yes. Alongside our standard programs, we design bespoke learning roadmaps and advisory engagements tailored to each organization's operational needs.</p>
</div>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="heading4">
<h5 class="mb-0 subtitle">
<button aria-controls="collapse4" aria-expanded="false" class="btn btn-link collapsed" data-bs-target="#collapse4" data-bs-toggle="collapse" type="button">
How do I get started with AHTC?
</button>
</h5>
</div>
<div aria-labelledby="heading4" class="collapse" data-parent="#accordionFaq" id="collapse4">
<div class="card-body">
<div class="content">
<p>Send us a call-back request via the form, or reach us directly by phone or email, and one of our specialists will follow up to scope your requirements.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-12 wow fadeInUp animated" data-wow-delay="200ms">
<div class="contact-form-wrap">
<div class="contact-form-header">
<p>SEND A MESSAGE</p>
<h2>Request A Call Back</h2>
</div>
<div class="contact-form-inner">
<form id="callBackForm">
<div class="row">
<div class="col-lg-6 col-12">
<input id="cbName" placeholder="Name" required type="text"/>
</div>
<div class="col-lg-6 col-12">
<input id="cbPhone" placeholder="Phone" required type="tel"/>
</div>
<div class="col-12">
<input id="cbEmail" placeholder="Email" type="email"/>
</div>
<div class="col-12">
<textarea cols="30" id="cbMessage" name="message" placeholder="How can help you?" rows="8"></textarea>
</div>
<div class="col-12 contact-form-actions">
<button class="btn-send-email" id="sendEmailBtn" type="button">Send Email</button>
<button class="btn-send-whatsapp" id="sendWhatsappBtn" type="button">Send WhatsApp</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
(function () {
    var form = document.getElementById('callBackForm');
    if (!form) {
        return;
    }

    function getValues() {
        return {
            name: document.getElementById('cbName').value.trim(),
            phone: document.getElementById('cbPhone').value.trim(),
            email: document.getElementById('cbEmail').value.trim(),
            message: document.getElementById('cbMessage').value.trim(),
        };
    }

    function validate(values) {
        if (!values.name || !values.phone) {
            alert('Please fill in your name and phone number.');
            return false;
        }
        return true;
    }

    document.getElementById('sendEmailBtn').addEventListener('click', function () {
        var v = getValues();
        if (!validate(v)) {
            return;
        }
        var subject = 'Request A Call Back - ' + v.name;
        var body = [
            'Name: ' + v.name,
            'Phone: ' + v.phone,
            'Email: ' + (v.email || '-'),
            '',
            'Message:',
            v.message || '-',
        ].join('\n');
        window.location.href = 'mailto:enquiry@alhijrahtraining.com'
            + '?subject=' + encodeURIComponent(subject)
            + '&body=' + encodeURIComponent(body);
    });

    document.getElementById('sendWhatsappBtn').addEventListener('click', function () {
        var v = getValues();
        if (!validate(v)) {
            return;
        }
        var text = [
            'Request A Call Back',
            'Name: ' + v.name,
            'Phone: ' + v.phone,
            'Email: ' + (v.email || '-'),
            'Message: ' + (v.message || '-'),
        ].join('\n');
        window.open('https://wa.me/60192680787?text=' + encodeURIComponent(text), '_blank', 'noopener');
    });
})();
</script>
<!-- Footer Area  -->
<div class="footer-area footer-two">
<div class="container">
<div class="row">
<div class="footer-bottom">
<p class="text-white">© {{ date('Y') }} Al-Hijrah Training &amp; Consultancy (AHTC). All rights reserved.</p>
</div>
</div>
</div>
</div>
@endsection
