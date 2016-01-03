
<div class="container" ng-app="categoryApp">
    <div class="col-md-9">
        <br>
        <ol class="breadcrumb">
            <li class="breadcrumb-title">Category :</li>
            <li class="breadcum-category"><?php echo str_replace('%20', ' ',$this->uri->segment(2));  ?></li>
            <li class="pull-right fg-green"><?php echo count($categories_list) ?> Record found</li>
        </ol>
        <div ng-controller="categoryListController">
            Filtered {{ filtered.length}} of {{ totalItems}} total customers
            <input type="text"  ng-model="search" ng-change="filter()" class="form-control" placeholder="Type here for search desier information">
            <br>
                <?php //foreach($categories_list as $people): ?>
            <div ng-repeat="data in filtered = (list| filter:search | orderBy : predicate :reverse) | startFrom:(currentPage - 1) * entryLimit | limitTo:entryLimit">
                    <blockquote>
                        <div class="row">

                                <div style="padding: 0;" class="col-md-1">
                                    <img style="width: 55px; height: 55px;" src=<?php echo base_url()?>uploads/thumbnail/{{data.photo}} class="img-thumbnail">
                                </div>
                                <div style="padding: 0; font-size: 13px" class="col-md-10">
                                    <div><a href=http://localhost/site/details/{{data.seo_url}}>{{data.name}}</a></div>
                                    <div> <i class="fa fa-shopping-bag"></i> Profession :{{data.profession}}</div>
                                    <div><i class="fa fa-phone"></i> Contact  : {{data.mobile}}</div>
                                    <div> <i class="fa fa-map-marker"></i> Address:  {{data.address}}</div>
                                </div>

                            </div>
                        </blockquote>
                </div>

            <div  ng-show="filteredItems == 0">
                <div class="col-md-12">
                    <h4 class="fg-red"> <i class="fa fa-frown-o"></i> No customers found</h4>
                </div>
            </div>
            <div ng-show="filteredItems > 0">
                <ul pagination="" page="currentPage" on-select-page="setPage(page)" boundary-links="true" total-items="filteredItems" items-per-page="entryLimit" class="pagination-small" previous-text="&laquo;" next-text="&raquo;"></ul>
            </div>
            <?php //endforeach ?>
            </div>


            
        </div>
    </div>
    <div class="col-md-3">
        
    </div>
    
</div>



<?php $this->load->view('footer'); ?>
<script src="<?= base_url()?>asset/ng/app.js"></script>
<script src="<?= base_url()?>asset/ng/ui-bootstrap-tpls.min.js"></script>