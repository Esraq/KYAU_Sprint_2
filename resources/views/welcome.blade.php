<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Khwaja Yunus ALi University-KYAU</title>
    <link rel="icon" type="image/x-icon" href="/img/logo.jpg">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    
    <link rel="icon" type="image/x-icon" href="/img/logo.jpg">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
/* ===== Mega Menu ===== */
@media (min-width: 992px) {
    /* Position mega dropdown relative to the navbar */
    .mega-dropdown {
        position: static;
    }

    /* Full-width panel that drops below the navbar */
    .mega-dropdown .mega-menu {
        position: absolute;
        left: 0;
        right: 0;
        width: 100%;
        top: 100%;
        border-top: 3px solid var(--primary);
        border-radius: 0 0 8px 8px;
        z-index: 1050;
        /* inherit the existing show/hide transition from style.css */
        display: block;
        opacity: 0;
        visibility: hidden;
        transition: opacity .3s ease, visibility .3s ease;
    }

    .mega-dropdown:hover .mega-menu,
    .mega-dropdown .mega-menu.show {
        opacity: 1;
        visibility: visible;
    }

    /* Column headings */
    .mega-menu-heading {
        font-size: 11px;
        letter-spacing: 1px;
        border-bottom: 2px solid #e8f5e9;
        padding-bottom: 8px;
    }

    /* Links inside mega menu */
    .mega-menu .dropdown-item {
        font-size: 13.5px;
        color: #444;
        border-radius: 4px;
        transition: color .2s, padding-left .2s;
        white-space: normal;
    }

    .mega-menu .dropdown-item:hover {
        background: transparent;
        color: var(--primary);
        padding-left: 6px !important;
    }

    /* Highlight card inside mega menu */
    .mega-menu-card {
        min-height: 160px;
    }
}

/* ===== Mobile: stack mega menu items ===== */
@media (max-width: 991.98px) {
    .mega-menu {
        border-top: 2px solid var(--primary);
    }

    .mega-menu .mega-menu-card {
        display: none; /* hide card on mobile to save space */
    }

    .mega-menu-heading {
        font-size: 12px;
        font-weight: 700;
        margin-top: 10px;
    }
}
</style>
  

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
  <div class="container-fluid bg-success text-light p-0" style="background-color: lab(24.48% -28.75 15.86 / 0.833) !important;">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <small class="fa fa-map-marker-alt text-warning me-2"></small>
                <small>Enayetpur, Chouhali, Sirajganj - 6751, Bangladesh</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <small class="far fa-phone text-warning me-2"></small>
              
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <small class="fa fa-phone-alt text-warning me-2"></small>
                <small>+8801915477923</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center mx-n2">
                <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary text-light" href="">
                 <i class="fas fa-envelope me-2"></i>
                </a>
                <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary text-light" href="">
                   <i class="fas fa-user"></i>
                </a>
                <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary text-light" href="">
                  <i class="fab fa-google"></i>
                </a>
                <a class="btn btn-square btn-link rounded-0 text-light" href="">
                    <i class="fas fa-headset"></i>
                </a>
            </div>
        </div>
    </div>
