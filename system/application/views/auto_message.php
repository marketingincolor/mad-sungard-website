<div id="page_nav" class="">
    <ul>
    <li><a href=".">Main</a></li>
    <li id="active"><a href="automotive-window-film">Automotive</a></li>
    <li><a href="archictectural-window-film">Architectural & Safety</a></li>
    <li><a href="why-use-window-film">Why Use Window Film?</a></li>
    <li><a href="where-to-buy">Where to Buy</a></li>
    <li><a href="sun-gard-window-film-faq">FAQs</a></li>
    <li><a href="about-sun-gard-window-film">About Us</a></li>
    </ul><br clear="all" />
</div>
<div class="sc_col_one left">
<h1 class="orange" style="margin-bottom:0px;">Automotive Window Film</h1>
<h4>Experience the Benefits of Automotive Window Film</h4>

<p>SUN-GARD<sup>&reg;</sup> automotive window films help to protect your vehicle from the harmful effects of the sun. Over time, the sun's heat and damaging UV rays contribute to interior fading as well as hardening and cracking of leather and vinyl. The sun also causes glare, which can make it hard to safely see other cars and traffic signals. UV radiation from the sun can even lead to skin problems for passengers.</p>
   <!--<a href="auto-tint-simulator"><img src="<?php echo base_url();?>images/auto-tint-button.jpg" alt="" /></a>-->
<p>What you'll notice first is how great your car looks when enhanced with SUN-GARD window film. Yet, look at all these other benefits you'll enjoy when choosing SUN-GARD:</p>
<ul>
<li>Reduces interior fading by blocking out harsh sunlight</li>
<li>Blocks out unwanted heated, making the interior of your car much more comfortable</li>
<li>Minimizes eye strain by reducing the sun's glare</li>
<li>Provides privacy from prying eyes</li>
<li>Holds glass shards together in the event of an accident</li>
<li>Available in a wide range of shades and styles</li>
<li>Installed by professionals across the globe</li>
</ul>

<br>
<p>Three SUN-GARD films are available to meet the unique needs of every vehicle owner.</p>
<br>
<div id="tabs-container">
    <ul class="tabs-menu">
        <li class="current"><a href="#tab-1">Black Pearl HP & NR</a></li>
        <li><a href="#tab-2">Shadow</a></li>
        <li><a href="#tab-3">GP Max</a></li>
    </ul>
    <div class="tab">
        <div id="tab-1" class="tab-content">
            <p>Black Pearl is a solution dyed film with rich grey tones and a sophisticated style. It's a contour engineered product which makes for cleaner and faster installations for dealers. Vehicle owners will love the wide range of shades available as well as the choice of two versions, a high performance film that offers superior heat rejection and a non-reflective film that ensures no signal disruption, both with 99% UV rejection.</p>
        </div>
        <div id="tab-2" class="tab-content">
            <p>Shadow is a non-reflective film with a dark black color perfect for any vehicle. Its metal free construction ensures no signal disruption for drivers. Manufactured with the latest color-stable technology in dyed films, Shadow is durable, long-lasting and provides enhanced UV radiation protection.</p>
        
        </div>
        <div id="tab-3" class="tab-content">
            <p>GP Max is a metalized dyed film that features an attractive neutral color with excellent heat shrinking properties. Its affordability makes it a popular film option amongst budget conscious vehicle owners who want a high performing film with good heat rejection.</p>
        </div>
    </div>
</div>

<br clear="all">
<p><a href="http://www.madico.com/sungardfiles/Sun-Gard%20Automotive%20Spec%20Sheet.pdf" class="tab-button text-button" target="_blank">Automotive Film Performance Specifications</a></p>
<br>
<p><img src="<?php echo base_url();?>images/sungard_sc_proinst.jpg" alt="" /></p>
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

$(".tabs-menu a").click(function(event) {
    event.preventDefault();
    $(this).parent().addClass("current");
    $(this).parent().siblings().removeClass("current");
    var tab = $(this).attr("href");
    $(".tab-content").not(tab).css("display", "none");
    $(tab).fadeIn();
});

</script>

<div id="slideshow">
    <img src="<?php echo base_url();?>images/sungard_sc_autophoto_1.jpg" alt="" class="active" />
    <img src="<?php echo base_url();?>images/sungard_sc_autophoto_2.jpg" alt="" />
    <img src="<?php echo base_url();?>images/sungard_sc_autophoto_3.jpg" alt="" />
    <img src="<?php echo base_url();?>images/sungard_sc_autophoto_4.jpg" alt="" />
    <img src="<?php echo base_url();?>images/sungard_sc_autophoto_5.jpg" alt="" />
    <img src="<?php echo base_url();?>images/sungard_sc_autophoto_6.jpg" alt="" />
</div>


</div><br>
</div>

<br clear="all">
