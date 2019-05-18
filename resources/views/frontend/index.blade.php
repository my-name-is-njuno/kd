@extends('layouts.frontend')



@section('title')

Lavington Green Dental

@endsection


@section('content')





    <section id="featured">
        <!-- start slider -->
        <!-- Slider -->
        <div id="nivo-slider">
          <div class="nivo-slider">
            <!-- Slide #1 image -->
            <img src="{{ asset('wb/img/slides/nivo/bg-6.jpg') }}" alt="" title="#caption-1" />
            <!-- Slide #2 image -->
            <img src="{{ asset('wb/img/slides/nivo/bg-9.jpg') }}" alt="" title="#caption-2" />
            <!-- Slide #3 image -->
            <img src="{{ asset('wb/img/slides/nivo/bg-7.jpg') }}" alt="" title="#caption-3" />
            <!-- Slide #3 image -->
            <img src="{{ asset('wb/img/slides/nivo/bg-8.jpg') }}" alt="" title="#caption-3" />
          </div>
          <div class="container">
            <div class="row">
              <div class="span12">
                <!-- Slide #1 caption -->
                <div class="nivo-caption" id="caption-1">
                  <div class="bapp">
                    <h2>Lavington <strong>Green Dental</strong></h2>
                    <p>
                      Lavington Green Dental Suite is a Dental Surgery Consultancy Research and management organization.
                    </p>
                    <a href="{{ route('aboutpage') }}" class="btn btn-theme">Read More</a>
                  </div>
                </div>
                <!-- Slide #2 caption -->
                <div class="nivo-caption" id="caption-2" >
                  <div  class="bapp">
                    <h2>Our <strong>Location</strong></h2>
                    <p>
                      Lavington Chadarama Mall next to Lavington Mall on James Gichuru Road, 15 minutes Drive from Nairobi CBD<br>
                      
                    </p>
                    <a href="{{ route('contactpage') }}" class="btn btn-theme">Read More</a>
                  </div>
                </div>
                <!-- Slide #3 caption -->
                <div class="nivo-caption" id="caption-3">
                  <div  class="bapp">
                    <h2>Our <strong>Services</strong></h2>
                    <p>
                      We offer a wide range of dental services from extraction, dental surgeries, root canal etc.
                    </p>
                    <a href="{{ route('servicespage') }}" class="btn btn-theme">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end slider -->
      </section>







      <section class="callaction">
        <div class="container">
          <div class="row">
            <div class="span12">
              <div class="big-cta">
                <div class="cta-text">
                  <h3>Where beautiful <span class="highlight"><strong> smile </strong></span> begins!</h3>
                </div>
                <div class="cta floatright">

                  <a class="btn btn-large btn-theme btn-rounded" href="#bookappointment" data-toggle="modal"><i class="icon-user"></i> Book Appointment</a>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>




      <section id="content">
        <div class="container">
          <div class="row">
            <div class="span12">
              <div class="row">
                <div class="span2"></div>
                <div class="span8">
                  <div class="box aligncenter">
                    <div class="aligncenter icon">
                      <i class="icon-briefcase icon-circled icon-64 active"></i>
                    </div>
                    <div class="text">
                      <h4>Who We Are</h4>
                      <p>
                       Lavington Green Dental Suite is a Dental Surgery Consultancy Research and management organization incorporated in the Republic of Kenya.
                      </p>
                      <h5>Our Vision</h5>
                      <p>
                       To be the recognized as the leading quality dental health care service provider in the region.
                      </p>
                      <h5>Our Mission</h5>
                      <p>
                       To provide comprehensive quality and affordable dental healthcare, which is client centered and participate in community service among the less fortunate members of our society, in partnership with other healthcare providers as a way of giving back to the society.
                      </p>

                    </div>
                  </div>
                </div>
                <div class="span2"></div>

              </div>
            </div>
          </div>
        
        
          
        </div>
      </section>
 





      @endsection






@section('otherjs')

    

@endsection