</div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5" style="text-decoration:none;">
            <img src="img/logo.jpg" alt="Logo" style="height:80px; width:80px; object-fit:contain; display:block; margin-right:12px;">
            <span style="font-size:22px; font-weight:bold; color:black; line-height:1.2;">
                <i>Khwaja Yunus Ali University</i>
            </span>
        </a>

        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">

                <!-- Home -->
             

                <!-- About Us Mega Dropdown -->
                <div class="nav-item dropdown mega-dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">About Us</a>
                    <div class="dropdown-menu mega-menu bg-white m-0 p-4 shadow-lg">
                        <div class="row g-4">
                            <div class="col-lg-3">
                                <h6 class="mega-menu-heading text-primary text-uppercase mb-3">
                                    <i class="fas fa-university me-2"></i>University
                                </h6>
                                <a href="history.html" class="dropdown-item px-0 py-1"><i class="fas fa-chevron-right text-primary me-2 small"></i>History</a>
                                <a href="mission.html" class="dropdown-item px-0 py-1"><i class="fas fa-chevron-right text-primary me-2 small"></i>Mission &amp; Vision</a>
                                <a href="founder.html" class="dropdown-item px-0 py-1"><i class="fas fa-chevron-right text-primary me-2 small"></i>Founder</a>
                                <a href="accreditation.html" class="dropdown-item px-0 py-1"><i class="fas fa-chevron-right text-primary me-2 small"></i>Accreditation</a>
                                <a href="international.html" class="dropdown-item px-0 py-1"><i class="fas fa-chevron-right text-primary me-2 small"></i>International Relation</a>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="mega-menu-heading text-primary text-uppercase mb-3">
                                    <i class="fas fa-users-cog me-2"></i>Governance
                                </h6>
                                <a href="bot.html" class="dropdown-item px-0 py-1"><i class="fas fa-chevron-right text-primary me-2 small"></i>Board of Trustees (BoT)</a>
                                <a href="syndicate.html" class="dropdown-item px-0 py-1"><i class="fas fa-chevron-right text-primary me-2 small"></i>Syndicate</a>
                                <a href="academic-council.html" class="dropdown-item px-0 py-1"><i class="fas fa-chevron-right text-primary me-2 small"></i>Academic Council</a>
                                <a href="team.html" class="dropdown-item px-0 py-1"><i class="fas fa-chevron-right text-primary me-2 small"></i>Our Team</a>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="mega-menu-heading text-primary text-uppercase mb-3">
                                    <i class="fas fa-photo-video me-2"></i>Gallery &amp; Media
                                </h6>
                                <a href="photo-gallery.html" class="dropdown-item px-0 py-1"><i class="fas fa-chevron-right text-primary me-2 small"></i>Photo Gallery</a>
                                <a href="video-gallery.html" class="dropdown-item px-0 py-1"><i class="fas fa-chevron-right text-primary me-2 small"></i>Video Gallery</a>
                                <a href="event-gallery.html" class="dropdown-item px-0 py-1"><i class="fas fa-chevron-right text-primary me-2 small"></i>Event Gallery</a>
                                <a href="news.html" class="dropdown-item px-0 py-1"><i class="fas fa-chevron-right text-primary me-2 small"></i>News &amp; Events</a>
                            </div>

                             <div class="col-lg-3">
                                <h6 class="mega-menu-heading text-primary text-uppercase mb-3">
                                    <i class="fas fa-photo-video me-2"></i>Authorities &amp; People
                                </h6>
                                <a href="photo-gallery.html" class="dropdown-item px-0 py-1"><i class="fas fa-chevron-right text-primary me-2 small"></i>Syndicate</a>
                                <a href="video-gallery.html" class="dropdown-item px-0 py-1"><i class="fas fa-chevron-right text-primary me-2 small"></i>Academic Council</a>
                                <a href="event-gallery.html" class="dropdown-item px-0 py-1"><i class="fas fa-chevron-right text-primary me-2 small"></i>Deans of Faculties</a>
                                <a href="news.html" class="dropdown-item px-0 py-1"><i class="fas fa-chevron-right text-primary me-2 small"></i>Faculty Members</a>
                                 <a href="news.html" class="dropdown-item px-0 py-1"><i class="fas fa-chevron-right text-primary me-2 small"></i>Faculty Staffs</a>
                            </div>
                           
                        </div>
                    </div>
                </div>

                <!-- Academics Mega Dropdown -->
                <div class="nav-item dropdown mega-dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Academics</a>
                    <div class="dropdown-menu mega-menu bg-white m-0 p-4 shadow-lg">
                        <div class="row g-4">
                            <div class="col-lg-3">
                                <h6 class="mega-menu-heading text-primary text-uppercase mb-3">
                                    <i class="fas fa-graduation-cap me-2"></i>Academic Info
                                </h6>
                                <a href="academic-calendar.html" class="dropdown-item px-0 py-1"><i class="fas fa-chevron-right text-primary me-2 small"></i>Academic Calendar</a>
                                <a href="academic-policy.html" class="dropdown-item px-0 py-1"><i class="fas fa-chevron-right text-primary me-2 small"></i>Academic Policy</a>
                                <a href="curriculum.html" class="dropdown-item px-0 py-1"><i class="fas fa-chevron-right text-primary me-2 small"></i>Curriculum</a>
                                <a href="results.html" class="dropdown-item px-0 py-1"><i class="fas fa-chevron-right text-primary me-2 small"></i>Exam &amp; Results</a>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="mega-menu-heading text-primary text-uppercase mb-3">
                                    <i class="fas fa-book-open me-2"></i>Faculties
                                </h6>
                                <a href="faculty-medicine.html" class="dropdown-item px-0 py-1"><i class="fas fa-chevron-right text-primary me-2 small"></i>Faculty of Medicine</a>
                                <a href="faculty-engineering.html" class="dropdown-item px-0 py-1"><i class="fas fa-chevron-right text-primary me-2 small"></i>Faculty of Engineering</a>
                                <a href="faculty-business.html" class="dropdown-item px-0 py-1"><i class="fas fa-chevron-right text-primary me-2 small"></i>Business Administration</a>
                                <a href="faculty-science.html" class="dropdown-item px-0 py-1"><i class="fas fa-chevron-right text-primary me-2 small"></i>Faculty of Science</a>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="mega-menu-heading text-primary text-uppercase mb-3">
                                    <i class="fas fa-user-graduate me-2"></i>Student Resources
                                </h6>
                                <a href="admission.html" class="dropdown-item px-0 py-1"><i class="fas fa-chevron-right text-primary me-2 small"></i>Admission Info</a>
                                <a href="library.html" class="dropdown-item px-0 py-1"><i class="fas fa-chevron-right text-primary me-2 small"></i>Library</a>
                                <a href="scholarship.html" class="dropdown-item px-0 py-1"><i class="fas fa-chevron-right text-primary me-2 small"></i>Scholarships</a>
                                <a href="student-portal.html" class="dropdown-item px-0 py-1"><i class="fas fa-chevron-right text-primary me-2 small"></i>Student Portal</a>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="mega-menu-heading text-primary text-uppercase mb-3">
                                    <i class="fas fa-user-graduate me-2"></i>Departments
                                </h6>
                                <a href="biochemistry-biotechnology.html" class="dropdown-item px-0 py-1">
    <i class="fas fa-chevron-right text-primary me-2 small"></i>Biochemistry and Biotechnology
