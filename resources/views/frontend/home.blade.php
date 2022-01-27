@extends('layouts.frontend')

@section('content')
<div class="container">
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medilab Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="public/assets/img/favicon.png" rel="icon">
  <link href="public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="public/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="public/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="public/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="public/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v4.3.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">XXX Healthcare System</a></h1>
      

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto active" href="#why-us">About</a></li>
          <li><a class="nav-link scrollto" href="#Vaccine">Vaccine</a></li>
          <li><a class="nav-link scrollto" href="#departments">Departments</a></li>
          <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>
           <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{route('frontend.appointments.create')}}" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>
      <a href="{{route('frontend.users-infos.create')}}" class="appointment-btn scrollto"><span class="d-none d-md-inline">Update</span> Information</a>
    </div>
  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to XXX Healthcare System</h1>
      <h2>Our's system can booking appointment for vaccination directly through this website.
</h2>
      <a href="#Vaccine" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Choose Us?</h3>
              <p>
              Nowaday Covid-19 this pandemic already caused tremendous psychological stress and economic loss to every family.
              We try to do a online medical appointment system to ensure the efficiency of vaccination in Malaysia.
              </p>
              <div class="text-center">
                
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>More Convenient</h4>
                    <p>Users can using our's system make an appointment for vaccination directly through the website.Let the process more convenient.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Concise and Understandable</h4>
                    <p>There are no complicated operations on this website, 
                      and besides the interface is very simple, 
                      even the elderly who are not good at using electronic devices can easily use it. </p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>More Faster</h4>
                    <p>When we receive your appointment, the website will immediately sort out your information to speed up the entire waiting process.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Vaccine Section ======= -->
    <section id="Vaccine" class="Vaccine">
      <div class="container-fluid">

      <div class="row">
          <div class="video">
          <iframe width="420" height="315"
          src="https://www.youtube.com/embed/tTjNTiwzmS0"style="vertical-align:middle;margin:100px 0px">
           </iframe>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>What is vaccine? </h3>
            <p>A vaccine is a type of medicine that trains the body’s immune system so that it can fight a disease it has not come into contact with before. 
              Vaccines are designed to prevent disease,
               rather than treat a disease once you have caught it.</p>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="https://youtu.be/-muIoWofsCE">How do vaccine work？</a></h4>
              <p class="description">Vaccines contain weakened or inactive parts of specific organisms (antigens) that can trigger an immune response in the body. 
                This weakened version will not cause the vaccinated person to get sick, 
                but it will prompt their immune system to respond so that it will respond first to the actual pathogen.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="https://youtu.be/vkEZiHBTXyY">Originate of vaccine</a></h4>
              <p class="description">On May 14, 1796, the British doctor Jenner vaccinated a young boy’s arm with cowpox to prevent smallpox. In fact, 
                this doctor Jenner called the vaccination process vaccination (from the Latin vacca, meaning For cattle), 
                this word is what we now call vaccination.</p>
            </div>

            

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fas fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="2506309" data-purecounter-duration="1" class="purecounter"></span>
              <p>Confirmed case</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
            <i class="fas fa-dizzy"></i>
              <span data-purecounter-start="0" data-purecounter-end="29349" data-purecounter-duration="1" class="purecounter"></span>
              <p>Death</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
            <i class="fas fa-check-circle"></i>
              <span data-purecounter-start="0" data-purecounter-end="24551108" data-purecounter-duration="1" class="purecounter"></span>
              <p>Vaccination data</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
            <i class="fas fa-grin-beam"></i>
              <span data-purecounter-start="0" data-purecounter-end="2412395" data-purecounter-duration="1" class="purecounter"></span>
              <p>Get well</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    

    

    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container">

        <div class="section-title">
          <h2>Departments</h2>
          <p>We have many different departments, according to different medical conditions, you can go to the targeted department to see a doctor. Each department has professional authoritative doctors and medical equipment, which can give exclusive treatment plans for each patient.</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Surgical</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Orthopedics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Thoracic</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Obstetrics and Gynecology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Ophthalmology</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Surgery
                   </h3>
                    <p class="fst-italic">Surgery is a medical or dental specialty that uses operative manual and instrumental techniques on a person to investigate or treat a pathological condition such as a disease or injury, to help improve bodily function, appearance, or to repair unwanted ruptured areas.</p>
                    <p>As a general rule, a procedure is considered surgical when it involves cutting of a person's tissues or closure of a previously sustained wound. Other procedures that do not necessarily fall under this rubric, such as angioplasty or endoscopy, may be considered surgery if they involve "common" surgical procedure or settings, such as use of a sterile environment, anesthesia, antiseptic conditions, typical surgical instruments, and suturing or stapling. All forms of surgery are considered invasive procedures; so-called "noninvasive surgery" usually refers to an excision that does not penetrate the structure being excised (e.g. laser ablation of the cornea) or to a radiosurgical procedure (e.g. irradiation of a tumor).</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="public/assets/img/departments-1.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Orthopedic surgery</h3>
                    <p class="fst-italic">Orthopedic surgery or orthopedics, is the branch of surgery concerned with conditions involving the musculoskeletal system. Orthopedic surgeons use both surgical and nonsurgical means to treat musculoskeletal trauma, spine diseases, sports injuries, degenerative diseases, infections, tumors, and congenital disorders.</p>
                    <p>Nicholas Andry coined the word in French as orthopédie, derived from the Ancient Greek words ὀρθός orthos ("correct", "straight") and παιδίον paidion ("child"), and published Orthopedie (translated as Orthopædia: Or the Art of Correcting and Preventing Deformities in Children[1]) in 1741. The word was assimilated into English as orthopædics; the ligature æ was common in that era for ae in Greek- and Latin-based words. As the name implies, the discipline was initially developed with attention to children, but the correction of spinal and bone deformities in all stages of life eventually became the cornerstone of orthopedic practice.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="public/assets/img/departments-2.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Thorax</h3>
                    <p class="fst-italic">The thorax or chest is a part of the anatomy of humans, mammals, other tetrapod animals located between the neck and the abdomen. In insects, crustaceans, and the extinct trilobites, the thorax is one of the three main divisions of the creature's body, each of which is in turn composed of multiple segments.</p>
                    <p>The human thorax includes the thoracic cavity and the thoracic wall. It contains organs including the heart, lungs, and thymus gland, as well as muscles and various other internal structures. Many diseases may affect the chest, and one of the most common symptoms is chest pain.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="public/assets/img/departments-3.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Obstetrics and gynaecology</h3>
                    <p class="fst-italic">Obstetrics and gynaecology (British English) or obstetrics and gynecology (American English) is the medical specialty that encompasses the two subspecialties of obstetrics (covering pregnancy, childbirth, and the postpartum period) and gynecology (covering the health of the female reproductive system – vagina, uterus, ovaries, and breasts). It is commonly abbreviated as OB-GYN or OB/GYN in US English and Canadian English, and as obs and gynae or O&G in British English.</p>
                    <p>Postgraduate training programs for both fields are usually combined, preparing the practicing obstetrician-gynecologist to be adept both at the care of female reproductive organs' health and at the management of pregnancy, although many doctors go on to develop subspecialty interests in one field or the other.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="public/assets/img/departments-4.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Ophthalmology</h3>
                    <p class="fst-italic">Ophthalmology is a branch of medicine and surgery that deals with the diagnosis and treatment of disorders of the eye. An ophthalmologist is a physician who specializes in ophthalmology. The credentials include a degree in medicine, followed by additional four to five years of residency training in ophthalmology. </p>
                    <p>Residency training programs for ophthalmology may require a one-year internship with training in internal medicine, pediatrics, or general surgery. Additional specialty training (or fellowship) may be sought in a particular aspect of eye pathology.[4] Ophthalmologists are allowed to prescribe medications to treat eye diseases and perform laser therapy or surgery when needed.[5] Ophthalmologists may participate in academic research on the diagnosis and treatment for eye disorders.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Doctors</h2>
          <p>These are our authoritative specialists</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Medical Officer</span>
                <p>Our Chief Medical Officer is very authoritative in different specialties</p>
                <div class="social">
                  <a href=""><i class="fab fa-twitter"></i></a>
                  <a href=""><i class="fab fa-facebook-f"></i></a>
                  <a href=""><i class="fab fa-instagram"></i></a>
                  <a href=""> <i class="fab fa-facebook-messenger"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Anesthesiologist</span>
                <p>Our professional anesthesiologists have very rich experience in this field</p>
                <div class="social">
                  <a href=""><i class="fab fa-twitter"></i></a>
                  <a href=""><i class="fab fa-facebook-f"></i></a>
                  <a href=""><i class="fab fa-instagram"></i></a>
                  <a href=""> <i class="fab fa-facebook-messenger"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Cardiology and Thoracic</span>
                <p>Authoritative doctors in cardiology and chest have treated many celebrities</p>
                <div class="social">
                  <a href=""><i class="fab fa-twitter"></i></a>
                  <a href=""><i class="fab fa-facebook-f"></i></a>
                  <a href=""><i class="fab fa-instagram"></i></a>
                  <a href=""> <i class="fab fa-facebook-messenger"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Obstetrics and Gynecology</span>
                <p>In addition to having very rich specialist experience, he is also very patient to listen to the anxiety and illness of all patients</p>
                <div class="social">
                  <a href=""><i class="fab fa-twitter"></i></a>
                  <a href=""><i class="fab fa-facebook-f"></i></a>
                  <a href=""><i class="fab fa-instagram"></i></a>
                  <a href=""> <i class="fab fa-facebook-messenger"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Doctors Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>You may be embarrassed to ask us some questions, so we have prepared a few common questions that you can open and read by yourself.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">What is the origin of COVID-19?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                Severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) is a novel severe acute respiratory syndrome coronavirus. It was first isolated from three people with pneumonia connected to the cluster of acute respiratory illness cases in Wuhan. All structural features of the novel SARS-CoV-2 virus particle occur in related coronaviruses in nature.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">How is the COVID-19 disease transmitted? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                COVID-19 transmits when people breathe in air contaminated by droplets and small airborne particles containing the virus. The risk of breathing these in is highest when people are in close proximity, but they can be inhaled over longer distances, particularly indoors. Transmission can also occur if splashed or sprayed with contaminated fluids in the eyes, nose or mouth, and, rarely, via contaminated surfaces.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">People with these symptoms may have COVID-19: <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                <br>. Fever or chills</br>
