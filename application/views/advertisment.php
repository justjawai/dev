


<div class="container">
    <a href="<?= base_url() ?>" class="fg-red"><i class="fa fa-home"></i></a> <i class="fa fa-angle-right"></i> help
    <h3>आप हमें अपने व्यवसाय के बारे में बताये | </h3>
    <hr style="margin-top: 5px;">

    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span> Any questions? Feel free to contact us.</h4>
                </div>
                <form id="form_advertisement" action="#" method="post" accept-charset="utf-8" style="padding: 5px">

                    <div class="row">
                        <div class="col-sm-6" style="padding-bottom: 10px;">
                            <input class="form-control" name="firstname" placeholder="Firstname" type="text" required autofocus />
                        </div>
                        <div class="col-sm-6" style="padding-bottom: 10px;">
                            <input class="form-control" name="lastname" placeholder="Lastname" type="text" required />
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                            <input class="form-control" name="email" placeholder="E-mail" type="text" required />
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                            <input class="form-control" name="subject" placeholder="type of business (if any)" type="text" required />
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12"style="padding-bottom: 10px;">
                            <textarea style="resize:vertical;" class="form-control" placeholder="Advertise detais and content" rows="6" name="comment" required></textarea>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12"style="padding-bottom: 10px;">
                            <label>Select Size</label>
                            <table class="table table-bordered">
                                <tr><td align="center" valign="middle" style="vertical-align: middle"><img data-size="350*150" class="ad_size" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97150&w=350&h=150"> </td><td align="center" valign="middle" style="vertical-align: middle"><img  data-size="140*100" class="ad_size" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=140%C3%97100&w=140&h=100"> </td></tr>
                                <tr><td align="center" valign="middle" style="vertical-align: middle"><img data-size="200*100" class="ad_size" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=200%C3%97100&w=200&h=100"> </td><td align="center" valign="middle" style="vertical-align: middle"><img  data-size="350*65" class="ad_size" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%9765&w=350&h=65"></td></tr>
                            </table>
                            <input type="hidden" class="add_size_value" name="size" value="">
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12"style="padding-bottom: 10px;">
                            <div class="form-group">
                                <label for="input-url">Attach Image</label>
                                   <span class="btn btn-success fileinput-button">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Select files...</span>
                                    <!-- The file input field used as target for the file upload widget -->
                                    <input type="file" name="files[]" accept="image/*" id="fileupload">
                                </span>
                                <input type="hidden" id="image_val" name="file_path" value="">
                                <img id="img-preview" class="img-thumbnail" style="width: 75px" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=upload%20image&w=140&h=100">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12" style="margin-bottom: 10px">
                            <label>Captcha</label><br>
                            <div class="captcha"></div>
                        </div>
                    </div>

                    <div class="panel-footer" style="">
                        <input type="submit" class="btn btn-success" value="Send"/>
                        <!--<span class="glyphicon glyphicon-ok"></span>-->
                        <input type="reset" class="btn btn-danger" value="Clear" />

                    </div>
                </form>
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
<script src="<?php echo base_url() ?>asset/js/captcha.js" type="text/javascript"></script>