</a>

<a href="business-administration.html" class="dropdown-item px-0 py-1">
    <i class="fas fa-chevron-right text-primary me-2 small"></i>Business Administration
</a>

<a href="computer-science-engineering.html" class="dropdown-item px-0 py-1">
    <i class="fas fa-chevron-right text-primary me-2 small"></i>Computer Science & Engineering
</a>

<a href="ict.html" class="dropdown-item px-0 py-1">
    <i class="fas fa-chevron-right text-primary me-2 small"></i>Information and Communication Technology (ICT)
</a>

<a href="electrical-electronics-engineering.html" class="dropdown-item px-0 py-1">
    <i class="fas fa-chevron-right text-primary me-2 small"></i>Electrical & Electronics Engineering
</a>

<a href="english.html" class="dropdown-item px-0 py-1">
    <i class="fas fa-chevron-right text-primary me-2 small"></i>English
</a>

<a href="islamic-studies.html" class="dropdown-item px-0 py-1">
    <i class="fas fa-chevron-right text-primary me-2 small"></i>Islamic Studies
</a>

<a href="law.html" class="dropdown-item px-0 py-1">
    <i class="fas fa-chevron-right text-primary me-2 small"></i>Law
</a>

<a href="library-information-science.html" class="dropdown-item px-0 py-1">
    <i class="fas fa-chevron-right text-primary me-2 small"></i>Library and Information Science
</a>

<a href="mechatronics-micromechatronics.html" class="dropdown-item px-0 py-1">
    <i class="fas fa-chevron-right text-primary me-2 small"></i>Mechatronics and Micromechatronics Engineering
</a>

<a href="medical-physics.html" class="dropdown-item px-0 py-1">
    <i class="fas fa-chevron-right text-primary me-2 small"></i>Medical Physics
</a>

<a href="microbiology.html" class="dropdown-item px-0 py-1">
    <i class="fas fa-chevron-right text-primary me-2 small"></i>Microbiology
</a>

<a href="pharmacy.html" class="dropdown-item px-0 py-1">
    <i class="fas fa-chevron-right text-primary me-2 small"></i>Pharmacy
</a>
                               
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pages Simple Dropdown -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Offices</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="feature.html" class="dropdown-item">Vice Chancellor</a>
                        <a href="appointment.html" class="dropdown-item">Treasurer</a>
                        <a href="team.html" class="dropdown-item">Controller of Examination</a>
                        <a href="testimonial.html" class="dropdown-item">Registrar</a>
                        <a href="404.html" class="dropdown-item">Proctor</a>
                        <a href="team.html" class="dropdown-item">Information Technology</a>
                        <a href="testimonial.html" class="dropdown-item">Accounts</a>
                        <a href="404.html" class="dropdown-item">Admission</a>
                         <a href="404.html" class="dropdown-item">Librean</a>
                    </div>
                </div>

                <a href="contact.html" class="nav-item nav-link">Contact</a>

            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">Quest For Knowledge</h1>
                                    <a href="" class="btn btn-primary py-sm-3 px-sm-5">Learn More</a>
                                    <a href="" class="btn btn-light py-sm-3 px-sm-5 ms-3">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">Quest For Knowledge</h1>
                                    <a href="" class="btn btn-primary py-sm-3 px-sm-5">Learn More</a>
                                    <a href="" class="btn btn-light py-sm-3 px-sm-5 ms-3">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-car text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Way To Campus </h5>
                                <span>Dhaka->Sirajganj->Enayetpur(3 hours 30 mints)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-users text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Discover Our Campus</h5>
                                <span>Read more to know details</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-file-alt text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Degree Verification</h5>
                                <span>Click the link to verify.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- About Start -->
    <!-- Notice Board Start -->
<div class="container-xxl py-6 bg-light">
    <div class="container">

        <!-- Section Title -->
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase mb-2">Latest Updates</h6>
            <h1 class="display-6 mb-4">Notice Board</h1>
            <p>Stay updated with the latest announcements, academic notices, and university events.</p>
        </div>

        <!-- Notice Table -->
        <div class="card border-0 shadow-lg rounded-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="card-body p-4">

                <div class="table-responsive">
                    <table class="table table-hover align-middle text-center">
                        
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>SL</th>
                                <th>Notice Title</th>
                                <th>Category</th>
                                <th>Date</th>
                                <th>Download</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>01</td>
                                <td class="text-start">
                                    Admission Circular for Fall 2026 Semester
                                </td>
                                <td>
                                    <span class="badge bg-success px-3 py-2">
                                        Admission
                                    </span>
                                </td>
                                <td>21 May 2026</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary rounded-pill px-3">
                                        View PDF
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>02</td>
                                <td class="text-start">
                                    Mid-Term Examination Schedule Published
                                </td>
                                <td>
                                    <span class="badge bg-warning text-dark px-3 py-2">
                                        Exam
                                    </span>
                                </td>
                                <td>18 May 2026</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary rounded-pill px-3">
                                        View PDF
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>03</td>
                                <td class="text-start">
                                    Scholarship Application Deadline Extended
                                </td>
                                <td>
                                    <span class="badge bg-info px-3 py-2">
                                        Scholarship
                                    </span>
                                </td>
                                <td>15 May 2026</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary rounded-pill px-3">
                                        View PDF
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>04</td>
                                <td class="text-start">
                                    University Holiday Notice
                                </td>
                                <td>
                                    <span class="badge bg-danger px-3 py-2">
                                        Holiday
                                    </span>
                                </td>
                                <td>10 May 2026</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary rounded-pill px-3">
                                        View PDF
                                    </a>
                                </td>
                            </tr>

                        </tbody>

                    </table>
                </div>

            </div>
        </div>

    </div>
</div>
<!-- Notice Board End -->
    <!-- About End -->


    <!-- Courses Start -->
    <div class="container-xxl courses my-6 py-6 pb-0">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Tranding Activities</h6>
                <h1 class="display-6 mb-4">Latest Events & Activities </h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">2/10/2025</div>
                            <h5 class="mb-3">Teachers Training</h5>
                            <p>Mr X inagurate the show</p>
                           
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/courses-1.jpg" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">5/12/2025</div>
                            <h5 class="mb-3">Accreditation Meeting</h5>
                            <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                            
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/courses-2.jpg" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">14/4/2026</div>
                            <h5 class="mb-3">Pahela Baishak</h5>
                            <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                           
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/courses-3.jpg" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 my-6 mb-0 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-primary text-center p-5">
                        <h1 class="mb-4">Make appointment for meeting </h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="gname" placeholder="Gurdian Name">
                                        <label for="gname">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control border-0" id="gmail" placeholder="Gurdian Email">
                                        <label for="gmail">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="cname" placeholder="Child Name">
                                        <label for="cname">Person You Want to Meet</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="cage" placeholder="Child Age">
                                        <label for="cage">Student ID</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->


    <!-- Features Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-primary text-uppercase mb-2">Why Choose Us!</h6>
                    <h1 class="display-6 mb-4">Quest For Knowledge</h1>
                 
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Accomodation</h5>
                            </div>
                         
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Library</h5>
                            </div>
                           
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Health Care</h5>
                            </div>
                           
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Modern Computer Lab</h5>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="img/about-1.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3" src="img/about-2.jpg" alt="" style="width: 200px; height: 200px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Team Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Meet The Team</h6>
                <h1 class="display-6 mb-4">Board of Trustees</h1>
            </div>
            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Full Name</h5>
                            <span>Vice Chancellor</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Full Name</h5>
                            <span>Head</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Full Name</h5>
                            <span>Dean</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Full Name</h5>
                            <span>Associate Dean</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Testimonial</h6>
                <h1 class="display-6 mb-4">What Our Clients Say!</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="img/testimonial-1.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <hr class="w-25 mx-auto">
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="img/testimonial-2.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <hr class="w-25 mx-auto">
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="img/testimonial-3.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <hr class="w-25 mx-auto">
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Get In Touch</h4>
                    <h2 class="text-primary mb-4"><i class="fa fa-car text-white me-2"></i>Drivin</h2>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Popular Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-3 border-0" placeholder="Your Email Address">
                            <button class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                    <h6 class="text-white mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                    <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>