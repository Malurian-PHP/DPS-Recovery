@extends('layouts.layout')

@section('content')

    @include('index.header')

  <!-- About Section -->
  <section class="page-section base-color" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">The DPS Difference</h2>
          <hr class="divider light my-4">
          <p class="text-white mb-4" style="font-size: 20px;">DPS specializes in increasing cash flow by recovering
              revenue for our clients in a professional manner. As a contingency debt recovery
              service company, we never compromise integrity and maintain respect during all
              interactions with debtors.</p>
          <a class="btn btn-dark btn-xl js-scroll-trigger" href="#services">CONTACT US</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center mt-0">Why Choose Us</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-4 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-history mb-4" style="color: #2f6bbb;"></i>
            <h3 class="h4 mb-2">EXPERIENCE</h3>
            <p class="text-muted mb-0">We are a full-service collection agency with over
              30 years of experience in the collections sector. Client satisfaction is
              our top priority. We are committed to providing prompt service, informatics,
              and support as needed. We provide open communications for our clientele and
              respond promptly to address any need.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center">
          <div class="mt-5">
            <i class="fab fa-4x fa-battle-net mb-4" style="color: #2f6bbb;"></i>
            <h3 class="h4 mb-2">INNOVATIVE SOLUTIONS</h3>
            <p class="text-muted mb-0">We offer clients a fully customized collection program
              to best fit their needs. All accounts are assigned to professionally trained,
              compliant account agents committed to providing tailored solutions to meet the
              interests of our clientele.
              <a href="#">Need more info, click here</a>
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-poll mb-4" style="color: #2f6bbb;"></i>
            <h3 class="h4 mb-2">OUTCOME</h3>
            <p class="text-muted mb-0">We are concentrated on increasing your revenue by
              reducing overhead costs to free up office space and staff. The recovery of
              your money is valued in our company just as much as it is in yours.
            </p>
          </div>
        </div>
      </div>
    </div>
    {{-- <div class="container" style="padding-top: 60px">
      <h2 class="text-center mt-0"></h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-traffic-light mb-4" style="color: #2f6bbb;"></i>
            <h3 class="h4 mb-2">Traffic</h3>
            <p class="text-muted mb-0">There will be a brief description in this div!</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-tint mb-4" style="color: #2f6bbb;"></i>
            <h3 class="h4 mb-2">Utilities</h3>
            <p class="text-muted mb-0">There will be a brief description in this div!</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-home mb-4" style="color: #2f6bbb;"></i>
            <h3 class="h4 mb-2">Property Tax</h3>
            <p class="text-muted mb-0">There will be a brief description in this div!</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-heart mb-4" style="color: #2f6bbb;"></i>
            <h3 class="h4 mb-2">EMS</h3>
            <p class="text-muted mb-0">There will be a brief description in this div!</p>
          </div>
        </div>
      </div>
    </div> --}}
  </section>

  <!-- Portfolio Section -->
  <section id="portfolio">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="court.png">
            <img class="img-fluid" src="court.png" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Court Fees and Fines
              </div>
              <div class="project-name">
                Court Fees and Fines
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="home.png">
            <img class="img-fluid" src="home.png" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Property Tax
              </div>
              <div class="project-name">
                Property Tax
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="ticket.png">
            <img class="img-fluid" src="ticket.png" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Traffic Citations
              </div>
              <div class="project-name">
                  Traffic Citations
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="utility.png">
            <img class="img-fluid" src="utility.png" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Electric
              </div>
              <div class="project-name">
                  Electric
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="waterutl.png">
            <img class="img-fluid" src="waterutl.png" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Utilities
              </div>
              <div class="project-name">
                  Utilities
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="ems.jpg">
            <img class="img-fluid" src="ems.jpg" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
                EMS
              </div>
              <div class="project-name">
                  EMS
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action Section -->
  <section class="page-section bg-dark text-white">


    <div class="container text-center">
      <h2 class="mb-4">Make a Payment</h2>
      <!-- Button trigger modal -->
        <button type="button" class="btn btn-light x1" data-toggle="modal" data-target="#exampleModal">
        Pay Now
        </button>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="page-section" id="client-portal">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Let's Get In Touch!</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">At DPS, we put the client <span style="font-style: italic">FIRST</span> - If you
            are looking to recoup unpaid debt in a streamlined, efficient manner, we're the company for you. Contact us at
            anytime for more information. We would love the opportunity to earn your trust and business.</p>
        </div>
      </div>
      <div class="text-dark">
        <div class="container text-center">
          <h4 class="mb-4">Client Portal</h4>
          <a class="btn btn-dark btn-xl" href="#">Login</a>
        </div>
      </div>
      {{-- <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>(+20) 000 222 999</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-home fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <div>The address city, state 1111</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto:support@dpsrecovery.com">support@dpsrecovery.com</a>
        </div>
      </div> --}}
    </div>
  </section>
@endsection
