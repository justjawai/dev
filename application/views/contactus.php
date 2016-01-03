


<div class="container">
    <a href="<?= base_url() ?>" class="fg-red"><i class="fa fa-home"></i></a> <i class="fa fa-angle-right"></i> help
    <h3>Cityportal Help Center </h3>
    <hr style="margin-top: 5px;">

    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span> Any questions? Feel free to contact us.</h4>
                </div>
                <form id="form_contact_us" accept-charset="utf-8" style="padding: 5px">

                    <div class="row">
                        <div class="col-sm-6" style="padding-bottom: 10px;">
                            <input class="form-control" name="firstname" placeholder="Firstname" type="text" required autofocus />
                        </div>
                        <div class="col-sm-6" style="padding-bottom: 10px;">
                            <input class="form-control" name="lastname" placeholder="Lastname" type="text"/>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                            <input class="form-control" name="email" placeholder="E-mail" type="text" required />
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                            <input class="form-control" name="subject" placeholder="Subject" type="text" required />
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12" style="margin-bottom: 10px">
                            <textarea style="resize:vertical;" class="form-control" maxlength="400" placeholder="Message..." rows="6" name="comment" required></textarea>
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

        <div class="col-md-3">
            <div class="fb-page" data-href="https://www.facebook.com/justjawai" data-tabs="timeline" data-width="260" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/justjawai"><a href="https://www.facebook.com/justjawai">Just Jawai</a></blockquote></div></div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title" id="contactLabel"><i class="fa fa-question-circle"></i> FAQ'S (सामान्य पूछे जाने वाले प्रशन )</h4>
                </div>
                <div class="panel-body" style="padding: 4px 2px">

                    <div class="col-xs-3" style="padding: 0" ><!-- required for floating -->
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tabs-left" id="faqtab" role="tablist">
                            <li class="active"><a href="#home" data-toggle="tab">About Website</a></li>
                            <li><a href="#profile" data-toggle="tab">How to use</a></li>
                            <li><a href="#messages" data-toggle="tab">How to submit information</a></li>
                            <li><a href="#settings" data-toggle="tab">How to contact</a></li>
                            <li><a href="#settings" data-toggle="tab">How to search content</a></li>
                            <li><a href="#settings" data-toggle="tab">Contact for advertisement</a></li>
                            <li><a href="#settings" data-toggle="tab">Help us</a></li>
                        </ul>
                    </div>

                    <div class="col-xs-9">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="home">Home Tab.</div>
                            <div class="tab-pane" id="profile">Profile Tab.</div>
                            <div class="tab-pane" id="messages">Messages Tab.</div>
                            <div class="tab-pane" id="settings">Settings Tab.</div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<?php $this->load->view('footer'); ?>
<script src="<?php echo base_url() ?>asset/js/captcha.js" type="text/javascript"></script>


