<?php $this->load->view('layout/Header'); ?>

<?php $this->load->view('layout/Navigation'); ?>
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>

            Add New Category

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">


        <div class="row">
            <div class="col-md-12">
                <form id="form_news_add" class="form_news_add">
                    <div class="box box-primary">

                        <input type="hidden" value="<?php if (isset($news[0])) echo $news[0]->id ?>" name="id">

                        <div class="box-body">
                            <div class="form-group">
                                <label for="input-title">Title</label>
                                <input type="text" value="<?php if (isset($news[0])) echo $news[0]->title ?>"
                                       class="form-control" id="input-title" placeholder="Enter Title" name="title">
                            </div>

                            <div class="form-group">
                                <label for="input-sub-title">Sub Title</label>
                                <input type="text" value="<?php if (isset($news[0])) echo $news[0]->sub_title?>"
                                       class="form-control" id="input-sub-title" placeholder="Enter Sub Title"
                                       name="sub-title">
                            </div>

                            <div class="form-group">
                                <label for="input-content">Content</label>
                                <textarea class="form-control" id="input-content" name="content"><?php if (isset($news[0])) echo $news[0]->content?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="input-author">Author</label>
                                <input type="text" value="<?php if (isset($news[0])) echo $news[0]->author ?>"
                                       class="form-control" id="input-author" placeholder="Enter Author Name"
                                       name="author">
                            </div>
                            <div class="form-group">
                                <label for="input-source">Source</label>
                                <input type="text" value="<?php if (isset($news[0])) echo $news[0]->source ?>"
                                       class="form-control" id="input-source" placeholder="Enter News Source"
                                       name="source">
                            </div>
                            <div class="form-group">
                                <label for="input-sub-postedby">Posted By</label>
                                <input type="text" value="<?php if (isset($news[0])) echo $news[0]->posted_by ?>"
                                       class="form-control" id="input-postedby" placeholder="News Posted By Name"
                                       name="posted_by">
                            </div>

                            <div class="form-group">
                                <label for="input-url">Attach Image</label>
                               <span class="btn btn-success fileinput-button">
                            <i class="glyphicon glyphicon-plus"></i>
                            <span>Select files...</span>
                                <!-- The file input field used as target for the file upload widget -->
                                <input type="file" name="files[]" accept="image/*" id="fileupload">
                            </span>
                                <input type="hidden" id="image_val" name="file_path" value="<?php if (isset($news[0])) echo $news[0]->image ?>">
                                <img id="img-preview" class="img-thumbnail" style="width: 75px" src="<?php echo (isset($news[0]))  ? str_replace('/admin','',base_url().'uploads/thumbnail/'.$news[0]->image) : 'https://placeholdit.imgix.net/~text?txtsize=33&txt=upload%20image&w=140&h=100' ?>">
                            </div>

                            <div class="form-group">
                                <label for="input-tag">News Tag</label>
                                <select name="news-tag" id="select-news-tag" class="form-control">
                                    <option></option>
                                    <?php foreach($news_tag as $nt): ?>
                                        <option value="<?php echo $nt->id ?>"><?php echo $nt->name ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input  onclick="javascript: $('#news_status').val(($(this).prop( 'checked')) ? 1 : 0)" type="checkbox" <?php if(isset($news[0]) && $news[0]->status == 1 ) echo 'checked' ?>> Status
                                        <input type="hidden" id="news_status" name="status" value="<?php echo (isset($news[0]) && $news[0]->status == 1 ) ? 1 : 0 ?>">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3>Add SEO Information</h3>

                    <div class="box box-primary">
                        <div class="box-body">


                            <div class="form-group">
                                <label for="input-seo-title">Seo Title</label>
                                <input type="text" value="<?php if (isset($news[0])) echo $news[0]->seo_title ?>"
                                       class="form-control" id="input-seo-title" placeholder="Enter seo title"
                                       name="seo-title">
                            </div>
                            <div class="form-group">
                                <label for="input-seo-description">Seo Description</label>
                                <input type="text" value="<?php if (isset($news[0])) echo $news[0]->seo_description ?>"
                                       class="form-control" id="input-seo-description" placeholder="Enter seo description"
                                       name="seo-description">
                            </div>
                            <div class="form-group">
                                <label for="input-seo-keywords">Seo Keywords</label>
                                <input type="text" value="<?php if (isset($news[0])) echo $news[0]->seo_keyword ?>"
                                       class="form-control" id="input-seo-keywords" placeholder="Enter seo-keywords"
                                       name="seo-keywords">
                            </div>
                            <div class="form-group">
                                <label for="input-seo-url">Seo URL</label>
                                <input type="text" value="<?php if (isset($news[0])) echo $news[0]->seo_url ?>"
                                       class="form-control" id="input-seo-url" placeholder="Enter seo url"
                                       name="seo-url">
                            </div>

                        </div>
                    </div>


                    <div class="box-footer">
                        <button type="submit" data-loading-text="Processing..." class="btn btn-primary btn-submit"><i
                                class="fa fa-floppy-o"></i> <?php echo  (isset($news[0]->id) ) ? 'Update' : 'Submit'?>
                        </button>

                    </div>
                </form>

            </div>
        </div>
