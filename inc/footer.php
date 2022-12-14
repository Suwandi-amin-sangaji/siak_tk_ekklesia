<!-- footer section -->
<section class="container-fluid footer_section">
    <p>
        Copyright &copy; <?= date('Y') ?> All Rights Reserved By
        <a href="#">TK EKKLESIA</a>
    </p>
</section>
<!-- footer section -->

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init();
</script>

<script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>

<script>
// This example adds a marker to indicate the position of Bondi Beach in Sydney,
// Australia.
function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {
            lat: 40.645037,
            lng: -73.880224
        },
    });

    var image = 'assets/images/maps-and-flags.png';
    var beachMarker = new google.maps.Marker({
        position: {
            lat: 40.645037,
            lng: -73.880224
        },
        map: map,
        icon: image
    });
}
</script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
</script>
<!-- end google map js -->
</body>

</html>