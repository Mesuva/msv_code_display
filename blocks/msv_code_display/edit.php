<?php defined('C5_EXECUTE') or die("Access Denied."); ?>


<div class="row">
    <div class="col-xs-6">
        <div class="form-group">
            <?php echo $form->label('language',t("Language")); ?>
            <?php echo $form->select('language',array(
            'abap'=>'ABAP',
            'abc'=>'ABC',
            'actionscript'=>'ActionScript',
            'ada'=>'ADA',
            'apache_conf'=>'Apache Conf',
            'asciidoc'=>'AsciiDoc',
            'assembly_x86'=>'Assembly x86',
            'autohotkey'=>'AutoHotKey',
            'batchfile'=>'BatchFile',
            'c_cpp'=>'C and C++',
            'c9search'=>'C9Search',
            'cirru'=>'Cirru',
            'clojure'=>'Clojure',
            'cobol'=>'Cobol',
            'coffee'=>'CoffeeScript',
            'coldfusion'=>'ColdFusion',
            'csharp'=>'C#',
            'css'=>'CSS',
            'curly'=>'Curly',
            'd'=>'D',
            'dart'=>'Dart',
            'diff'=>'Diff',
            'dockerfile'=>'Dockerfile',
            'dot'=>'Dot',
            'dummy'=>'Dummy',
            'dummysyntax'=>'DummySyntax',
            'eiffel'=>'Eiffel',
            'ejs'=>'EJS',
            'elixir'=>'Elixir',
            'elm'=>'Elm',
            'erlang'=>'Erlang',
            'forth'=>'Forth',
            'ftl'=>'FreeMarker',
            'gcode'=>'Gcode',
            'gherkin'=>'Gherkin',
            'gitignore'=>'Gitignore',
            'glsl'=>'Glsl',
            'golang'=>'Go',
            'groovy'=>'Groovy',
            'haml'=>'HAML',
            'handlebars'=>'Handlebars',
            'haskell'=>'Haskell',
            'haxe'=>'haXe',
            'html'=>'HTML',
            'html_ruby'=>'HTML (Ruby)',
            'ini'=>'INI',
            'io'=>'Io',
            'jack'=>'Jack',
            'jade'=>'Jade',
            'java'=>'Java',
            'javascript'=>'JavaScript',
            'json'=>'JSON',
            'jsoniq'=>'JSONiq',
            'jsp'=>'JSP',
            'jsx'=>'JSX',
            'julia'=>'Julia',
            'latex'=>'LaTeX',
            'lean'=>'Lean',
            'less'=>'LESS',
            'liquid'=>'Liquid',
            'lisp'=>'Lisp',
            'livescript'=>'LiveScript',
            'logiql'=>'LogiQL',
            'lsl'=>'LSL',
            'lua'=>'Lua',
            'luapage'=>'LuaPage',
            'lucene'=>'Lucene',
            'makefile'=>'Makefile',
            'markdown'=>'Markdown',
            'mask'=>'Mask',
            'matlab'=>'MATLAB',
            'maze'=>'Maze',
            'mel'=>'MEL',
            'mushcode'=>'MUSHCode',
            'mysql'=>'MySQL',
            'nix'=>'Nix',
            'objectivec'=>'Objective-C',
            'ocaml'=>'OCaml',
            'pascal'=>'Pascal',
            'perl'=>'Perl',
            'pgsql'=>'pgSQL',
            'php'=>'PHP',
            'powershell'=>'Powershell',
            'praat'=>'Praat',
            'prolog'=>'Prolog',
            'properties'=>'Properties',
            'protobuf'=>'Protobuf',
            'python'=>'Python',
            'r'=>'R',
            'rdoc'=>'RDoc',
            'rhtml'=>'RHTML',
            'ruby'=>'Ruby',
            'rust'=>'Rust',
            'sass'=>'SASS',
            'scad'=>'SCAD',
            'scala'=>'Scala',
            'scheme'=>'Scheme',
            'scss'=>'SCSS',
            'sh'=>'SH',
            'sjs'=>'SJS',
            'smarty'=>'Smarty',
            'snippets'=>'snippets',
            'soy_template'=>'Soy Template',
            'space'=>'Space',
            'sql'=>'SQL',
            'sqlserver'=>'SQLServer',
            'stylus'=>'Stylus',
            'svg'=>'SVG',
            'tcl'=>'Tcl',
            'tex'=>'Tex',
            'text'=>'Text',
            'textile'=>'Textile',
            'toml'=>'Toml',
            'twig'=>'Twig',
            'typescript'=>'Typescript',
            'vala'=>'Vala',
            'vbscript'=>'VBScript',
            'velocity'=>'Velocity',
            'verilog'=>'Verilog',
            'vhdl'=>'VHDL',
            'xml'=>'XML',
            'xquery'=>'XQuery',
            'yaml'=>'YAML',
            'django'=>'Django',
            ), ($language ? $language : ($lastLanguage ? $lastLanguage : 'php'))); ?>
            

