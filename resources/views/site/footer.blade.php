<!-- Footer -->

<footer class="footer-container">
    <div class="container">
        <div class="row">

            <div class="col-sm-6 footer-left">
                <h3>Contact us</h3>
                <div class="contact-form">

                    <form role="form" action="{{route('home')}}" method="post">
                        <div class="form-group">
                            <label class="sr-only" for="contact-email">Email</label>
                            <input type="text" name="email" placeholder="Email..." class="contact-email form-control" id="contact-email">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="contact-subject">Subject</label>
                            <input type="text" name="subject" placeholder="Subject..." class="contact-subject form-control" id="contact-subject">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="contact-message">Message</label>
                            <textarea name="message" placeholder="Message..." class="contact-message form-control" id="contact-message"></textarea>
                        </div>
                        <button type="submit" class="btn">Send message</button>

                        {{--<input  name="_token" type="hidden" value="{{csrf_token()}}">--}}
                        {{csrf_field()}}
                    </form>
                </div>
            </div>

            <div class="col-sm-5 col-sm-offset-1 footer-right">
                <h3>Follow us</h3>
                <div class="footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>
                <div class="footer-copyright">
                    &copy; Maren One Page Bootstrap Template <br>Download it for free on <a href="http://azmind.com">AZMIND</a>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 footer-bottom">
                <a class="scroll-link" href="#top-content"><i class="fa fa-chevron-up"></i></a>
            </div>
        </div>
    </div>
</footer>
</section>


<!-- Javascript -->
<script src="{{asset('assets/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.backstretch.min.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/retina-1.1.0.min.js')}}"></script>
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>

<!--[if lt IE 10]>
<script src="{{asset('assets/js/placeholder.js')}}"></script>
<![endif]-->

</body>