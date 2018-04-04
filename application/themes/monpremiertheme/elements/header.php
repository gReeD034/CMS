<div class='container'>
    <div class='row header'>
        <div class='col-md-1 logo'>
            <span class='websitename'>Factorian</span>
        </div>

        <div class='col-md-8 col-md-offset-3'>
            <ul class='navmenu'>
                <?php
                    $a = new GlobalArea('menu');
                    $a->display($c);
                ?>
            </ul>
        </div>
    </div>
</div>