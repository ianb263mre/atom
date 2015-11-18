<?php include 'config/setup.php';?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title><?php echo $page['title'].' | '.$site_title;?></title>
        
        <?php include 'config/css.php';?>
        
        <?php include 'config/js.php';?>
      
    </head>
    
    <body>
        <div id="wrap">
            <?php include (D_TEMPLATE.'/navigation.php');?>

            <div class="container">
                <h1><?php echo $page['header'];?></h1>
                <?php echo $page['body_formatted'];?>
                
            </div> <!-- END of content -->
        </div> <!-- END of wrap -->
        
       <?php include (D_TEMPLATE.'/footer.php');?>
       
        <?php if($debug == 1) { include('widgets/debug.php'); } ?>
    </body>
</html>
