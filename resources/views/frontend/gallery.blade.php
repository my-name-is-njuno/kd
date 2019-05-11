@extends('layouts.frontend')


@section('title')
    Our Image Gallery
@endsection




@section('content')
<section id="inner-headline">
        <div class="container">
          <div class="row">
            <div class="span4">
              <div class="inner-heading">
                <h2>Image Gallery</h2>
              </div>
            </div>
            <div class="span8  bapp">
              <ul class="breadcrumb">
                <li><a href={{ route('indexpage') }}><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>

                <li class="active">Gallery</li>
              </ul>
            </div>
          </div>
        </div>
</section>
      <section id="content">
        <div class="container">



          <!-- Portfolio Projects -->
          <div class="row">
            <div class="span12">
              <h4 class="heading">Our <strong>Image Gallery</strong></h4>
              <div class="row">
                <section id="projects">
                  <ul id="thumbs" class="portfolio">


                    <!-- Item Project and Filter Name -->
                    <li class="item-thumbs span6 design" data-id="id-0" data-type="web">
                      <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                      <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Well Equiped" href="{{ asset('wb/img/works/full/image-01-full.jpg') }}">
                          <span class="overlay-img"></span>
                          <span class="overlay-img-thumb font-icon-plus"></span>
                          </a>
                      <!-- Thumb Image and Description -->
                      <img src="{{ asset('wb/img/works/thumbs/image-01.jpg') }}" alt="Lavington Green Dental Suite is well equiped with updated tech.">
                    </li>
                    <!-- End Item Project -->




                    <!-- Item Project and Filter Name -->
                    <li class="item-thumbs span6 design" data-id="id-1" data-type="icon">
                      <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                      <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Office" href="{{ asset('wb/img/works/full/image-02-full.jpg') }}">
                          <span class="overlay-img"></span>
                          <span class="overlay-img-thumb font-icon-plus"></span>
                          </a>
                      <!-- Thumb Image and Description -->
                      <img src="{{ asset('wb/img/works/thumbs/image-02.jpg') }}" alt="Lavington Green Dental Suite has a ample and comfortable space for patients.">
                    </li>
                    <!-- End Item Project -->


                    <!-- Item Project and Filter Name -->
                    <li class="item-thumbs span6 photography" data-id="id-2" data-type="illustrator">
                      <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                      <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Patients" href="{{ asset('wb/img/works/full/image-03-full.jpg') }}">
                          <span class="overlay-img"></span>
                          <span class="overlay-img-thumb font-icon-plus"></span>
                          </a>
                      <!-- Thumb Image and Description -->
                      <img src="{{ asset('wb/img/works/thumbs/image-03.jpg') }}" alt="Patients are attended to with care and as soon as they come.">
                    </li>
                    <!-- End Item Project -->




                    <!-- Item Project and Filter Name -->
                    <li class="item-thumbs span6 photography" data-id="id-3" data-type="illustrator">
                      <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                      <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Team" href="{{ asset('wb/img/works/full/image-04-full.jpg') }}">
                          <span class="overlay-img"></span>
                          <span class="overlay-img-thumb font-icon-plus"></span>
                          </a>
                      <!-- Thumb Image and Description -->
                      <img src="{{ asset('wb/img/works/thumbs/image-04.jpg') }}" alt="We have a well trained team ready to cater for patients.">
                    </li>
                    <!-- End Item Project -->




                    <!-- Item Project and Filter Name -->
                    <li class="item-thumbs span6 photography" data-id="id-4" data-type="web">
                      <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                      <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Dentists" href="{{ asset('wb/img/works/full/image-05-full.jpg') }}">
                          <span class="overlay-img"></span>
                          <span class="overlay-img-thumb font-icon-plus"></span>
                          </a>
                      <!-- Thumb Image and Description -->
                      <img src="{{ asset('wb/img/works/thumbs/image-05.jpg') }}" alt="The team lead by Dr Halima Sebit and Dr Arnold Malit, both registered with the Kenya Dentist Board.">
                    </li>
                    <!-- End Item Project -->



                    <!-- Item Project and Filter Name -->
                    <li class="item-thumbs span6 design" data-id="id-0" data-type="web">
                            <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Well Equiped" href="{{ asset('wb/img/works/full/image-01-full.jpg') }}">
                                <span class="overlay-img"></span>
                                <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                            <!-- Thumb Image and Description -->
                            <img src="{{ asset('wb/img/works/thumbs/image-01.jpg') }}" alt="Lavington Green Dental Suite is well equiped with updated tech.">
                    </li>
                          <!-- End Item Project -->



                    <!-- Item Project and Filter Name -->

                    <!-- End Item Project -->
                  </ul>
                </section>
              </div>
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

        </div>
      </section>
@endsection
