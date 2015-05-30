<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Foundation | Welcome</title>
        <link rel="stylesheet" href="css/foundation.css" />
        <link href="css/mystyle.css" rel="stylesheet" type="text/css"/>
        <script src="js/vendor/modernizr.js"></script>
    </head>
    <body>
        <?php $this->load->view('template/header'); ?>
        <div class="row-fluid">

            <div class="large-12 columns zeropadding" style="min-height: 400px; background-image: url('http://www.3dcart.com/images/sell-online_2012/banner.jpg');
                 background-size: cover">

                <div class="large-12 columns show-for-large-only" style="position: absolute; padding: 100px 0px;">
                    <div class="large-3 columns right zeropadding" style="background-color: white; margin-right: 40px">
                        <div class="large-12 columns zeropadding" style="min-height: 30px; background-color: #E80000; margin-bottom: 20px"></div>
                        <?php $this->load->view('forms/seller_first_form'); ?>
                    </div>
                </div>
                <div class="large-12 columns show-for-medium-only" style="position: absolute; padding: 100px 0px;">
                    <div class="medium-6 medium-centered columns zeropadding" style="background-color: white;">
                        <div class="large-12 columns zeropadding" style="min-height: 30px; background-color: #E80000; margin-bottom: 20px"></div>
                        <?php $this->load->view('forms/seller_first_form'); ?>
                    </div>
                </div>
                <div class="large-12 columns show-for-small" style="position: absolute; padding: 60px 0px;">
                    <div class="small-8 small-centered columns zeropadding" style="background-color: white;">
                        <div class="large-12 columns zeropadding" style="min-height: 30px; background-color: #E80000; margin-bottom: 20px"></div>
                        <?php $this->load->view('forms/seller_first_form'); ?>
                    </div>
                </div>

            </div>

        </div>
        <div class="row-fluid">

            <div class="large-12 columns zeropadding" style="background-color: #5c5b99; height: 200px">
                    <p>This is footer</p>
            </div>
<<<<<<< HEAD
            <div class="large-12 columns">this is me </div>
=======
            <div class="large-5">what</div>
>>>>>>> santhosh-vendor-reg-branch

        </div>






        <script src="js/vendor/jquery.js"></script>
        <script src="js/foundation.min.js"></script>
        <script>
            $(document).foundation({
                "magellan-expedition": {
                    active_class: 'active', // specify the class used for active sections
                    threshold: 0, // how many pixels until the magellan bar sticks, 0 = auto
                    destination_threshold: 0, // pixels from the top of destination for it to be considered active
                    throttle_delay: 50, // calculation throttling to increase framerate
                    fixed_top: 0, // top distance in pixels assigend to the fixed element on scroll
                    offset_by_height: true // whether to offset the destination by the expedition height. Usually you want this to be true, unless your expedition is on the side.
                }

            });
        </script>
    </body>
</html>
