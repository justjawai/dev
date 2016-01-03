<!--temprature  http://openweathermap.org/current-->

<?php
//$ch =   curl_init('http://api.openweathermap.org/data/2.5/weather?zip=306902,india');
?>


<div class="container">
    <div class="row banner-section">
        <div class="col-md-3 col-sm-3 hidden-xs col-category" style="">
            <ul class="category-menu" style="display: block;">
                <?php foreach ($categories as $key => $category): ?>
                    <li><a href="<?= base_url() ?>category/<?= $category->name ?>"><?= $category->name ?><span
                                class="pull-right"><i class="fa fa-angle-double-right"></i></span></a></li>
                    <?php if ($key > 8) {
                        break;
                    } endforeach; ?>
                <li><a href="<?= base_url() ?>allcategory">See All Categories<span class="pull-right"><i
                                class="fa fa-angle-double-right"></i></span></a></li>
            </ul>
        </div>
        <div class="col-md-9 col-sm-9 hidden-xs col-carousel main-slider">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">


                    <?php foreach ($newstop5 as $key => $news):
                        $active = "";
                        if ($key == 0)
                            $active = "active";
                        ?>


                        <div class="item <?= $active ?> ">
                            <a href="<?= base_url() ?>news/<?= $news->seo_url ?>"><img style="width: 100%"
                                                                                       src="<?php echo base_url() . 'uploads/' . $news->image ?>"></a>

                            <div class="carousel-caption fg-black bg-white">
                                <?php echo $news->title ?>
                            </div>
                        </div>

                    <?php endforeach; ?>
                    <!-- End Item -->
                </div>
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

                <!-- End Carousel Inner -->

            </div>

        </div>


        <!-- End Carousel -->

    </div>


    <div class="row clearfix">
        <div class="col-md-9 column">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center text-uppercase"><strong>Popular search</strong></div>
                        <div class="panel-body">
                            <div class="row">

                                <?php foreach ($popular_search as $key => $pc): ?>

                                    <a href="<?= base_url() ?>details/<?= $pc->seo_url ?>">
                                        <div class="col-md-3 col-sm-3 col-xs-6 text-center">
                                            <div class="popular-box bg-steel fg-white">
                                                <div class="icon"  style="background-image: url('<?php echo base_url().'uploads/'. $pc->photo ?>');  ">
                                                </div>
                                                <div class="view"><?= $pc->name ?></div>
                                                <div><span class="btn btn-default btn-mini disabled"
                                                           style="padding:4px 0; width: 100%; font-size: 12px; font-weight: bold; "><i class="fa fa-eye"></i>  Views <?= $pc->visitors ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <!--recently added people-->

                <div class="row people_thumb">
                    <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center text-uppercase"><span><strong>Recently Added People</strong></span></div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-2  col-sm-3">
                                            <a class="thumbnail" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom"
                                               href="#"><img src="<?= base_url() ?>asset/banner_img/1465142.jpg" style="width: 170px"></a>
                                        </div>
                                        <div class="col-md-2  col-sm-3">
                                            <a class="thumbnail" href="#"><img src="<?= base_url() ?>asset/banner_img/1493969.jpg"
                                                                               style="width: 170px"></a>
                                        </div>
                                        <div class="col-md-2  col-sm-3">
                                            <a class="thumbnail" href="#"><img src="<?= base_url() ?>asset/banner_img/1614668.jpg"
                                                                               style="width: 170px"></a>
                                        </div>
                                        <div class="col-md-2  col-sm-3">
                                            <a class="thumbnail" href="#"><img src="<?= base_url() ?>asset/banner_img/1465142.jpg"
                                                                               style="width: 170px"></a>
                                        </div>
                                        <div class="col-md-2  col-sm-3">
                                            <a class="thumbnail" href="#"><img src="<?= base_url() ?>asset/banner_img/1493969.jpg"
                                                                               style="width: 170px"></a>
                                        </div>
                                        <div class="col-md-2  col-sm-3">
                                            <a class="thumbnail" href="#"><img src="<?= base_url() ?>asset/banner_img/1614668.jpg"
                                                                               style="width: 170px"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                </div>



        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading text-center text-uppercase"><strong>Latest News</strong></div>
                    <div class="panel-body" style="padding: 0">
                        <div class="vticker thumbnail">
                            <ul>
                                <?php foreach ($newstop5 as $news): ?>
                                <li>
                                    <div class="img_container">
                                        <img class="img-thumbnail" src="<?= base_url() ?>uploads/thumbnail/<?php echo $news->image ?>" style="width: 75px; height: 75px;">
                                    </div>
                                    <div class="text_container">
                                        <?php echo substr($news->title, 0 , 70) ?>..<br>
                                        <a href="<?php echo base_url() ?>news/<?php echo $news->seo_url ?>">Read more.</a>
                                    </div>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-md-3">
<!--            <div class="fb-page" data-href="https://www.facebook.com/justjawai" data-tabs="timeline" data-width="260" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/justjawai"><a href="https://www.facebook.com/justjawai">Just Jawai</a></blockquote></div></div>-->
        </div>

        </div>
</div>

<?php $this->load->view('footer'); ?>


<style>

    .vticker ul {
        padding: 0;
        margin-left: 0;
    }

    .vticker li {
        list-style: none;
        padding: 10px;
    }

    .et-run {
        background: red;
    }

    .vticker ul li .img_container, .vticker li .text_container {
        display: inline-block;
        vertical-align: top;
    }
    .vticker.thumbnail{border: 0}

    .vticker ul li .img_container {
        width: 35%
    }

    .vticker li .text_container {
        padding-left: 5px;
        width: 60%;
        font-size: 12px;
    }
</style>

