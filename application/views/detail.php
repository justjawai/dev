<div class="container">
    <hr>
<div class="row">
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-body">
    	 <div class="profile">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-4" style=" max-height: 350px;overflow: hidden">
                        <?php $path = (file_exists(FCPATH.'uploads/'.$details->photo)) ? base_url().'uploads/'.$details->photo :''?>
                        <figure>
                            <img style="width:100%;" src="<?php echo $path?>" alt="" class="img-thumbnail img-responsive">
                        </figure>
                    </div>
                    <div class="col-md-8">
                        <h2><?= $details->name?></h2>
                        <p><strong>Profession: </strong><?= $details->profession?></p>
                        <p><strong>About: </strong><?= $details->description?></p>
                        <p><strong>Contact: </strong><?= $details->telephone_business.'  /  '.$details->mobile?></p>
                        <p><strong>Email: </strong><?= $details->email?></p>
                        <p><strong>Website: </strong><?= $details->website?></p>
                        <p><strong>Address: </strong><?= $details->address?></p>
                        <p><strong>Joined us: </strong><?php echo date('F j, Y', strtotime($details->created_at))?></p>
                        <p><strong>Category: </strong>

                            <?php foreach($categories as $c){
                                $ci[($c->id)] = $c->name;
                            }
                            ?>
                            <a href="<?php echo base_url() ?>category/<?php echo $ci[$details->categories_id]?>"><span class="tags"><?php echo $ci[$details->categories_id] ?></span></a>
                        </p>

                        <span class='st_facebook_hcount' displayText='Facebook'></span>
                        <span class='st_twitter_hcount' displayText='Tweet'></span>
                        <span class='st_googleplus_hcount' displayText='Google +'></span>
                        <span class='st_linkedin_hcount' displayText='LinkedIn'></span>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 divider text-center">
                <div class="col-xs-12 col-sm-2">
                    <h3><strong> 205 </strong></h3>
                    <button href="#"class="btn btn-success"><i class="fa fa-thumbs-o-up"></i> Like</button>
                </div>
                <div class="col-xs-12 col-sm-2">
                    <h3><strong>245</strong></h3>
                    <button class="btn btn-default"><i class="fa fa-thumbs-o-down"></i> Dislike</button>
                </div>

            </div>
    	 </div>
                </div>
            </div>
		</div>

    <div class="col-md-3">
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
<!--<script>-->
<!--var xmlhttp;-->
<!--if (window.XMLHttpRequest)-->
<!--  {// code for IE7+, Firefox, Chrome, Opera, Safari-->
<!--  xmlhttp=new XMLHttpRequest();-->
<!--  }-->
<!--else-->
<!--  {// code for IE6, IE5-->
<!--  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");-->
<!--  }-->
<!--xmlhttp.open("GET",'https://graph.facebook.com/?id=http://webrocom.net/',false);-->
<!--xmlhttp.send();-->
<!--console.log(xmlhttp.responseText);-->
<!--</script>-->