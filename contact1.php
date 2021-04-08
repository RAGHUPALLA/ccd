<!DOCTYPE html>
<html lang="en">

<head>
    <title>Projects</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/contact.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIwzALxUPNbatRBj3Xi1Uhp0fFzwWNBkE&callback=initMap&libraries=&v=weekly"
    async
  ></script>

</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">
                <img src="assets/main/cc_logo.png" class="header-logo" alt="Crystal Constructions Logo" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Projects </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="content-width">
        <div class="sub-banner-text">
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Contact Us</a></li>
            </ul>
        </div>
    </div>
    <section>
        <!-- <div class="content-width">
            <div class="heading-row">
                <h2>Contact Us</h2>
            </div>
        </div> -->
        <div class="contact-info-sec content-width">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-info-inner">
                      
                        <span class="lnr lnr-phone-handset"></span>
                        <h3>Phone</h3>
                        <p>+91 9090909090</p>
                    </div>
                </div>
               
                <div class="col-md-4">
                    <div class="contact-info-inner">
                        <span class="lnr lnr-envelope"></span>
                        <h3>Mail Box</h3>
                        <p>crystalconstructionsdevelopers@gmail.com</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info-inner">
                        <span class="lnr lnr-map-marker"></span>
                        <h3>Location</h3>
                        <p>121 King Street, Melbourne Victoria
                            3000, Australia</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-section content-width">
            <div class="heading-row">
                <h2>Get in touch</h2>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <strong><?php echo $message; ?></strong>
                    <form class="contact-form" method="POST" action="contact.php">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Name</label>
                                <input type="text" name="txtName" id="txtName" class="form-control">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Email Address</label>
                                <input type="text" name="txtEmail" id="txtEmail" class="form-control">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Phone</label>
                                <input type="number" name="txtPhone" id="txtPhone" class="form-control">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Subject</label>
                                <input type="text" name="txtSubject" id="txtSubject" class="form-control">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Message</label>
                                <textarea class="form-control" name="txtMessage" id="txtMessage"></textarea>
                            </div>
                            <div class="col-md-6">
                                <button class="btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-4">
                    <div id="map">

                    </div>
                    <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Hyderabad,%20Telangana%20500008+(CCD)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
                </div>
            </div>
            
        </div>
    </section>
    <section>

    </section>


    <footer class="footer">
        <div class="content-width">
            <div class="row footer-row">
                <div class="col-md-4">
                    <ul class="list-unstyled com-info">
                        <img class="footer-logo" src="assets/main/cc_logo.png">
                        <li> <i class="fas fa-map-marker-alt"></i> 8-1-21/32, Bait-al-Hamd, Toli Chowki, Hyderabad,
                            Telangana 500008</li>
                        <li> <i class="fas fa-phone-alt"></i> +91 9000909090</li>
                        <li> <i class="far fa-envelope"></i> crystalconstructionsdevelopers@gmail.com</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled ul-list">
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copy-right-sec">
            <div class="content-width">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled list-inline">
                            <li class="list-item-inline"><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            <li class="list-item-inline"><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                            <li class="list-item-inline"><a href="#"><i class="fab fa-instagram-square"></i></a></li>
                            <li class="list-item-inline"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <p class="text-right">&copy; crystalconstructionsdevelopers - 2021 | All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- <script>
        // Initialize and add the map
        function initMap() {
          // The location of Uluru
          var uluru = { lat: -25.344, lng: 131.036 };
          // The map, centered at Uluru
          var map = new google.maps.Map(document.getElementById("map"), {
            zoom: 4,
            center: uluru,
          });
          // The marker, positioned at Uluru
          var marker = new google.maps.Marker({
            position: uluru,
            map: map,
          });
        }
      </script> -->
    
</body>

</html>