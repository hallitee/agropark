@extends('layouts.master')
@section('title', 'Contact')
@section('content')
     <div class="shop-cart" id="page">
      <section class="sub-header shop-detail-1">
        <img class="rellax bg-overlay" src="images/sub-header/banner.jpg" alt="">
     
        <h3 class="heading-style-3"> Contact Us</h3>
      </section>
            <section class="boxed-sm">
        <div class="breadcrumb-wrapper">
          <div class="container">
            <div class="row">
              <ol class="breadcrumb">
                <li>
                  <a href="{{ route('home')}}">Home</a>
                </li>
                <li class="active">Contact</li>
              </ol>
            </div>
          </div>
        </div>
      </section>
<br>
<br>	  
    <section class="boxed-sm">
        <div class="container">
          <div class="row main">
            <div class="col-md-10 col-md-offset-1">
                <div class="row icon-box-contact-wrapper">
                    <div class="row main">
                        <div class="col-md-4">
                            <div class="icon-box">
                                <i class="fa fa-map-marker"></i>
                                <p>20, Ogunnusi Road, Akiode Bus Stop, Ojodu-Berger, Lagos.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a class="icon-box" href="tel:0123456789 ">
                            <i class="fa fa-mobile"></i>(+1) 11 321 4567</a>
                        </div>
                        <div class="col-md-4">
                            <a class="icon-box" href="tel:0123456789 ">
                            <i class="fa fa-envelope-o"></i>info@foodsandspices.ng
 olusolao@foodsandspices.ng
oluwaseune@foodsandspices.ng
ayodelea@foodsandspices.ng
adetoroo@foodsandspices.ng
media@foodsandspices.ng
 </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<br>
<br>
        <div class="container">
            <div class="row form-contact">
                <div class="row main">
                    <div class="col-md-10 col-md-offset-1">
                        <form>
                            <div class="col-md-12">
                                <div class="form-group organic-form xs-radius">
                                    <textarea class="form-control" placeholder="Your Message" rows="6"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group organic-form xs-radius">
                                    <input class="form-control" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group organic-form xs-radius">
                                    <input class="form-control" placeholder="Your Email" type="email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group organic-form xs-radius">
                                    <input class="form-control" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group organic-form xs-radius">
                                    <button class="btn btn-brand pill">SEND EMAIL</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.0569149664157!2d3.3659480141829863!3d6.639854723643289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b939077bad827%3A0x3cb22c27e735412!2s20+Ogunnusi+Road%2C+Isheri%2C+Ikeja!5e0!3m2!1sen!2sng!4v1545331105690" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                <!-- <div class="map-canvas" id="js-map-canvas"></div> -->
            </div>
        </div>
    </section>

</div>



	  </div>
<br>
<br>
@endsection