<br>. Cough</br>
<br>. Shortness of breath or difficulty breathing</br>
<br>. Fatigue</br>
<br>. Muscle or body aches</br>
<br>. Headache</br>
<br>. New loss of taste or smell</br>
<br>. Sore throat</br>
<br>. Congestion or runny nose</br>
<br>. Nausea or vomiting</br>
<br>. Diarrhea</br>
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">What are the complications of COVID-19? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                Complications may include pneumonia, acute respiratory distress syndrome (ARDS), multi-organ failure, septic shock, and death.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">What are the organs most affected by COVID‐19? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                The lungs are the organs most affected by COVID‐19
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    

          

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>These are some photos about the details of our hospital</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>This is all the information about how to contact and find us. You can find us through electronic devices or directly according to the address.</p>
        </div>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="fa fa-map-marker"></i>
                <h4>Location:</h4>
                <p>Jalan Titiwangsa 1, Taman Tampoi Indah</p>
              </div>

              <div class="email">
                <i class="fa fa-envelope"></i>
                <h4>Email:</h4>
                <p>cxh@example.com</p>
              </div>

              <div class="phone">
              <i class="fas fa-phone"></i>
                <h4>Call:</h4>
                <p>+60 16-710 0191</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="Nric" class="form-control" name="Nric" id="Nric" placeholder="Your Nric" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>XXX Health Care System</h3>
            <p>
            Jalan Titiwangsa 1 , <br>
            Taman Tampoi Indah , Johor<br>
              Malaysia <br><br>
              <strong>Phone:</strong> +60 16-710 0191<br>
              <strong>Email:</strong> cxh@example.com<br>
            </p>
          </div>

          

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            
            <p>Online inquiry</p>
            <p>Online appointment </p>
            <p>Online vaccination appointment</p>
            <p>Online advice</p>
            <p>Online contact</p>
            
          </div>

          

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>XXX Healthcare System</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>  
        </div>
    </div>
</div>
@endsection
