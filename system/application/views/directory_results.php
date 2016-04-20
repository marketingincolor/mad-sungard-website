<div id="page_nav" class="">
    <ul>
    <li id="active"><a href=".">Main</a></li>
    <li><a href="automotive-window-film">Automotive</a></li>
    <li><a href="archictectural-window-film">Architectural</a></li>
    <li><a href="why-use-window-film">Why Use Window Film?</a></li>
    <li><a href="sun-gard-window-film-faq">FAQ</a></li>
    <li><a href="about-sun-gard-window-film">About Us</a></li>
    <li><a href="http://blog.sungarddealer.com">Film Clips</a></li>
    </ul><br clear="all" />
</div>

<div id="resultbox" class="sc_col_one left"><!-- <?php echo $thiscountry;?> - <?php echo $thisregion;?> -->
	<h1 style="margin-bottom:0px;"><?php echo ucfirst($thisregion);?></h1>
	<h4>A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</h4>
	<p><?php echo $results;?></p>
</div>


<div class="sc_col_two right" style="text-align:center;">
	<div id="searchbox">
		<br>
		<h2 class="white" style="padding:10px; margin:0px; width:310px; text-align: left;">Find a SUN-GARD<sup>&reg;</sup> dealer near you:</h2>
		<?php echo $submitted;?><!-- <div id='searchform'><h1 class="white tleft" style="padding-left:10px;">1-888-887-2022</h1></div> -->
	</div>
	
	<div style="width:400px; text-align:left; margin-left:40px;">
	<h2 style="margin-bottom:0px;">Film Clips:</h2>
	<h5 style="margin-top:0px;">Snippets From The World of SUN-GARD<sup>&reg;</sup></h5>
	
	<?php foreach($rssfeed as $item):?>
	<a href="<?php echo $item['link'];?>" style="color:#808080;"><?php echo $item['title'];?></a><br><br>
	<?php endforeach;?>
	</div>
	<br>
	
	<div id='bluebox' style='width:100%; text-align:left; margin-left:20px;'><br><br>
	<a href="http://www.sungarddealer.com/signup" target="_blank"><img src="<?php echo base_url();?>images/sungard_sc_dealer.jpg"></a>
	</div><br>
</div>

<br clear="all">