
        <?php $this->load->view('template/header'); ?>
        <div class="row-fluid">

            <div class="large-12 columns zeropadding" style="min-height: 400px; background-image: url('img/main-banner.jpg');
                 background-size: cover">

                <div class="large-12 columns show-for-large-only" style="position: absolute; padding: 100px 0px;">
                    <div class="large-3 columns right zeropadding" style="background-color: white; margin-right: 40px;border-radius: 10px 10px 0px 0px">
                        <div class="large-12 columns zeropadding" style="min-height: 30px; margin-bottom: 20px;margin-top: 10px; text-align: center ">Register as Vendor</div>
                        <?php $this->load->view('forms/seller_first_form'); ?>
                    </div>
                </div>
                <div class="large-12 columns show-for-medium-only" style="position: absolute; padding: 100px 0px;">
                    <div class="medium-6 medium-centered columns zeropadding" style="background-color: white;border-radius: 10px 10px 0px 0px">
                        <div class="large-12 columns zeropadding" style="min-height: 30px;  margin-bottom: 20px;margin-top: 10px;text-align: center">Register as Vendor</div>
                        <?php $this->load->view('forms/seller_first_form'); ?>
                    </div>
                </div>
                <div class="large-12 columns show-for-small" style="position: absolute; padding: 60px 0px;">
                    <div class="small-8 small-centered columns zeropadding" style="background-color:white;border-radius: 10px 10px 0px 0px">
                        <div class="large-12 columns zeropadding" style="min-height: 30px; margin-bottom: 20px;margin-top: 10px;text-align: center">Register as Vendor</div>
                        <?php $this->load->view('forms/seller_first_form'); ?>
                    </div>
                </div>

            </div>

        </div>
        <div class="row-fluid">

            <div class="large-12 columns zeropadding" style="background-color: #5c5b99; height: 200px">

            </div>




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
