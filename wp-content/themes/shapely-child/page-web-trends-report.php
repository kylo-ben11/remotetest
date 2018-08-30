
<?php get_header(); ?>
<style>
.console {
	width: 700px;
	padding: 0 0 30px 0;
	margin: 0 auto;
	text-align: center;
}
.console h1 {
	margin: 10px 0;
	font-size: 50px;
	color: #FAC223;
}
.console button {
	color: #FAC223;
	border: 1px solid #FAC223;
	padding: 5px 10px;
	background: none;
	cursor: pointer;
	font-family: 'Open Sans', sans-serif;
	font-weight: 300;
	font-size: 16px;
	-moz-transition: .2s ease-in-out;
  -o-transition: .2s ease-in-out;
  -webkit-transition: .2s ease-in-out;
  transition: .2s ease-in-out;
}
.console button:hover,
.darthmaul .console button#darthmaul,
.stormtrooper .console button#stormtrooper,
.bobafett .console button#bobafett,
.kyloren .console button#kyloren,
.darthvader .console button#darthvader,
.r2d2 .console button#r2d2,
.yoda .console button#yoda,
.chewbacca .console button#chewbacca {
	background: #FAC223;
	color: #131313;
}

.stage {
	width: 500px;
	margin: 0 auto;
}
.main-stage {
	width: 500px;
	height: 500px;
	position: relative;
	background-size: cover;
}

.stage-quote {
	position: relative;
	margin-bottom: 100px;
}
.stage-quote h2 {
	visibility: hidden;
	opacity: 0;
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	text-align: center;
	text-transform: uppercase;
	font-size: 26px;
	color: #FAC223;
	-moz-transition: 2s ease-in-out;
	-o-transition: 2s ease-in-out;
	-webkit-transition: 2s ease-in-out;
	transition: 2s ease-in-out;
}

.kyloren .quote-kyloren,
.darthvader .quote-darthvader,
.stormtrooper .quote-stormtrooper,
.bobafett .quote-bobafett,
.darthmaul .quote-darthmaul,
.r2d2 .quote-r2d2,
.yoda .quote-yoda,
.chewbacca .quote-chewbacca {
	visibility: visible;
	opacity: 1;
}

.triangle {
	position: absolute;
	width: 100%;
	height: 100%;
	-webkit-clip-path: polygon(0% 0%, 0% 0%, 0% 0%);
}

.t-1 {transition: 1.05s ease-out;}
.t-2 {transition: 1.1s ease-out;}
.t-3 {transition: 1.15s ease-out;}
.t-4 {transition: 1.2s ease-out;}
.t-5 {transition: 1.25s ease-out;}
.t-6 {transition: 1.3s ease-out;}
.t-7 {transition: 1.35s ease-out;}
.t-8 {transition: 1.4s ease-out;}
.t-9 {transition: 1.45s ease-out;}
.t-10 {transition: 1.5s ease-out;}

.t-11 {transition: 1.55s ease-out;}
.t-12 {transition: 1.6s ease-out;}
.t-13 {transition: 1.65s ease-out;}
.t-14 {transition: 1.7s ease-out;}
.t-15 {transition: 1.75s ease-out;}
.t-16 {transition: 1.8s ease-out;}
.t-17 {transition: 1.85s ease-out;}
.t-18 {transition: 1.9s ease-out;}
.t-19 {transition: 1.95s ease-out;}
.t-20 {transition: 2s ease-out;}

.t-21 {transition: 2.05s ease-out;}
.t-22 {transition: 2.1s ease-out;}
.t-23 {transition: 2.15s ease-out;}
.t-24 {transition: 2.2s ease-out;}
.t-25 {transition: 2.25s ease-out;}
.t-26 {transition: 2.3s ease-out;}
.t-27 {transition: 2.35s ease-out;}
.t-28 {transition: 2.4s ease-out;}
.t-29 {transition: 2.45s ease-out;}
.t-30 {transition: 2.5s ease-out;}


.glimmer .t-1,
.glimmer .t-6,
.glimmer .t-11,
.glimmer .t-16,
.glimmer .t-21,
.glimmer .t-26 {animation: glimmer 1.5s;}

.glimmer .t-2,
.glimmer .t-7,
.glimmer .t-12,
.glimmer .t-17,
.glimmer .t-22,
.glimmer .t-27 {animation: glimmer 2s;}

.glimmer .t-3,
.glimmer .t-8,
.glimmer .t-13,
.glimmer .t-18,
.glimmer .t-23,
.glimmer .t-28 {animation: glimmer 2.5s;}

.glimmer .t-4,
.glimmer .t-9,
.glimmer .t-14,
.glimmer .t-19,
.glimmer .t-24,
.glimmer .t-29 {animation: glimmer 3s;}

.glimmer .t-5,
.glimmer .t-10,
.glimmer .t-15,
.glimmer .t-20,
.glimmer .t-25,
.glimmer .t-30 {animation: glimmer 3.5s;}


@keyframes glimmer {
	0% {opacity: 1;}
	25% {opacity: 0.8;}
	50% {opacity: 1;}
	75% {opacity: 0.8;}
}

/* Kylo Ren */

.kyloren .t-1 {-webkit-clip-path: polygon(50% 15%, 50% 35%, 66% 26%);}
.kyloren .t-2 {-webkit-clip-path: polygon(50% 15%, 50% 35%, 34% 26%);}
.kyloren .t-3 {-webkit-clip-path: polygon(77% 44%, 50% 35%, 66% 26%);}
.kyloren .t-4 {-webkit-clip-path: polygon(23% 44%, 50% 35%, 34% 26%);}
.kyloren .t-5 {-webkit-clip-path: polygon(77% 44%, 63% 39%, 72% 60%);}

.kyloren .t-6 {-webkit-clip-path: polygon(23% 44%, 37% 39%, 28% 60%);}
.kyloren .t-7 {-webkit-clip-path: polygon(77% 44%, 90% 65%, 72% 60%);}
.kyloren .t-8 {-webkit-clip-path: polygon(23% 44%, 10% 65%, 28% 60%);}
.kyloren .t-9 {-webkit-clip-path: polygon(72% 82%, 90% 65%, 72% 60%);}
.kyloren .t-10 {-webkit-clip-path: polygon(28% 82%, 10% 65%, 28% 60%);}

