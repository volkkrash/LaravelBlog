


    
    <!-- Main Footer -->
    <footer class="section section-padding-top bg-light overflow-hidden">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Footer Logo Start -->
                    <div class="footer-logo">
                        <a href="index.html"><img src="{{ asset('uploads/images/logos/footer_logo.png') }}" alt="Logo Black" /></a>
                    </div>
                    <!-- Footer Logo End -->

                    <!-- Footer Nav Start -->
                    <ul class="footer-nav mb-n3">
                        @include('particles.footer-menu')
                    </ul>
                    <!-- Footer Nav End -->

                    @include('particles.footer-company-info')

                    <!-- Copyright Start -->
                    <div class="copyright">© 2021 <span>GOTHIC</span> Made with <i class="icofont-heart-alt text-danger" aria-hidden="true"></i> by <a href="https://hasthemes.com/">HasThemes</a></div>
                    <!-- Copyright End -->
                </div>
            </div>
        </div>
    </footer>
    <!-- End Main Footer -->

    <!-- Scroll Top Start -->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top icofont-circled-up"></i>
        <i class="arrow-bottom icofont-circled-up"></i>
    </a>
    <!-- Scroll Top End -->

    <!-- Scripts -->
    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->
    <script src="{{ asset('/assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- <script src="{{ asset('/assets/js/vendor/bootstrap.min.js') }}"></script> -->
    <script src="{{ asset('/assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('/assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('/assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>


    <!-- Plugins JS -->
    <script src="{{ asset('/assets/js/plugins/aos.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/countdown.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/nice-select.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/odometer.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/isotope.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/jquery.fancybox.min.js') }}"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->


    <!-- 
<script src="assets/js/vendor.min.js"></script>
<script src="assets/js/plugins.min.js"></script> 
-->



    <!--Main JS-->
    <script src="{{ asset('/assets/js/main.js') }}"></script>
</body>

</html>