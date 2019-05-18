@extends('layouts.frontend')


@section('title')
    Our Services
@endsection





@section('content')
    <section id="inner-headline">
        <div class="container">
          <div class="row">
            <div class="span4">
              <div class="inner-heading">
                <h2>Our <strong>Services</strong></h2>
              </div>
            </div>
            <div class="span8  bapp">
              <ul class="breadcrumb">
                <li><a href={{ route('indexpage') }}><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>

                <li class="active">Our Services</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section id="content">
        <div class="container">
          <div class="row">
            <div class="span12">
              <ul class="portfolio-categ filter">
                <li class="all active"><a href="#">All</a></li>
                
              </ul>
              <div class="clearfix">
              </div>
              <div class="row">
                <section id="projects">
                  <ul id="thumbs" class="portfolio">

                    

                    @foreach ($services as $ser)
                      
                    

                      <!-- Item Project and Filter Name -->
                      <li class="item-thumbs span6 photography" data-id="id-6" data-type="all">
                        <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                        <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Pediatric Dentist" href="{{ asset('/images/services/'.$ser->picture_big) }}">
                            <span class="overlay-img"></span>
                            <span class="overlay-img-thumb">{{ $ser->name }}</span>
                            </a>
                        <!-- Thumb Image and Description -->
                        <img src="{{ asset('/images/services/'.$ser->picture) }}" alt="{{ $ser->description }}">
                      </li>
                      <!-- End Item Project -->


                    @endforeach





                   
                     
                  </ul>
                </section>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
