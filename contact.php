<?php include 'header.php' ?>

<div id="all">

    <div id="content">
        <div class="container">



            <div class="col-md-12">


                <div class="box" id="contact">
                    <h1>Contact</h1>

                    <p class="lead">LET’S GET THIS PARTY STARTED</p>

                    <hr>

                    <div class="row">
                        <div class="col-sm-4">
                            <h3>
                                <i class="fa fa-map-marker"></i> Address</h3>
                            <p>
                                <strong>Party Bargains Inc.</strong>
                                <br>1 Avenue
                                <br>F Brooklyn
                                <br>11218
                                <br>New York
                                <br>
                                <strong>United States</strong>
                            </p>
                        </div>
                        <!-- /.col-sm-4 -->
                        <div class="col-sm-4">
                            <h3>
                                <i class="fa fa-phone"></i> Call Us!</h3>
                            <p>
                                <strong>
                                    Phone: 718-925-2553
                                </strong>
                            </p>
                            <p>
                                <strong>
                                    Extension: #2
                                </strong>
                            </p>
                        </div>
                        <!-- /.col-sm-4 -->
                        <div class="col-sm-4">
                            <h3>
                                <i class="fa fa-envelope"></i> Email us at</h3>
                            <p class="text-muted">Please feel free to write an email to us for any concerns.</p>
                            <ul>
                                <li>
                                    <strong>
                                        <a href="mailto:">info@partybargainsinc.com</a>
                                    </strong>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-sm-4 -->
                    </div>
                    <!-- /.row -->

                    <hr>

                    <div id="map">


                    </div>


                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

        <script>
            function initialize() {
                var mapOptions = {
                    zoom: 18,
                    // center: new google.maps.LatLng(49.1678136, 16.5671893),
                    center: new google.maps.LatLng(40.6330663, -73.9787469),
                    mapTypeId: google.maps.MapTypeId.ROAD,
                    scrollwheel: false
                }
                var map = new google.maps.Map(document.getElementById('map'),
                    mapOptions);

                // var myLatLng = new google.maps.LatLng(49.1681989, 16.5650808);
                var myLatLng = new google.maps.LatLng(40.6330663, -73.9787469);
                var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
<?php include 'footer.php' ?>