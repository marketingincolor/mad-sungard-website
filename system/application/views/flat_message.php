<div id="page_nav" class="">
    <ul>
    <li><a href=".">Main</a></li>
    <li><a href="automotive-window-film">Automotive</a></li>
    <li id="active"><a href="archictectural-window-film">Architectural & Safety</a></li>
    <li><a href="why-use-window-film">Why Use Window Film?</a></li>
    <li><a href="where-to-buy">Where to Buy</a></li>
    <li><a href="sun-gard-window-film-faq">FAQs</a></li>
    <li><a href="about-sun-gard-window-film">About Us</a></li>
    </ul><br clear="all" />
</div>
<div class="sc_col_one left">
<h1 class="orange" style="margin-bottom:0px;">Architectural Window Films</h1>


<h4>Protect Your Home or Commercial Building</h4>
<p>You want economical ways to protect your property and belongings. Choose SUN-GARD<sup>&reg;</sup> window films from Madico to protect your investments. SUN-GARD offers energy-saving comfort&mdash;whether for home, office or retail space&mdash;with long-lasting, cost-effective window film solutions in a variety of attractive shades.</p>

<h4>SUN-GARD window films block up to 99% of UV rays and reflect up to 80% of the sun's heat.</h4>

<p>For residential and commercial properties, SUN-GARD:
<ul>
    <li>Protects against the damaging effects of the sun to furnishings, fabrics, artwork, and flooring</li>
    <li>Saves on energy costs</li>
    <li>Reduces air conditioning costs, while increasing interior comfort</li>
    <li>Increases privacy and safety</li>
    <li>Holds glass shards together in the event of accident, weather event, vandalism, or break-in</li>
</ul>
</p>

<p>Choose from a variety of SUN-GARD architectural films to best meet the needs of your property.</p>
<br>
<div id="tabs-container">
    <ul class="tabs-menu-col">
        <li class="current"><a href="#tab-1">Premium Series</a></li>
        <li><a href="#tab-2">Decorator Series</a></li>
        <li><a href="#tab-3">Reflective Series</a></li>
        <li><a href="#tab-4">Exterior Series</a></li>
        <li><a href="#tab-5">Specialty Series</a></li>
        <li><a href="#tab-6">Safety & Security Series</a></li>
    </ul>
    <div class="tab-col">
        <div id="tab-1" class="tab-content">
            <p>SUN-GARD's Premium Series of films includes the popular Nova, Signature, and Solar Bronze architectural films. Nova window film is constructed using a triple-pass metallization process offering excellent infrared absorption rates along with a neutral color and is available in three shades. Signature and Solar Bronze films offer all the benefits of window film for your home or commercial space with either a neutral or bronze color depending on the look you prefer.</p>
        </div>
        <div id="tab-2" class="tab-content">
            <p>You can now have the best of both worlds with SUN-GARD Optivision Night-Neutral window film. Enjoy optimal nighttime views while also benefiting from daytime heat reduction and sun protection. Optivision is available in five shades to meet the needs of any property or individual.</p>
        
        </div>
        <div id="tab-3" class="tab-content">
            <p>SUN-GARD Reflective Series Silver film offers maximum heat rejection thanks to dual-sided reflective technology. Silver reflective film can provide a contemporary look for commercial buildings by creating a uniform exterior, mirrored appearance.</p>
        </div>
        <div id="tab-4" class="tab-content">
            <p>Commercial installations can require an exterior film in instances where the interior of the windows can't be easily accessed. SUN-GARD's Silver and Stainless Steel exterior films offer strong heat rejection along with an enhanced scratch resistant coating that can withstand the harsh elements found outdoors.</p>
        </div>
        <div id="tab-5" class="tab-content">
            <p>SUN-GARD's Specialty Series includes non-traditional films such as White Out, Black Out, Frost Matte and UV Gard. White Out and Black Out films can be used to increase privacy or for decorative design applications in office buildings, restaurants, retail environments, and other places where you may want to alter the opacity of glass. Black Out also blocks 100% of light transmission if required. To achieve the look of etched glass at a fraction of the cost, consider the translucent film Frost Matte.</p>
            <p>UV Gard film is a clear film that blocks harmful UV rays without altering the look of glass. This film is popular in museum and historic home applications.</p>
        </div>
        <div id="tab-6" class="tab-content">
            <p>SUN-GARD Safety & Security Series films help reduce the risk of personal injury, property damage, and loss caused by natural disaster and crime. Available in a wide range of shades, styles, and grades, these films are specially designed to deter everything from smash and grab theft to the costly eyesore of graffiti.</p>
        </div> 
    </div>
</div>

<br clear="all">
<p><a href="http://www.madico.com/sungardfiles/Sun-Gard%20Architectural%20Spec%20Sheet.pdf" class="tab-button text-button" target="_blank">Architectural Film Performance Specifications</a></p>
<br>

<br clear="all">
<p><a href="http://www.madico.com/sungardfiles/Sun-Gard%20Architectural%20Spec%20Sheet.pdf" class="tab-button text-button" target="_blank">Safety & Security Film Performance Specifications</a></p>
<br>


<img src="<?php echo base_url();?>images/sungard_sc_proinst.jpg" alt="" />
<br>
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

$(".tabs-menu-col a").click(function(event) {
    event.preventDefault();
    $(this).parent().addClass("current");
    $(this).parent().siblings().removeClass("current");
    var tab = $(this).attr("href");
    $(".tab-content").not(tab).css("display", "none");
    $(tab).fadeIn();
});

</script>

<div id="slideshow">
    <img src="<?php echo base_url();?>images/sungard_sc_archphoto_1.jpg" alt="" class="active" />
    <img src="<?php echo base_url();?>images/sungard_sc_archphoto_2.jpg" alt="" />
    <img src="<?php echo base_url();?>images/sungard_sc_archphoto_3.jpg" alt="" />
    <img src="<?php echo base_url();?>images/sungard_sc_archphoto_4.jpg" alt="" />
    <img src="<?php echo base_url();?>images/sungard_sc_archphoto_5.jpg" alt="" />
</div>


</div><br>
</div>

<br clear="all">
