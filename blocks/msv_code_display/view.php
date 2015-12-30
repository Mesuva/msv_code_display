<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<figure class="msv-code-display" id="msv-code-display-<?=$unique_identifier?>">

<?php if ($title) { ?>
<h3 class="msv-code-display-title"><?php echo h($title);?></h3>
<?php } ?>

<pre class="msv-code-editor" id="editor-<?=$unique_identifier?>"><span><?php echo htmlspecialchars($content); ?></pre>

<?php if ($description) { ?>
    <figcaption class="msv-code-display-description"><?php echo $description;?></figcaption>
<?php } ?>

<script>
$("#editor-<?=$unique_identifier?> span").hide();

$(document).ready(function() {
    var editor = ace.edit("editor-<?=$unique_identifier?>");
    editor.setTheme("ace/theme/<?= $theme; ?>");
    editor.getSession().setMode({path:"ace/mode/<?= $language; ?>", inline:true});
    editor.getSession().setUseWorker(false);
    editor.setShowPrintMargin(false);
    editor.renderer.setShowGutter(<?= $showLineNumbers; ?>);
    editor.setFontSize(<?= $fontSize; ?>);
    editor.setHighlightActiveLine(false);
    editor.setReadOnly(true);
    editor.setShowFoldWidgets(false);

    editor.setOption("showInvisibles", <?= isset($showInvisibles) ? $showInvisibles : 0 ; ?>);

    <?php if ($maximumLines > 0) {
    $contentlines =  min(substr_count($content, "\n") + 1, $maximumLines);
    ?>
     editor.setOptions({
        minLines: <?=$contentlines;?>, maxLines: <?=$contentlines;?>
    });
    <?php } else { ?>
    editor.setOptions({
        maxLines: Infinity
    });
    <?php } ?>

    <?php if ($lineWrapping) { ?>
    editor.getSession().setUseWrapMode(true);
    <?php } else { ?>
    editor.renderer.setScrollMargin(0, <?= $fontSize; ?> + 6, 0, 0);
    <?php } ?>
});

</script>
</figure>