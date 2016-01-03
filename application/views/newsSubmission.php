<div class="container">
    <a href="<?= base_url() ?>" class="fg-red"><i class="fa fa-home"></i></a> <i class="fa fa-angle-right"></i> help
    <h3>News submission form goes here</h3>
    <hr style="margin-top: 5px;">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span> Any questions? Feel free to contact us.</h4>
                </div>
                <form id="form_news_submit" accept-charset="utf-8" style="padding: 5px">

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

                        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                            <label>News content</label>
                            <textarea id="transliterateTextarea" class="form-control" placeholder="Message..." rows="6" name="comment"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="progress" id="progress">
                                <div class="progress-bar progress-bar-success"></div>
                            </div>
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
                        <button type="submit" class="btn btn-success" value="Send"><i class="fa fa-floppy-o"></i> Send</button>
                        <!--<span class="glyphicon glyphicon-ok"></span>-->
                        <button type="reset" class="btn btn-danger" value="Clear" ><i class="fa fa-ban"></i> Cancle</button>

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
<script src="<?php echo base_url() ?>asset/tinymce/js/tinymce/tinymce.min.js"></script>
<!--<script type="text/javascript" src="https://www.google.com/jsapi">-->
<script>
    tinymce.init({ selector:'transliterateTextarea'
    });
</script>

<!--<script type="text/javascript">-->
<!---->
<!--    // Load the Google Transliterate API-->
<!--    google.load("elements", "1", {-->
<!--        packages: "transliteration"-->
<!--    });-->
<!---->
<!--    function onLoad() {-->
<!--        var options = {-->
<!--            sourceLanguage:-->
<!--                google.elements.transliteration.LanguageCode.ENGLISH,-->
<!--            destinationLanguage:-->
<!--                [google.elements.transliteration.LanguageCode.HINDI],-->
<!--            transliterationEnabled: true-->
<!--        };-->
<!---->
<!--        // Create an instance on TransliterationControl with the required-->
<!--        // options.-->
<!--        var control =-->
<!--            new google.elements.transliteration.TransliterationControl(options);-->
<!---->
<!--        // Enable transliteration in the textbox with id-->
<!--        // 'transliterateTextarea'.-->
<!--        control.makeTransliteratable(['transliterateTextarea']);-->
<!--    }-->
<!--    google.setOnLoadCallback(onLoad);-->
<!--</script>-->