</select>
            
            
        </div>
    </div>

    <div class="col-xs-6">
        <div class="form-group">
            <?php echo $form->label('theme',t("Theme")); ?>
            <?php echo $form->select('theme',array(
                'chrome'=>t('Light') . ' - ' . 'Chrome',
                'clouds'=>t('Light') . ' - ' .'Clouds',
                'crimson_editor'=>t('Light') . ' - ' .'Crimson Editor',
                'dawn'=>t('Light') . ' - ' .'Dawn',
                'dreamweaver'=>t('Light') . ' - ' .'Dreamweaver',
                'eclipse'=>t('Light') . ' - ' .'Eclipse',
                'github'=>t('Light') . ' - ' .'GitHub',
                'solarized_light'=>t('Light') . ' - ' .'Solarized Light',
                'textmate'=>t('Light') . ' - ' .'TextMate',
                'tomorrow'=>t('Light') . ' - ' .'Tomorrow',
                'xcode'=>t('Light') . ' - ' .'XCode',
                'kuroir'=>t('Light') . ' - ' .'Kuroir',
                'katzenmilch'=>t('Light') . ' - ' .'KatzenMilch',
                'ambiance'=>t('Dark') . ' - ' .'Ambiance',
                'chaos'=>t('Dark') . ' - ' .'Chaos',
                'clouds_midnight'=>t('Dark') . ' - ' .'Clouds Midnight',
                'cobalt'=>t('Dark') . ' - ' .'Cobalt',
                'idle_fingers'=>t('Dark') . ' - ' .'idle Fingers',
                'kr_theme'=>t('Dark') . ' - ' .'krTheme',
                'merbivore'=>t('Dark') . ' - ' .'Merbivore',
                'merbivore_soft'=>t('Dark') . ' - ' .'Merbivore Soft',
                'mono_industrial'=>t('Dark') . ' - ' .'Mono Industrial',
                'monokai'=>t('Dark') . ' - ' .'Monokai',
                'pastel_on_dark'=>t('Dark') . ' - ' .'Pastel on dark',
                'solarized_dark'=>t('Dark') . ' - ' .'Solarized Dark',
                'terminal'=>t('Dark') . ' - ' .'Terminal',
                'tomorrow_night'=>t('Dark') . ' - ' .'Tomorrow Night',
                'tomorrow_night_blue'=>t('Dark') . ' - ' .'Tomorrow Night Blue',
                'tomorrow_night_bright'=>t('Dark') . ' - ' .'Tomorrow Night Bright',
                'tomorrow_night_eighties'=>t('Dark') . ' - ' .'Tomorrow Night 80s',
                'twilight'=>t('Dark') . ' - ' .'Twilight',
                'vibrant_ink'=>t('Dark') . ' - ' .'Vibrant Ink'),  ($theme ? $theme : ($lastTheme ? $lastTheme : 'chrome'))); ?>
        </div>
    </div>
</div>




<div class="form-group">
<?php echo $form->label('ccm-block-code-value-textarea',t("Code")); ?>
<div id="ccm-block-code-value"><?php echo h($content)?></div>
<textarea style="display: none" id="ccm-block-code-value-textarea" name="content"></textarea>
</div>

