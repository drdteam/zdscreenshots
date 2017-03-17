<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<?php include_once('resources/UberGallery.php'); ?>

<head>
    <title>XHTML Transitional Template</title>
    
    <link rel="shortcut icon" href="images/favicon.png" />

    <link rel="stylesheet" type="text/css" href="css/rebase-min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="resources/UberGallery.css" />
    <link rel="stylesheet" type="text/css" href="resources/colorbox/1/colorbox.css" />
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js"></script>
    <script type="text/javascript" src="resources/colorbox/jquery.colorbox.js"></script>
    
    <!--script type="text/javascript">
    $(document).ready(function(){
        $("a[rel='cats']").colorbox({maxWidth: "90%", maxHeight: "90%", opacity: ".5"});
        $("a[rel='dogs']").colorbox({maxWidth: "90%", maxHeight: "90%", opacity: ".5"});
        $("a[rel='misc']").colorbox({maxWidth: "90%", maxHeight: "90%", opacity: ".5"});
    });
    </script-->
    
    <?php if(file_exists('googleAnalytics.inc')) { include('googleAnalytics.inc'); } ?>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>

<body>

    <div class="pageWrap">
        
        <h1 id="pageTitle">ZDoom Screenshots</h1>
        
        <?php $files = scandir('galleries'); ?>
        <?php foreach ($files as $file): ?>
            
            <?php $dir = 'galleries/' . $file; ?>
            
            <?php if (is_dir($dir) && $file != '.' && $file != '..'): ?>
                <h2><?php echo ucwords($file); ?></h2>
                <?php $gallery = UberGallery::init()->createGallery($dir, $file); ?>
            <?php endif; ?>
            
        <?php endforeach; ?>
                
    </div>

</body>

<!-- Page template by, Chris Kankiewicz <http://www.chriskankiewicz.com> -->

</html>
