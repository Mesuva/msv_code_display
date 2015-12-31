<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<figure class="msv-code-display" id="msv-code-display-<?php echo $unique_identifier?>">

<?php if ($title) { ?>
<h3 class="msv-code-display-title"><?php echo h($title);?></h3>
<?php } ?>

<pre class="msv-code-editor" id="editor-<?php echo $unique_identifier?>"><?php echo htmlspecialchars($content); ?></pre>

<?php if ($description) { ?>
    <figcaption class="msv-code-display-description"><?php echo $description;?></figcaption>
<?php } ?>

<script>

$(document).ready(function() {
    var editor = ace.edit("editor-<?php echo $unique_identifier?>");
    editor.setTheme("ace/theme/<?php echo $theme; ?>");
    editor.getSession().setMode({path:"ace/mode/<?php echo $language; ?>", inline:true});
    editor.getSession().setUseWorker(false);
    editor.setShowPrintMargin(false);
    editor.renderer.setShowGutter(<?php echo $showLineNumbers; ?>);
    editor.setFontSize(<?php echo $fontSize; ?>);
    editor.setHighlightActiveLine(false);
    editor.setReadOnly(true);
    editor.setShowFoldWidgets(false);
    editor.setOption("showInvisibles", <?php echo isset($showInvisibles) ? $showInvisibles : 0 ; ?>);

    <?php if ($maximumLines > 0) {
    $contentlines =  min(substr_count($content, "\n") + 1, $maximumLines);
    ?>
     editor.setOptions({
        minLines: <?php echo $contentlines;?>, maxLines: <?php echo $contentlines;?>
    });
    <?php } else { ?>
    editor.setOptions({
        maxLines: Infinity
    });
    <?php } ?>

    <?php if ($lineWrapping) { ?>
    editor.getSession().setUseWrapMode(true);
    <?php } else { ?>
    editor.renderer.setScrollMargin(0, <?php echo $fontSize; ?> + 6, 0, 0);
    <?php } ?>
});

</script>
</figure>