.kyloren .t-11 {-webkit-clip-path: polygon(50% 35%, 50% 40%, 63% 39%);}
.kyloren .t-12 {-webkit-clip-path: polygon(50% 35%, 50% 40%, 37% 39%);}
.kyloren .t-13 {-webkit-clip-path: polygon(50% 49%, 50% 40%, 63% 39%);}
.kyloren .t-14 {-webkit-clip-path: polygon(50% 49%, 50% 40%, 37% 39%);}
.kyloren .t-15 {-webkit-clip-path: polygon(50% 82%, 53% 51%, 67% 69%);}

.kyloren .t-16 {-webkit-clip-path: polygon(50% 82%, 47% 51%, 33% 69%);}
.kyloren .t-17 {-webkit-clip-path: polygon(50% 82%, 57% 83%, 61% 73%);}
.kyloren .t-18 {-webkit-clip-path: polygon(50% 82%, 43% 83%, 39% 73%);}
.kyloren .t-19 {-webkit-clip-path: polygon(50% 82%, 50% 51%, 53% 51%);}
.kyloren .t-20 {-webkit-clip-path: polygon(50% 82%, 50% 51%, 47% 51%);}

.kyloren .t-21 {-webkit-clip-path: polygon(62% 46%, 50% 49%, 61% 53%);}
.kyloren .t-22 {-webkit-clip-path: polygon(38% 46%, 50% 49%, 39% 53%);}
.kyloren .t-23 {-webkit-clip-path: polygon(63% 39%, 50% 49%, 62% 46%);}
.kyloren .t-24 {-webkit-clip-path: polygon(37% 39%, 50% 49%, 38% 46%);}
.kyloren .t-25 {-webkit-clip-path: polygon(63% 39%, 70% 56%, 61% 53%);}

.kyloren .t-26 {-webkit-clip-path: polygon(37% 39%, 30% 56%, 39% 53%);}
.kyloren .t-27 {-webkit-clip-path: polygon(64% 65%, 70% 56%, 56% 51%);}
.kyloren .t-28 {-webkit-clip-path: polygon(36% 65%, 30% 56%, 44% 51%);}
.kyloren .t-29 {-webkit-clip-path: polygon(53% 51%, 56% 51%, 64% 65%);}
.kyloren .t-30 {-webkit-clip-path: polygon(47% 51%, 44% 51%, 36% 65%);}

