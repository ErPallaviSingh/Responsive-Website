<?php

include_once 'web_head.php';
?>
<?php

include_once 'web_header.php';
?>
<section class="contact-us text-center">
    <div class="fields">
        <div class="container">
            <div class="row">
                <i class="fa fa-envelope fa-5x"></i>
                <h2 class="h1">Contact Us</h2>
                <!--Start Contact Form-->
                <form>
                    <div class="col-md-6 wow slideInLeft" data-wow-duration="2s" data-wow-offset="350">  
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control input-lg" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" maxlength="10" placeholder="Phone">
                        </div>
                    </div>
                    <div class="col-md-6 wow slideInRight" data-wow-duration="1s" data-wow-offset="350">
                        <div class="form-group">
                            <textarea class="form-control input-lg" placeholder="Type Your Message" style="height: 107px;"></textarea>
                        </div>
                        <button type="button" class="btn btn-danger btn-lg btn-block">Contact Us</button>
                    </div>
                </form>
                <!--End Contact Form-->
            </div>
        </div>
    </div>
</section>
<?php

include 'web_footer.php';
?>