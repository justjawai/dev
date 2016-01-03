<div class="container">
    <a href="<?= base_url() ?>" class="fg-red"><i class="fa fa-home"></i>&nbsp;<i class="fa fa-angle-right"></i> Cityportal</a>  > sumerpur
    <hr>
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title" id="contactLabel">
                                <h2 class="fg-red text-center" style="margin-top: 10px">
                                    <i class="fa fa-frown-o"></i>
                                     Sorry requested page not found
                                </h2>
                            </div>

                        </div>
                    </div>
                </div>


            </div>

        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title" id="contactLabel"><i class="fa fa-globe"></i> Corporate Office</h4>
                </div>
                <div class="panel-body">
                    <address>
                        <i class="fa fa-street-view"></i> Cityportal, Baldevsingh Colony<br>
                        landmark Agarwal House, Sumerpur<br>
                        Pincode - 306902,<br>
                        <i class="fa fa-phone"></i> Contact: 9461830830<br>
                        <i class="fa fa-envelope-square"></i> Emai: Help@citiportal.com
                    </address>

                </div>

            </div>

        </div>
    </div>


</div>

<?php $this->load->view('footer'); ?>
<style>

    /*!
 * bootstrap-vertical-tabs - v1.2.1
 * https://dbtek.github.io/bootstrap-vertical-tabs
 * 2014-11-07
 * Copyright (c) 2014 İsmail Demirbilek
 * License: MIT
 */
    .tabs-left, .tabs-right {
        border-bottom: none;
        padding-top: 2px;
    }
    .tabs-left {
        border-right: 1px solid #ddd;
    }
    .tabs-right {
        border-left: 1px solid #ddd;
    }
    .tabs-left>li, .tabs-right>li {
        float: none;
        margin-bottom: 2px;
    }
    .tabs-left>li {
        margin-right: -1px;
    }
    .tabs-right>li {
        margin-left: -1px;
    }
    .tabs-left>li.active>a,
    .tabs-left>li.active>a:hover,
    .tabs-left>li.active>a:focus {
        border-bottom-color: #ddd;
        border-right-color: transparent;
    }

    .tabs-right>li.active>a,
    .tabs-right>li.active>a:hover,
    .tabs-right>li.active>a:focus {
        border-bottom: 1px solid #ddd;
        border-left-color: transparent;
    }
    .tabs-left>li>a {
        border-radius: 4px 0 0 4px;
        margin-right: 0;
        display:block;
    }
    .tabs-right>li>a {
        border-radius: 0 4px 4px 0;
        margin-right: 0;
    }
    .sideways {
        margin-top:50px;
        border: none;
        position: relative;
    }
    .sideways>li {
        height: 20px;
        width: 120px;
        margin-bottom: 100px;
    }
    .sideways>li>a {
        border-bottom: 1px solid #ddd;
        border-right-color: transparent;
        text-align: center;
        border-radius: 4px 4px 0px 0px;
    }
    .sideways>li.active>a,
    .sideways>li.active>a:hover,
    .sideways>li.active>a:focus {
        border-bottom-color: transparent;
        border-right-color: #ddd;
        border-left-color: #ddd;
    }
    .sideways.tabs-left {
        left: -50px;
    }
    .sideways.tabs-right {
        right: -50px;
    }
    .sideways.tabs-right>li {
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
    }
    .sideways.tabs-left>li {
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }

</style>