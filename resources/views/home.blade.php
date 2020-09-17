<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Laravel</title>

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,600,500,700,800,900|Open+Sans:100,200,300,400,500,600,700,800,900&amp;subset=latin" rel="stylesheet">

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

      <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

      <link href="{{ asset('css/style.css')}}" rel="stylesheet" />
      <link href="{{ asset('css/app.css')}}" rel="stylesheet" />

      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    </head>
    <body class="antialiased">
      <a class="open_menu color-main bg-light radius_full"><i class="fas fa-bars lh-40"></i></a>
      <div class="navigation_mobile bg-light type2">
        <a class="close_menu color-main"><i class="fas fa-times"></i></a>
        <div class="px-40 pt-60 pb-60 text-center inner">
            
          <div><a href="#" class="f-heading f-22 link color-main mb-20">Home</a></div>
                
          <div><a href="#" class="f-heading f-22 link color-main mb-20">Popular</a></div>
                
          <div><a href="#" class="f-heading f-22 link color-main mb-20">Recent</a></div>
                
          <div><a href="#" class="f-heading f-22 link color-main mb-20">Featured</a></div>
                
          <div><a href="#" class="f-heading f-22 link color-main mb-20">Designers</a></div>
                
          <div><a href="#" class="f-heading f-22 link color-main mb-20">Team</a></div>
                  <div><a href="#" class="f-12 link color-main op-7 text-uppercase sp-20 mb-20">Help</a></div>
                  <div><a href="#" class="f-12 link color-main op-7 text-uppercase sp-20 mb-20">F.A.Q.</a></div>
                  <div><a href="#" class="f-12 link color-main op-7 text-uppercase sp-20 mb-20">Support</a></div>
                  <div><a href="#" class="f-12 link color-main op-7 text-uppercase sp-20 mb-20">About Us</a></div>
                  <div><a href="#" class="f-12 link color-main op-7 text-uppercase sp-20 mb-20">Blog</a></div>
                  <div><a href="#" class="f-12 link color-main op-7 text-uppercase sp-20 mb-20">Careers</a></div>
                  <div class="socials mt-60">
                  <a href="#" target="_blank" class="link color-main f-18 mx-10"><i class="fab fa-twitter"></i></a>
                  <a href="#" target="_blank" class="link color-main f-18 mx-10"><i class="fab fa-facebook"></i></a>
                  <a href="#" target="_blank" class="link color-main f-18 mx-10"><i class="fab fa-dribbble"></i></a>
                  <a href="#" target="_blank" class="link color-main f-18 mx-10"><i class="fab fa-instagram"></i></a>
                  <a href="#" target="_blank" class="link color-main f-18 mx-10"><i class="fab fa-behance"></i></a>
                </div>
        </div>
      </div>

      
      <header class="pt-175 pb-110 header_6">
        <style>
          .header_6{background-image:url(images/banner_overlay.png); height: 1000px; min-height: 100vh;}
          @media(-webkit-min-device-pixel-ratio: 1.25), (min-resolution: 120dpi){
            .header_6{background-image:url(images/banner_overlay.png);}
          }
        </style>

        <!-- Header Menu 6 -->

        <nav class="header_menu_6 pt-20 pb-30 mt-20">
          <div class="container px-xl-0">
            <div class="row">
              <div class="col-lg-12 d-flex" data-aos-duration="600" data-aos="fade-down" data-aos-delay="1200">
                <nav class="navbar navbar-expand-lg navbar-dark justify-content-end" style="z-index: 999!important">
                <a href="#" class="link color-white f-14 medium mr-30">Home</a>
                <a href="#" class="link color-white f-14 medium mr-30">Portofolio</a>
                <a href="#" class="link color-white f-14 medium mr-30">Bussiness Collaboration</a>
                <a href="#" class="link color-white f-14 medium mr-30">Contact Us</a>
                </nav>
              </div>
            </div>
          </div>
        </nav>

        <div class="container px-xl-0 text-center">
          <!-- <div class="mb-3 logo d-block d-xl-none color-white logo_mobile">Startup 3</div> -->
          <div class="row justify-content-center">
            <div class="col-md-6" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
              <div class="d-block">
                <div class="align-items-center">
                  <img src="{{ asset('images/SVGPL_logo_Alt.svg') }}" height="140" alt="">
                </div>
              </div>
            </div>
            <div class="col-md-6" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
            </div>
          </div>
        </div>
      </header>

      <section class="pt-180 pb-95 color-white feature_40" style="background-color: #000000;">
        <div class="container px-xl-0">
          <div class="row d-block mb-5 px-5">
            <img class="img-fluid d-block mx-auto" src="{{ asset('images/portfolio.png') }}" alt="Portofolio">
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-md-4 mb-3">
                  <div class="portofolio-border">
                    <a href="http://davismw.com/">
                    <img class="img-fluid" src="{{ asset('images/portofolio-dmw.png')}}" alt="Davis Materialswork">
                    </a>
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <div class="portofolio-border">
                    <a href="http://www.cityhive.sg/">
                      <img class="img-fluid" src="{{ asset('images/POR5e7c59918b717.png')}}" alt="Cityhive">
                    </a>
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <div class="portofolio-border">
                    <a href="https://www.supercharge.business/">
                      <img class="img-fluid" src="{{ asset('images/POR5e65fc640ea29.png')}}" alt="Supercharge">
                    </a>
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <div class="portofolio-border">
                  <a href="https://sinovgpl.com/bizcollab/svg-working-space-for-rent/ART5e7c5e00419f9/en">
                    <img class="img-fluid" src="{{ asset('images/POR5e7c59edcd677.png')}}" alt="Davis Materialswork" alt="Ten Six">
                  </a>
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <div class="portofolio-border">
                    <a href="#">
                      <img class="img-fluid" src="{{ asset('images/POR5e7c5a4d475be.png')}}" alt="Coming Soon">
                    </a>
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <div class="portofolio-border">
                    <a href="#">
                      <img class="img-fluid" src="{{ asset('images/POR5e7c5a4d475be.png')}}" alt="Coming Soon">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="pt-105 pb-55 bg-light text-center feature_5">
        <div class="container px-xl-0">
          <div class="row d-block mb-5 px-5">
            <img class="img-fluid d-block mx-auto" src="{{ asset('images/businesscollaborate.png') }}" alt="Bussiness Collaboration">
          </div>
          <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
              <div class="mb-45 f-18 color-heading text-adaptive description" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
              These are the opportunity areas, we preferred to enhance our portfolio.</div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="mb-50 col-xl-4 col-lg-4 col-md-6 col-sm-10 holder" data-aos-duration="600" data-aos="fade-down" data-aos-delay="600">
              <div class="px-20 pt-20 pb-45 radius10 block">
                <img src="{{ asset('images/ART5e6caed9dd392.png')}}" srcset="{{ asset('images/ART5e6caed9dd392.png@2x.jpg')}} 2x" class="w-full radius10 mb-3" alt="" />
                <div class="mb-20 f-16 semibold title">Local Representative & Distributor</div>
                <div class="color-heading f-14 text-adaptive">
                  If you are looking for a Singapore Representative & Distributor.</div>
              </div>
            </div>
            <div class="mb-50 col-xl-4 col-lg-4 col-md-6 col-sm-10 holder" data-aos-duration="600" data-aos="fade-down" data-aos-delay="600">
              <div class="px-20 pt-20 pb-45 radius10 block">
                <img src="{{ asset('images/ART5e6af5205168e.png')}}" srcset="{{ asset('images/ART5e6af5205168e.png@2x.jpg')}} 2x" class="w-full radius10 mb-3" alt="" />
                <div class="mb-20 f-16 semibold title">SVG E-commerce Business Partnership</div>
                <div class="color-heading f-14 text-adaptive">
                  We can be your reliable partner for E-Commerce Business</div>
              </div>
            </div>
            <div class="mb-50 col-xl-4 col-lg-4 col-md-6 col-sm-10 holder" data-aos-duration="600" data-aos="fade-down" data-aos-delay="600">
              <div class="px-20 pt-20 pb-45 radius10 block">
                <img src="{{ asset('images/ART5e7c5e00419f9.png')}}" srcset="{{ asset('images/ART5e7c5e00419f9.png@2x.jpg')}} 2x" class="w-full radius10 mb-3" alt="" />
                <div class="mb-20 f-16 semibold title">SVG Working Space For Rent</div>
                <div class="color-heading f-14 text-adaptive">
                  Space for Collaboration and Rental</div>
              </div>
            </div>
            <div class="mb-50 col-xl-4 col-lg-4 col-md-6 col-sm-10 holder" data-aos-duration="600" data-aos="fade-down" data-aos-delay="600">
              <div class="px-20 pt-20 pb-45 radius10 block">
                <img src="{{ asset('images/ART5e6aef3385622.png')}}" srcset="{{ asset('images/ART5e7c5e00419f9.png@2x.jpg')}} 2x" class="w-full radius10 mb-3" alt="" />
                <div class="mb-20 f-16 semibold title">Professional Graphic Designer</div>
                <div class="color-heading f-14 text-adaptive">
                  We are looking for Professional Graphic Designer for Collaboration.</div>
              </div>
            </div>
            <div class="mb-50 col-xl-4 col-lg-4 col-md-6 col-sm-10 holder" data-aos-duration="600" data-aos="fade-down" data-aos-delay="600">
              <div class="px-20 pt-20 pb-45 radius10 block">
                <img src="{{ asset('images/ART5e7caafd75641.png')}}" srcset="{{ asset('images/ART5e7c5e00419f9.png@2x.jpg')}} 2x" class="w-full radius10 mb-3" alt="" />
                <div class="mb-20 f-16 semibold title">Professional Full-Stack Developer</div>
                <div class="color-heading f-14 text-adaptive">
                  We are looking for Professional Web Programmer, Full-Stack Developer for Collaboration</div>
              </div>
            </div>
            <div class="mb-50 col-xl-4 col-lg-4 col-md-6 col-sm-10 holder" data-aos-duration="600" data-aos="fade-down" data-aos-delay="600">
              <div class="px-20 pt-20 pb-45 radius10 block">
                <img src="{{ asset('images/ART5e7cac13e53db.png')}}" srcset="{{ asset('images/ART5e7c5e00419f9.png@2x.jpg')}} 2x" class="w-full radius10 mb-3" alt="" />
                <div class="mb-20 f-16 semibold title">Professional Photographer</div>
                <div class="color-heading f-14 text-adaptive">
                  We are looking for Professional Photographer for Collaboration</div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="pt-105 pb-100 bg-light form_14">
        <div class="container px-xl-0">
          <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
              <h2 class="small text-center" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">Let's Connect</h2>
              <form action="form-handler.php" method="post" class="mt-50 px-100 pt-85 pb-35 radius10">
                <div class="row">
                  <div class="col-md-12 mb-35 block" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
                    <div class="mb-10 f-14 semibold text-uppercase sp-20">Name</div>
                    <input type="text" name="firstname" class="input w-full border-gray focus-action-1 color-heading placeholder-heading" required />
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-35 block" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
                    <div class="mb-10 f-14 semibold text-uppercase sp-20">Phone</div>
                    <input type="text" name="address" class="input w-full border-gray focus-action-1 color-heading placeholder-heading" required />
                  </div>
                  <div class="col-md-6 mb-35 block" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
                    <div class="mb-10 f-14 semibold text-uppercase sp-20">Email</div>
                    <input type="text" name="zip" class="input w-full border-gray focus-action-1 color-heading placeholder-heading" required />
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 mb-35 block" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
                    <div class="mb-10 f-14 semibold text-uppercase sp-20">Select </div>
                    <select class="input w-full border-gray focus-action-1 color-heading placeholder-heading">
                      <option></option>
                      <option></option>
                    </select>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <footer class="pt-70 pb-65 bg-light text-center footer_2">
        <div class="container px-xl-0">
          <div class="row justify-content-center">
            <h4>Office</h4>
            <div class="mt-20 col-12" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
              <div class="color-heading text-adaptive">
                62 Ubi Road 1, #10-06 Oxley Bizhub  <br />
                Singapore 408734
              </div>
            </div>
            <div class="mt-20 col-12" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
              <div class="color-heading text-adaptive">
                <small>
                2015 - 2020 Sino Ventures Group. All Rights Reserved <br />
                <a>Privacy Policy</a>
            </small>
              </div>
            </div>
          </div>
        </div>
      </footer>

      <!-- Bootstrap 4.3.1 JS -->
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
      <!-- Fancybox 3 jQuery plugin JS (Open images and video in popup) -->
      <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
      <!-- Slick 1.8.1 jQuery plugin JS (Sliders) -->
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
      <!-- AOS 2.3.4 jQuery plugin JS (Animations) -->
      <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
      <!-- Maskedinput jQuery plugin JS (Masks for input fields) -->
      <script src="{{ asset('js/jquery.maskedinput.min.js')}}"></script>
      <script src="{{ asset('js/script.js')}}"></script>
    </body>
</html>
