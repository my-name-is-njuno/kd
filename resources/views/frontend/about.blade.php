@extends('layouts.frontend')


@section('title')
    About LGD
@endsection


@section('content')
<section id="inner-headline">
        <div class="container">
          <div class="row">
            <div class="span4">
              <div class="inner-heading">
                <h2>About us</h2>
              </div>
            </div>
            <div class="span8 bapp">
              <ul class="breadcrumb">
                <li><a href={{ route('indexpage') }}><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                
                <li class="active">About us</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section id="content">
        <div class="container">
          <div class="row">
            <div class="span6">
              <h2>Welcome to <strong>Lavington Green Dental Suite</strong></h2>
              <p>
                Lavington Green Dental Suite is a Dental Surgery Consultancy Research and management organization incorporated in the Republic of Kenya.
              </p>
              <p>
                Lavington Green Dental Suite has been operational since 2011 and was previously called Lavington Dental Suite. The dental practice offers a wide range of dental services at affordable costs. The services offered are comprehensive, specialized and tailored to meet the needs of our clients. In addition the practice specializes in creating awareness about common oral health problems in collaboration with the immediate community members like the surrounding schools and less fortunate members of our society.
              </p>
              

            </div>
            <div class="span6">
              <!-- start flexslider -->
              <div class="flexslider">
                <ul class="slides">
                  <li>
                    <img src="{{ asset('wb/img/works/full/image-01-full.jpg') }}" alt="" />
                  </li>
                  <li>
                    <img src="{{ asset('wb/img/works/full/image-02-full.jpg') }}" alt="" />
                  </li>
                  <li>
                    <img src="{{ asset('wb/img/works/full/image-03-full.jpg') }}" alt="" />
                  </li>
                </ul>
              </div>
              <!-- end flexslider -->
            </div>
          </div>
          <!-- divider -->
          <div class="row">
            <div class="span12">
              <div class="solidline">
              </div>
            </div>
          </div>
          <!-- end divider -->
          <div class="row text-center">
            <div class="span12">
              <h4>Team Behind <strong>Lavington Green Dental Suite</strong></h4>
              
            </div>

            <div class="span3">
              <img src="{{ asset('wb/img/dummies/team1.jpg') }}" alt="" class="img-polaroid" />
              <div class="roles">
                <p class="lead">
                  <strong>Dr Halima Sebit</strong>
                </p>
                <p>
                  Dentist
                </p>
              </div>
            </div>
            <div class="span3">
              <img src="{{ asset('wb/img/dummies/team2.jpg') }}" alt="" class="img-polaroid" />
              <div class="roles">
                <p class="lead">
                  <strong>Dr Arnold Malit</strong>
                </p>
                <p>
                  Dentist
                </p>
              </div>
            </div>
            <div class="span3">
              <img src="{{ asset('wb/img/dummies/team3.jpg') }}" alt="" class="img-polaroid" />
              <div class="roles">
                <p class="lead">
                  <strong>Ms Winne </strong>
                </p>
                <p>
                  Marketing Manager
                </p>
              </div>
            </div>
            
            <div class="span3 text-center">
              <img src="{{ asset('wb/img/dummies/team4.jpg') }}" alt="" class="img-polaroid" />
              <div class="roles">
                <p class="lead">
                  <strong>Ms Terry </strong>
                </p>
                <p>
                  Customer Care
                </p>
              </div>
            </div>
          


            {{-- <div class="span3">
              <img src="{{ asset('wb/img/dummies/team5.jpg') }}" alt="" class="img-polaroid" />
              <div class="roles">
                <p class="lead">
                  <strong>Ms Terry Wairimu</strong>
                </p>
                <p>
                  Customer Support
                </p>
              </div>
            </div> --}}
          </div>
          <!-- divider -->
          <div class="row">
            <div class="span12">
              <div class="solidline">
              </div>
            </div>
          </div>
          <!-- end divider -->
          <div class="row justify-content-center">
            <div class="span3"></div>
            <div class="span6">
              <h4>Our Values</h4>
              <div class="accordion" id="accordion2">
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                              1. Professionalism </a>
                  </div>
                  <div id="collapseOne" class="accordion-body collapse in">
                    <div class="accordion-inner">
                      <p>
                        We conduct ourself proffesionally during and when we are treating our patients. True professionals possess a number of characteristics that can apply to virtually anywher which includes privacy, confidentiality, honesty, integrity and ethics.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                              2. Quality dental healthcare. </a>
                  </div>
                  <div id="collapseTwo" class="accordion-body collapse">
                    <div class="accordion-inner">
                      <p>
                        We meet our patients expectations and perceptions of service quality we offer in public dental health care and we welcome you to come and experience.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                              3. Respect for all stakeholders. </a>
                  </div>
                  <div id="collapseThree" class="accordion-body collapse">
                    <div class="accordion-inner">
                      <p>
                        You can’t control stakeholders, you can only manage expectations … both theirs and yours.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                              4. Teamwork. </a>
                  </div>
                  <div id="collapseFour" class="accordion-body collapse">
                    <div class="accordion-inner">
                      <p>
                        The facility’s principal dentists are Dr. Halima Sebit and Dr. Arnold Malit who have long careers and vast experience in dental healthcare service provision as general practitioners and researchers. They lead a team of board certified and qualified clinicians and administrative staff.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="span3"></div>

          </div>
        </div>
      </section>
@endsection
