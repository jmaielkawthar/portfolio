<?php
require_once 'Inc/functions.php';

$current_page_name = '';
$bodyclass = '';

//------------------------------------------------------------------------------

include 'Globals/head.php';
include 'Partials/header.php';
//------------------------------ START CONTENT ---------------------------------
?>
<main class="style-guide">
    <section class="header my-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 logo">
                    <figure>
                        <img src="../Templates/Images/portfolio-logo.svg" title="portfolio logo" alt="portfolio logo">
                    </figure>
                </div>
                <div class="col-md-8">
                    <h6 class=" mb-15"> <span>Kawthar</span> </h6>
                    <h1>
                        Style-Guide <span>portfolio</span>
                    </h1>
                    <div class="line-dec"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="colors my-40">
        <div class="container">
            <div class="row">
                <h3 class="col-12 mb-20">Base Colors</h3>
                <div class="col-sm-2  col-6 mb-20">
                    <div class="sg-box-color" style="background-color: #000000;">&nbsp</div>
                    <div class="sg-box-name">$color-black</div>
                    <div class="sg-box-code">#000000</div>
                </div>
                <div class="col-sm-2 col-6 mb-20">
                    <div class="sg-box-color" style="background-color: #ffffff;border:1px solid black">&nbsp
                    </div>
                    <div class="sg-box-name">$color-white</div>
                    <div class="sg-box-code">#ffffff</div>
                </div>
            </div>
            <div class="row">
                <h3 class="col-12 mb-20">Neutral Colors</h3>
                <div class="col-sm-2 col-6 mb-20">
                    <div class="sg-box-color" style="background-color: #2a2a2a;">&nbsp</div>
                    <div class="sg-box-name">$gray-dark </div>
                    <div class="sg-box-code">#2a2a2a</div>
                </div>
                <div class="col-sm-2 col-6 mb-20">
                    <div class="sg-box-color" style="background-color: #afafaf;">&nbsp</div>
                    <div class="sg-box-name">$gray</div>
                    <div class="sg-box-code">#afafaf</div>
                </div>
                <div class="col-sm-2 col-6 mb-20">
                    <div class="sg-box-color" style="background-color: #eee;">&nbsp</div>
                    <div class="sg-box-name">$gray-light</div>
                    <div class="sg-box-code">#eee</div>
                </div>
            </div>
            <div class="row">
                <h3 class="col-12 mb-20">Blue Colors</h3>
                <div class="col-sm-2 col-6 mb-20">
                    <div class="sg-box-color" style="background-color: #4da6e7;">&nbsp</div>
                    <div class="sg-box-name">blue</div>
                    <div class="sg-box-code">#4da6e7</div>
                </div>
                <div class="col-sm-2 col-6 mb-20">
                    <div class="sg-box-color" style="background-color: #005fac;">&nbsp</div>
                    <div class="sg-box-name">$blue-1</div>
                    <div class="sg-box-code">#005fac</div>
                </div>
                <div class="col-sm-2 col-6 mb-20">
                    <div class="sg-box-color" style="background-color: #092939;">&nbsp</div>
                    <div class="sg-box-name">$blue-2</div>
                    <div class="sg-box-code">#092939</div>
                </div>
            </div>
        </div>
    </section>
    <section class="headlines my-40">
        <div class="container">
            <div class="row">
                <h2 class="mb-20 heading">Headlines</h2>
                <div class="row mb-20">
                    <h1 class="col-md-6 ">H1 heading</h1>
                    <h1 class="col-md-6"> 60/60/700 & 32/48</h1>
                </div>
                <div class="row row mb-20">
                    <h2 class="col-md-6">H2 heading</h2>
                    <h2 class="col-md-6"> 50/55/700 & 26/45</h2>
                </div>
                <div class="row row mb-20">
                    <h3 class="col-md-6">H3 heading</h3>
                    <h3 class="col-md-6 "> 40/45/700 & 18/38</h3>
                </div>
                <div class="row row mb-20">
                    <h4 class="col-md-6 ">H4 heading</h4>
                    <h4 class="col-md-6"> 35/42/700 & 17/26</h4>
                </div>
                <div class="row row mb-20">
                    <h5 class="col-md-6 ">H5 heading</h5>
                    <h5 class="col-md-6"> 25/38/700 & 15/22</h5>
                </div>
                <div class="row row mb-20">
                    <h6 class="col-md-6 ">H6 heading</h6>
                    <h6 class="col-md-6">18/32/700 & 14/20</h6>
                </div>
            </div>
        </div>
    </section>
    <section class="texts my-40">
        <div class="container">
            <h2 class="mb-20 heading">Headlines</h2>
            <div class="row row-texts desktop">
                <div class="col-sm-3  col-texts">
                    <p class="intertitle ">Definition</p>
                </div>
                <div class="col-sm-5  col-texts">
                    <p class="intertitle ">Display</p>
                </div>
                <div class="col-sm-4  col-texts">
                    <p class="intertitle ">Style in desktop &  mobile</p>
                </div>
            </div>
            <div class="row row-texts">
                <div class="col-sm-3 pb-20 col-texts">
                    <div class="def-texts">
                        .big-title
                    </div>
                </div>
                <div class="col-sm-5 pb-20 col-texts">
                    <div class="display-text">
                        <div class="big-title">Maecenas sed diam </div>
                    </div>
                </div>
                <div class="col-sm-4 pb-20 col-texts">
                    <div class="variable-texts">
                        font-size: 100px / 45px ;<br>
                        line-height: 100px / 56px;<br>
                        font-weight: 400;<br>
                    </div>
                </div>
            </div>
            <div class="row row-texts">
                <div class="col-sm-3 pb-20 col-texts">
                    <div class="def-texts">
                        .subheadline
                    </div>
                </div>
                <div class="col-sm-5 pb-20 col-texts">
                    <div class="display-text">
                        <div class="subheadline">Maecenas sed diam </div>
                    </div>
                </div>
                <div class="col-sm-4 pb-20 col-texts">
                    <div class="variable-texts">
                        font-size: 20px / 14px ;<br>
                        line-height: 30px / 20px;<br>
                        font-weight: 700;<br>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
//----------------------------- END CONTENT ------------------------------------
include 'Globals/foot.php';
include 'Partials/footer.php';
//------------------------------------------------------------------------------
