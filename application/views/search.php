
<div class="container">
            <div class="col-md-9" style="margin-top: 15px;">
                <ol class="breadcrumb">
                    <li class="breadcrumb-title">Search Result for :</li>
                    <li class="breadcum-category"><?php echo $_GET['c'] ? $_GET['c'] : 'Category'  ?></li>
                    <li class="breadcum-search"><?php echo $_GET['s'] ?></li>
                    <li class="pull-right fg-green"><?php echo count($search_result) ?> Record found</li>
                  </ol>


                <div class="row">
                    <?php foreach($search_result as $result): ?>

                        <?php
                        //var_dump(file_exists(base_url().'uploads/thumbnail/'.$result['customer_photo']));?>

                    <div class="col-md-12">
                        <blockquote>
                            <div class="row search_result">
                                <div style="padding: 0;" class="col-md-1 text-center">
                                    <img style="width: 75px; height: 75px;" src="<?php echo base_url().'uploads/thumbnail/'.$result['customer_photo']?>" class="img-thumbnail">
                                </div>
                                <div style="padding: 0 0 0 10px; font-size: 13px" class="col-md-11">
                                    <div class="text link"><a href="http://localhost/site/details/<?php echo $result['seo_url'] ?>"><?php echo $result['customer_name'] ?></a></div>
                                    <div class="text"> <i class="fa fa-shopping-bag"></i> Profession :<?php echo $result['profession']?></div>
                                    <div class="text"><i class="fa fa-phone"></i> Contact  : <?php echo $result['mobile']?></div>
                                    <div class="text"> <i class="fa fa-map-marker"></i> Address:  <?php echo $result['address']?></div>
                                </div>
                            </div>
                        </blockquote>
                        <hr/>

                    </div>

                    <?php endforeach; ?>
                </div>


            </div>
            
            <div class="col-md-3">
                
            </div>
        </div>
    </div>
<?php $this->load->view('footer'); ?>
