
<!--**********************************
    Footer start
***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Developed by <a href="#" target="_blank">Ans V John</a> 2023</p>
            </div>
        </div>
<!--**********************************
    Footer end
***********************************-->

    </div>
<!--**********************************
    Main wrapper end
***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('js/global.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
	
	 <!----Datatable--->
	<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('js/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('js/datatables.init.js') }}"></script>

    <!-------Echarts---->
    <script src="{{ asset('js/echarts.min.js') }}"></script>
    

	<!-- Vectormap -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/deznav-init.js') }}"></script>

    <!--- My-JS code --->
    <script src="{{ asset('js/my-script.js') }}"></script>
    <!---- Google Map API--->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4CxgipCwcY2ASKHyEXpHyq4JCf81ZrYQ&callback=initMap"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        });
    </script>

</body>
</html>