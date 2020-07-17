
    <!-- footer-area start -->
    <footer class="footer-area" id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-sm-6 col-12">
                        <div class="footer-widget footer-logo">
                            <img src="<?=base_url('assets/logo/Asset 2.png')?>" alt="">
                            <p>Crypto247network is one of the leading platforms in the United States offering Binary Options, Forex Trade and spreads. Regulated by the Securities Investor Protection Corporation (SIPC) and based in New York. It is also regulated by the IFSC of Belize, as well as the Cyprus Securities and Exchange Commission. The company is also registered with the Financial Conduct Authority of the USA.</p>
                            <form action="#">
                                <input type="text" placeholder="Enter your email">
                                <button>subscribe</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="footer-widget footer-menu">
                            <h3>Our Services</h3>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Bitcoin Investments</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Crypto Investments </a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Bitcoin Exchange</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Bitcoin Update</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Business Consulting</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="footer-widget footer-menu">
                            <h3>Quick Links</h3>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Network Stat</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Block Explorers </a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Exchange Market</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Governance</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="footer-widget footer-contact">
                            <h3>Contact Information</h3>
                            <ul class="footer-contact-info">
                                <li><span>Location: </span>Chicago United States</li>
                                <li><span>Email: </span> Crypto247network@gmail.com</li>
                            </ul>
                            <h5>We are Social</h5>
                            <ul class="social-icon d-flex">
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <!-- <li class="instagram"><a href="#"><i class="fa fa-instagram"> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12 copyright">
                        <p>
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>  <a href="https://web.facebook.com/Zealtechnologized/" target="_blank" class="text-primary">All rights reserved CRYPTO247NETWORK || Powered by Zeal Technologies</a>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <style>
        #scrollUp{
            display: none;
        }
    </style>
    <!-- footer-area end -->

    <!-- jquery latest version -->
    <script src="<?=base_url('assets/js/vendor/jquery-2.2.4.min.js')?> "></script>
    <!-- popper.min.js -->
    <script src="<?=base_url('assets/js/vendor/popper.min.js')?> "></script>
    <!-- bootstrap js -->
    <script src="<?=base_url('assets/js/bootstrap.min.js')?> "></script>
    <!-- owl.carousel.2.0.0-beta.2.4 css -->
    <script src="<?=base_url('assets/js/owl.carousel.min.js')?> "></script>
    <!-- swiper.min.js -->
    <script src="<?=base_url('assets/js/swiper.min.js')?> "></script>
    <!-- mailchimp.js -->
    <script src="<?=base_url('assets/js/mailchimp.js')?>"></script>
    <!-- plugins js -->
    <script src="<?=base_url('assets/js/jquery.canvasjs.min.js')?>"></script>
    <!-- metisMenu.min.js -->
    <script src="<?=base_url('assets/js/metisMenu.min.js')?>"></script>
    <!-- plugins js -->
    <script src="<?=base_url('assets/js/plugins.js')?> "></script>
    <script>
            // chart
    window.onload = function () {
    var limit = 10000;    //increase number of dataPoints by increasing the limit
    var y = 100;    
    var data = [];
    var dataSeries = { type: "line" };
    var dataPoints = [];
    for (var i = 0; i < limit; i += 1) {
        y += Math.round(Math.random() * 10 - 5);
        dataPoints.push({
            x: i,
            y: y
        });
    }
    dataSeries.dataPoints = dataPoints;
    data.push(dataSeries);

    //Better to construct options first and then pass it as a parameter
    var options = {
        zoomEnabled: true,
        animationEnabled: true,
        axisY: {
            includeZero: false
        },
        data: data  // random data
    };

        $("#chartContainer").CanvasJSChart(options);
    }
    </script>
    <!-- main js -->
    <script src="<?=base_url('assets/js/scripts.js')?> "></script>

            <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5f091c9f67771f3813c0d373/1eculvvl3';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->
</body>

</html>