<?php
$active_tab = "Patterns";
include_once("header.php");
include_once("bird_array.php");
?>
<script type="text/javascript"> 
    (function ($) {
        $(document).ready(function () {
			$("#answer").hide();
			$("#allbusy").hide();
			$.get("PlaySound.php?Id=<?= $BirdID ?>", function (data) {
				$("#question").hide();
				if (data.response.state == 'allbusy') {
					$("#allbusy").show();
				}
				else {
					$("#answer").show();
				}
			});
	 });
    })(jQuery);
</script>
<div class="row-fluid">
    <section>		
        <div class="span12">
			<div id="question">
				<p>Can you identify whose bird is this song?</p>
				<img style="width: 100%;" src="/img/birdQuestionMark.png">
			</div>
			<div id="answer" style="display: none;">
				<p>It was the <b><?= $BirdNames[$BirdID] ?></b>!</p>
				<img style="width: 100%;" src="/img/<?= $BirdID ?>.jpg">
				<p><b>Do you know that birds are in need of help?</b></p>
				<p>Their numbers are in the decline also because a decrease in suitable nesting sites. 
				This means that building a birdhouse/nest box for birds will not only entice them to stay in your yard, but help these birds chance for survival.</p>
				<p><a href="/">Try again</a></p>
			</div>
			<div id="allbusy" style="display: none;" >
				<p>Sorry, all speakers are busy!</p>
				<p><a href="/">Try again</a> in a little-bit</p>
			</div>
        </div>
    </section>
</div>
<?php
include_once("footer.php");
?>





