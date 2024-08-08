@extends('main')
@section('content')
<div class="about">
    <div class="about-details">
        <p class="ms-4 me-4" style="font-size: 19px; text-align: justify;">
            <span class="ms-md-5">I am a dedicated and skilled computer science graduate with a strong foundation in web
                development and system design.</span> Proficient in a variety of programming languages including Java,
            C++, CSS,
            HTML, JavaScript, and PHP, I have a proven track record in creating dynamic and responsive websites. My
            experience
            includes developing backend systems with frameworks like Laravel and CodeIgniter, where I've implemented
            robust
            solutions for database management and API integrations. During my internship at DOST Project LODI, I gained
            hands-on
            experience in full-stack web development, focusing on front-end design and backend logic using Laravel. This
            experience honed my ability to troubleshoot and optimize code, ensuring high performance and security in
            every
            project. I am passionate about solving complex problems and thrive in collaborative environments where I can
            contribute innovative ideas to achieve business goals.
        </p>

    </div>
    <div class="about-details">
        <h3 class="ms-4 me-4 fs-1">What I'm Doing</h3>
        <div class="container mt-4">
            <div class="container mt-4">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 mb-4">
                        <div class="card h-100 doing-card">
                            <div class="card-body d-flex ">
                                <img class="card-title task-icon m-2 me-3" src="{{ asset('images/colored-web.png') }}"
                                    alt="">
                                <div>
                                    <span class="card-title font-weight-bold fs-3 doing-title">Web Design</span>
                                    <p class="card-text me-3 text-justify">Web design is essential in creating an
                                        engaging
                                        and
                                        user-friendly experience for visitors. Our approach
                                        focuses on clean, modern designs that are responsive and tailored to meet the
                                        unique needs of each client.
                                        We prioritize usability, accessibility, and aesthetics to ensure that your
                                        website not only looks great but
                                        also functions seamlessly across all devices. Let us help you build a visually
                                        appealing and effective online
                                        presence.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 mb-4">
                        <div class="card doing-card h-100">
                            <div class="card-body d-flex ">
                                <img class="card-title task-icon m-2 me-3" src="{{ asset('images/web-dev.png') }}"
                                    alt="">
                                <div>
                                    <span class="card-title font-weight-bold fs-3 doing-title">Web Development</span>
                                    <p class="card-text me-3 text-justify">Web development is the backbone of any
                                        functional
                                        and
                                        efficient website or application. Our team specializes
                                        in creating robust and scalable solutions that meet your business needs. Using
                                        the latest technologies and
                                        frameworks, we ensure that your website is fast, secure, and capable of handling
                                        high traffic volumes. From
                                        front-end interactions to back-end server logic, we integrate every component
                                        seamlessly to provide an optimal
                                        user experience. Trust us to develop a reliable and high-performing web presence
                                        that drives your business forward.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 mb-4">
                        <div class="card doing-card h-100">
                            <div class="card-body d-flex ">
                                <i class='bx bxl-wordpress task-icon fs-2 m-2 me-3'></i>
                                <div>
                                    <span class="card-title font-weight-bold fs-3 doing-title">WordPress
                                        Development</span>
                                    <p class="card-text me-3 text-justify">
                                        WordPress development is at the core of my expertise, where I excel in blending
                                        aesthetic design with robust functionality. I specialize in creating bespoke
                                        themes and plugins tailored to meet diverse client needs. Proficient in PHP,
                                        JavaScript, HTML, and CSS, I harness the full potential of WordPress to build
                                        responsive and scalable websites. My skills extend to optimizing site
                                        performance, implementing SEO best practices, and seamlessly integrating
                                        third-party APIs.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 mb-4">
                        <div class="card doing-card h-100">
                            <div class="card-body d-flex ">
                                <img class="card-title task-icon m-2 me-3" src="{{ asset('images/laravel.png') }}"
                                    alt="">
                                <div>
                                    <span class="card-title font-weight-bold fs-3 doing-title">Laravel
                                        Development</span>
                                    <p class="card-text me-3 text-justify">
                                        Laravel development is my specialty, where I excel in building robust and
                                        scalable web applications. With extensive experience in utilizing Laravel's MVC
                                        architecture, I have developed custom solutions that streamline business
                                        processes and enhance user interaction. My proficiency extends to creating
                                        RESTful APIs, implementing authentication systems, and integrating third-party
                                        services seamlessly. I am skilled in database management with MySQL and have a
                                        strong understanding of front-end technologies like JavaScript, HTML, and CSS to
                                        complement Laravel's backend capabilities.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <hr class="border-hr">
    </div>
    <div class="about-details">
        <h3 class="ms-4 me-4 fs-1">Testimonials</h3>
        <div class="container mt-4">
            <div class="container mt-4">
                <div class="col-12  mb-4">
                    <div class="card doing-card h-100">
                        <div class="card-body d-flex ">
                            <img class="card-title task-icon m-2 me-3" src="{{ asset('images/avatar-no-bg.png') }}"
                                alt="">
                            <div>
                                <span class="card-title font-weight-bold fs-3 doing-title">Anonymous</span>
                                <p class="card-text me-3 text-justify">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                    with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                    recently with desktop publishing software like Aldus PageMaker including
                                    versions of Lorem Ipsum.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-4">
                    <div class="card doing-card h-100">
                        <div class="card-body d-flex ">
                            <img class="card-title task-icon m-2 me-3" src="{{ asset('images/avatar-no-bg.png') }}"
                                alt="">
                            <div>
                                <span class="card-title font-weight-bold fs-3 doing-title">Anonymous</span>
                                <p class="card-text me-3 text-justify">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                    with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                    recently with desktop publishing software like Aldus PageMaker including
                                    versions of Lorem Ipsum.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div>
        <hr class="border-hr">
    </div>
</div>
@endsection
