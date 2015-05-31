<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="css/foundation.css" />
        <link href="css/mystyle.css" rel="stylesheet" type="text/css"/>
        <script src="js/vendor/modernizr.js"></script>
    </head>
    <body>
<div class="row-fluid">
    <div data-magellan-expedition="fixed" class="large-12 columns zeropadding">
        <div class="row-fluid">
            <div class="large-6 medium-6 columns" style="margin-top: 20px">

            </div>
        <div class="large-5 medium-5 columns" style="margin-top: 20px">
            <?php $this->load->view('forms/login_form'); ?>
        </div>
        <div class="large-1 medium-1 columns" style="margin-top: 20px;height: 1px"></div>
        </div>
        <div class="row-fluid">
            <div class="large-7 medium-7 columns"style="height: 1px"></div>

            <div class="large-4 medium-4 columns"  style="margin-top: -15px; text-align: right; color: orange">
            forget password?
        </div>
            <div class="large-1 medium-1 columns" style="height: 1px"></div>
        </div>
    </div>
</div>
