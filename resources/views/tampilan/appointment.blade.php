@extends('layout.master')
@section('content')
<section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>appointment</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="/">home &nbsp;/</a>
                </li>
                <li>appointment</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Contact Section -->
<section class="blog-section section style-three pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="contact-area style-two">
                    <div class="section-title">
                        <h3>Request <span>Appointment</span></h3>
                    </div>
                    <form action="/appointment/store" method="POST" name="contact_form" class="default-form contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="date" name="date" required="" id="datepicker">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </div> 
                                <div class="form-group">
                                    <select name="dokter_id">
                                        <option>Doctor</option>
                                        @forelse ($dokter as $key => $value)
                                        <option value="{{$value->id}}">{{$value->nama}}</option>
                                        @empty
                                            
                                        @endforelse
                                    </select>
                                </div>                            
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea name="message" placeholder="Your Message" required=""></textarea>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn-style-one">submit now</button>
                                </div>                            
                            </div>
                        </div>
                    </form>
                </div>                      
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="appointment-image-holder">
                    <figure>
                        <img src="{{asset('/medic-master/images/background/appoinment.jpg')}}" alt="Appointment">
                    </figure>
                </div>                       
            </div>
        </div>                    
    </div>
</section>
<!-- End Contact Section -->

<!--team section-->
<section class="team-section section">
    <div class="container">
        <div class="section-title text-center">
            <h3>Our Expert
                <span>Doctors</span>
            </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem illo, rerum 
                <br>natus nobis deleniti doloremque minima odit voluptatibus ipsam animi?</p>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="{{asset('/medic-master/images/team/doctor-2.jpg')}}" alt="doctor" class="img-responsive">
                    <div class="contents text-center">
                        <h4>Dr. Robert Barrethion</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
                        <a href="#" class="btn btn-main">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="{{asset('/medic-master/images/team/doctor-lab-3.jpg')}}" alt="doctor" class="img-responsive">
                    <div class="contents text-center">
                        <h4>Dr. Marry Lou</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
                        <a href="#" class="btn btn-main">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="{{asset('/medic-master/images/team/event-2.jpg')}}" alt="doctor" class="img-responsive">
                    <div class="contents text-center">
                        <h4>Dr. Sansa Stark</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
                        <a href="#" class="btn btn-main">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection