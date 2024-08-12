<div class="header-top">
    <div class="container clearfix">
          <div class="top-left">
                <h6>Opening Hours : Senin sampai Minggu - 08:00 to 22:00 | IGD 24 Jam</h6>
          </div>
          <div class="top-right">
                <ul class="social-links">
                      <li>
                            <a href="#">
                                  <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                      </li>
                      <li>
                            <a href="#">
                                  <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                      </li>
                      <li>
                            <a href="#">
                                  <i class="fa fa-google-plus" aria-hidden="true"></i>
                            </a>
                      </li>
                      <li>
                            <a href="#">
                                  <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                      </li>
                      <li>
                            <a href="#">
                                  <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                            </a>
                      </li>
                      @guest
                      <li class="nav-item bg-info">
                        <a href="/login" class="nav-link">
                              <p>
                                    Login
                              </p>
                        </a>
                        </li>
                      @endguest
                      @auth
                      <li>
                        <a href="#">
                              <a href="/admin"><i class="fa fa-user" aria-hidden="true" alt="profil"></i></a>
                        </a>
                        </li>
                      @endauth

                </ul>
          </div>
    </div>
</div>
<!--header top-->

<!--Header Upper-->
<section class="header-uper">
    <div class="container clearfix">
          <div class="logo">
                <figure>
                      <a href="/">
                            <img src="{{asset('/medic-master/images/logo-rspp.png')}}" alt="" width="140">
                      </a>
                </figure>
          </div>
          <div class="right-side">
                <ul class="contact-info">
                      <li class="item">
                            <div class="icon-box">
                                  <i class="fa fa-envelope-o"></i>
                            </div>
                            <strong>Email</strong>
                            <br>
                            <a href="mailto:rspp@pertamedika.co.id">
                                  <span>rspp@pertamedika.co.id</span>
                            </a>
                      </li>
                      <li class="item">
                            <div class="icon-box">
                                  <i class="fa fa-phone"></i>
                            </div>
                            <strong>Call Now</strong>
                            <br>
                            <a href="tel:+62217219000">
                              <span>+ (6221) - 7219 - 000</span>
                            </a>
                      </li>
                </ul>
                <div class="link-btn">
                      <a href="/appointment" class="btn-style-one">Appoinment</a>
                </div>
          </div>
    </div>
</section>
<!--Header Upper-->


<!--Main Header-->
<nav class="navbar navbar-default">
    <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                      aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                </button>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                      <li class="active">
                            <a href="/">Home</a>
                      </li>
                      <li>
                            <a href="/about">About</a>
                      </li>
                      <li>
                            <a href="/service">Service</a>
                      </li>
                      <li>
                            <a href="/gallery">Gallery</a>
                      </li>
                      <li>
                            <a href="/team">Team</a>
                      </li>
                      <li>
                            <a href="/appointment">Appointment</a>
                      </li>
                      <li>
                            <a href="/blog">Blog</a>
                      </li>
                      <li>
                            <a href="/contact">Contact</a>
                      </li>
                      <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown
                                  <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                  <li>
                                        <a href="#">Action</a>
                                  </li>
                                  <li>
                                        <a href="#">Another action</a>
                                  </li>
                                  <li>
                                        <a href="#">Something else here</a>
                                  </li>
                                  <li role="separator" class="divider"></li>
                                  <li>
                                        <a href="#">Separated link</a>
                                  </li>
                                  <li role="separator" class="divider"></li>
                                  <li>
                                        <a href="#">One more separated link</a>
                                  </li>
                            </ul>
                      </li> -->
                </ul>
          </div>
          <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>