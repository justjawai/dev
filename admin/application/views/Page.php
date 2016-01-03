<?php $this->load->view('layout/Header'); ?>

<?php $this->load->view('layout/Navigation'); ?>
<!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Page <?php echo ($this->uri->segment(2)) ? $this->uri->segment(2) :'' ?>
            <small></small>

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
                    <div class="box box-primary">
                        <div class="box-header">
                        </div>

                        <form id="form_page_add" class="form_page_add">
                            <input type="hidden" name="id" value="" class="hidden-id">
                            <input type="hidden" name="page-name" value="<?php echo ($this->uri->segment(2)) ? $this->uri->segment(2) :'' ?>">
                            <div class="box-body">

                                <div class="form-group">
                                    <label for="input-name">Name</label>
                                    <input value="<?php echo ($this->uri->segment(2)) ? ucfirst($this->uri->segment(2)) :'' ?>" type="text" class="form-control" id="input-name" placeholder="Enter Title" name="name">
                                </div>

                                <div class="form-group">
                                    <label for="input-title">Title</label>
                                    <input type="text" class="form-control" id="input-title" placeholder="Enter Title" name="title">
                                </div>
                                <div class="form-group">
                                    <label for="input-content">Content</label>
                                    <textarea class="form-control" id="input-content" placeholder="" name="content"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="input-author">Author</label>
                                    <input type="text" class="form-control" id="input-author" placeholder="" name="author">
                                </div>

                                <div class="form-group">
                                    <label for="input-keyword">Keywords</label>
                                    <input type="text" class="form-control" id="input-keyword" placeholder="" name="keyword">
                                </div>

                                <div class="form-group">
                                    <label for="input-description">Seo Description</label>
                                    <input type="text" class="form-control" id="input-description" placeholder="" name="description">
                                </div>

                                <div class="form-group">
                                    <label for="input-seo-title">Seo Title</label>
                                    <input type="text" class="form-control" id="input-seo-title" placeholder="" name="seo-title">
                                </div>
                            </div>

                            <div class="box-footer">
                                <button type="submit" data-loading-text="Processing..." class="btn btn-primary btn-submit"> <i class="fa fa-floppy-o"></i> Submit</button>
                                <button type="reset" class="btn btn-primary"><i class="fa fa-ban"></i> Cancle</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php $this->load->view('layout/Footer-nav'); ?>
<?php $this->load->view('layout/Footer'); ?>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
    tinymce.init({ selector:'textarea' });

    var $form = $("#form_page_add"),
        $submit = $(".btn-submit");

    $(document).ready(function(){
        $form.submit(function(e){
            e.preventDefault();
            tinymce.triggerSave();
            $submit.button('loading');
            $.ajax({
                url: baseurl+"pageAddProcess",
                type:"POST",
                data:$form.serialize(),
                error:function(){
                    bootbox.alert({
                        title: "<lable class='fg-red'>Error !</lable>",
                        message: "Server error"
                    });
                }
            }).done(function(response){
                if(response.code == 0 || response.code == 2 ){
                    bootbox.alert({
                        title: "<lable class='fg-red'>Error !</lable>",
                        message: response.value
                    });
                }else if(response.code == 1){
                    $(".hidden-id").val(response.id);
                    bootbox.alert({
                        title: "<lable class='fg-green'>Success !</lable>",
                        message: response.value
                    });
                }
                else{
                    return false;
                }
            }).always(function(){
                $submit.button('reset');
            });
        });
    });

</script>

