<?php
$active_tab = "Patterns";
include_once("header.php");
include_once("bird_array.php");
?>
<script type="text/javascript" src="js/imageMapResizer.min.js"></script>
<script type="text/javascript"> 
    (function ($) {
        $(document).ready(function () {
			$('map').imageMapResize();
		});
    })(jQuery);
</script>
<div class="row-fluid">
	<div class="page-header">Welcome to <b>"BirdHouses"</b>
		<p>Click one of the birdhouses</p>
		<img src="/img/tree.png" usemap="#bhmap" border="0" width="100%">
		<map id="bhmap" name="bhmap">
			<area shape="rect" alt="Discover" title="Discover" coords="0,499,102,634"   href="Bird.php?Id=0" />
			<area shape="rect" alt="Discover" title="Discover" coords="99,345,233,493"  href="Bird.php?Id=1" />
			<area shape="rect" alt="Discover" title="Discover" coords="189,118,319,262" href="Bird.php?Id=2" />
			<area shape="rect" alt="Discover" title="Discover" coords="359,98,481,253"  href="Bird.php?Id=3" />
			<area shape="rect" alt="Discover" title="Discover" coords="441,1,549,98"    href="Bird.php?Id=4" />
			<area shape="rect" alt="Discover" title="Discover" coords="555,17,682,133"  href="Bird.php?Id=5" />
			<area shape="rect" alt="Discover" title="Discover" coords="554,149,673,285" href="Bird.php?Id=6" />
			<area shape="rect" alt="Discover" title="Discover" coords="680,184,780,321" href="Bird.php?Id=7" />
			<area shape="rect" alt="Discover" title="Discover" coords="510,434,615,561" href="Bird.php?Id=8" />
			<area shape="rect" alt="Discover" title="Discover" coords="684,395,795,534" href="Bird.php?Id=9" />
		</map>
	</div>
    <section>
        <div class="span12">
            <div id="buttons" class="row-fluid">
				<p>
				<?
					for($x = 0; $x < $Birdcount; $x++) { ?>
					<a href="Bird.php?Id=<?= $x ?>"><?= $BirdNames[$x] ?></a><br>
					<?php } ?>
				</p>
            </div>
        </div>
    </section>
</div>
<?php
include_once("footer.php");
?>