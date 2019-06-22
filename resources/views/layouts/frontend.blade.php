<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>
        @yield('title')
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="We have experienced Dentists who meet with patients, assess their dental health, perform scheduled cleanings, handle complex procedures, such as root canals, extractions, and oral surgery, and work with other staff members, such as dental hygienists and assistants, to provide our clients with quality dental services." />
    <meta name="author" content="Peter Njuno" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- css -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700"
        rel="stylesheet">

    <link href="{{ asset('wb/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('wb/css/bootstrap-responsive.css') }}" rel="stylesheet" />
    <link href="{{ asset('wb/css/fancybox/jquery.fancybox.css') }}" rel="stylesheet" />
    <link href="{{ asset('wb/css/jcarousel.css') }}" rel="stylesheet" />
    <link href="{{ asset('wb/css/flexslider.css') }}" rel="stylesheet" />
    <link href="{{ asset('wb/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('wb/skins/default.css') }}" rel="stylesheet" />



    <!-- Fav and touch icons -->

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('wb/ico/favicon.ico') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('wb/ico/favicon.ico') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('wb/ico/favicon.ico') }}" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset('wb/ico/favicon.ico') }}" />
    <link rel="shortcut icon" href="{{ asset('wb/ico/favicon.ico') }}" />



</head>

