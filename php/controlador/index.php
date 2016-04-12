<?php 
	if (isset($_REQUEST['view']) && isset($_REQUEST['index'])) {
		require_once "../../".$_REQUEST['view'].".html";
	}elseif(isset($_REQUEST['view'])){
		require_once "../../".$_REQUEST['view'].".html";
	}
 ?>