<style type="text/css">
    #ccm-block-code-value {
        width: 100%;
        height: 200px;
        border: 1px solid #eee;
    }
</style>

<div class="row">
    <div class="col-xs-6">
        <div class="form-group">
            <?php echo $form->label('fontSize',t("Font Size")); ?>
            <div class="input-group">
                <?php echo $form->number('fontSize',($fontSize ? $fontSize : ($lastFontSize ? $lastFontSize : 12)), array('required'=>'required', 'min'=>'2','max'=>'40')); ?>
                <div class="input-group-addon"><?php echo t('px');?></div>
            </div>
        </div>
    </div>

    <div class="col-xs-6">
        <div class="form-group">
            <?php echo $form->label('maximumLines',t("Maximum Lines (0 for auto)")); ?>
            <?php echo $form->number('maximumLines',($maximumLines ? $maximumLines : 0), array('required'=>'required', 'min'=>'0')); ?>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-xs-4">
        <div class="form-group">
            <?php echo $form->checkbox('showLineNumbers','1', (isset($showLineNumbers) ? $showLineNumbers : (isset($lastShowLineNumbers) ? $lastShowLineNumbers : 1))); ?>
            <?php echo $form->label('showLineNumbers',t("Line Numbers")); ?>
        </div>
    </div>
    <div class="col-xs-4">
        <div class="form-group">
            <?php echo $form->checkbox('lineWrapping','1', (isset($lineWrapping) ? $lineWrapping : (isset($lastShowLineNumbers) ?  $lastShowLineNumbers: 1))); ?>
            <?php echo $form->label('lineWrapping',t("Line Wrapping")); ?>
        </div>
    </div>
    <div class="col-xs-4">
        <div class="form-group">
            <?php echo $form->checkbox('showInvisibles','1', (isset($showInvisibles) ? $showInvisibles : 0)); ?>
            <?php echo $form->label('showInvisibles',t("Show Invisibles")); ?>
        </div>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label('title',t("Title")); ?>
    <?php echo $form->text('title',$title, array('placeholder'=>t('Optional'))); ?>
</div>

<div class="form-group">
    <?php echo $form->label('description',t("Description")); ?>
    <?php $editor = Core::make('editor');
    echo $editor->outputStandardEditor('description', $description);
     ?>
</div>



<script type="text/javascript">
    $(function() {
        var editor = ace.edit("ccm-block-code-value");
        editor.setTheme("ace/theme/" + $('#theme').val() );
        editor.getSession().setMode({path: "ace/mode/" + $('#language').val(),inline:true});
        editor.getSession().setUseWorker(false);
        editor.setShowPrintMargin(false);
        editor.setOption("showInvisibles", $('#showInvisibles').prop('checked'));
        editor.getSession().setUseWrapMode($('#lineWrapping').prop('checked'));
        editor.renderer.setShowGutter($('#showLineNumbers').prop('checked'));
        editor.setOptions({
            fontSize:$('#fontSize').val() + 'px'
        });

        refreshTextarea(editor.getValue());
        editor.getSession().on('change', function() {
            refreshTextarea(editor.getValue());
        });

        $('#language').change(function(){
            editor.getSession().setMode({path: "ace/mode/"+ $(this).val(),inline:true});
        });

        $('#theme').change(function(){
            editor.setTheme("ace/theme/"+ $(this).val());
        });

        $('#fontSize').change(function(){
            editor.setOptions({
                fontSize: $(this).val() + 'px'
            });
        });

        $('#showLineNumbers').change(function(){
            editor.renderer.setShowGutter($(this).prop('checked'));
        });

        $('#showInvisibles').change(function(){
            editor.setOption("showInvisibles", $(this).prop('checked'));
        });

        $('#lineWrapping').change(function(){
            editor.getSession().setUseWrapMode($(this).prop('checked'));
        });

        $('#ccm-form-submit-button').click(function(){
            // encode to base64 before submitting to prevent trigging modsecurity
            $('#ccm-block-code-value-textarea').val(btoa(editor.getValue()));
        });

    });

    function refreshTextarea(contents) {
        $('#ccm-block-code-value-textarea').val(contents);
    }
</script>