.kyloren .t-1,
.kyloren .t-2,
.kyloren .t-3,
.kyloren .t-4,
.kyloren .t-5,
.kyloren .t-6,
.kyloren .t-7,
.kyloren .t-8,
.kyloren .t-9,
.kyloren .t-10,
.kyloren .t-15,
.kyloren .t-16,
.kyloren .t-17,
.kyloren .t-18 {background-color: #20201E;}

.kyloren .t-13,
.kyloren .t-14 {background-color: #9EA3A8;}

.kyloren .t-11,
.kyloren .t-12,
.kyloren .t-19,
.kyloren .t-20 {background-color: #2D2C2D;}

.kyloren .t-21,
.kyloren .t-22 {background-color: #131313;}

.kyloren .t-23,
.kyloren .t-24,
.kyloren .t-25,
.kyloren .t-26,
.kyloren .t-27,
.kyloren .t-28,
.kyloren .t-29,
.kyloren .t-30 {background-color: #C7C8C8;}

/* Darth Vader */

.darthvader .t-1 {-webkit-clip-path: polygon(33% 12%, 50% 7%, 67% 12%);}
.darthvader .t-2 {-webkit-clip-path: polygon(33% 12%, 50% 56%, 67% 12%);}
.darthvader .t-3 {-webkit-clip-path: polygon(33% 12%, 23% 40%, 44% 40%);}
.darthvader .t-4 {-webkit-clip-path: polygon(67% 12%, 56% 40%, 77% 40%);}
.darthvader .t-5 {-webkit-clip-path: polygon(23% 40%, 5% 75%, 14% 83%);}

.darthvader .t-6 {-webkit-clip-path: polygon(77% 40%, 95% 75%, 86% 83%);}
.darthvader .t-7 {-webkit-clip-path: polygon(23% 40%, 19% 59%, 38% 40%);}
.darthvader .t-8 {-webkit-clip-path: polygon(62% 40%, 81% 59%, 77% 40%);}
.darthvader .t-9 {-webkit-clip-path: polygon(18% 59%, 32% 72%, 32% 46%);}
.darthvader .t-10 {-webkit-clip-path: polygon(82% 59%, 68% 46%, 68% 72%);}

.darthvader .t-11 {-webkit-clip-path: polygon(18% 59%, 15% 77%, 32% 72%);}
.darthvader .t-12 {-webkit-clip-path: polygon(82% 59%, 85% 77%, 68% 72%);}
.darthvader .t-13 {-webkit-clip-path: polygon(38% 40%, 50% 56%, 44% 40%);}
.darthvader .t-14 {-webkit-clip-path: polygon(56% 40%, 50% 56%, 62% 40%);}
.darthvader .t-15 {-webkit-clip-path: polygon(38% 40%, 32% 46%, 48% 53%);}

.darthvader .t-16 {-webkit-clip-path: polygon(62% 40%, 52% 53%, 68% 46%);}
.darthvader .t-17 {-webkit-clip-path: polygon(32% 46%, 32% 63%, 50% 56%);}
.darthvader .t-18 {-webkit-clip-path: polygon(68% 46%, 50% 56%, 68% 63%);}
.darthvader .t-19 {-webkit-clip-path: polygon(32% 46%, 50% 56%, 48% 53%);}
.darthvader .t-20 {-webkit-clip-path: polygon(68% 46%, 52% 53%, 50% 56%);}

.darthvader .t-21 {-webkit-clip-path: polygon(32% 63%, 50% 56%, 50% 63%);}
.darthvader .t-22 {-webkit-clip-path: polygon(68% 63%, 50% 56%, 50% 63%);}
.darthvader .t-23 {-webkit-clip-path: polygon(32% 63%, 50% 63%, 32% 72%);}
.darthvader .t-24 {-webkit-clip-path: polygon(68% 63%, 50% 63%, 68% 72%);}
.darthvader .t-25 {-webkit-clip-path: polygon(50% 63%, 35% 82%, 65% 82%);}

.darthvader .t-26 {-webkit-clip-path: polygon(32% 72%, 35% 82%, 50% 63%);}
.darthvader .t-27 {-webkit-clip-path: polygon(68% 72%, 65% 82%, 50% 63%);}
.darthvader .t-28 {-webkit-clip-path: polygon(65% 82%, 50% 91%, 35% 82%);}
.darthvader .t-29 {-webkit-clip-path: polygon(45% 82%, 48% 82%, 47% 67%);}
.darthvader .t-30 {-webkit-clip-path: polygon(55% 82%, 52% 82%, 53% 67%);}


.darthvader .t-2,
.darthvader .t-15,
.darthvader .t-16,
.darthvader .t-26,
.darthvader .t-27 {background-color: #565656;}

.darthvader .t-1,
.darthvader .t-3,
.darthvader .t-4,
.darthvader .t-6,
.darthvader .t-7,
.darthvader .t-8,
.darthvader .t-11,
.darthvader .t-13,
.darthvader .t-14,
.darthvader .t-19,
.darthvader .t-20,
.darthvader .t-21,
.darthvader .t-22,
.darthvader .t-23,
.darthvader .t-24,
.darthvader .t-28,
.darthvader .t-29,
.darthvader .t-30 {background-color: #424242;}

.darthvader .t-5,
.darthvader .t-9,
.darthvader .t-10,
.darthvader .t-12,
.darthvader .t-17,
.darthvader .t-18,
.darthvader .t-25 {background-color: #1b1b1b;}

/* Stormtrooper */

.stormtrooper .t-1 {-webkit-clip-path: polygon(32% 12%, 50% 8%, 68% 12%);}
.stormtrooper .t-2 {-webkit-clip-path: polygon(32% 12%, 50% 32%, 68% 12%);}
.stormtrooper .t-3 {-webkit-clip-path: polygon(32% 12%, 24% 32%, 50% 32%);}
.stormtrooper .t-4 {-webkit-clip-path: polygon(68% 12%, 50% 32%, 76% 32%);}
.stormtrooper .t-5 {-webkit-clip-path: polygon(21% 32%, 21% 36%, 79% 32%);}

.stormtrooper .t-6 {-webkit-clip-path: polygon(21% 36%, 79% 32%, 79% 36%);}
.stormtrooper .t-7 {-webkit-clip-path: polygon(23% 36%, 23% 59%, 50% 36%);}
.stormtrooper .t-8 {-webkit-clip-path: polygon(50% 36%, 77% 59%, 77% 36%);}
.stormtrooper .t-9 {-webkit-clip-path: polygon(25% 38%, 29% 47%, 44% 38%);}
.stormtrooper .t-10 {-webkit-clip-path: polygon(56% 38%, 75% 38%, 72% 47%);}

.stormtrooper .t-11 {-webkit-clip-path: polygon(19% 37%, 23% 37%, 19% 55%);}
.stormtrooper .t-12 {-webkit-clip-path: polygon(23% 37%, 19% 55%, 23% 55%);}
.stormtrooper .t-13 {-webkit-clip-path: polygon(77% 37%, 77% 55%, 81% 37%);}
.stormtrooper .t-14 {-webkit-clip-path: polygon(81% 37%, 77% 55%, 81% 55%);}
.stormtrooper .t-15 {-webkit-clip-path: polygon(50% 36%, 23% 59%, 77% 59%);}

.stormtrooper .t-16 {-webkit-clip-path: polygon(50% 83%, 28% 59%, 72% 59%);}
.stormtrooper .t-17 {-webkit-clip-path: polygon(23% 59%, 20% 76%, 44% 59%);}
.stormtrooper .t-18 {-webkit-clip-path: polygon(77% 59%, 56% 59%, 80% 76%);}
.stormtrooper .t-19 {-webkit-clip-path: polygon(50% 53%, 35% 65%, 50% 59%);}
.stormtrooper .t-20 {-webkit-clip-path: polygon(50% 53%, 50% 59%, 65% 65%);}

.stormtrooper .t-21 {-webkit-clip-path: polygon(20% 76%, 48% 80%, 35% 65%);}
.stormtrooper .t-22 {-webkit-clip-path: polygon(80% 76%, 52% 80%, 65% 65%);}
.stormtrooper .t-23 {-webkit-clip-path: polygon(20% 76%, 45% 86%, 45% 79%);}
.stormtrooper .t-24 {-webkit-clip-path: polygon(80% 76%, 55% 86%, 55% 79%);}
.stormtrooper .t-25 {-webkit-clip-path: polygon(20% 76%, 35% 93%, 45% 86%);}

.stormtrooper .t-26 {-webkit-clip-path: polygon(80% 76%, 65% 93%, 55% 86%);}
.stormtrooper .t-27 {-webkit-clip-path: polygon(45% 78%, 45% 88%, 55% 78%);}
.stormtrooper .t-28 {-webkit-clip-path: polygon(55% 78%, 55% 88%, 45% 88%);}
.stormtrooper .t-29 {-webkit-clip-path: polygon(30% 86%, 35% 91%, 43% 86%);}
.stormtrooper .t-30 {-webkit-clip-path: polygon(57% 86%, 65% 91%, 70% 86%);}


.stormtrooper .t-1,
.stormtrooper .t-4,
.stormtrooper .t-15,
.stormtrooper .t-21,
.stormtrooper .t-22 {background-color: #F5F5F5;}

.stormtrooper .t-2,
.stormtrooper .t-7,
.stormtrooper .t-8,
.stormtrooper .t-16,
.stormtrooper .t-23,
.stormtrooper .t-26 {background-color: #e8e8e8;}

.stormtrooper .t-3,
.stormtrooper .t-17,
.stormtrooper .t-18,
.stormtrooper .t-24,
.stormtrooper .t-25 {background-color: #dcdcdc;}

.stormtrooper .t-5,
.stormtrooper .t-12,
.stormtrooper .t-13,
.stormtrooper .t-19,
.stormtrooper .t-27,
.stormtrooper .t-29,
.stormtrooper .t-30 {background-color: #585858;}

.stormtrooper .t-6,
.stormtrooper .t-9,
.stormtrooper .t-10,
.stormtrooper .t-11,
.stormtrooper .t-14,
.stormtrooper .t-20,
.stormtrooper .t-28 {background-color: #252525;}

/* Boba Fett */

.bobafett .t-1 {-webkit-clip-path: polygon(50% 24%, 33% 29%, 67% 29%);}
.bobafett .t-2 {-webkit-clip-path: polygon(50% 48%, 33% 29%, 67% 29%);}
.bobafett .t-3 {-webkit-clip-path: polygon(33% 29%, 25% 48%, 50% 48%);}
.bobafett .t-4 {-webkit-clip-path: polygon(67% 29%, 75% 48%, 50% 48%);}
.bobafett .t-5 {-webkit-clip-path: polygon(25% 48%, 26% 50%, 74% 50%);}

.bobafett .t-6 {-webkit-clip-path: polygon(75% 48%, 74% 50%, 25% 48%);}
.bobafett .t-7 {-webkit-clip-path: polygon(25% 48%, 24% 56%, 30% 59%);}
.bobafett .t-8 {-webkit-clip-path: polygon(75% 48%, 76% 56%, 70% 59%);}
.bobafett .t-9 {-webkit-clip-path: polygon(26% 50%, 27% 53%, 45% 57%);}
.bobafett .t-10 {-webkit-clip-path: polygon(74% 50%, 73% 53%, 55% 57%);}

.bobafett .t-11 {-webkit-clip-path: polygon(26% 50%, 74% 50%, 50% 59%);}
.bobafett .t-12 {-webkit-clip-path: polygon(27% 53%, 30% 59%, 45% 57%);}
.bobafett .t-13 {-webkit-clip-path: polygon(73% 53%, 70% 59%, 55% 57%);}
.bobafett .t-14 {-webkit-clip-path: polygon(30% 59%, 45% 66%, 45% 57%);}
.bobafett .t-15 {-webkit-clip-path: polygon(70% 59%, 55% 66%, 55% 57%);}

.bobafett .t-16 {-webkit-clip-path: polygon(45% 57%, 45% 95%, 50% 59%);}
.bobafett .t-17 {-webkit-clip-path: polygon(55% 57%, 55% 95%, 50% 59%);}
.bobafett .t-18 {-webkit-clip-path: polygon(45% 95%, 50% 59%, 55% 95%);}
.bobafett .t-19 {-webkit-clip-path: polygon(35% 61%, 45% 95%, 45% 66%);}
.bobafett .t-20 {-webkit-clip-path: polygon(65% 61%, 55% 95%, 55% 66%);}

.bobafett .t-21 {-webkit-clip-path: polygon(24% 56%, 21% 82%, 35% 61%);}
.bobafett .t-22 {-webkit-clip-path: polygon(76% 56%, 79% 82%, 65% 61%);}
.bobafett .t-23 {-webkit-clip-path: polygon(75% 48%, 81% 81%, 79% 82%);}
.bobafett .t-24 {-webkit-clip-path: polygon(35% 61%, 21% 82%, 45% 95%);}
.bobafett .t-25 {-webkit-clip-path: polygon(65% 61%, 79% 82%, 55% 95%);}

.bobafett .t-26 {-webkit-clip-path: polygon(21% 43%, 26% 43%, 21% 82%);}
.bobafett .t-27 {-webkit-clip-path: polygon(22% 43%, 25% 12%, 24% 43%);}
.bobafett .t-28 {-webkit-clip-path: polygon(24% 43%, 25% 12%, 27% 11%);}
.bobafett .t-29 {-webkit-clip-path: polygon(29% 10%, 35% 11%, 35% 7%);}
.bobafett .t-30 {-webkit-clip-path: polygon(25% 12%, 23% 6%, 38% 6%);}



.bobafett .t-1,
.bobafett .t-2,
.bobafett .t-3,
.bobafett .t-4,
.bobafett .t-23,
.bobafett .t-24,
.bobafett .t-25 {background-color: #31563c;}

.bobafett .t-5,
.bobafett .t-6,
.bobafett .t-7,
.bobafett .t-8,
.bobafett .t-12,
.bobafett .t-13,
.bobafett .t-14,
.bobafett .t-15,
.bobafett .t-19,
.bobafett .t-20 {background-color: #82292b;}

.bobafett .t-9,
.bobafett .t-10,
.bobafett .t-11,
.bobafett .t-16,
.bobafett .t-17,
.bobafett .t-18,
.bobafett .t-21,
.bobafett .t-22,
.bobafett .t-30 {background-color: #1b1b1b;}

.bobafett .t-26 {background-color: #b3a24a;}

.bobafett .t-27,
.bobafett .t-28,
.bobafett .t-29 {background-color: #d3d3d5;}

/* R2D2 */

.r2d2 .t-1 {-webkit-clip-path: polygon(50% 29%, 34% 34%, 66% 34%);}
.r2d2 .t-2 {-webkit-clip-path: polygon(16% 67%, 16% 71%, 84% 67%);}
.r2d2 .t-3 {-webkit-clip-path: polygon(84% 67%, 84% 71%, 16% 71%);}
.r2d2 .t-4 {-webkit-clip-path: polygon(16% 63%, 16% 67%, 84% 63%);}
.r2d2 .t-5 {-webkit-clip-path: polygon(84% 63%, 84% 67%, 16% 67%);}

.r2d2 .t-6 {-webkit-clip-path: polygon(16% 59%, 16% 63%, 84% 59%);}
.r2d2 .t-7 {-webkit-clip-path: polygon(84% 59%, 84% 63%, 16% 63%);}
.r2d2 .t-8 {-webkit-clip-path: polygon(16% 59%, 22% 46%, 25% 59%);}
.r2d2 .t-9 {-webkit-clip-path: polygon(22% 46%, 25% 46%, 25% 59%);}
.r2d2 .t-10 {-webkit-clip-path: polygon(84% 59%, 78% 46%, 75% 59%);}

.r2d2 .t-11 {-webkit-clip-path: polygon(78% 46%, 75% 46%, 75% 59%);}
.r2d2 .t-12 {-webkit-clip-path: polygon(22% 46%, 34% 34%, 34% 46%);}
.r2d2 .t-13 {-webkit-clip-path: polygon(78% 46%, 66% 34%, 66% 46%);}
.r2d2 .t-14 {-webkit-clip-path: polygon(25% 46%, 30% 46%, 25% 59%);}
.r2d2 .t-15 {-webkit-clip-path: polygon(30% 59%, 30% 46%, 25% 59%);}

.r2d2 .t-16 {-webkit-clip-path: polygon(75% 46%, 70% 46%, 75% 59%);}
.r2d2 .t-17 {-webkit-clip-path: polygon(70% 59%, 70% 46%, 75% 59%);}
.r2d2 .t-18 {-webkit-clip-path: polygon(30% 46%, 30% 59%, 34% 59%);}
.r2d2 .t-19 {-webkit-clip-path: polygon(30% 46%, 34% 46%, 34% 59%);}
.r2d2 .t-20 {-webkit-clip-path: polygon(70% 46%, 70% 59%, 66% 59%);}

.r2d2 .t-21 {-webkit-clip-path: polygon(70% 46%, 66% 46%, 66% 59%);}
.r2d2 .t-22 {-webkit-clip-path: polygon(34% 34%, 34% 59%, 66% 34%);}
.r2d2 .t-23 {-webkit-clip-path: polygon(66% 59%, 34% 59%, 66% 34%);}
.r2d2 .t-24 {-webkit-clip-path: polygon(42% 37%, 38% 59%, 54% 37%);}
.r2d2 .t-25 {-webkit-clip-path: polygon(38% 59%, 54% 37%, 58% 59%);}

.r2d2 .t-26 {-webkit-clip-path: polygon(48% 38%, 43% 43%, 53% 43%);}
.r2d2 .t-27 {-webkit-clip-path: polygon(48% 48%, 43% 43%, 53% 43%);}
.r2d2 .t-28 {-webkit-clip-path: polygon(59% 54%, 65% 54%, 62% 58%);}
.r2d2 .t-29 {-webkit-clip-path: polygon(49% 54%, 55% 54%, 52% 58%);}
.r2d2 .t-30 {-webkit-clip-path: polygon(50% 29%, 49% 34%, 51% 34%);}


.r2d2 .t-1,
.r2d2 .t-4,
.r2d2 .t-5,
.r2d2 .t-8,
.r2d2 .t-9,
.r2d2 .t-10,
.r2d2 .t-11,
.r2d2 .t-18,
.r2d2 .t-19,
.r2d2 .t-20,
.r2d2 .t-21,
.r2d2 .t-24,
.r2d2 .t-25 {background-color: #225c92;}

.r2d2 .t-2,
.r2d2 .t-3,
.r2d2 .t-6,
.r2d2 .t-7,
.r2d2 .t-12,
.r2d2 .t-13,
.r2d2 .t-14,
.r2d2 .t-15,
.r2d2 .t-16,
.r2d2 .t-17,
.r2d2 .t-22,
.r2d2 .t-23,
.r2d2 .t-30 {background-color: #c8c8c8;}

.r2d2 .t-26,
.r2d2 .t-27,
.r2d2 .t-28 {background-color: #313841;}

.r2d2 .t-29 {background-color: #be0c19;}

/* Darth Maul */

.darthmaul .t-1 {-webkit-clip-path: polygon(50% 33%, 38% 17%, 62% 17%);}
.darthmaul .t-2 {-webkit-clip-path: polygon(38% 17%, 33% 31%, 50% 33%);}
.darthmaul .t-3 {-webkit-clip-path: polygon(62% 17%, 67% 31%, 50% 33%);}
.darthmaul .t-4 {-webkit-clip-path: polygon(33% 31%, 50% 50%, 50% 33%);}
.darthmaul .t-5 {-webkit-clip-path: polygon(67% 31%, 50% 50%, 50% 33%);}

.darthmaul .t-6 {-webkit-clip-path: polygon(33% 31%, 47% 46%, 37% 61%);}
.darthmaul .t-7 {-webkit-clip-path: polygon(67% 31%, 53% 46%, 63% 61%);}
.darthmaul .t-8 {-webkit-clip-path: polygon(50% 12%, 46% 20%, 54% 20%);}
.darthmaul .t-9 {-webkit-clip-path: polygon(38% 17%, 34% 10%, 34% 22%);}
.darthmaul .t-10 {-webkit-clip-path: polygon(62% 17%, 66% 10%, 66% 22%);}

.darthmaul .t-11 {-webkit-clip-path: polygon(33% 31%, 26% 50%, 37% 61%);}
.darthmaul .t-12 {-webkit-clip-path: polygon(67% 31%, 74% 50%, 63% 61%);}
.darthmaul .t-13 {-webkit-clip-path: polygon(32% 25%, 27% 30%, 25% 23%);}
.darthmaul .t-14 {-webkit-clip-path: polygon(68% 25%, 73% 30%, 75% 23%);}
.darthmaul .t-15 {-webkit-clip-path: polygon(38% 17%, 27% 30%, 26% 50%);}

.darthmaul .t-16 {-webkit-clip-path: polygon(62% 17%, 73% 30%, 74% 50%);}
.darthmaul .t-17 {-webkit-clip-path: polygon(26% 50%, 27% 60%, 33% 67%);}
.darthmaul .t-18 {-webkit-clip-path: polygon(74% 50%, 73% 60%, 67% 67%);}
.darthmaul .t-19 {-webkit-clip-path: polygon(26% 50%, 37% 61%, 33% 67%);}
.darthmaul .t-20 {-webkit-clip-path: polygon(74% 50%, 63% 61%, 67% 67%);}

.darthmaul .t-21 {-webkit-clip-path: polygon(27% 60%, 31% 76%, 41% 76%);}
.darthmaul .t-22 {-webkit-clip-path: polygon(73% 60%, 69% 76%, 59% 76%);}
.darthmaul .t-23 {-webkit-clip-path: polygon(31% 76%, 40% 89%, 50% 76%);}
.darthmaul .t-24 {-webkit-clip-path: polygon(69% 76%, 60% 89%, 50% 76%);}
.darthmaul .t-25 {-webkit-clip-path: polygon(50% 76%, 40% 89%, 60% 89%);}

.darthmaul .t-26 {-webkit-clip-path: polygon(33% 67%, 50% 41%, 41% 76%);}
.darthmaul .t-27 {-webkit-clip-path: polygon(67% 67%, 50% 41%, 59% 76%);}
.darthmaul .t-28 {-webkit-clip-path: polygon(50% 41%, 41% 76%, 59% 76%);}
.darthmaul .t-29 {-webkit-clip-path: polygon(36% 48%, 45% 48%, 42% 50%);}
.darthmaul .t-30 {-webkit-clip-path: polygon(64% 48%, 55% 48%, 58% 50%);}




.darthmaul .t-1,
.darthmaul .t-6,
.darthmaul .t-7,
.darthmaul .t-15,
.darthmaul .t-16,
.darthmaul .t-19,
.darthmaul .t-20,
.darthmaul .t-21,
.darthmaul .t-22,
.darthmaul .t-23,
.darthmaul .t-24,
.darthmaul .t-28 {background-color: #1d1d1b;}

.darthmaul .t-2,
.darthmaul .t-3,
.darthmaul .t-4,
.darthmaul .t-5,
.darthmaul .t-11,
.darthmaul .t-12,
.darthmaul .t-17,
.darthmaul .t-18,
.darthmaul .t-25,
.darthmaul .t-26,
.darthmaul .t-27 {background-color: #d8181d;}

.darthmaul .t-8,
.darthmaul .t-9,
.darthmaul .t-10,
.darthmaul .t-13,
.darthmaul .t-14 {background-color: #d8a749;}


.darthmaul .t-29,
.darthmaul .t-30 {background-color: #FFFFFF;}

/* Yoda */

.yoda .t-1 {-webkit-clip-path: polygon(50% 27%, 41% 30%, 59% 30%);}
.yoda .t-2 {-webkit-clip-path: polygon(50% 45%, 41% 30%, 59% 30%);}
.yoda .t-3 {-webkit-clip-path: polygon(50% 44%, 39% 68%, 61% 68%);}
.yoda .t-4 {-webkit-clip-path: polygon(50% 44%, 41% 30%, 31% 44%);}
.yoda .t-5 {-webkit-clip-path: polygon(50% 44%, 59% 30%, 69% 44%);}

.yoda .t-6 {-webkit-clip-path: polygon(32% 44%, 5% 47%, 31% 59%);}
.yoda .t-7 {-webkit-clip-path: polygon(28% 49%, 12% 48%, 29% 57%);}
.yoda .t-8 {-webkit-clip-path: polygon(68% 44%, 95% 47%, 69% 59%);}
.yoda .t-9 {-webkit-clip-path: polygon(72% 49%, 88% 48%, 71% 57%);}
.yoda .t-10 {-webkit-clip-path: polygon(31% 44%, 50% 44%, 43% 60%);}

.yoda .t-11 {-webkit-clip-path: polygon(69% 44%, 50% 44%, 57% 60%);}
.yoda .t-12 {-webkit-clip-path: polygon(31% 44%, 31% 59%, 44% 61%);}
.yoda .t-13 {-webkit-clip-path: polygon(69% 44%, 69% 59%, 56% 61%);}
.yoda .t-14 {-webkit-clip-path: polygon(31% 59%, 39% 68%, 43% 60%);}
.yoda .t-15 {-webkit-clip-path: polygon(69% 59%, 61% 68%, 57% 60%);}

.yoda .t-16 {-webkit-clip-path: polygon(50% 75%, 39% 68%, 61% 68%);}
.yoda .t-17 {-webkit-clip-path: polygon(38% 53%, 42% 51%, 45% 55%);}
.yoda .t-18 {-webkit-clip-path: polygon(38% 53%, 39% 55%, 45% 55%);}
.yoda .t-19 {-webkit-clip-path: polygon(42% 51%, 41% 55%, 44% 54%);}
.yoda .t-20 {-webkit-clip-path: polygon(62% 53%, 58% 51%, 55% 55%);}

.yoda .t-21 {-webkit-clip-path: polygon(62% 53%, 61% 55%, 55% 55%);}
.yoda .t-22 {-webkit-clip-path: polygon(58% 51%, 59% 55%, 56% 54%);}
.yoda .t-23 {-webkit-clip-path: polygon(43% 28%, 42% 30%, 43% 38%);}
.yoda .t-24 {-webkit-clip-path: polygon(57% 28%, 58% 30%, 57% 38%);}
.yoda .t-25 {-webkit-clip-path: polygon(47% 27%, 46% 29%, 48% 38%);}

.yoda .t-26 {-webkit-clip-path: polygon(53% 27%, 54% 29%, 52% 38%);}
.yoda .t-27 {-webkit-clip-path: polygon(50% 42%, 38% 41%, 62% 41%);}
.yoda .t-28 {-webkit-clip-path: polygon(50% 44%, 40% 43%, 60% 43%);}
.yoda .t-29 {-webkit-clip-path: polygon(50% 46%, 42% 45%, 58% 45%);}
.yoda .t-30 {-webkit-clip-path: polygon(50% 48%, 44% 47%, 56% 47%);}

.yoda .t-1,
.yoda .t-2,
.yoda .t-3,
.yoda .t-4,
.yoda .t-5,
.yoda .t-6,
.yoda .t-8,
.yoda .t-10,
.yoda .t-11,
.yoda .t-12,
.yoda .t-13,
.yoda .t-14,
.yoda .t-15,
.yoda .t-16 {background-color: #99af65;}

.yoda .t-7,
.yoda .t-9,
.yoda .t-27,
.yoda .t-28,
.yoda .t-29,
.yoda .t-30 {background-color: #62704d;}

.yoda .t-17,
.yoda .t-18,
.yoda .t-20,
.yoda .t-21,
.yoda .t-23,
.yoda .t-24,
.yoda .t-25,
.yoda .t-26 {background-color: #FFFFFF;}

.yoda .t-19,
.yoda .t-22 {background-color: #FFFFFF;}





/* Chewbacca */

.chewbacca .t-1 {-webkit-clip-path: polygon(50% 46%, 43% 14%, 57% 14%);}
.chewbacca .t-2 {-webkit-clip-path: polygon(50% 46%, 43% 14%, 30% 25%);}
.chewbacca .t-3 {-webkit-clip-path: polygon(50% 46%, 70% 25%, 57% 14%);}
.chewbacca .t-4 {-webkit-clip-path: polygon(30% 25%, 26% 40%, 45% 40%);}
.chewbacca .t-5 {-webkit-clip-path: polygon(70% 25%, 74% 40%, 55% 40%);}

.chewbacca .t-6 {-webkit-clip-path: polygon(26% 40%, 26% 60%, 44% 51%);}
.chewbacca .t-7 {-webkit-clip-path: polygon(74% 40%, 74% 60%, 56% 51%);}
.chewbacca .t-8 {-webkit-clip-path: polygon(50% 46%, 36% 40%, 44% 51%);}
.chewbacca .t-9 {-webkit-clip-path: polygon(50% 46%, 64% 40%, 56% 51%);}
.chewbacca .t-10 {-webkit-clip-path: polygon(26% 40%, 36% 40%, 44% 51%);}

.chewbacca .t-11 {-webkit-clip-path: polygon(74% 40%, 64% 40%, 56% 51%);}
.chewbacca .t-12 {-webkit-clip-path: polygon(50% 46%, 45% 40%, 47% 45%);}
.chewbacca .t-13 {-webkit-clip-path: polygon(50% 46%, 55% 40%, 53% 45%);}
.chewbacca .t-14 {-webkit-clip-path: polygon(36% 40%, 45% 40%, 47% 45%);}
.chewbacca .t-15 {-webkit-clip-path: polygon(64% 40%, 55% 40%, 53% 45%);}

.chewbacca .t-16 {-webkit-clip-path: polygon(26% 60%, 39% 74%, 44% 51%);}
.chewbacca .t-17 {-webkit-clip-path: polygon(74% 60%, 61% 74%, 56% 51%);}
.chewbacca .t-18 {-webkit-clip-path: polygon(26% 60%, 26% 67%, 32% 66%);}
.chewbacca .t-19 {-webkit-clip-path: polygon(74% 60%, 74% 67%, 68% 66%);}
.chewbacca .t-20 {-webkit-clip-path: polygon(32% 66%, 39% 74%, 33% 78%);}

.chewbacca .t-21 {-webkit-clip-path: polygon(68% 66%, 61% 74%, 67% 78%);}
.chewbacca .t-22 {-webkit-clip-path: polygon(50% 90%, 40% 80%, 60% 80%);}
.chewbacca .t-23 {-webkit-clip-path: polygon(50% 80%, 39% 74%, 40% 80%);}
.chewbacca .t-24 {-webkit-clip-path: polygon(50% 80%, 61% 74%, 60% 80%);}
.chewbacca .t-25 {-webkit-clip-path: polygon(50% 80%, 44% 51%, 39% 74%);}

.chewbacca .t-26 {-webkit-clip-path: polygon(50% 80%, 56% 51%, 61% 74%);}
.chewbacca .t-27 {-webkit-clip-path: polygon(50% 80%, 44% 51%, 56% 51%);}
.chewbacca .t-28 {-webkit-clip-path: polygon(50% 64%, 45% 58%, 55% 58%);}
.chewbacca .t-29 {-webkit-clip-path: polygon(50% 55%, 45% 58%, 55% 58%);}
.chewbacca .t-30 {-webkit-clip-path: polygon(50% 46%, 44% 51%, 56% 51%);}

.chewbacca .t-1,
.chewbacca .t-8,
.chewbacca .t-12,
.chewbacca .t-13,
.chewbacca .t-20,
.chewbacca .t-22,
.chewbacca .t-23,
.chewbacca .t-25,
.chewbacca .t-28 {background-color: #c6a68a;}

.chewbacca .t-2,
.chewbacca .t-6,
.chewbacca .t-9,
.chewbacca .t-11,
.chewbacca .t-17,
.chewbacca .t-21,
.chewbacca .t-24,
.chewbacca .t-27 {background-color: #8e6c52;}

.chewbacca .t-3,
.chewbacca .t-4,
.chewbacca .t-5,
.chewbacca .t-7,
.chewbacca .t-10,
.chewbacca .t-16,
.chewbacca .t-18,
.chewbacca .t-19,
.chewbacca .t-26,
.chewbacca .t-29 {background-color: #6b5344;}

.chewbacca .t-14,
.chewbacca .t-15,
.chewbacca .t-30 {background-color: #2c2b2a;}
</style>

	<div class="block_trend__animation">
		<h1>Trend One: Animations are Cool...</h1>
		<div class="trend trend_one">
			<div class="kyloren" id="animateMe">
				<div class="wrapper">
					<div class="console">
						<h1>POLYGONS OF STAR WARS</h1><button id="kyloren">Kylo Ren</button> <button id="darthmaul">Darth Maul</button> <button id="stormtrooper">Stormtrooper</button> <button id="bobafett">Boba Fett</button> <button id="darthvader">Darth Vader</button> <button id="r2d2">R2-D2</button> <button id="yoda">Yoda</button> <button id="chewbacca">Chewbacca</button>
					</div>
					<div class="stage">
						<div class="main-stage full-width">
							<div class="triangle t-1"></div>
							<div class="triangle t-2"></div>
							<div class="triangle t-3"></div>
							<div class="triangle t-4"></div>
							<div class="triangle t-5"></div>
							<div class="triangle t-6"></div>
							<div class="triangle t-7"></div>
							<div class="triangle t-8"></div>
							<div class="triangle t-9"></div>
							<div class="triangle t-10"></div>
							<div class="triangle t-11"></div>
							<div class="triangle t-12"></div>
							<div class="triangle t-13"></div>
							<div class="triangle t-14"></div>
							<div class="triangle t-15"></div>
							<div class="triangle t-16"></div>
							<div class="triangle t-17"></div>
							<div class="triangle t-18"></div>
							<div class="triangle t-19"></div>
							<div class="triangle t-20"></div>
							<div class="triangle t-21"></div>
							<div class="triangle t-22"></div>
							<div class="triangle t-23"></div>
							<div class="triangle t-24"></div>
							<div class="triangle t-25"></div>
							<div class="triangle t-26"></div>
							<div class="triangle t-27"></div>
							<div class="triangle t-28"></div>
							<div class="triangle t-29"></div>
							<div class="triangle t-30"></div>
						</div>
						<div class="stage-quote full-width">
							<h2 class="quote-stormtrooper">These aren't the droids we're looking for.</h2>
							<h2 class="quote-bobafett">As you wish.</h2>
							<h2 class="quote-kyloren">I'll show you the Dark Side</h2>
							<h2 class="quote-darthvader">I find your lack of faith disturbing.</h2>
							<h2 class="quote-darthmaul">I should have gotten more screen time.</h2>
							<h2 class="quote-r2d2">*Beep boop Beep*</h2>
							<h2 class="quote-yoda">Do or do not. There is no try.</h2>
							<h2 class="quote-chewbacca">RAWRGWAWGGR</h2>
            </div>
            <p>Check out <a href="https://codepen.io/LloydJames/" target="_blank">Lloyd James'</a> author page for these pens and more.</p>
					</div>
				</div>
			</div>
			<div class="trend_explanation trend_explanation__animation">
				<h3>Apollonius of Perga Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium a very small stage in a vast cosmic arena citizens of distant epochs colonies explorations? Made in the interiors of collapsing stars not a sunrise but a galaxyrise paroxysm of global death courage of our questions Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit the sky calls to us and billions upon billions upon billions upon billions upon billions upon billions upon billions.</h3>
			</div>

		<div class="trend_rank_importance">
			<h3>Importance of this trend:</h3>
			<div class="slide_rank">
				<div class="slide_rank__inner" style="width:100%;">
					100%
				</div>
			</div>
		</div>
    </div>
	</div>

  <div class="block_trend__organic">
    <h1>Trend Two: The Organic Movement...</h1>
    <div class="trend trend_two">
      <div class="trend_explanation trend_explanation__organic">
        <h3>Birth Orion's sword great turbulent clouds astonishment consciousness Vangelis. Shores of the cosmic ocean cosmic fugue brain is the seed of intelligence rich in mystery rings of Uranus dream of the mind's eye. Emerged into consciousness not a sunrise but a galaxyrise permanence of the stars hydrogen atoms rich in mystery brain is the seed of intelligence. Made in the interiors of collapsing stars the ash of stellar alchemy are creatures of the cosmos encyclopaedia galactica the carbon in our apple pies encyclopaedia galactica and billions upon billions upon billions upon billions upon billions upon billions upon billions.</h3>
      </div>
      <img src="<?= home_url('/wp-content/themes/shapely-child/img/xavier.jpg');?>">
      <div class="trend_rank_importance">
  			<h3>Importance of this trend:</h3>
  			<div class="slide_rank">
  				<div class="slide_rank__inner" style="width:83%;">
  					83%
  				</div>
  			</div>
  		</div>
    </div>
  </div>

	<div class="block_trend__pageTransitions">
		<h1>Trend Three: All About Those Transitions...</h1>
		<div class="trend trend_three">
		<img src="<?= home_url('/wp-content/themes/shapely-child/img/turnkey.gif');?>">
		<div class="trend_explanation trend_explanation__pageTransitions">
			<h3>Birth Orion's sword great turbulent clouds astonishment consciousness Vangelis. Shores of the cosmic ocean cosmic fugue brain is the seed of intelligence rich in mystery rings of Uranus dream of the mind's eye. Emerged into consciousness not a sunrise but a galaxyrise permanence of the stars hydrogen atoms rich in mystery brain is the seed of intelligence. Made in the interiors of collapsing stars the ash of stellar alchemy are creatures of the cosmos encyclopaedia galactica the carbon in our apple pies encyclopaedia galactica and billions upon billions upon billions upon billions upon billions upon billions upon billions.</h3>
		</div>
			<div class="trend_rank_importance">
				<h3>Importance of this trend:</h3>
				<div class="slide_rank">
					<div class="slide_rank__inner" style="width:94%;">
						94%
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="block_trend__serif">
		<h1>Trend Four: Serifs Up...</h1>
		<div class="trend trend_four">
		<img src="<?= home_url('/wp-content/themes/shapely-child/img/serif.jpg');?>">
		<div class="trend_explanation trend_explanation__serif">
			<h3>Birth Orion's sword great turbulent clouds astonishment consciousness Vangelis. Shores of the cosmic ocean cosmic fugue brain is the seed of intelligence rich in mystery rings of Uranus dream of the mind's eye. Emerged into consciousness not a sunrise but a galaxyrise permanence of the stars hydrogen atoms rich in mystery brain is the seed of intelligence. Made in the interiors of collapsing stars the ash of stellar alchemy are creatures of the cosmos encyclopaedia galactica the carbon in our apple pies encyclopaedia galactica and billions upon billions upon billions upon billions upon billions upon billions upon billions.</h3>
		</div>
			<div class="trend_rank_importance">
				<h3>Importance of this trend:</h3>
				<div class="slide_rank">
					<div class="slide_rank__inner" style="width:73%;">
						73%
					</div>
				</div>
			</div>
		</div>
	</div>
<script src="<?php echo site_url('/wp-content/themes/shapely-child/animate.js');?>"></script>
<?php get_footer(); ?>
