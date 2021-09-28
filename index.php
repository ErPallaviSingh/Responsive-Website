<html>
    <?php
    include_once 'web_head.php';
    ?>
    <!-- Start Navbar -->
    <?php
    include_once 'web_header.php';
    ?>
    <!--End Navbar-->


    <!--Start Carousel-->
    <div id="myslide" class="carousel slide hidden-xs" data-ride="carousel">    
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="asset/image/slid3.gif" style="height: 400px">
            </div>     
        </div>
    </div>
    <!--End Carousel-->
    <!--Start Section About-->
    <section class="about text-center wow bounceIn" data-wow-duration="2s" data-wow-offset="100"> 
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center><h2><u style="color: black;">Cloud Computing</u></h2></center>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 ">
                    <img src="asset/image/Cloud-Computing-removebg-preview.png" alt=""/>
                </div>
                <div class="col-md-6 ">
                    <h1>Introduction of<span> Cloud Computing</span></h1>
                    <p class="lead about-paragraph1"><strong>Cloud Computing</strong> is the delivery of computing services such as servers, storage, databases, networking, software, analytics, intelligence, and more, over the Cloud (Internet).</p>
                </div>
            </div>
        </div>

    </section>

    <!--End Section Features-->
    <!--Start Section Testimonials-->
    <section class="">
        <div class="container">

        </div>
    </section>
    <section class="price-table text-center">
        <div class="container">
            <h2 >Type of Cloud Computing</h2>
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="price-box wow slideInUp" data-wow-duration="2s" data-wow-offset="300">
                        <h2 class="text-primary">Public Cloud</h2>
                        <img src="asset/image/pc.png" style="width: 240px ;height: 260px">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="price-box wow slideInDown" data-wow-duration="2s" data-wow-offset="300">
                        <h2 class="text-success">Private Cloud</h2>
                        <img src="asset/image/private.jpeg" style="width: 240px ;height: 260px">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="price-box wow slideInUp" data-wow-duration="2s" data-wow-offset="300">
                        <h2 class="text-info">Hybrid Cloud</h2>
                        <img src="asset/image/hybrid cloud.png" style="width: 240px ;height: 260px">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="price-box wow slideInDown" data-wow-duration="2s" data-wow-offset="300">
                        <h2 class="text-danger">Community Cloud</h2>
                        <img src="asset/image/cc.png" style="width: 240px ;height: 260px">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Section Price Table-->
    <!--Start Our Section Team-->

    <!--End Section Our Team-->
    <section class="">
        <div class="container">

        </div>
    </section>
    <!--Start Subscribe-->
    <div class="container">


        <section class="subscribe text-center">
            <div class="container wow fadeInDown" data-wow-duration="1s" data-wow-offset="350">
                <h2 style="color: #000">Contact To More Detail...</h2>
                <form class="form-inline">
                    <input class="form-control input-lg" type="email" placeholder="Write Your Email">
                    <button class="btn btn-danger btn-lg"><i class="fa fa-edit fa-lg"></i>Subscribe</button>
                </form>
            </div>
        </section>
    </div>
    <!--End Subscribe-->

    <!--Start Footer-->
    <?php
    include 'web_footer.php';
    ?>
</html>
<!--EndFooter-->