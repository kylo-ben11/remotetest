<?php get_header(); ?>
<style media="screen">
body {
font-size: 16px;
line-height: 1.5;
background: #fff;
margin: 0;
padding: 0;
}

p {
margin: 0 0 10px 0;
}

.clip-svg {
width: 0;
height: 0;
}

.img-clip-block {
font-family: 'Cuprum', sans-serif;
margin: 20px 0;
}

.img-clip-row {
text-align: center;
}

.img-clip-row:first-of-type .img-clip-wrap {
background-position: top;
}

.img-clip-row:nth-of-type(2) .img-clip-wrap:nth-of-type(odd) {
background-position: left;
}

.img-clip-row:nth-of-type(2) .img-clip-wrap:nth-of-type(even) {
background-position: right;
}

.img-clip-row:last-of-type .img-clip-wrap {
background-position: bottom;
}

.img-clip-wrap {
width: 300px;
height: 300px;
background-image: url("../wp-content/themes/shapely-child/img/eskab.jpg");
background-repeat: no-repeat;
margin-left: auto;
margin-right: auto;
display: block;
position: relative;
-webkit-clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
clip-path: url("#clip-diamond-demo");
}

.overlay {
background: rgba(255,255,255,0.5);
position: absolute;
left: 0;
right: 0;
top: 0;
bottom: 0;
pointer-events: none;
-webkit-transition: all 0.3s linear;
transition: all 0.3s linear;
}

.overlay-content {
color: rgba(255, 255, 255, 0.4);
font-weight: 400;
font-size: 180%;
text-transform: uppercase;
position: absolute;
left: 50%;
top: 50%;
-ms-transform: translateX(-50%) translateY(-50%);
-webkit-transform: translateX(-50%) translateY(-50%);
transform: translateX(-50%) translateY(-50%);
text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
}

.img-clip-wrap:hover .overlay {
-webkit-transition: all 0.4s ease-in;
transition: all 0.4s ease-in;
background: none;
}

.img-clip-img {
display: block;
}

@media only screen and (min-width: 650px) {
.img-clip-row {
  margin-top: -154px;
}

.img-clip-row:first-of-type {
  margin-top: auto;
}

.img-clip-wrap {
  display: inline-block;
}
}

</style>
<div class="img-clip-block">
    <div class="img-clip-row">
        <div class="img-clip-wrap">
        </div>
    </div>

    <div class="img-clip-row">
        <a href="https://stocksnap.io/photo/J633WD7BAR" class="img-clip-wrap">
            <div class="overlay">
                <div class="overlay-content">Portraits
              </div>
            </div>
        </a>

        <a href="https://stocksnap.io/photo/J633WD7BAR" class="img-clip-wrap">
            <div class="overlay">
                <div class="overlay-content">Poetry</div>
            </div>
        </a>
    </div>

    <div class="img-clip-row">
        <a href="https://stocksnap.io/photo/J633WD7BAR" class="img-clip-wrap polygon-clip-rhombus">
            <div class="overlay">
                <div class="overlay-content">Published</div>
            </div>
        </a>
    </div>
</div> <!-- /img-clip-block -->

<svg class="clip-svg">
    <defs>
        <clipPath id="clip-diamond-demo" clipPathUnits="objectBoundingBox">
            <polygon points="0.5 0, 1 0.5, 0.5 1, 0 0.5" />
        </clipPath>
    </defs>
</svg>


<script src="<?php echo home_url('/wp-content/themes/shapely-child/animate.js');?>"></script>
<?php get_footer(); ?>
