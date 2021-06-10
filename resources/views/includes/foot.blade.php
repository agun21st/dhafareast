		<!-- jQuery -->
		<script src="{{URL::asset('js/jquery-3.3.1.min.js')}}"></script>
		<!-- Bootstrap JavaScript -->
		<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
		<!-- Font Awesome JS -->
		<script src="{{URL::asset('js/all.min.js')}}"></script>
		<!-- Counter Up -->
		<script src="{{URL::asset('js/jquery.waypoints.min.js')}}"></script>
		<script src="{{URL::asset('js/jquery.counterup.min.js')}}"></script>
		<!-- Magnific Popup core JS file -->
		<script src="{{URL::asset('js/jquery.magnific-popup.js')}}"></script>
		<!-- owl carousel slider js -->
		<script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
		<!-- side nav jss -->
		<script src="{{URL::asset('js/mCustomScrollbar.concat.min.js')}}"></script>
		<!-- Wow Js -->
		<script src="{{URL::asset('js/wow.min.js')}}"></script>
		<script src="{{URL::asset('js/main.js')}}"></script>
		<script>
			new WOW().init();
		</script>
		<script type="text/javascript">
            $('.owl-carousel').owlCarousel({
                margin: 10,
                loop:false,
                navigation: false,
                nav: false,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    1025: {
                        items: 2
                    }
                }
            });
        </script>
        <script type="text/javascript">
	        $(document).ready(function () {
	            $("#sidenav").mCustomScrollbar({
	                theme: "minimal"
	            });

	            $('#dismiss, .fullOverlay').on('click', function () {
	                $('#sidenav').removeClass('active');
	                $('.fullOverlay').removeClass('active');
	                $('#sidenav-collapse').removeClass('open');
	            });

	            $('#sidenav-collapse').on('click', function () {
	                $('#sidenav').addClass('active');
	                $('.fullOverlay').addClass('active');
	                $('.collapse.in').toggleClass('in');
	                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
	            });
	        });
	    </script>