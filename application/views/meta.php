
<?php
if(isset($metas)):

    if(gettype($metas) == 'array'){
        $metas = (object) $metas;
    }
?>

<title><?= (isset($metas->title)) ? $metas->title :'city' ?></title>
<meta name="language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="<?= $metas->description ?>" />
<meta name="keywords" content="<?= $metas->keyword ?>" />
<meta name="distribution" content="Global" />
<meta name="rating" content="General" />
<meta name="google-site-verification" content="iHDTV_fkU7lMOOmooEH88r-US72aUPfWYLwqgssuR8VE" />
<meta name="robots" content="index, follow" />
<meta name="revisit-after" content="21 days" />
<meta name="creator" content="<?= $metas->author ?>" />
<meta name="publisher" content="<?= $metas->publisher ?>" />

<?php endif; ?>