<body>

    <div class="wrapper">
        <header>
            <div class="container ">
                <!-- hidden top area toggle link -->
                <div id="header-hidden-link">

                </div>
                <!-- end toggle link -->
                <div class="row nomargin">
                    <div class="span12">
                        <div class="headnav">
                            <ul>
                                <li class="shakee">
                                    <a class="btn btn-theme btn-rounded d-sm-none bapp" href="#bookappointment"
                                        data-toggle="modal"><i class="icon-user"></i> Book Appointment</a>
                                </li>



                            </ul>
                        </div>
                        <!-- Book Appointment Modal -->
                        <div id="bookappointment" class="modal styled hide fade" tabindex="-1" role="dialog"
                            aria-labelledby="mySignupModalLabel" aria-hidden="true">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 id="mySignupModalLabel">Book an <strong>appointment</strong></h4>
                            </div>
                            <div class="modal-body">
                                <div id="hidewhensending">
                                <form class="form-horizontal" id="" method="post" id="">

                                    <div class="control-group">
                                        <label class="control-label" for="inputName">Name</label>
                                        <div class="controls">
                                            <input type="text" name="name" required id="inputName" placeholder="Name">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="inputEmail">Email</label>
                                        <div class="controls">
                                            <input type="text" name="email" required id="inputEmail"
                                                placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="inputMobile">Mobile</label>
                                        <div class="controls">
                                            <input type="text" name="mobile" required id="inputMobile"
                                                placeholder="Mobile Number">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="inputLocation">Location</label>
                                        <div class="controls">
                                            <input type="text" name="location" required id="inputLocation"
                                                placeholder="Location">
                                        </div>
                                    </div>



                                    <div class="control-group">
                                        <label class="control-label" for="inputDate">Preffered Date</label>
                                        <div class="controls">
                                            <input type="date" name="preffered_date" required id="input_preffered_date"
                                                placeholder="preffered_date">
                                        </div>
                                    </div>



                                    <div class="control-group">
                                        <label class="control-label" for="inputMessage">Message</label>
                                        <div class="controls">
                                            <textarea name="message" required id="inputMessage"
                                                placeholder="Message"></textarea>
                                        </div>
                                    </div>


                                    <div class="control-group">
                                        <div class="controls">
                                            <button type="submit" class="btn btn-md btn-secondary"
                                                id="appoitmentForm">Book Appointment</button>

                                        </div>

                                    </div>


                                    
                                </form>
                                </div>


                                <div id="showwhensending">
                                    <img src="{{ asset('images/sending.png')}}">
                                </div>


                                <div id="showwhensent">
                                    <img src="{{ asset('images/sent.jpg')}}">
                                </div>



                            </div>
                        </div>
                        <!-- end signup modal -->



                    </div>
                </div>
                <div class="row">
                    <div class="span4">
                        <div class="logo">
                            <a href="{{ route('indexpage') }}"><img src="{{ asset('wb/img/logo3.png') }}" width="180"
                                    alt="" class="logo" /></a>
                            {{-- <h1>Where Beautiful Smiles Begin</h1> --}}
                        </div>
                    </div>
                    <div class="span8">
                        <div class="navbar navbar-static-top">
                            <div class="navigation">
                                <nav>
                                    <ul class="nav topnav">

                                        <li>
                                            <a href="{{ route('indexpage') }}">Home</a>
                                        </li>


                                        <li>
                                            <a href="{{ route('aboutpage') }}">About us</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('servicespage') }}">Services</a>
                                        </li>

                                        <li class="dropdown">
                                            <a href="#">Resources <i class="icon-angle-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="{{ route('gallery') }}">Gallery</a>
                                                </li>

                                                <li>
                                                    <a href="{{ route('partners') }}">Partners</a>
                                                </li>
                                            </ul>
                                        </li>



                                        <li>
                                            <a href="{{ route('contactpage') }}">Contact </a>
                                        </li>



                                    </ul>
                                </nav>
                            </div>
                            <!-- end navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </header>




        @yield('content')







        <footer>
            <div class="container">
                <div class="row">
                    <div class="span4">
                        <div class="widget">
                            <h5 class="widgetheading">Browse pages</h5>
                            <ul class="link-list">
                                <li><a href="{{ route('indexpage') }} ">Home</a></li>
                                <li><a href="{{ route('aboutpage') }} ">About Us</a></li>
                                <li><a href="{{ route('servicespage') }} ">Services</a></li>
                                <li><a href="{{ route('gallery') }} ">Gallery</a></li>
                                <li><a href="{{ route('partners') }} ">Partners</a></li>
                                <li><a href="{{ route('contactpage') }} ">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="span4">
                        <div class="widget">
                            <h5 class="widgetheading">Working Hours</h5>
                            <address>
                                {{-- <strong>We operate from</strong><br> --}}
                                Monday to Friday: 8.30am – 5.00pm.<br>
                                Saturdays: 8.30am – 2.00pm. <br>
                                Sundays and public holidays: closed

                            </address>
                            <h5 class="widgetheading">Social Media Links</h5>
                            <p>
                                <a href="" target="_blank"><i class="icon-facebook"></i> </a>
                                <a href="" target="_blank"><i class="icon-twitter"></i> </a>
                            </p>

                        </div>
                    </div>


                    <div class="span4">
                        <div class="widget">
                            <h5 class="widgetheading">Location</h5>

                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.291668392081!2d36.7707876!3d-1.2798811!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x77c365e170c69162!2sLavington+Green+Dental+Suite!5e0!3m2!1sen!2ske!4v1558167936169!5m2!1sen!2ske" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                            <address>
                                <strong>Lavington Green Shopping Centre</strong><br>
                                Chandarana Building,3rd floor, room 301,<br>
                                Along James Gichuru Road
                            </address>
                            <p>
                                <i class="icon-phone"></i> 0706 820099/ 0723711130/ 0720774844 <br>

                                <i class="icon-envelope-alt"></i> lavingtongreendentalgreen@gmail.com
                                <br>
                                <i class="icon-envelope-alt"></i> 
                                info@lavingtondentalgreen.com

                                <i class="icon-envelope-alt"></i> lavingtongreendental@gmail.com<br>
                                <i class="icon-envelope-alt"></i> info@lavingtongreendental.co.ke

                            </p>


                            
                        </div>
                    </div>
                </div>
            </div>

        </footer>

    </div>


    <a href="#" class="bapp scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('wb/js/jquery.js') }}"></script>
    <script src="{{ asset('wb/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('wb/js/bootstrap.js') }}"></script>
    <script src="{{ asset('wb/js/jcarousel/jquery.jcarousel.min.js') }}"></script>
    <script src="{{ asset('wb/js/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('wb/js/jquery.fancybox-media.js') }}"></script>
    <script src="{{ asset('wb/js/google-code-prettify/prettify.js') }}"></script>
    <script src="{{ asset('wb/js/portfolio/jquery.quicksand.js') }}"></script>
    <script src="{{ asset('wb/js/portfolio/setting.js') }}"></script>
    <script src="{{ asset('wb/js/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('wb/js/jquery.nivo.slider.js') }}"></script>
    <script src="{{ asset('wb/js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('wb/js/jquery.ba-cond.min.js') }}"></script>
    <script src="{{ asset('wb/js/jquery.slitslider.js') }}"></script>
    <script src="{{ asset('wb/js/animate.js') }}"></script>

    <!-- Template Custom JavaScript File -->


    <script src="{{ asset('wb/js/custom.js') }}"></script>

    <script src="{{ asset('js/apt.js') }}"></script>

    <script>
        jQuery(document).ready(function(){
            jQuery('#showwhensending').hide()
            jQuery('#showwhensent').hide()


            jQuery('#appoitmentForm').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });




               if ((jQuery('#inputName').val() == '') || (jQuery('#inputEmail').val() == '' )|| (jQuery('#inputMobile').val() == '') || (jQuery('#inputLocation').val() == '') || (jQuery('#inputMessage') == "") || (jQuery('#input_preffered_date') == "") ) {

                    alert("Ensure all inputs is filled")

                    return false;

               }



               var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;

               if (!re.test(jQuery('#inputEmail').val()))
                {
                    alert('Please enter a valid email address.');
                    return false;
                }


            


               jQuery('#hidewhensending').hide()
               jQuery('#showwhensending').show()
               jQuery.ajax({

                type: 'POST',
                  url: "{{ url('/apt/store') }}",
                  data: {
                     name: jQuery('#inputName').val(),
                     email: jQuery('#inputEmail').val(),
                     mobile: jQuery('#inputMobile').val(),
                     location: jQuery('#inputLocation').val(),
                     message: jQuery('#inputMessage').val(),
                     preffered_date: jQuery('#input_preffered_date').val()
                  },
                  success: function(result){

                        jQuery('#inputName').val("")
                        jQuery('#inputEmail').val("")
                        jQuery('#inputMobile').val("")
                        jQuery('#inputLocation').val("")
                        jQuery('#inputMessage').val("")
                        jQuery('#input_preffered_date').val("")

                     jQuery('#showwhensending').hide()
                     jQuery('#showwhensent').show()
                     $("#bookappointment").modal('hide');
                     

            }});
            });





    });






      jQuery(document).ready(function(){
            jQuery('#messagebtn').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });


               alert("Sending Message");

               jQuery.ajax({

                type: 'POST',
                  url: "{{ url('/msg/store') }}",
                  data: {
                     cname: jQuery('#in-name').val(),
                     cemail: jQuery('#in-email').val(),
                     csubject: jQuery('#in-subject').val(),
                     cmessage: jQuery('#in-message').val(),

                  },
                  success: function(result){


                    jQuery('#in-name').val("")
                    jQuery('#in-email').val("")
                    jQuery('#in-subject').val("")
                    jQuery('#in-message').val("")

                     alert(result.success);
            }});
            });





    });
    </script>
</body>

</html>
