<div class="container">
        <div class="row">
            <div class="col-md-3 hidden-sm">
                <div class="logo">
                    <a href="<?= base_url()?>"><img src="<?= base_url() ?>asset/dist/img/justjawai.png"/></a>
                </div>

                
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="row clearfix">
                    <form id="frm_search" action="<?php echo base_url() ?>search" method="GET">
                    <div class="col-md-4 col-sm-4 col-xs-12 drpdwn-category">
                        <select name="c" class="form-control" id="drpdwn-category" >
                            <option></option>
                            <?php foreach ($categories as $category): ?>
                            <option value="<?= $category->name ?>"><?= $category->name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12 input-search">
                        <div class="input-group">
                            <input type="text" class="form-control" id="s" name="s" placeholder="Search term...">
                            <span class="input-group-btn">
                                <button class="btn bg-blue" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                            </span>
                        </div>    
                    </div>
                    </form>
                </div>

            </div>
            <div class="col-md-3 hidden-sm hidden-xs text-right">
                <a href="#" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="25000">Population</a>
                <a href="#" class="btn btn-default"  data-toggle="tooltip" data-placement="bottom" title="25!">Weather</a>
            </div>
        </div>
    </div>



    <nav class="navbar navbar-default navbar-custom">
        <div class="container">

            <ul class="nav navbar-nav hidden-xs">
                <li class="dropdown">
                    <a href="#" onclick="javascript: return void(0)">Categories<span class="caret"></span></a>
                </li>
            </ul>
            <ul class="nav navbar-nav pull-right">
                <li><a href="<?php echo base_url() ?>page/history">History</a></li>
                <li><a href="<?php echo base_url() ?>page/politics">Politics</a></li>
                <li><a href="<?php echo base_url() ?>tourism">Tourism</a></li>
                <li><a href="<?php echo base_url() ?>movies">Movies</a></li>
            </ul>
        </div><!-- /.container-fluid -->
    </nav>