<?php
/**
 * Template for messaging (e.g. errors)
 */

?>
<?php if (isset($msg)) { ?>
	<div class="main-msg alert alert-<?php echo ($msg['type']=='notification')?'success':'error'; ?>">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<?php echo $msg['msg']; ?>
	</div>
<?php } ?>