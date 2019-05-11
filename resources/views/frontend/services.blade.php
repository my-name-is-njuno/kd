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
            <div class="span8">
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
                <li class="general"><a href="#" title="">General Treatment</a></li>
                <li class="health"><a href="#" title="">Dental Health</a></li>
                <li class="cosmetic"><a href="#" title="">Cosmetic</a></li>
                <li class="prothetic"><a href="#" title="">Prosthetic</a></li>
                <li class="paed"><a href="#" title="">Paediatric</a></li>
                <li class="ortho"><a href="#" title="">Orthodontic</a></li>
                <li class="oral"><a href="#" title="">Oral Surgery</a></li>
              </ul>
              <div class="clearfix">
              </div>
              <div class="row">
                <section id="projects">
                  <ul id="thumbs" class="portfolio">

                    

                    <!-- Item Project and Filter Name -->
                    <li class="item-thumbs span6 photography" data-id="id-6" data-type="paed">
                      <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                      <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Pediatric Dentist" href="{{ asset('wb/img/works/thumbs/image_06_big.jpg') }}">
                          <span class="overlay-img"></span>
                          <span class="overlay-img-thumb">Pediatric Dentist</span>
                          </a>
                      <!-- Thumb Image and Description -->
                      <img src="{{ asset('wb/img/works/thumbs/image_06.jpg') }}" alt="Children begin to get their baby teeth during the first 6 months of life. By age 6 or 7 years, they start to lose their first set of teeth, which eventually are replaced by secondary, permanent teeth. Without proper dental care, children face possible oral decay and disease that can cause a lifetime of pain and complications. Today, early childhood dental caries—an infectious disease—is 5 times more common in children than asthma and 7 times more common than hay fever.">
                    </li>
                    <!-- End Item Project -->





                    <!-- Item Project and Filter Name -->
                    <li class="item-thumbs span6 design" data-id="id-7" data-type="oral">
                      <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                      <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Oral Hygiene" href="{{ asset('wb/img/works/thumbs/image_04_big.jpg') }}">
                          <span class="overlay-img"></span>
                          <span class="overlay-img-thumb">Oral Hygiene</span>
                          </a>
                      <!-- Thumb Image and Description -->
                      <img src="{{ asset('wb/img/works/thumbs/image_04.jpg') }}" alt="It is the practice of keeping the mouth and teeth clean to prevent dental problems which most commonly include; dental cavities, gingivitis and bad breath.">
                    </li>
                    <!-- End Item Project -->




                    <!-- Item Project and Filter Name -->
                    <li class="item-thumbs span4 design" data-id="id-0" data-type="health">
                      <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                      <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Fissure sealants" href="{{ asset('wb/img/works/thumbs/services/fissure-big.jpg') }}">
                          <span class="overlay-img"></span>
                          <span class="overlay-img-thumb"> Fissure sealants</span>
                          </a>
                      <!-- Thumb Image and Description -->
                      <img src="{{ asset('wb/img/works/thumbs/services/fissure.jpg') }}" alt="Dental sealants are a dental treatment intended to prevent tooth decay. Teeth have recesses on their biting surfaces; the back teeth have fissures and some front teeth have cingulum pits.">
                    </li>
                    <!-- End Item Project -->

                    


                    <!-- Item Project and Filter Name -->
                    <li class="item-thumbs span4 design" data-id="id-1" data-type="health">
                      <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                      <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Fluoride Application" href="{{ asset('wb/img/works/thumbs/services/floride-big.jpg') }}">
                          <span class="overlay-img"></span>
                          <span class="overlay-img-thumb"> Fluoride Application</span>
                          </a>
                      <!-- Thumb Image and Description -->
                      <img src="{{ asset('wb/img/works/thumbs/services/floride.jpg') }}" alt="Fluoride is a natural mineral that builds strong teeth and prevents cavities. It’s been an essential oral health treatment for decades. Fluoride supports healthy tooth enamel and fights the bacteria that harm teeth and gums. Tooth enamel is the outer protective layer of each tooth.">
                    </li>
                    <!-- End Item Project -->



                    <!-- Item Project and Filter Name -->
                    <li class="item-thumbs span4 design" data-id="id-2" data-type="general">
                      <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                      <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Tooth Extraction" href="{{ asset('wb/img/works/thumbs/services/xla-big.jpg') }}">
                          <span class="overlay-img"></span>
                          <span class="overlay-img-thumb"> Tooth Extraction</span>
                          </a>
                      <!-- Thumb Image and Description -->
                      <img src="{{ asset('wb/img/works/thumbs/services/xla.jpg') }}" alt="Although permanent teeth were meant to last a lifetime, there are a number of reasons why tooth extraction may be needed. A very common reason involves a tooth that is too badly damaged, from trauma or decay, to be repaired.">
                    </li>
                    <!-- End Item Project -->



                    <!-- Item Project and Filter Name -->
                    <li class="item-thumbs span4 design" data-id="id-3" data-type="general">
                      <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                      <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Filling" href="{{ asset('wb/img/works/thumbs/services/filling-big.jpg') }}">
                          <span class="overlay-img"></span>
                          <span class="overlay-img-thumb"> Filling</span>
                          </a>
                      <!-- Thumb Image and Description -->
                      <img src="{{ asset('wb/img/works/thumbs/services/filling.jpg') }}" alt="A dental restoration or dental filling is a treatment to restore the function, integrity, and morphology of missing tooth structure resulting from caries or external trauma as well as to the replacement of such structure supported by dental implants.">
                    </li>
                    <!-- End Item Project -->



                    <!-- Item Project and Filter Name -->
                    <li class="item-thumbs span4 design" data-id="id-4" data-type="general">
                      <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                      <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Root Canal Treatment" href="{{ asset('wb/img/works/thumbs/services/rc-big.jpg') }}">
                          <span class="overlay-img"></span>
                          <span class="overlay-img-thumb"> Root Canal Treatment</span>
                          </a>
                      <!-- Thumb Image and Description -->
                      <img src="{{ asset('wb/img/works/thumbs/services/rc.jpg') }}" alt="A root canal is a treatment used to repair and save a tooth that is badly decayed or becomes infected. During a root canal procedure, the nerve and pulp are removed and the inside of the tooth is cleaned and sealed. Without treatment, the tissue surrounding the tooth will become infected and abscesses may form.">
                    </li>
                    <!-- End Item Project -->



                    <!-- Item Project and Filter Name -->
                    <li class="item-thumbs span4 design" data-id="id-5" data-type="general">
                      <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                      <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Crown and Bridge" href="{{ asset('wb/img/works/thumbs/services/crown-big.jpg') }}">
                          <span class="overlay-img"></span>
                          <span class="overlay-img-thumb"> Crown and Bridge</span>
                          </a>
                      <!-- Thumb Image and Description -->
                      <img src="{{ asset('wb/img/works/thumbs/services/crown.jpg') }}" alt="Crown And Bridge. Both crowns and most bridges are fixed prosthetic devices. Unlike removable devices such as dentures, which you can take out and clean daily, crowns and bridges are cemented onto existing teeth or implants, and can only be removed by a dentist.">
                    </li>
                    <!-- End Item Project -->




                     <!-- Item Project and Filter Name -->
                    <li class="item-thumbs span4 design" data-id="id-6" data-type="cosmetic">
                      <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                      <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Cosmetic dentistry" href="{{ asset('wb/img/works/thumbs/image_01_big.jpg') }}">
                        <span class="overlay-img"></span>
                        <span class="overlay-img-thumb">Cosmetic Dentistry</span>
                      </a>
                      <!-- Thumb Image and Description -->
                      <img src="{{ asset('wb/img/works/thumbs/image_01.jpg') }}" alt="Cosmetic dentistry is generally used to refer to any dental work that improves the appearance of teeth, gums and/or bite. It primarily focuses on improvement in dental aesthetics in color, position, shape, size, alignment and overall smile appearance. .">
                    </li>
                    <!-- End Item Project -->



                    <!-- Item Project and Filter Name -->
                    <li class="item-thumbs span4 design" data-id="id-5" data-type="prothetic">
                      <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                      <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Dental Prosthesis" href="{{ asset('wb/img/works/thumbs/image_02_big.jpg') }}">
                          <span class="overlay-img"></span>
                          <span class="overlay-img-thumb"> Dental Prosthesis</span>
                          </a>
                      <!-- Thumb Image and Description -->
                      <img src="{{ asset('wb/img/works/thumbs/image_02.jpg') }}" alt="">
                    </li>
                    <!-- End Item Project -->



                    



                    
                    



                    <!-- Item Project and Filter Name -->
                    <li class="item-thumbs span4 photography" data-id="id-4" data-type="ortho">
                      <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                      <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Dentofacial Orthopedics" href="{{ asset('wb/img/works/thumbs/image_05_big.jpg') }}">
                          <span class="overlay-img"></span>
                          <span class="overlay-img-thumb">Dentofacial Orthopedics</span>
                          </a>
                      <!-- Thumb Image and Description -->
                      <img src="{{ asset('wb/img/works/thumbs/image_05.jpg') }}" alt="Orthodontia, also called orthodontics and dentofacial orthopedics, is a specialty of dentistry that deals with the diagnosis, prevention and correction of malpositioned teeth and jaws.">
                    </li>
                    <!-- End Item Project -->
                    
                     
                  </ul>
                </section>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
