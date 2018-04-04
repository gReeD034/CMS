<!DOCTYPE html>
<html>
    <head>
        <?php Loader::element('header_required'); ?>
    </head>
    <body>
        <?php
        $a = new Area('Contenu');
        $a->display($c);
        ?>
        
        <?php
            $a = new Area('');
            $a->display($c);
        ?>
        
<li class='navmenu-item'>Home</li>
<li class='navmenu-item'>About Us</li>
<li class='navmenu-item'>Services</li>
<li class='navmenu-item'>Works</li>
<li class='navmenu-item'>Blog</li>
<li class='navmenu-item'>Pages</li>
<li class='navmenu-item'>Contact Us</li>
<li class='navmenu-item'><span class='glyphicon glyphicon-search'></span></li>

<h1>Factorian is a best template for your next website</h1>
<p>We always try to bring the beautiful smile of our customers with our awesome work</p>
<button type='button' class='btn btn-primary col-md-3' href='#'>Download Now</button>

<h3>Best Renovation</h3>
<p>Over fact all son tell this any his. Insisted confined of weddings to returned debating rendered. Keeps order fully so do party.</p>

<h3>Chemical Reasearch</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id quae quos cum consequuntur maiores possimus fugiat repellat totam.</p>

<h4 class='media-heading'>Material Engineering</h4>
<p>Over fact all son tell this any his. This confined of weddings to returned.</p>

<h4 class='media-heading'>Plumbing Service</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, assumenda</p>

<h4 class='media-heading'>Petroleum and Gas</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, assumenda</p>

<h2 class='col-md-5'>Build your dream product with us.</h2>
<button class='col-md-2 col-md-offset-5 btn btn-primary'>Contact Us Today</button>

<h4>We do awesome works for our clients.<br/>Check some of our work.</h4>
        
        <?php Loader::element('footer_required'); ?>
    </body>
</html>