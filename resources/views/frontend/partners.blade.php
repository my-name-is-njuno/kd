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
              
           


                  
                      <img src="{{ asset('wb/img/dummies/clients/fa.png') }}" class="p-2 m-3" alt="" />
                  
                
                
                  
                      <img src="{{ asset('wb/img/dummies/clients/uap.png') }}" class="p-2 m-3" alt="" />
                      
                
                
                  
                      <img src="{{ asset('wb/img/dummies/clients/minet.png') }}" class="p-2 m-3" alt="" />
                      
                
                
                  
                      <img src="{{ asset('wb/img/dummies/clients/apa.png') }}" class="p-2 m-3" alt="" />
                      
                
                
                  
                      <img src="{{ asset('wb/img/dummies/clients/madison.png') }}" class="p-2 m-3" alt="" />
                      
                
                
                  
                      <img src="{{ asset('wb/img/dummies/clients/aar.png') }}" class="p-2 m-3" alt="" />
                      
                
                
                  
                      <img src="{{ asset('wb/img/dummies/clients/nhif.png') }}" class="p-2 m-3" alt="" />
                      
                
                
                  
                      <img src="{{ asset('wb/img/dummies/clients/trident.png') }}" class="p-2 m-3" alt="" />
                      
                
                
                  
                      <img src="{{ asset('wb/img/dummies/clients/kcb.jpg') }}" class="p-2 m-3" alt="" />
                      
                
                
                  
                      <img src="{{ asset('wb/img/dummies/clients/stanbic.png') }}" class="p-2 m-3" alt="" />
                      
                
                
                  
                      <img src="{{ asset('wb/img/dummies/clients/mtn.png') }}" class="p-2 m-3" alt="" />
                      
                
                
                  
                      <img src="{{ asset('wb/img/dummies/clients/private.png') }}" class="p-2 m-3" alt="" />
                      

                             
             
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
