<?php $this->load->view('layout/Header'); ?>

<?php $this->load->view('layout/Navigation'); ?>
<!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>News Tag</h1>
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
                        <div class="box-header">
                            <a href="<?php echo base_url() ?>news_tag/add" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add New</a>
                        </div>

<!--                        jqx grid view-->

                        <div id="jqxgrid"></div>


                        <div class="box-footer">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>

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
    var gridBox = $("#jqxgrid");


    $(document).ready(function () {
        loadCategory();
        $(document).on('click','.btn-delete', function(){
            if(confirm('Are you sure')){
                deleteRecord($(this).data('id'));
            }

        });

    });





    var deleteRecord = function($id){
        $.post('deleteCategory', {'id':$id}, function(response){
             if(response.code == 1){
                loadCategory();
            }
            else{
                bootbox.alert({
                    title:'<lable class="fg-red">Error</lable>',
                    message: 'Database error'
                });
            }

        });
    }

    var loadCategory = function(){
        var source =
        {
            datatype: "json",
            datafields: [
                { name: 'Name', type: 'string'},
                { name: 'Id', type: 'string' }

            ],
            cache: false,
            url: 'loadNewsTag',
            filter: function()
            {
                // update the grid and send a request to the server.
                $("#jqxgrid").jqxGrid('updatebounddata', 'filter');
            },
            sort: function()
            {
                // update the grid and send a request to the server.
                $("#jqxgrid").jqxGrid('updatebounddata', 'sort');
            },
            root: 'Rows',
            beforeprocessing: function(data)
            {
                if (data != null)
                {
                    source.totalrecords = data[0].TotalRows;
                }
            }
        };
        var dataadapter = new $.jqx.dataAdapter(source, {
                loadError: function(xhr, status, error)
                {
                    alert(error);
                }
            }
        );
        var links = function (row, datafield, value) {
            var id = value;
            return '<div class="render-links">' +
                '<a title="Details" class="btn btn-default btn-xs btn-flat fg-gray" href="#"><i class="fa fa-eye"></i> View' +
                '<a title="Details" class="btn btn-default btn-xs btn-flat fg-gray" href=news_tag/edit/'+ id +'><i class="fa fa-pencil-square-o"></i> Edit </i></a>' +
                '<a title="Details" class="btn btn-default btn-xs btn-flat fg-gray btn-delete" data-id="'+ id +'" href="#"><i class="fa fa-trash-o"> Remove</i></a>' +
                '</div>';
        };

        var photo = function (row, datafield, value) {
            var photo = value;
            return '<div style="text-align: center"><i class="'+photo+'"></i></div>';
        };

        // initialize jqxGrid
        $("#jqxgrid").jqxGrid(
            {   width:900,
                source: dataadapter,
                sortable: true,
                autoheight: true,
                pageable: true,
                virtualmode: true,
                rendergridrows: function(obj)
                {
                    return obj.data;
                },
                columns: [
                    { text: 'Name', datafield: 'Name', width: 225 },
                    { text: 'Action', datafield: 'Id', width: 275,cellsrenderer: links}
                ]
            });
    }

    $(window).load(function(){
        gridBox.css({"margin":"0 auto"})
    });





</script>