<div class='footer'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-3 company-info'>
                <span class='logo'>Factorian</span>
                <p class='company-summary'>
                <?php
                    $a = new Area('company summary');
                    $a->display($c);
                ?>
                </p>
            </div>

            <div class='col-md-3 quick-links'>
                <h5>Quick Links</h5>
                <ul class='footer-list'>
                    <?php
                        $a = new Area('Quick Links');
                        $a->display($c);
                    ?>
                </ul>
            </div>

            <div class='col-md-3 external-links'>
                <h5>External Links</h5>
                <ul class='footer-list'>
                    <?php
                        $a = new Area('External Links');
                        $a->display($c);
                    ?>
                </ul>
            </div>

            <div class='col-md-3 contact-us'>
                <h5>Contact us</h5>
                <ul class='footer-list'>
                    <?php
                        $a = new Area('Contact Info');
                        $a->display($c);
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class='footer-bottom'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-2'>
                <?php
                    $a = new Area('Site Name');
                    $a->display($c);
                ?>
            </div>
        </div>
    </div>
</div>