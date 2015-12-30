<?php defined('C5_EXECUTE') or die('Access Denied.'); ?>

<div id="MSVCodeDisplay<?php echo intval($bID)?>" class="msv-code-display" style="max-height:200px; overflow:auto">
<?php echo h(substr($content, 0, 200)); ?>
</div>
