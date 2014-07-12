<form action="show.php" method="POST">
	<fieldset>
		<legend>FTFL Batch</legend>
		<span class="msg">
			<?php
			if(isset($_GET["len"])){
				if($_GET["len"]=="short"){
					echo "Your Batch Name is too short.<br/>";
				}
			elseif ($_GET["len"]=="long") {
					echo "Your Batch Name is too long.<br/>";
				}	
			}
			?>	
		</span>
		<label>
			<span>Batch Name</span>
			<input type="text" name="batch_name"/>
		</label>
		<label>
			<input type="submit" value="Submit"/>
		</label>
	</fieldset>		
</form>
