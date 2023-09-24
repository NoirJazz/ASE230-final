<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Hiric</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="bootstrap 5, premium, marketing, multipurpose" />
    <meta content="Themesbrand" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- icon -->
    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/pe-icon-7-stroke.css" />

    <link href="css/style.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/colors/cyan.css" id="color-opt">
</head>

<body data-bs-theme="light">

    <!-- STRAT NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-white navbar-custom sticky sticky-white" role="navigation"
        id="navbar">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo text-uppercase" href="index.php">
                <i class="mdi mdi-alien"></i>Hiric
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu text-dark"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav navbar-center" id="navbar-navlist">
                    <li class="nav-item">
                        <a data-scroll href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#features" class="nav-link">Features</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#services" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#pricing" class="nav-link">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#blog" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#contact" class="nav-link">Contact</a>
                    </li>

                </ul>
                <div class="nav-button ms-auto">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <button type="button"
                                class="btn btn-primary navbar-btn btn-rounded waves-effect waves-light">Try it
                                Free</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!--START HOME-->
    <section class="section bg-home home-half" id="home" data-image-src="images/bg-home.jpg">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-white text-center">
                    <h4 class="home-small-title">Earth-friendly Design</h4>
                    <h1 class="home-title">To bridge the chasm between technology and nature, weaving them together
                        to pioneer solutions that nurture the Earth and advance humanity</h1>
                    <p class="pt-3 home-desc mx-auto">Maecenas class semper class semper sollicitudin lectus lorem
                        iaculis imperdiet aliquam vehicula tempor auctor curabitur pede aenean ornare.</p>
                    <p class="play-shadow mt-4" data-bs-toggle="modal" data-bs-target="#watchvideomodal"><a
                            href="javascript: void(0);" class="play-btn video-play-icon"><i
                                class="mdi mdi-play text-center"></i></a></p>

                    <!-- Modal -->
                    <div class="modal fade" id="watchvideomodal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-body p-0" style="margin-bottom: -8px;">
                                    <video id="VisaChipCardVideo" class="video-box" controls width="800">
                                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                                        <!--Browser does not support <video> tag -->
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END HOME-->

    <!-- CLIENT LOGO -->
    <section class="section-sm bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="client-images my-3 my-md-0">
                        <img src="images/clients/1.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="client-images my-3 my-md-0">
                        <img src="images/clients/2.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>

                <div class="col-md-3 ">
                    <div class="client-images my-3 my-md-0">
                        <img src="images/clients/3.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="client-images my-3 my-md-0">
                        <img src="images/clients/4.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CLIENT LOGO -->

    <!--START FEATURES-->
    <section class="section" id="features">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-2 order-lg-1">
                    <div class="features-box mt-5 mt-lg-0">
                        <h3>We embrace the philosophy of "Progress in Harmony," striving
                            to produce technology that integrates seamlessly with nature, aiming to restore
                            environmental balance and promote sustainable
                            living.</h3>
                        <p class="text-muted web-desc">Separated they live in Bookmarksgrove right at the coast of the
                            Semantics, a large language ocean.</p>
                        <ul class="text-muted list-unstyled mt-4 features-item-list">
                            <li class="">We put a lot of effort in design.</li>
                            <li class="">The most important ingredient of successful website.</li>
                            <li class="">Submit Your Orgnization.</li>
                        </ul>
                        <a href="#" class="btn btn-primary mt-4 waves-effect waves-light">Learn More <i
                                class="mdi mdi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-7 order-1 order-lg-2">
                    <div class="features-img mx-auto me-lg-0">
                        <img src="images/growth-analytics.svg" alt="macbook image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END FEATURES-->

    <!--START SERVICES-->
    <section class="section bg-light " id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1 class="section-title text-center"> Our Services</h1>
                    <div class="section-title-border mt-3"></div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <i class="pe-7s-diamond text-primary"></i>
                            <div class="ms-4">
                                <h4>GreenRoof™</h4>
                                <p class="pt-2 text-muted">A modular green roofing system that utilizes smart sensors to
                                    regulate water, sunlight, and nutrients, allowing urban spaces to contribute
                                    positively to the environment.</p>
                                <h4>Features:</h4>
                                <ul class="text-muted">
                                    <li>Smart Irrigation:The system detects soil moisture levels and provides optimal
                                        water quantities,
                                        reducing wastage and ensuring plant health.</li>
                                    <li>Pollinator Patches: Specific sections within the GreenRoof™ are designed to
                                        attract and
                                        support urban pollinators like bees and butterflies.</li>
                                    <li>Air Purification Zones: Incorporates certain plants known to absorb pollutants,
                                        promoting cleaner
                                        urban air and combating the urban heat island effect</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <i class="pe-7s-display2 text-primary"></i>
                            <div class="ms-4">
                                <h4>PureStream Filters™</h4>
                                <p class="pt-2 text-muted">Bio-engineered filters that harness the power of specific
                                    bacteria
                                    and plants to purify water without chemicals, making potable water accessible and
                                    sustainable.</p>
                                <h4>Features:</h4>
                                <ul class="text-muted">
                                    <li>Microbial Cleansing: Harnesses beneficial bacteria to break down harmful
                                        pathogens,
                                        ensuring water purity without chemical residues.</li>
                                    <li>Floating Gardens: Aesthetically pleasing modules that float on water surfaces,
                                        removing heavy metals and other toxins using specific wetland plants.</li>
                                    <li>Portable Units: Compact, travel-friendly variants designed for trekkers and
                                        campers,
                                        ensuring access to clean water even in remote areas.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <i class="pe-7s-piggy text-primary"></i>
                            <div class="ms-4">
                                <h4>TerraCharge™</h4>
                                <p class="pt-2 text-muted">Pathways made with special tiles that convert foot traffic
                                    into usable energy,
                                    illuminating pathways at night or powering nearby amenities.</p>
                                <h4>Features:</h4>
                                <ul class="text-muted">
                                    <li>Energy Storage: Surplus energy from foot traffic during the day is stored in
                                        sleek,
                                        underground batteries, allowing extended use after dark.</li>
                                    <li>Intelligent Lighting: The stored energy powers adaptive lighting systems that
                                        adjust based on
                                        ambient light and movement,ensuring pathways are well-lit without unnecessary
                                        energy consumption.</li>
                                    <li>Interactive Displays: Some TerraCharge™ pathways feature interactive elements
                                        like ground-projected
                                        games or information graphics,all powered by pedestrian movement.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <i class="pe-7s-science text-primary"></i>
                            <div class="ms-4">
                                <h4>EcoLearn Hub™</h4>
                                <p class="pt-2 text-muted">A digital platform offering educational courses on
                                    sustainable living,
                                    organic farming, and eco-technology innovations</p>
                                <h4>Features:</h4>
                                <ul class="text-muted">
                                    <li>DIY Workshops: Practical sessions teaching users how to upcycle waste,
                                        create home gardens, or even set up solar panels.</li>
                                    <li>Children's Series: Tailored courses introducing children to nature conservation,
                                        renewable energy, and the importance of biodiversity.</li>
                                    <li>Global Webinars: Regular online sessions featuring guest experts in fields like
                                        permaculture,
                                        green architecture, and sustainable transportation.
                                        These webinars foster a community of eco-enthusiasts and offer the latest in
                                        green innovations.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    <!--END SERVICES-->

    <!--START WEBSITE-DESCRIPTION-->
    <section class="section bg-web-desc">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-white">Build your dream website today</h2>
                    <p class="pt-3 home-desc mx-auto">But nothing the copy said could convince her and so it didn’t take
                        long until a few insidious Copy Writers ambushed her.</p>
                    <a href="#" class="btn btn-light mt-5 waves-effect waves-light">View Plan & Pricing</a>
                </div>
            </div>
        </div>
    </section>
    <!--END WEBSITE-DESCRIPTION-->

    <!--START ABOUT-US-->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="about-title mx-auto text-center">
                        <h2>A Digital web studio creating stunning &amp; Engaging online
                            Experiences </h2>
                        <p class="text-muted pt-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus donec various versions have evolved quam felis.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-3 col-sm-6">
                    <div class="team-box text-center">
                        <div class="team-wrapper">
                            <div class="team-member">
                                <img alt="" src="images/team/Greene.jpg" class="img-fluid rounded">
                            </div>
                        </div>
                        <h4 class="team-name">Dr. Marcus Greene </h4>
                        <p class="text-uppercase team-designation">Founder & CEO</p>
                        <p class="text-information">Holding a Ph.D. in Environmental Science from Stanford, Dr. Greene
                            has always been
                            a passionate advocate for eco-conscious innovations.
                            His visionary leadership is the bedrock on which NaturaTech stands.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="team-box text-center">
                        <div class="team-wrapper">
                            <div class="team-member">
                                <img alt="" src="images/team/Kwon.jpg" class="img-fluid rounded">
                            </div>
                        </div>
                        <h4 class="team-name">Aisha Kwon</h4>
                        <p class="text-uppercase team-designation">Chief of Design</p>
                        <p class="text-information">With her background in bio-engineering, is the mastermind behind
                            the cutting-edge technologies at NaturaTech.
                            She believes in harnessing nature's wisdom to address modern challenges.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="team-box text-center">
                        <div class="team-wrapper">
                            <div class="team-member">
                                <img alt="" src="images/team/Mendoza.jpg" class="img-fluid rounded">
                            </div>
                        </div>
                        <h4 class="team-name">Carlos Mendoza </h4>
                        <p class="text-uppercase team-designation">Developer</p>
                        <p class="text-information">Carlos, an alumnus of Design Academy Eindhoven, combines minimalism
                            with bio-inspired designs,
                            making NaturaTech's products not only functional but also aesthetically appealing.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="team-box text-center">
                        <div class="team-wrapper">
                            <div class="team-member">
                                <img alt="" src="images/team/D'souza.jpg" class="img-fluid rounded">
                            </div>
                        </div>
                        <h4 class="team-name">Lydia D'souza</h4>
                        <p class="text-uppercase team-designation">VP of Operations</p>
                        <p class="text-information">Lydia's expertise lies in sustainable supply chains. She ensures
                            that every step in NaturaTech's
                            operations is ethical, green, and efficient.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="team-box text-center">
                        <div class="team-wrapper">
                            <div class="team-member">
                                <img alt="" src="images/team/Ahmed.jpg" class="img-fluid rounded">
                            </div>
                        </div>
                        <h4 class="team-name">Jamal Ahmed </h4>
                        <p class="text-uppercase team-designation">Head of EcoLearn Hub</p>
                        <p class="text-information">As former environmental studies professor from Yale, he curates and
                            oversees the rich tapestry of courses offered by EcoLearn, spreading eco-awareness across
                            the globe.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--END ABOUT-US-->

    <!--START PRICING-->
    <section class="section bg-light" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1 class="section-title text-center">Our Pricing</h1>
                    <div class="section-title-border mt-3"></div>
                    <p class="section-subtitle font-secondary text-muted text-center pt-4">Call to action pricing table
                        is really crucial to your for your business website. Make your bids stand-out with amazing
                        options.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="text-center pricing-box">
                        <h4 class="text-uppercase">Economy</h4>
                        <h1>$9.90</h1>
                        <h6 class="text-uppercase text-muted">Billing Per Month</h6>
                        <div class="plan-features mt-5">
                            <p>Bandwidth: <b class="text-primary">1GB</b></p>
                            <p>Onlinespace: <b class="text-primary">50MB</b></p>
                            <p>Support: <b class="text-primary">No</b></p>
                            <p><b class="text-primary">1</b> Domain</p>
                            <p><b class="text-primary">No</b> Hidden Fees</p>
                        </div>
                        <a href="#" class="btn btn-primary waves-effect waves-light mt-5">Join Now</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center pricing-box price-active">
                        <div class="ribbon-box"><span>Popular</span></div>
                        <h4 class="text-uppercase">Deluxe</h4>
                        <h1>$19.90</h1>
                        <h6 class="text-uppercase text-muted">Billing Per Month</h6>
                        <div class="plan-features mt-5">
                            <p>Bandwidth: <b class="text-primary">10GB</b></p>
                            <p>Onlinespace: <b class="text-primary">500MB</b></p>
                            <p>Support: <b class="text-primary">Yes</b></p>
                            <p><b class="text-primary">10</b> Domain</p>
                            <p><b class="text-primary">No</b> Hidden Fees</p>
                        </div>
                        <a href="#" class="btn btn-primary waves-effect waves-light mt-5">Join Now</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center pricing-box">
                        <h4 class="text-uppercase">Ultimate</h4>
                        <h1>$29.90</h1>
                        <h6 class="text-uppercase text-muted">Billing Per Month</h6>
                        <div class="plan-features mt-5">
                            <p>Bandwidth: <b class="text-primary">100GB</b></p>
                            <p>Onlinespace: <b class="text-primary">2 GB</b></p>
                            <p>Support: <b class="text-primary">Yes</b></p>
                            <p><b class="text-primary">Unlimited</b> Domain</p>
                            <p><b class="text-primary">No</b> Hidden Fees</p>
                        </div>
                        <a href="#" class="btn btn-primary waves-effect waves-light mt-5">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ENd PRICING-->

    <!--START TESTIMONIAL-->
    <section class="section" id="testi">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1 class="section-title text-center">What they've said</h1>
                    <div class="section-title-border mt-3"></div>
                    <p class="section-subtitle text-muted text-center font-secondary pt-4">The Big Oxmox advised her not
                        to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli.
                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="testimonial-box mt-4">
                        <div class="testimonial-decs p-4">
                            <div class="testi-icon">
                                <i class="mdi mdi-format-quote-open display-1"></i>
                            </div>
                            <img src="images/testimonials/user-1.jpg" alt=""
                                class="img-fluid mx-auto d-block img-thumbnail rounded-circle mb-4">
                            <div class="p-1">
                                <h5 class="text-center text-uppercase mb-3">Dennis Williams - <span
                                        class="text-muted text-capitalize">Charleston</span></h5>
                                <p class="text-muted text-center mb-0">“I feel confident imposing change on myself. It's
                                    a lot more fun progressing than
                                    looking back. That's why I ultricies enim at malesuada nibh diam on tortor neaded to
                                    throw curve balls.” </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-box mt-4">
                        <div class="testimonial-decs p-4">
                            <div class="testi-icon">
                                <i class="mdi mdi-format-quote-open display-1"></i>
                            </div>
                            <img src="images/testimonials/user-2.jpg" alt=""
                                class="img-fluid mx-auto d-block img-thumbnail rounded-circle mb-4">
                            <div class="p-1">
                                <h5 class="text-center text-uppercase mb-3">Laurie Bell - <span
                                        class="text-muted text-capitalize">Worcester</span></h5>
                                <p class="text-muted text-center mb-0">“Our task must be to free ourselves by widening
                                    our circle of compassion to embrace
                                    all living creatures and the whole of quis consectetur nunc sit amet semper justo.
                                    nature and its beauty.” </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-box mt-4">
                        <div class="testimonial-decs p-4">
                            <div class="testi-icon">
                                <i class="mdi mdi-format-quote-open display-1"></i>
                            </div>
                            <img src="images/testimonials/user-3.jpg" alt=""
                                class="img-fluid mx-auto d-block img-thumbnail rounded-circle mb-4">
                            <div class="p-1">
                                <h5 class="text-center text-uppercase mb-3">Howard Kelley - <span
                                        class="text-muted text-capitalize">Lynchburg</span></h5>
                                <p class="text-muted text-center mb-0">“I've learned that people will forget what you
                                    said, people will forget what you did,
                                    but people will never forget how donec in efficitur lectus, nec lobortis metus you
                                    made them feel.” </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END TESTIMONIAL-->

    <!--START GET STARTED-->
    <section class="section section-lg bg-get-start">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h1 class="get-started-title text-white">Let's Get Started</h1>
                    <div class="section-title-border mt-4 bg-white"></div>
                    <p class="section-subtitle font-secondary text-white text-center pt-4">Far far away, behind the word
                        mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <a href="#" class="btn btn-light waves-effect mt-4">Get Started <i class="mdi mdi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--END GET STARTED-->

    <!-- START BLOG -->
    <section class="section " id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1 class="section-title text-center">Latest News</h1>
                    <div class="section-title-border mt-3"></div>
                    <p class="section-subtitle text-muted text-center font-secondary pt-4">Separated they live in
                        Bookmarksgrove right at the coast of the Semantics, a large language ocean class at a euismod
                        mus luctus quam.</p>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-4">
                    <div class="blog-box mt-4">
                        <img src="images/blog/img-1.jpg" class="img-fluid rounded" alt="">
                        <div>
                            <h5 class="mt-4 text-muted">UI & UX Design</h5>
                            <h4 class="mt-3"><a href="" class="blog-title"> Doing a cross country road trip </a></h4>
                            <p class="text-muted">She packed her seven versalia, put her initial into the belt and made
                                herself on the way..</p>
                            <div class="mt-3">
                                <a href="" class="read-btn">Read More <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog-box mt-4">
                        <img src="images/blog/img-2.jpg" class="img-fluid rounded" alt="">
                        <div>
                            <h5 class="mt-4 text-muted">Digital Marketing</h5>
                            <h4 class="mt-3"><a href="" class="blog-title">New exhibition at our Museum</a></h4>
                            <p class="text-muted">Pityful a rethoric question ran over her cheek, then she continued her
                                way.</p>
                            <div class="mt-3">
                                <a href="" class="read-btn">Read More <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog-box mt-4">
                        <img src="images/blog/img-3.jpg" class="img-fluid rounded" alt="">
                        <div>
                            <h5 class="mt-4 text-muted">Travelling</h5>
                            <h4 class="mt-3"><a href="" class="blog-title">Why are so many people..</a></h4>
                            <p class="text-muted">Far far away, behind the word mountains, far from the countries
                                Vokalia and Consonantia.</p>
                            <div class="mt-3">
                                <a href="" class="read-btn">Read More <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- END BLOG -->

    <!-- CONTACT FORM START-->
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $comments = $_POST['comments'];
    }
    ?>

    <section class="section " id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1 class="section-title text-center">Get In Touch</h1>
                    <div class="section-title-border mt-3"></div>
                    <p class="section-subtitle text-muted text-center font-secondary pt-4">We thrive when coming up with
                        innovative ideas but also understand that a smart concept should be supported with faucibus
                        sapien odio measurable
                        results.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="mt-4 pt-4">
                        <p class="mt-4"><span class="h5">Office Address 1:</span><br> <span
                                class="text-muted d-block mt-2">4461 Cedar Street Moro, AR 72368</span></p>
                        <p class="mt-4"><span class="h5">Office Address 2:</span><br> <span
                                class="text-muted d-block mt-2">2467 Swick Hill Street <br />New Orleans, LA
                                70171</span></p>
                        <p class="mt-4"><span class="h5">Working Hours:</span><br> <span
                                class="text-muted d-block mt-2">9:00AM To 6:00PM</span></p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="custom-form mt-4 pt-4">
                        <form method="post" name="myForm" onsubmit="return validateForm()">
                            <p id="error-msg"></p>
                            <div id="simple-msg"></div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input name="name" id="name" type="text" class="form-control"
                                            placeholder="Your name*">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input name="email" id="email" type="email" class="form-control"
                                            placeholder="Your email*">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <input type="text" class="form-control" id="subject"
                                            placeholder="Your Subject.." />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <textarea name="comments" id="comments" rows="4" class="form-control"
                                            placeholder="Your message..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-end">
                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary"
                                        value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT FORM END-->

    <!--START FOOTER-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mt-4">
                    <a class="footer-logo text-uppercase" href="#">
                        <i class="mdi mdi-alien"></i>Hiric
                    </a>
                    <div class="text-muted mt-4">
                        <ul class="list-unstyled footer-list">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 mt-4">
                    <h4>Information</h4>
                    <div class="text-muted mt-4">
                        <ul class="list-unstyled footer-list">
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Bookmarks</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 mt-4">
                    <h4>Support</h4>
                    <div class="text-muted mt-4">
                        <ul class="list-unstyled footer-list">
                            <li><a href="">FAQ</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Disscusion</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 mt-4">
                    <h4>Subscribe</h4>
                    <div class="mt-4">
                        <p>In an ideal world this text wouldn’t exist, a client would acknowledge the importance of
                            having web copy before the design starts.</p>
                    </div>
                    <form class="form subscribe">
                        <input placeholder="Email" class="form-control text-white" required>
                        <a href="#" class="submit"><i class="pe-7s-paper-plane"></i></a>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    <!--END FOOTER-->

    <!--START FOOTER ALTER-->
    <div class="footer-alt">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-sm-start pull-none">
                        <p class="copy-rights  mb-3 mb-sm-0">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Hiric - Themesbrand
                        </p>
                    </div>
                    <div class="float-sm-end pull-none copyright">
                        <ul class="list-inline d-flex flex-wrap social m-0">
                            <li class="list-inline-item"><a href="" class="social-icon"><i
                                        class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="" class="social-icon"><i
                                        class="mdi mdi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="" class="social-icon"><i
                                        class="mdi mdi-linkedin"></i></a></li>
                            <li class="list-inline-item"><a href="" class="social-icon"><i
                                        class="mdi mdi-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href="" class="social-icon"><i
                                        class="mdi mdi-microsoft-xbox"></i></a></li>
                        </ul>
                    </div>
                    <!-- <div class="clearfix"></div> -->
                </div>
            </div>
        </div>
    </div>
    <!--END FOOTER ALTER-->

    <!-- Style switcher -->
    <div id="style-switcher">
        <div>
            <h3 class="">Select your color</h3>
            <ul class="pattern">
                <li>
                    <a class="color1" href="javascript: void(0);" onclick="setColor('cyan')"></a>
                </li>
                <li>
                    <a class="color2" href="javascript: void(0);" onclick="setColor('red')"></a>
                </li>
                <li>
                    <a class="color3" href="javascript: void(0);" onclick="setColor('green')"></a>
                </li>
                <li>
                    <a class="color4" href="javascript: void(0);" onclick="setColor('pink')"></a>
                </li>
                <li>
                    <a class="color5" href="javascript: void(0);" onclick="setColor('blue')"></a>
                </li>
                <li>
                    <a class="color6" href="javascript: void(0);" onclick="setColor('purple')"></a>
                </li>
                <li>
                    <a class="color7" href="javascript: void(0);" onclick="setColor('orange')"></a>
                </li>
                <li>
                    <a class="color8" href="javascript: void(0);" onclick="setColor('yellow')"></a>
                </li>
            </ul>
        </div>
        <div class="bottom">
            <a href="javascript: void(0);" id="mode" class="mode-btn text-white">
                <i class="mdi mdi-weather-sunny bx-spin mode-light"></i>
                <i class="mdi mdi-moon-waning-crescent mode-dark"></i>
            </a>
            <a href="javascript: void(0);" class="settings" onclick="toggleSwitcher()"><i
                    class="mdi mdi-cog  mdi-spin"></i></a>
        </div>
    </div>
    <!-- end Style switcher -->

    <!-- javascript -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/smooth-scroll.polyfills.min.js"></script>
    <script src="js/gumshoe.polyfills.min.js"></script>
    <!-- Main Js -->
    <script src="js/app.js"></script>
</body>

</html>