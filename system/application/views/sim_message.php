<style>
#page_nav {
    background: url("") repeat scroll 0 0 #000000;
    width: 955px;
}
</style>
<link rel="stylesheet" href="css/tint.css">
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
<div class="col_fullx" style="padding: 0px 20px; ">
<h1 class="orange" style="margin-bottom:0px;">Auto Tint Simulator</h1>
</div>

<div class="col_fullx">
    <div class="gridx">
        <div class="simulator clearfix">
            <div class="secondary">
                <h2>Choose a tint<span>&hellip;</span></h2>
                <form class="chooser">
                    <div id="dropdown-brand"></div>
                    <div id="dropdown-product"></div>
                    <div id="dropdown-shade"></div>
                </form><!--// end .chooser -->
            </div>
            <div class="primary">
                <h2></h2>
                <h3></h3>
                <div class="sedan">
                    <div class="original"></div>
                    <div class="mask"></div>
                    <div class="tint"></div>
                </div>
            </div>
            <div class="loading">
                <span class="ball"></span>
                <span class="label">Loading</span>
            </div>
            <p class="disclaimer">
                * Please consult your local dealer regarding automotive tint laws in your area.<br>
                * Images are for illustrative purposes only, actual tint samples may vary
            </p>
        </div><!--// end .simulator -->
    </div>

    <!-- JS Template -->
    <script id="dropdown-filter" type="text/x-handlebars-template">
        <div class="filter-control clearfix">
            <label for="{{filter}}">{{filter}}</label>
            <select id="{{filter}}">
                {{#each items}}
                <option value="{{value}}" class="{{class}}">{{label}}</option>
                {{/each}}
            </select>
        </div><!--// end .row -->
    </script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="js/tint.min.js"></script>

</div>








<br clear="all">
