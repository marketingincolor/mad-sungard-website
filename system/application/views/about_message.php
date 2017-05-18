<div id="page_nav" class="">
    <ul>
    <li><a href=".">Main</a></li>
    <li><a href="automotive-window-film">Automotive</a></li>
    <li><a href="archictectural-window-film">Architectural & Safety</a></li>
    <li><a href="why-use-window-film">Why Use Window Film?</a></li>
    <li><a href="where-to-buy">Where to Buy</a></li>
    <li><a href="sun-gard-window-film-faq">FAQs</a></li>
    <li id="active"><a href="about-sun-gard-window-film">About Us</a></li>
    </ul><br clear="all" />
</div>
<div class="sc_col_one left">
<h1 class="orange" style="margin-bottom:0px;">About Us</h1>

<br>
<a href="http://www.madico.com" target="_new"><img src="<?php echo base_url();?>images/madico-logo.jpg" alt="" / border="0"></a>
<p><a href="http://www.madico.com" target="_new">Madico, Inc.</a> is a thriving organization with a rich history of invention, innovation, and imagination. For well over 100 years we've met 
the ever-changing needs of our customers by leveraging the skills needed to adapt our product portfolios.</p>

<p>Madico's St. Petersburg, Florida manufacturing facility is dedicated to producing only the highest quality window film available today. 
An unrivaled commitment to research and development has enabled us to pioneer a number of industry-first products and processes.</p>

<p>All of our products are made in the USA and are distributed to more than 50 countries. The company's corporate headquarters are located 
in Woburn, Massachusetts while our primary window film manufacturing facility is located in St. Petersburg, Florida.  Trusted by the 
Smithsonian, the Louvre, and many other architectural landmarks, Madico has been improving windows with films for over 30 years.</p>

<p>Visit Madico's corporate website, <a href="http://www.madico.com" target="_new">www.madico.com</a>.</p>


<br>
<img src="<?php echo base_url();?>images/sungard_sc_proinst.jpg" alt="" />
<br><br>
</div>

<div class="sc_col_two right" style="text-align:center;">

<div id="searchbox">
<br>
<h2 class="white" style="padding:10px; margin:0px; width:310px; text-align: left;">Find a SUN-GARD<sup>&reg;</sup> dealer near you:</h2>
<?php //echo $submitted;?><div id='searchform'><h3 class="white tleft" style="padding-left:10px;">1-888-887-2022 US<br>1-727-327-2544 Outside US</h3></div>

</div>

<div id='ajaxDiv2' style='width:100%; text-align:left;'>
<br>
<script>
function slideSwitch() {
    var $active = $('#slideshow IMG.active');

    if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

    var $next =  $active.next().length ? $active.next()
        : $('#slideshow IMG:first');

    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

$(function() {
    setInterval( "slideSwitch()", 5000 );
});

</script>

<div id="slideshow">
    <img src="<?php echo base_url();?>images/sungard_sc_aboutphoto_1.jpg" alt="" class="active" />
    <img src="<?php echo base_url();?>images/sungard_sc_aboutphoto_2.jpg" alt="" />
    <img src="<?php echo base_url();?>images/sungard_sc_aboutphoto_3.jpg" alt="" />
    <img src="<?php echo base_url();?>images/sungard_sc_aboutphoto_4.jpg" alt="" />
    <img src="<?php echo base_url();?>images/sungard_sc_aboutphoto_5.jpg" alt="" />
</div>


</div><br>
</div>

<br clear="all">
