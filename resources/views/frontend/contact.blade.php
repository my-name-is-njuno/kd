@extends('layouts.frontend')


@section('title')

@endsection




@section('content')
    <!-- end header -->
    <section id="inner-headline">
    <div class="container">
        <div class="row">
        <div class="span4">
            <div class="inner-heading">
            <h2>Get in touch</h2>
            </div>
        </div>
        <div class="span8  bapp">
            <ul class="breadcrumb">
            <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
            <li class="active">Contact</li>
            </ul>
        </div>
        </div>
    </div>
    </section>
    <section id="content">


    <div class="container">
        <div class="row">
        <div class="span6">
                <h4>Get Directions</strong></h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8228304045256!2d36.76856641475482!3d-1.2799368359802856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f19f7edc50833%3A0xeb900cfe6d0c0312!2sChandarana+Foodplus+Supermarket+(Lavington+Branch)!5e0!3m2!1sen!2ske!4v1553178724708" width="100%" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="span6">

             <h4>Physical location:</h4>
            <p>
                The Facility is located at the Lavington Green<br>
                Shopping Centre, 3rd floor Chandarana Building, room 301,<br>
                along James Gichuru Road.

                <br><br>
                <i class="icon-phone"></i> 0706 820099/ 0723711130/ 0720774844 <br>
                <i class="icon-envelope-alt"></i> lavingtondentalgreen@gmail.com
            </p>

            <h4>Get in touch</h4>

            <form method="post" role="form" class="contactForm">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>

            <div class="row">
                <div class="span6 form-group">
                <input type="text" name="name" class="form-control" id="in-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
                </div>
                <div class="span6 form-group">
                <input type="email" class="form-control" name="email" id="in-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
                </div>
                <div class="span6 form-group">
                <input type="text" class="form-control" name="subject" id="in-subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
                </div>
                <div class="span6 margintop10 form-group">
                <textarea class="form-control" name="message" rows="12" data-rule="required" data-msg="Please write something for us" id="in-message" placeholder="Message"></textarea>
                <div class="validation"></div>
                <p class="text-center">
                    <button class="btn btn-large btn-theme margintop10" id="messagebtn" type="submit">Submit message</button>
                </p>
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>
    </section>





    <script>

  </script>
@endsection