</div>

</section><!-- /.content -->
</div><!-- /.content-wrapper -->
<?php $this->load->view('layout/Footer-nav'); ?>
<?php $this->load->view('layout/Footer'); ?>

<script>

    var $form = $("#form_news_add"),
        $img_preview = $("#img-preview"),
        $submit = $(".btn-submit");
    $(document).ready(function () {
        $("#select-news-tag").val('<?php if (isset($news[0])) echo $news[0]->news_type ?>')
        setCase();


        $form.submit(function (e) {
            e.preventDefault();
            $submit.button('loading');
            tinymce.triggerSave();
            $.ajax({
                url: "newsAddProcess",
                type: "POST",
                data: $form.serialize(),
                error: function () {
                    bootbox.alert({
                        title: '<lable class="fg-red">Error</lable>',
                        message: 'Server error ! May be Category name already exists'
                    });
                }
            }).done(function (response) {
                if (response.code == 0) {
                    bootbox.alert({
                        title: '<lable class="fg-red">Error</lable>',
                        message: response.value
                    });
                } else if (response.code == 1) {
                    <?php if(! isset($news[0]->id)): ?>
                        $form.trigger('reset');
                    <?php endif ?>
                    bootbox.alert({
                        title: '<lable class="fg-green">Success</lable>',
                        message: response.value
                    });

                } else if (response.code == 2) {
                    bootbox.alert({
                        title: '<lable class="fg-red">Error</lable>',
                        message: 'Database Error'
                    });

                } else {
                    bootbox.alert({
                        title: '<lable class="fg-red">Error</lable>',
                        message: 'Unknown Error'
                    });

                }

            }).always(function () {
                $submit.button('reset');
            });

        });

        $("#input-photo").on('blur', function () {
            $("#photo-preview").attr('class', $(this).val());
        });

        tinymce.init({
            selector: 'textarea',
            height: 400,
            theme: 'modern',
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools'
            ],
            toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            toolbar2: 'print preview media | forecolor backcolor emoticons',
            image_advtab: true,
            templates: [
                {title: 'Test template 1', content: 'Test 1'},
                {title: 'Test template 2', content: 'Test 2'}
            ],
            content_css: [
                '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
                '//www.tinymce.com/css/codepen.min.css'
            ]
        });
        $('select').select2({
            placeholder: "Choose tag",
            allowClear: true
        });

    });

    var setCase = function(){
        $("#input-title").Setcase({caseValue: 'title'});
        $("#input-sub-title").Setcase({caseValue: 'title'});
        $("#input-author").Setcase({caseValue: 'title'});
        $("#input-source").Setcase({caseValue: 'title'});
        $("#input-postedby").Setcase({caseValue: 'title'});
        $("#input-seo-url").on('keyup', function(){
            var str = $(this).val();
            str = str.replace(/\s+/g, '-').toLowerCase();
            $(this).val(str);
        });
        $("#input-photo").on('blur', function(){
            $("#img-preview").attr('src',$(this).val());
        });


    }


</script>

<script>
    $(function () {
        'use strict';
        // Change this to the location of your server-side upload handler:
        var url = '<?php echo base_url() ?>upload';
        $('#fileupload').fileupload({
            url: url,
            dataType: 'json',
            done: function (e, data) {
                $.each(data.result.files, function (index, file) {
                    var $src = (baseurl+'../uploads/thumbnail/'+file.name) ? baseurl+'../uploads/thumbnail/'+file.name : 'https://placeholdit.imgix.net/~text?txtsize=33&txt=upload%20image&w=140&h=100';
                    $img_preview.attr('src',$src);
                    $("#image_val").val((file.name) ? file.name : '');

                });
            },
            progressall: function (e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $('#progress .progress-bar').css(
                    'width',
                    progress + '%'
                );
            }
        }).prop('disabled', !$.support.fileInput)
            .parent().addClass($.support.fileInput ? undefined : 'disabled');
    });
</script>

