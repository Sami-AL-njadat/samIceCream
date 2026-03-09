<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chicago Ice Cream Truck | Sam IceCream Truck | Chicago, Batavia, Wheaton & St. Charles</title>
    <meta name="keywords"
        content="Chicago ice cream, Ice cream truck, chicago, usa ,United States, batavia, Charles, St.Charles st.Batavia,Van ice cream, Wheaton ice cream, St. Charles,Glen Ellen,Glendal heights ,West Chicago,Naperville,Downers,chicago ice cream ,truck ice cream, Wheaton ice cream truck, Batavia ice cream truck,Lombard,Carol Stream ,Wheaton ,  Glendale Heights,Elmhurst,Addison, Bloomingdale, West Chicago,Naperville, Downers Grove, Lisle, Villa Park">
    <meta name="description"
        content="Enjoy delicious ice cream in Chicago and surrounding areas. ,chicago ice cream, Find the best ice cream trucks in Wheaton, St. Charles, ,Glen Ellen,Glendal heights ,West Chicago,Naperville,Downers,and Batavia.,sam ice cream, truck,van,ice ,cream,chicago, usa ,United States,Lombard,Carol Stream ,Wheaton ,  Glendale Heights,Elmhurst,Addison, Bloomingdale, West Chicago,Naperville, Downers Grove, Lisle, Villa Park">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="author" content="sami alnjadat">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/style-updated.css">
</head>

<body>


    <!-- ===== PRELOADER ===== -->
    <div id="preloader">
        <div class="preloader-top"></div>
        <div class="preloader-bottom"></div>
        <div class="preloader-content">
            <div class="preloader-logo-wrap">
                <img src="./image/imagecontact.jpg" alt="Sam Ice Cream Truck" class="preloader-img">
                <div class="preloader-logo-ring"></div>
                <div class="preloader-logo-ring ring-2"></div>
            </div>
            <div class="preloader-brand">
                <span class="brand-sam">SAM</span>
                <span class="brand-sub">ICE CREAM TRUCK</span>
            </div>
            <div class="preloader-dots">
                <span></span><span></span><span></span>
            </div>
        </div>
    </div>
    <!-- ===== END PRELOADER ===== -->

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="img-logo" src="./image/logonav2.png" alt="Sam Ice Cream Truck">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"
                style="border-color: white;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link click-scroll" href="#home">Home</a>
                    <a class="nav-link click-scroll" href="#about">About</a>
                    <a class="nav-link click-scroll" href="#products">Products</a>
                    <a class="nav-link click-scroll" href="#services">Services</a>
                    <a class="nav-link click-scroll" href="#contact">Contact</a>
                    <a class="nav-link click-scroll" href="#location">Location</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    @include('page.home')

    <!-- ABOUT US SECTION -->
    @include('page.about')

    <!-- Products Section -->
    @include('page.product')
    <!-- SERVICES SECTION -->
    @include('page.service')

    <!-- ===== CONTACT US SECTION — NEW DESIGN ===== -->
    @include('page.contact')

    <!-- ===== CONTACT US SECTION ===== -->

    <!-- ===== END CONTACT SECTION ===== -->


    <!-- LOCATION SECTION -->
    @include('page.area')

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>Sam Ice Cream Truck</h4>
                    <p>Bringing smiles and sweet treats to your events since 2019.</p>
                    <img class="image-footer" src="./image/logonav2.png" alt="">
                </div>
                <div class="col-md-4">
                    <h4>Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#products">Products</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#location">Location</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Follow Us</h4>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 Sam Ice Cream Truck. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="./javascript/sami.js"></script>


</body>

</html>
