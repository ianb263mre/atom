

<nav class="navbar navbar-default" role="navigation">
    
    <?php if($debug ==1) { ?>
        <button id="btn-debug" class="btn btn-warning"><i class="fa fa-bug"></i></button>
    <?php } ?>
    <div class="container">
        

        <ul class="nav navbar-nav">
            
            <?php nav_main($dbc, $page_id); ?> 

            <li class=""><a href="#">FAQ</a></li>
            <li class=""><a href="#">Contact</a></li>
        </ul>
    </div>
</nav> <!-- END of navigation -->
