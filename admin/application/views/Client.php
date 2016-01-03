<?php $this->load->view('admin/Header'); ?>

<?php $this->load->view('admin/Navigation'); ?>
<!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Users
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
                        <div class="box-body">
                            Filter box
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <a href="<?php echo base_url() ?>user_add" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add New</a>
                        </div>

<!--                        jqx grid view-->

                        <div id="jqxgrid"></div>


                        <div class="box-footer">
                            <button class="btn btn-primary" type="submit">Submit</button>
                            <button class="btn btn-primary check" type="button">Check</button>
                        </div>

                    </div>
                </div>
            </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php $this->load->view('admin/Footer-nav'); ?>
<?php $this->load->view('admin/Footer'); ?>

<script>
    var gridBox = $("#jqxgrid");

    $(document).ready(function () {
        loadUserGrid();
        getPages();

        $(".check").click(function(e){
            e.preventDefault();
            loadUserGrid();
        });

    });

    var loadUserGrid = function(){
        var source =
        {
            datatype: "json",
            datafields: [
                { name: 'Name', type: 'string'},
                { name: 'Email', type: 'string' },
                { name: 'Mobile', type: 'string' },
                { name: 'IsActive', type: 'string' },
                { name: 'IsVerified', type: 'string' },
                { name: 'CreatedAt', type: 'string' },
                { name: 'UserId', type: 'string' }
            ],
            cache: false,
            url: 'loadUserGrid',
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
                    '<a title="Details" class="btn btn-default btn-xs btn-flat fg-gray" href=user_view/'+ id +'><i class="fa fa-eye"></i> View' +
                    '<a title="Details" class="btn btn-default btn-xs btn-flat fg-gray" href=user_edit/'+ id +'><i class="fa fa-pencil-square-o"></i> Edit </i></a>' +
                    '<a title="Details" class="btn btn-default btn-xs btn-flat fg-gray" href='+ id +'><i class="fa fa-trash-o"> Remove</i></a>' +
                    '</div>';
        };

        // initialize jqxGrid
        $("#jqxgrid").jqxGrid(
            {   width:1082,
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
                    { text: 'Name', datafield: 'Name', width: 180 },
                    { text: 'Email', datafield: 'Email', width: 220 },
                    { text: 'Mobile', datafield: 'Mobile', width: 110 },
                    { text: 'Is Active', datafield: 'IsActive', width: 80},
                    { text: 'Is Verified', datafield: 'IsVerified', width: 80},
                    { text: 'Created At', datafield: 'CreatedAt', width: 210},
                    { text: 'Action', datafield: 'UserId', width: 200,cellsrenderer: links}
                ]
            });
    }

    $(window).load(function(){
        gridBox.css({"margin":"0 auto"})
    });





</script>