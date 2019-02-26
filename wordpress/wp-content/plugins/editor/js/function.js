jQuery(document).ready(function($) {

    initAce();

    $('.save_btn').click(() => {
        saveData();
    });

    function initAce() {
        editor = ace.edit("editor");

        // Enlève le highlight de base
        editor.clearSelection();

        editor.container.style.opacity = "";
        editor.setOptions({
            maxLines: 30,
            mode: "ace/mode/javascript",
            autoScrollEditorIntoView: true,
            theme: "ace/theme/monokai"
        });
        
        
        ace.config.loadModule("ace/ext/emmet", function() {
            ace.require("ace/lib/net").loadScript("https://cloud9ide.github.io/emmet-core/emmet.js", function() {
                editor.setOption("enableEmmet", true);
            });
        });
        
        ace.config.loadModule("ace/ext/language_tools", function() {
            editor.setOptions({
                enableSnippets: true,
                enableBasicAutocompletion: true
            });
        });

        window.onresize = function(event) {
            editor.resize();
        };
    }

    function saveData() {
        // Arg, j'ai honte !
        /*let editor_line = $('.ace_layer.ace_text-layer .ace_line');
        let insideCode = '';
        editor_line.each(function(el, idx) {
            // Filtrage pour CTRL + SPACE
            if ($(this).children().hasClass('ace_completion-highlight')) {
                $(this).remove();
            }
            else {
                insideCode += $(this).text() + '\n';
            }
        })*/
        let insideCode = editor.getSession().getValue();
        console.log(insideCode);
        // Requête ajax pour uploader le code dans le fichier
        $.ajax({
            url: "http://localhost/editorPlugin/wordpress/wp-content/plugins/editor/ajax/files/uploadCode.php",
            type: 'POST',
            data: {'insideCode':insideCode},
            success: function (data) {
                console.log('File overwritten');
                alert('Fichier enregistré');
            },
            error: function (e) {
                console.log('Error : ', e);
            }
        });
    }

});