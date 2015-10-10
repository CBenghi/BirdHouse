<?php
$active_tab = "Patterns";
include_once("header.php");
?>



<div class="row-fluid">
        <div class="page-header">Welcome to <b>"BirdHouses"</b>
            <p>Select the colour pattern you prefer and set your imagination free to fly everywhere you wish.</p>
			
			<p>WhoAmI: 
			<?php
// outputs the username that owns the running php/httpd process
// (on a system with the "whoami" executable in the path)
echo exec('whoami');
?>
			</p>
			
			<p>Command: 
			<?php
			$command = 'aplay -Dhw:1,0 /var/www/sounds/piano2.wav';
			// $command = "ls";
			// $command .= " 2>&1";
			echo $command
			?>
			</p>
			<p>Result:
			<?php
			exec($command, $output, $return_value);
			var_dump($output);
			?>
			</p>
			
        </div>
  
    <section>
        <div class="span12">
            <div id="buttons" class="row-fluid">
	            <p><a href="/">Back to home</a></p>
            </div>
			<div id="msg">
				<p>Thanks for your selection; enjoy!</p>
			</div>
        </div>
    </section>
</div>
<?php
include_once("footer.php");
?>





