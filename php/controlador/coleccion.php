<?php 
	if (isset($_REQUEST['html'])) {
?>
		<div style="max-width:800px; margin: 20px auto;" class="white-popup-block" id="custom-content">
		    <h1 class="test">HTML content, loaded via ajax</h1>
		    <style>
		    #custom-content img {max-width: 100%;margin-bottom: 10px;}
		    </style>
		    <p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show. He who searches for meaning here will be sorely disappointed.  These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. </p>
		   	<p>This is dummy copy. It's Greek to you. Unless, of course, you're Greek, in which case, it really makes no sense. Why, you can't even read it!  It is strictly for mock-ups. You may mock it up as strictly as you wish.</p>
			<img src="img/slide/<?php echo $_REQUEST['html'];  ?>.png">
		</div>		
<?php
	}

 ?>