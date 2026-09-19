@extends('layouts.app2')

@section('content')
<main class="page-wrapper">
    <!-- 1. Hero Section -->
    <section class="home-hero" id="home">
        <div class="w-layout-blockcontainer container-default w-container">
            <div class="home-hero-wrapper">
                <div class="home-hero-content-block">
                    <div class="hero-content-top-block">
                        <div class="home-hero-title-wrapper" data-w-id="a884db8c-6ffb-9c5a-1151-b58e76e77182">
                            <h1 class="home-hero-title">Empowering Financial Futures With Strategic Advisory</h1>
                        </div>
                        <p class="home-hero-text" data-w-id="fb77d5e9-ae20-0f0b-4d9b-d79effe6f38e">
                            Discover the versatility of our solutions designed for financial advisors, investment firms, and consulting agencies to build trust and drive long-term growth.
                        </p>
                        <div class="home-hero-buttons-wrapper" data-w-id="eeed24eb-cd6b-5eef-aaa3-b582913bdbee">
                            <a class="primary-button w-inline-block" href="#solutions">
                                <div class="primary-button-icon w-embed">
                                    <svg fill="none" height="24" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 2V4M6 2V4" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                        <path d="M10 17L9.99999 13.3472C9.99999 13.1555 9.86325 13 9.69458 13H9M13.6297 17L14.9842 13.3492C15.0475 13.1785 14.9128 13 14.7207 13H13" stroke="currentColor" stroke-linecap="round" stroke-width="1.5"></path>
                                        <path d="M2.5 12.2432C2.5 7.88594 2.5 5.70728 3.75212 4.35364C5.00424 3 7.01949 3 11.05 3H12.95C16.9805 3 18.9958 3 20.2479 4.35364C21.5 5.70728 21.5 7.88594 21.5 12.2432V12.7568C21.5 17.1141 21.5 19.2927 20.2479 20.6464C18.9958 22 16.9805 22 12.95 22H11.05C7.01949 22 5.00424 22 3.75212 20.6464C2.5 19.2927 2.5 17.1141 2.5 12.7568V12.2432Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                        <path d="M6 8H18" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                    </svg>
                                </div>
                                <p class="button-text">Explore Solutions</p>
                            </a>
                            <a class="primary-button style-two hero-button w-inline-block" href="#about">
                                <p class="button-text">About Us</p>
                            </a>
                        </div>
                    </div>
                    <!-- Partner Logos Marquee -->
                    <div class="home-hero-logo-marquee" data-w-id="9725a2ab-99f3-4bc6-b054-9360766f3d9c">
                        <p class="title-text-v4 home-logo-marquee-title">Collaborating with Leading Financial Institutions &amp; Universities</p>
                        <div class="clients-logo-marquee" data-w-id="c5d3be0d-ebd3-fa41-cc74-01ad2e158ff5">
                            <div class="clients-logos-wrapper">
                                <div class="clients-logo-item"><img alt="Clients Logo" class="clients-logo" loading="lazy" src="{{ asset('assets/cdn_prod_website-files_com/67c0042b87279d5a0f828374/67c68e94febb0fcb9494f90e_Logo_202.png') }}"/></div>
                                <div class="clients-logo-item"><img alt="Clients Logo" class="clients-logo" loading="lazy" src="{{ asset('assets/cdn_prod_website-files_com/67c0042b87279d5a0f828374/67c68e94f412c8d6a21912e5_Logo_201.png') }}"/></div>
                                <div class="clients-logo-item"><img alt="Clients Logo" class="clients-logo" loading="lazy" src="{{ asset('assets/cdn_prod_website-files_com/67c0042b87279d5a0f828374/67c68e942b20a85f685fe9e1_Logo_203.png') }}"/></div>
                                <div class="clients-logo-item"><img alt="Clients Logo" class="clients-logo" loading="lazy" src="{{ asset('assets/cdn_prod_website-files_com/67c0042b87279d5a0f828374/67c68e944cfb6c4a38dec397_Logo_206.png') }}"/></div>
                                <div class="clients-logo-item"><img alt="Clients Logo" class="clients-logo" loading="lazy" src="{{ asset('assets/cdn_prod_website-files_com/67c0042b87279d5a0f828374/67c68e948341c9cd0b615130_Logo_204.png') }}"/></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Image Block -->
                <div class="home-hero-image-block" data-w-id="15da6e66-e4fd-4aa9-6c33-ac3402baf4d2">
                    <img alt="Home Hero Image" class="home-hero-image" loading="lazy" sizes="(max-width: 645px) 100vw, 645px" src="{{ asset('assets/cdn_prod_website-files_com/67c0042b87279d5a0f828374/67c68cc4b5a2037965d57212_Home_20Hero_20Image.jpg') }}"/>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. About Us Section + Rolling Counters -->
    <section class="about-us" id="about">
        <div class="section-gap">
            <div class="w-layout-blockcontainer container-default w-container">
                <div class="about-us-wrapper">
                    <div class="section-top-block no-margin">
                        <p class="subtitle" data-w-id="f7febfed-47b7-1979-3587-0ab4794210cb">About AHTC</p>
                        <div class="animated-title-block" data-w-id="35de10ba-bb8c-4a8d-4ac4-9107958c5fa4">
                            <h2 class="section-title">In a rapidly shifting global financial landscape, we bridge the gap between market complexities and sustainable growth through high-impact talent development and strategic consultancy.</h2>
                            <div class="title-overlay"></div>
                        </div>
                    </div>
                    <!-- Animated Rolling Counters -->
                    <div class="about-us-counters-wrapper">
                        <div class="about-us-counter-item" data-w-id="11dfd2a2-b068-f2f6-fde7-c796aa8709b1">
                            <div class="fun-fact-number-wrapper">
                                <div class="fun-fact-number-block upper-movement"><h3 class="fun-fact-number">1</h3><h3 class="fun-fact-number">2</h3><h3 class="fun-fact-number">3</h3><h3 class="fun-fact-number">4</h3><h3 class="fun-fact-number">5</h3></div>
                                <div class="fun-fact-number-block lower-movement"><h3 class="fun-fact-number">0</h3><h3 class="fun-fact-number">1</h3><h3 class="fun-fact-number">2</h3><h3 class="fun-fact-number">3</h3><h3 class="fun-fact-number">4</h3></div>
                                <div class="fun-fact-number-block upper-movement"><h3 class="fun-fact-number">4</h3><h3 class="fun-fact-number">3</h3><h3 class="fun-fact-number">2</h3><h3 class="fun-fact-number">1</h3><h3 class="fun-fact-number">0</h3></div>
                                <h3 class="fun-fact-suffix">+</h3>
                            </div>
                            <p class="fun-fact-text">Institutional Clients</p>
                        </div>
                        <div class="about-us-counter-item" data-w-id="7ae93091-cb1a-1fb5-c47b-8e609ac01cc6">
                            <div class="fun-fact-number-wrapper">
                                <div class="fun-fact-number-block upper-movement"><h3 class="fun-fact-number">7</h3><h3 class="fun-fact-number">6</h3><h3 class="fun-fact-number">5</h3><h3 class="fun-fact-number">4</h3><h3 class="fun-fact-number">3</h3></div>
                                <div class="fun-fact-number-block lower-movement"><h3 class="fun-fact-number">0</h3><h3 class="fun-fact-number">1</h3><h3 class="fun-fact-number">2</h3><h3 class="fun-fact-number">3</h3><h3 class="fun-fact-number">4</h3></div>
                                <div class="fun-fact-number-block upper-movement"><h3 class="fun-fact-number">4</h3><h3 class="fun-fact-number">3</h3><h3 class="fun-fact-number">2</h3><h3 class="fun-fact-number">1</h3><h3 class="fun-fact-number">0</h3></div>
                                <h3 class="fun-fact-suffix">+</h3>
                            </div>
                            <p class="fun-fact-text">Training Initiatives</p>
                        </div>
                        <div class="about-us-counter-item" data-w-id="8f45528b-3a3c-2abd-b57e-a707cdea920e">
                            <div class="fun-fact-number-wrapper">
                                <div class="fun-fact-number-block upper-movement"><h3 class="fun-fact-number">3</h3><h3 class="fun-fact-number">4</h3><h3 class="fun-fact-number">5</h3><h3 class="fun-fact-number">6</h3><h3 class="fun-fact-number">7</h3></div>
                                <div class="fun-fact-number-block lower-movement"><h3 class="fun-fact-number">5</h3><h3 class="fun-fact-number">4</h3><h3 class="fun-fact-number">3</h3><h3 class="fun-fact-number">2</h3><h3 class="fun-fact-number">1</h3></div>
                                <h3 class="fun-fact-suffix">+</h3>
                            </div>
                            <p class="fun-fact-text">University Modules</p>
                        </div>
                        <div class="about-us-counter-item" data-w-id="c6e79b53-7c9c-a9ca-5fa4-da4938fc737e">
                            <div class="fun-fact-number-wrapper">
                                <div class="fun-fact-number-block upper-movement"><h3 class="fun-fact-number">6</h3><h3 class="fun-fact-number">5</h3><h3 class="fun-fact-number">4</h3><h3 class="fun-fact-number">3</h3><h3 class="fun-fact-number">2</h3></div>
                                <div class="fun-fact-number-block lower-movement"><h3 class="fun-fact-number">5</h3><h3 class="fun-fact-number">4</h3><h3 class="fun-fact-number">3</h3><h3 class="fun-fact-number">2</h3><h3 class="fun-fact-number">1</h3></div>
                                <h3 class="fun-fact-suffix">+</h3>
                            </div>
                            <p class="fun-fact-text">Years of Excellence</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Training & Learning Solutions Section -->
    <section class="our-services" id="solutions">
        <div class="section-gap">
            <div class="w-layout-blockcontainer container-default w-container">
                <div class="our-services-cards-wrapper" data-w-id="dfa11918-73c7-3d99-54b9-f5061bf8f6b2">
                    <div class="section-top-block align-center">
                        <p class="subtitle" data-w-id="6dd52b2f-7495-51a8-21ed-328803cd2bb4">Training &amp; Learning Solutions</p>
                        <h2 class="section-title" data-w-id="6dd52b2f-7495-51a8-21ed-328803cd2bb7">Explore AHTC Specialized Programs</h2>
                    </div>
                    <div class="services-cards-items-wrapper" data-w-id="7885df3e-df23-771e-eb5f-9c66fbf488d7">
                        <div class="service-collection-wrapper w-dyn-list">
                            <div class="services-cards-items-list w-dyn-items" role="list">
                                <div class="service-collection-list-item w-dyn-item" role="listitem">
                                    <div class="services-card-item">
                                        <img alt="Corporate Solutions" class="services-card-icon" loading="lazy" src="{{ asset('assets/cdn_prod_website-files_com/67c7df18985a0ca7e27b1104/67c7e1872d33dcbfe90b69e1_Icon_20_2_.svg') }}"/>
                                        <a class="service-card-link w-inline-block" href="#contact">
                                            <h3 class="title-text-v4 service-card-title">Corporate &amp; Enterprise Solutions</h3>
                                        </a>
                                        <p class="services-card-text">Corporate Programmes, Customized In-house Training, Professional Certification via University collaborations, and SME Capacity Building.</p>
                                    </div>
                                </div>
                                <div class="service-collection-list-item w-dyn-item" role="listitem">
                                    <div class="services-card-item">
                                        <img alt="Executive Development" class="services-card-icon" loading="lazy" src="{{ asset('assets/cdn_prod_website-files_com/67c7df18985a0ca7e27b1104/67c7e143a1afdeff4ca18299_Icon_20_1_.svg') }}"/>
                                        <a class="service-card-link w-inline-block" href="#contact">
                                            <h3 class="title-text-v4 service-card-title">Executive &amp; Leadership Development</h3>
                                        </a>
                                        <p class="services-card-text">Executive Programmes for C-suite and Board members, Leadership Academies, and Graduate Development Onboarding.</p>
                                    </div>
                                </div>
                                <div class="service-collection-list-item w-dyn-item" role="listitem">
                                    <div class="services-card-item">
                                        <img alt="Digital Ecosystems" class="services-card-icon" loading="lazy" src="{{ asset('assets/cdn_prod_website-files_com/67c7df18985a0ca7e27b1104/67c7e1246a84540c70a0cbba_Icon.svg') }}"/>
                                        <a class="service-card-link w-inline-block" href="#contact">
                                            <h3 class="title-text-v4 service-card-title">Institutional &amp; Digital Ecosystems</h3>
                                        </a>
                                        <p class="services-card-text">University Executive modules bridging academic theory with practice, and Digital Learning Solutions for flexible hybrid ecosystems.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Our Impact Section -->
    <section class="our-impact-section">
        <div class="section-gap">
            <div class="w-layout-blockcontainer container-default w-container">
                <div class="common-content-grid center-aligned">
                    <div class="common-grid-image-wrapper style-two" data-w-id="76b312a6-4a7f-24fb-fc63-d9f04b3b5ede">
                        <img alt="Our Impact Image" class="common-grid-image" loading="lazy" sizes="(max-width: 645px) 100vw, 645px" src="{{ asset('assets/cdn_prod_website-files_com/67c0042b87279d5a0f828374/67c9112d4ebcbc13e69c26d0_Our_20Impact_20Image.jpg') }}"/>
                    </div>
                    <div class="common-grid-content-wrapper">
                        <div class="section-top-block no-margin">
                            <p class="subtitle" data-w-id="ca57e78b-1a4f-0d33-5bf6-e42dc8db975c">Our Impact</p>
                            <div class="section-top-title-wrapper">
                                <h2 class="section-title inline-title" data-w-id="ca57e78b-1a4f-0d33-5bf6-e42dc8db975e">Fortifying Institutional Capabilities &amp; Talent</h2>
                            </div>
                            <p class="our-impact-text" data-w-id="8a1c9c17-a5f7-348a-11e3-7a6d695fce78">We collaborate closely with leading institutions to close critical capability gaps and cultivate forward-thinking talent.</p>
                        </div>
                        <ul class="our-impact-list" role="list">
                            <li class="our-impact-list-item" data-w-id="7fc7f509-a30c-5510-6828-ccb3f026a6c0">Leading Financial Institutions &amp; Islamic Banks</li>
                            <li class="our-impact-list-item" data-w-id="853dd7f8-ef20-ec1f-9fea-c75d7262394e">Government Agencies &amp; Regulatory Bodies</li>
                            <li class="our-impact-list-item" data-w-id="22f92289-f683-21fd-882b-286ce6bf3297">Universities &amp; Institutes of Higher Learning</li>
                            <li class="our-impact-list-item" data-w-id="b0fe0f8c-a992-f9f7-b49a-9df43d501867">Corporations, SMEs &amp; Professional Bodies</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Strategic Pillars & Domain Mastery Showcase -->
    <section class="strategic-pillars-section">
        <div class="section-gap">
            <div class="w-layout-blockcontainer container-default w-container">
                <div class="section-top-block align-center">
                    <p class="subtitle" data-w-id="sp-sub-title">Domain Mastery</p>
                    <h2 class="section-title" data-w-id="sp-main-title">Specialized Strategic Focus Areas</h2>
                </div>
                <div class="strategic-pillars-grid">
                    <div class="common-card-style">
                        <img alt="Islamic Banking" class="common-card-icon" loading="lazy" src="{{ asset('assets/cdn_prod_website-files_com/67c0042b87279d5a0f828374/67c52bfd0f2742b61293c71b_theme_20icon_20_5_.svg') }}"/>
                        <h3 class="common-card-title">Islamic Banking Solutions</h3>
                        <p class="common-card-text">Comprehensive advisory and training on Islamic financial products, credit risk, operationalizing contracts, and Islamic capital markets.</p>
                    </div>
                    <div class="common-card-style">
                        <img alt="Shariah Advisory" class="common-card-icon" loading="lazy" src="{{ asset('assets/cdn_prod_website-files_com/67c0042b87279d5a0f828374/67c52bfc82aba6829dbe89aa_theme_20icon_20_4_.svg') }}"/>
                        <h3 class="common-card-title">Shariah Governance &amp; Advisory</h3>
                        <p class="common-card-text">Rigorous Shariah compliance auditing, governance structures, and expert advisory tailored for financial institutions and regulators.</p>
                    </div>
                    <div class="common-card-style">
                        <img alt="Executive Development" class="common-card-icon" loading="lazy" src="{{ asset('assets/cdn_prod_website-files_com/67c0042b87279d5a0f828374/67c52bfc3b53ebcc8e060889_theme_20icon_20_3_.svg') }}"/>
                        <h3 class="common-card-title">Executive &amp; Leadership Mastery</h3>
                        <p class="common-card-text">Tailored Board &amp; C-Suite executive programs, university-partnered certifications, and high-impact leadership academies.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .strategic-pillars-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-top: 40px;
        }
        .contact-quick-selectors {
            display: flex;
            gap: 12px;
            margin-bottom: 24px;
            flex-wrap: wrap;
        }
        .contact-quick-btn {
            flex: 1;
            min-width: 200px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            padding: 14px 20px !important;
        }
        @media (max-width: 991px) {
            .strategic-pillars-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .contact-form-content-wrapper {
                grid-template-columns: 1fr !important;
                flex-direction: column !important;
            }
        }
        @media (max-width: 767px) {
            .strategic-pillars-grid {
                grid-template-columns: 1fr;
            }
            .home-hero-title {
                font-size: 32px !important;
                line-height: 1.2 !important;
            }
            .contact-field-row {
                flex-direction: column !important;
                gap: 16px !important;
            }
            .contact-field-row .contact-form-field-wrapper {
                width: 100% !important;
            }
            .contact-quick-selectors {
                flex-direction: column !important;
            }
            .contact-quick-btn {
                width: 100% !important;
                min-width: 100% !important;
            }
            .contact-form-wrapper {
                padding: 20px 16px !important;
            }
            .contact-form-button {
                width: 100% !important;
            }
        }
    </style>

    <!-- 6. Why Choose Us Section -->
    <section class="why-choose-section">
        <div class="section-gap-bottom">
            <div class="w-layout-blockcontainer container-default w-container">
                <div class="why-choose-wrapper">
                    <div class="section-top-block align-center">
                        <p class="subtitle" data-w-id="10d5286c-5ab2-5dfd-476b-99e2e98a3297">Why Choose AHTC</p>
                        <h2 class="section-title why-choose-section-title" data-w-id="10d5286c-5ab2-5dfd-476b-99e2e98a3299">Why Select AHTC for Islamic Banking &amp; Advisory?</h2>
                    </div>
                    <div class="common-content-grid">
                        <div class="common-grid-content-wrapper" data-w-id="70eb8bc1-6218-5300-ed04-e153dc9cffa3">
                            <div class="common-card-style">
                                <img alt="Why Choose Icon" class="common-card-icon" loading="lazy" src="{{ asset('assets/cdn_prod_website-files_com/67c0042b87279d5a0f828374/67c52bfd0f2742b61293c71b_theme_20icon_20_5_.svg') }}"/>
                                <h3 class="common-card-title">Deep Industry Expertise</h3>
                                <p class="common-card-text">Specialized knowledge across Islamic banking operations, credit management, and risk mitigation frameworks.</p>
                            </div>
                            <div class="common-card-style">
                                <img alt="Why Choose Icon" class="common-card-icon" loading="lazy" src="{{ asset('assets/cdn_prod_website-files_com/67c0042b87279d5a0f828374/67c52bfc82aba6829dbe89aa_theme_20icon_20_4_.svg') }}" width="Auto"/>
                                <h3 class="common-card-title">Shariah Governance</h3>
                                <p class="common-card-text">Comprehensive understanding of regulatory compliance, operationalizing Shariah contracts, and trade finance.</p>
                            </div>
                            <div class="common-card-style">
                                <img alt="Why Choose Icon" class="common-card-icon" loading="lazy" src="{{ asset('assets/cdn_prod_website-files_com/67c0042b87279d5a0f828374/67c52bfc3b53ebcc8e060889_theme_20icon_20_3_.svg') }}"/>
                                <h3 class="common-card-title">Customized In-house Tracks</h3>
                                <p class="common-card-text">Tailored modules engineered around exact business bottlenecks, corporate culture, and strategic goals.</p>
                            </div>
                            <div class="common-card-style">
                                <img alt="Why Choose Icon" class="common-card-icon" loading="lazy" src="{{ asset('assets/cdn_prod_website-files_com/67c0042b87279d5a0f828374/67c52bfccd96a68be6f1dba0_theme_20icon_20_2_.svg') }}"/>
                                <h3 class="common-card-title">Academic &amp; Global Standards</h3>
                                <p class="common-card-text">Strategic collaborations with Institutes of Higher Learning &amp; Universities for accredited credentialing.</p>
                            </div>
                        </div>
                        <div class="common-grid-image-wrapper" data-w-id="70eb8bc1-6218-5300-ed04-e153dc9cffb0" id="w-node-_70eb8bc1-6218-5300-ed04-e153dc9cffb0-294c3207">
                            <img alt="Common grid Image" class="common-grid-image" loading="lazy" sizes="(max-width: 645px) 100vw, 645px" src="{{ asset('assets/cdn_prod_website-files_com/67c0042b87279d5a0f828374/67c92e7d82849093fe4ba793_Why_20Choose_20Image.jpg') }}"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Contact Us Form & Direct Info Section -->
    <section class="contact-form-section" id="contact">
        <div class="section-gap">
            <div class="w-layout-blockcontainer container-default w-container">
                <div class="section-top-block align-center">
                    <p class="subtitle">Get In Touch</p>
                    <h2 class="section-title">Connect With Al-Hijrah Consultancy</h2>
                </div>
                <div class="contact-form-content-wrapper">
                    <div class="contact-image-wrapper">
                        <img alt="Contact AHTC" class="contact-image" loading="lazy" sizes="(max-width: 615px) 100vw, 615px" src="{{ asset('assets/cdn_prod_website-files_com/67c0042b87279d5a0f828374/67d2994758ef0af84d115743_Contact_20Image.jpg') }}"/>
                    </div>
                    <div class="contact-form-wrapper">
                        <!-- Direct Contact Method Quick Selectors -->
                        <div class="contact-quick-selectors">
                            <a href="https://wa.me/60192680787?text=Hello%20AHTC,%20I%20would%20like%20to%20enquire%20about%20your%20Islamic%20Banking%20training%20and%20consultancy%20services." target="_blank" class="primary-button contact-quick-btn w-inline-block" style="background-color: #25D366; border-color: #25D366;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.05 4.91A9.816 9.816 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01zm-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18-3.12.82.83-3.04-.2-.32a8.19 8.19 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24 2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c0 4.54-3.7 8.24-8.24 8.24zm4.52-6.16c-.25-.12-1.47-.72-1.69-.8-.23-.09-.39-.12-.56.12-.17.25-.66.8-.81.97-.15.17-.3.19-.55.07-.25-.12-1.05-.39-2.01-1.24-.74-.66-1.24-1.47-1.39-1.72-.15-.25-.02-.38.11-.5.11-.11.25-.29.37-.44.12-.15.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1 0 1.24.9 2.44 1.03 2.61.12.17 1.77 2.71 4.29 3.8.6.26 1.07.41 1.44.53.6.19 1.15.16 1.59.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.07.15-1.18-.06-.11-.22-.17-.47-.3z"/>
                                </svg>
                                <p class="button-text" style="color: #ffffff; margin: 0;">Chat on WhatsApp</p>
                            </a>
                            <a href="mailto:enquiry@alhijrahtraining.com?subject=Inquiry%20regarding%20AHTC%20Training%20%26%20Consultancy" class="primary-button style-two hero-button contact-quick-btn w-inline-block">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                                <p class="button-text" style="margin: 0;">Send Email Direct</p>
                            </a>
                        </div>
                        
                        <div class="contact-form w-form">
                            <form class="contact-form-block" id="email-form" name="email-form" onsubmit="event.preventDefault(); alert('Thank you! Your message has been sent to Al-Hijrah Training & Consultancy.');">
                                <div class="contact-field-row">
                                    <div class="contact-form-field-wrapper">
                                        <label class="contact-form-label" for="name">Full Name*</label>
                                        <input class="contact-form-field w-input" id="name" maxlength="256" name="name" placeholder="Your Name" required="" type="text"/>
                                    </div>
                                    <div class="contact-form-field-wrapper">
                                        <label class="contact-form-label" for="Email">Your Email*</label>
                                        <input class="contact-form-field w-input" id="Email" maxlength="256" name="Email" placeholder="enquiry@alhijrahtraining.com" required="" type="email"/>
                                    </div>
                                </div>
                                <div class="contact-field-row">
                                    <div class="contact-form-field-wrapper">
                                        <label class="contact-form-label" for="Phone-No">Phone Number*</label>
                                        <input class="contact-form-field w-input" id="Phone-No" maxlength="256" name="Phone-No" placeholder="+6019 268 0787" required="" type="tel"/>
                                    </div>
                                    <div class="contact-form-field-wrapper">
                                        <label class="contact-form-label" for="Preferred-Contact">Preferred Contact Channel*</label>
                                        <select class="contact-form-field w-select" id="Preferred-Contact" name="Preferred-Contact" required="" style="padding: 12px 16px;">
                                            <option value="WhatsApp">WhatsApp</option>
                                            <option value="Email" selected>Email</option>
                                            <option value="Phone Call">Phone Call</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-message-form-wrapper">
                                    <label class="contact-form-label" for="Your-Message">Your Message*</label>
                                    <textarea class="contact-form-field message-field w-input" id="Your-Message" maxlength="5000" name="Your-Message" placeholder="Please type your message here..."></textarea>
                                </div>
                                <input class="form-button contact-form-button w-button" type="submit" value="Submit Enquiry"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. Footer Section -->
    <section class="footer">
        <div class="w-layout-blockcontainer container-default w-container">
            <div class="footer-top-block">
                <div class="section-gap">
                    <div class="footer-top-wrapper">
                        <div class="footer-logo-block">
                            <a class="footer-logo-wrapper w-inline-block" href="#home">
                                <img src="{{ asset('assets/images/Secondary-Logo-Trimmed.png') }}" alt="AHTC Footer Logo" style="height: 76px; width: auto; object-fit: contain;">
                            </a>
                            <p class="text-medium footer-logo-text">Empowering People. Strengthening Institutions. Advancing Islamic Finance.</p>
                        </div>
                        <div class="footer-lists-column">
                            <h3 class="footer-list-title">Quick Navigation</h3>
                            <div class="footer-list-items-wrapper">
                                <a class="footer-list-item" href="#home">Home</a>
                                <a class="footer-list-item" href="#about">About Us</a>
                                <a class="footer-list-item" href="#solutions">Training &amp; Solutions</a>
                                <a class="footer-list-item" href="#contact">Contact Us</a>
                            </div>
                        </div>
                        <div class="footer-lists-column">
                            <h3 class="footer-list-title">Contact AHTC</h3>
                            <div class="footer-list-items-wrapper">
                                <a class="footer-list-item" href="mailto:enquiry@alhijrahtraining.com">enquiry@alhijrahtraining.com</a>
                                <a class="footer-list-item" href="tel:+60192680787">+6019 268 0787</a>
                                <div class="footer-list-item address-block">11-1, 1st Floor, Jalan Putra Mahkota 7/8C</div>
                                <div class="footer-list-item address-block">Pusat Bandar Putra Point, Putra Heights</div>
                                <div class="footer-list-item address-block">47650 Subang Jaya, Selangor</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-block">
                <p class="footer-bottom-text">Copyright © <a class="footer-bottom-link" href="#home">Al-Hijrah Training &amp; Consultancy (AHTC)</a>. All rights reserved.</p>
            </div>
        </div>
    </section>
</main>
@endsection
