@extends('layouts.frontend')


@section('title')
    Our Insurance Partners
@endsection


@section('content')
<section id="inner-headline">
        <div class="container">
          <div class="row">
            <div class="span4">
              <div class="inner-heading">
                <h2>Insurance Partners</h2>
              </div>
            </div>
            <div class="span8 bapp">
              <ul class="breadcrumb">
                <li><a href={{ route('indexpage') }}><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                
                <li class="active">Partners</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section id="content">
        <div class="container">

          <!-- end divider -->
          <div class="row text-center">
            <div class="span12 partners">
              
                <!-- end divider -->
              
           


                    @foreach ($partners as $pat)
                      <img src="{{ asset('images/logos/'. $pat->logo) }}" class="p-2 m-3" alt="" />
                    @endforeach
                      
                  
                
                
                  
                      
                      

                             
             
            </div>
          </div>
         
        
          
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
