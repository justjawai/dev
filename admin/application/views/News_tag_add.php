<?php $this->load->view('layout/Header'); ?>

<?php $this->load->view('layout/Navigation'); ?>
<!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add News Tag
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
                <div class="col-md-10">
                    <div class="box box-primary">
                        <form id="form_category_add" class="form_page_add">
                            <input type="hidden" value="<?php if(isset($tag[0])) echo $tag[0]->id ?>"name="id">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="input-name">Name</label>
                                    <input type="text" value="<?php if(isset($tag[0])) echo $tag[0]->name ?>" class="form-control" id="input-name" placeholder="Enter Title" name="name">
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" data-loading-text="Processing..." class="btn btn-primary btn-submit"> <i class="fa fa-floppy-o"></i> Submit</button>
                            </div>
                        </form>

                    </div>

                </div>
                <div class="col-md-2">
                    <div class="box box-primary">
                        <div class="box-body">
                            Filter box
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php $this->load->view('layout/Footer-nav'); ?>
<?php $this->load->view('layout/Footer'); ?>

<script>

    var $form = $("#form_category_add"),
        $submit = $(".btn-submit");
    $(document).ready(function () {
        $("#input-name").Setcase({caseValue : 'title'});

        $form.submit(function(e){
            e.preventDefault();
            $submit.button('loading');
            $.ajax({
                url : baseurl+"newsTagAddProcess",
                type : "POST",
                data: $form.serialize(),
                error: function() {
                    bootbox.alert({
                        title:'<lable class="fg-red">Error</lable>',
                        message:'Server error ! May be Category name already exists'
                    });
                }
            }).done(function(response){
                if(response.code == 0){
                    bootbox.alert({
                        title:'<lable class="fg-red">Error</lable>',
                        message:response.value
                    });
                }else if(response.code == 1){
                    $form.trigger('reset');
                    bootbox.alert({
                        title:'<lable class="fg-green">Success</lable>',
                        message:response.value
                    });

                }else if(response.code == 2){
                    bootbox.alert({
                        title:'<lable class="fg-red">Error</lable>',
                        message:'Database Error'
                    });

                }else{
                    bootbox.alert({
                        title:'<lable class="fg-red">Error</lable>',
                        message:'Unknown Error'
                    });

                }

    }).always(function(){
        $submit.button('reset');
    });

        });

        $("#input-photo").on('blur', function(){
            $("#photo-preview").attr('class',$(this).val());
        });

    });








</script>