<?php $this->load->view('layout/Header'); ?>

<?php $this->load->view('layout/Navigation'); ?>
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add New Customer
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
                <form id="form_customer_add" class="form_customer_add">
                    <div class="box box-primary">

                        <input type="hidden" value="<?php if (isset($customer[0])) echo $customer[0]->id ?>" name="id">

                        <div class="box-body">
                            <div class="form-group">
                                <label for="input-name">Name</label>
                                <input type="text" value="<?php if (isset($customer[0])) echo $customer[0]->name ?>"
                                       class="form-control" id="input-name" placeholder="Enter Name" name="name">
                            </div>

                            <div class="form-group">
                                <label for="input-sub-title">Profession</label>
                                <input type="text" value="<?php if (isset($customer[0])) echo $customer[0]->profession?>"
                                       class="form-control" id="input-profession" placeholder="Enter Profession"
                                       name="profession">
                            </div>

                            <div class="form-group">
                                <label for="input-content">Description</label>
                                <textarea class="form-control" id="input-description" name="description"><?php if (isset($customer[0])) echo $customer[0]->description?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="input-source">Address</label>
                                <textarea
                                       class="form-control" id="input-address" placeholder="Enter address"
                                       name="address"><?php if (isset($customer[0])) echo $customer[0]->address ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="input-sub-postedby">Telephone</label>
                                <input type="text" value="<?php if (isset($customer[0])) echo $customer[0]->telephone_business ?>"
                                       class="form-control" id="input-postedby" placeholder=""name="telephone_business">
                            </div>
                            
                            <div class="form-group">
                                <label for="input-sub-postedby">Mobile</label>
                                <input type="text" value="<?php if (isset($customer[0])) echo $customer[0]->mobile ?>"
                                       class="form-control" id="input-mobile" placeholder=""
                                       name="mobile">
                            </div>
                            <div class="form-group">
                                <label for="input-sub-postedby">Email</label>
                                <input type="text" value="<?php if (isset($customer[0])) echo $customer[0]->email ?>"
                                       class="form-control" id="input-email" placeholder=""
                                       name="email">
                            </div>
                            
                            <div class="form-group">
                                <label for="input-sub-postedby">Website</label>
                                <input type="text" value="<?php if (isset($customer[0])) echo $customer[0]->website ?>"
                                       class="form-control" id="input-website" placeholder=""
                                       name="website">
                            </div>


                            <div class="form-group">
                                <label for="input-url">Attach Image</label>
                               <span class="btn btn-success fileinput-button">
                            <i class="glyphicon glyphicon-plus"></i>
                            <span>Select files...</span>
                                <!-- The file input field used as target for the file upload widget -->
                                <input type="file" name="files[]" accept="image/*" id="fileupload">
                            </span>
                                <input type="hidden" id="image_val" name="photo" value="<?php if (isset($customer[0])) echo $customer[0]->photo ?>">
                                <img id="img-preview" class="img-thumbnail" style="width: 75px" src="<?php echo (isset($customer[0]))  ? str_replace('/admin','',base_url().'uploads/thumbnail/'.$customer[0]->photo) : 'https://placeholdit.imgix.net/~text?txtsize=33&txt=upload%20image&w=140&h=100' ?>">
                            </div>


                            <div class="form-group">
                                <div class="checkbox">
                                <label>
                                    <input name="status" type="checkbox" <?php if(isset($customer[0]) && $customer[0]->status == 1 ) echo 'checked' ?>> Status
                                </label>
                              </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="input-tag">Category</label>
                                <select name="category" id="select-category" class="form-control">
                                    <option></option>
                                    <?php foreach($category as $c): ?>
                                        <option value="<?php echo $c->id ?>"><?php echo $c->name ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <h3>Add SEO Information</h3>

                    <div class="box box-primary">
                        <div class="box-body">


                            <div class="form-group">
                                <label for="input-seo-title">Seo Title</label>
                                <input type="text" value="<?php if (isset($customer[0])) echo $customer[0]->seo_title ?>"
                                       class="form-control" id="input-seo-title" placeholder="Enter seo title"
                                       name="seo-title">
                            </div>
                            <div class="form-group">
                                <label for="input-seo-description">Seo Description</label>
                                <input type="text" value="<?php if (isset($customer[0])) echo $customer[0]->seo_description ?>"
                                       class="form-control" id="input-seo-description" placeholder="Enter seo description"
                                       name="seo-description">
                            </div>
                            <div class="form-group">
                                <label for="input-seo-keywords">Seo Keywords</label>
                                <input type="text" value="<?php if (isset($customer[0])) echo $customer[0]->seo_keyword ?>"
                                       class="form-control" id="input-seo-keywords" placeholder="Enter seo-keywords"
                                       name="seo-keywords">
                            </div>
                            <div class="form-group">
                                <label for="input-seo-url">Seo URL</label>
                                <input type="text" value="<?php if (isset($customer[0])) echo $customer[0]->seo_url ?>"
                                       class="form-control" id="input-seo-url" placeholder="Enter seo url"
                                       name="seo-url">
                            </div>

                        </div>
                    </div>


                    <div class="box-footer">
                        <button type="submit" data-loading-text="Processing..." class="btn btn-primary btn-submit"><i
                                class="fa fa-floppy-o"></i> <?php echo  (isset($customer[0]->id) ) ? 'Update' : 'Submit'?>
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

    var $form = $("#form_customer_add"),
        $img_preview = $("#img-preview"),
        $submit = $(".btn-submit");
    $(document).ready(function () {
        $("#select-category").val('<?php if (isset($customer[0])) echo $customer[0]->categories_id ?>')
        setCase();


        $form.submit(function (e) {
            e.preventDefault();
            $submit.button('loading');
            tinymce.triggerSave();
            $.ajax({
                url: baseurl+"customerAddProcess",
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
                    $form.trigger('reset');
                    $("#select-category").select2("val", "");
                    $img_preview.attr('src','https://placeholdit.imgix.net/~text?txtsize=33&txt=upload%20image&w=140&h=100');
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

        
        $('select').select2({
            placeholder: "Choose tag",
            allowClear: true
        });

    });

    var setCase = function(){
        $("#input-name").Setcase({caseValue: 'title'});
        //$("#input-profession").Setcase({caseValue: 'title'});
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