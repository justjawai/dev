


<div class="container">
    <a href="<?= base_url() ?>" class="fg-red"><i class="fa fa-home"></i></a> <i class="fa fa-angle-right"></i> help
    <h3>All Categories</h3>
    <hr style="margin-top: 5px;">

    <div class="row">
        <?php
        foreach ($all_cat as $key => $pc): ?>
            <a href="<?= base_url() ?>category/<?= $pc['name'] ?>">
                <div class="col-md-3 col-sm-3 col-xs-6 text-center">
                    <div class="popular-box bg-steel fg-white">
                        <div class="icon <?php echo  $pc['photo']?> fa-5x" style="height: 80px;"></div>
                        <div><strong><?= $pc['count'] ?></strong></div>
                        <div class="view"><?= $pc['name'] ?></div>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
    
</div>
<?php $this->load->view('footer'); ?>

