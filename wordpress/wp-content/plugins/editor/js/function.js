jQuery(document).ready(function($) {

    initAce();

    $('.save_btn').click(() => {
        saveData();
    });

    function initAce() {
        editor = ace.edit("editor");

        var EditSession = require("ace/edit_session").EditSession;

        var css_code = getAllCode('css');
        var js_code = getAllCode('js');

        var css = new EditSession(css_code[0]);
        var js = new EditSession(js_code[0]);

        // Session setter
        editor.setSession(js);

        // Enlève le highlight de base
        editor.clearSelection();

        editor.container.style.opacity = "";

        // Set l'éditeur sur JS
        editor.setOptions({
            maxLines: 30,
            mode: "ace/mode/javascript",
            autoScrollEditorIntoView: true,
            theme: "ace/theme/monokai"
        });
        
        // Commandes custom
        editor.commands.addCommand({
            name: 'Save',
            bindKey: {win: 'Ctrl-s',  mac: 'Command-s'},
            exec: function(editor) {
                saveData();
            },
            readOnly: true // false if this command should not apply in readOnly mode
        });
        
        // Lien fichier emmet
        ace.config.loadModule("ace/ext/emmet", function() {
            ace.require("ace/lib/net").loadScript("https://cloud9ide.github.io/emmet-core/emmet.js", function() {
                editor.setOption("enableEmmet", true);
            });
        });
        
        // Language tools
        ace.config.loadModule("ace/ext/language_tools", function() {
            editor.setOptions({
                enableSnippets: true,
                enableBasicAutocompletion: true
            });
        });


        
        // CHANGE SESSION
        $('.click_css').click(function() {
            editor.setSession(css);
            editor.setOptions({
                maxLines: 30,
                mode: "ace/mode/css",
                autoScrollEditorIntoView: true,
                theme: "ace/theme/monokai"
            });
        });
        $('.click_js').click(function() {
            editor.setSession(js);
            editor.setOptions({
                maxLines: 30,
                mode: "ace/mode/javascript",
                autoScrollEditorIntoView: true,
                theme: "ace/theme/monokai"
            });
        });



        // A voir plus tard
        // editor.commands.addCommand({
        //     name: 'Search',
        //     bindKey: {win: 'Ctrl-f',  mac: 'Command-f'},
        //     exec: function(editor) {
                
        //     },
        //     readOnly: true // false if this command should not apply in readOnly mode
        // });
        
    }

    function saveData() {
        let option = editor.getOption('mode').split('/');
        let mode = option[option.length -1];


        let insideCode = editor.getSession().getValue();
        
        console.log(insideCode);
        // Requête ajax pour uploader le code dans le fichier
        $.ajax({
            url: "../wp-content/plugins/editor/ajax/files/writeFile.php",
            type: 'POST',
            data: {'insideCode':insideCode, 'mode':mode},
            success: function (data) {
                console.log('File overwritten');
                console.log(data);
                alert('Fichier enregistré');
            },
            error: function (e) {
                console.log('Error : ', e);
            }
        });
    }

    function getAllCode(extension) {
       
        let codejs = $('.redcat-hidden-data-js').text();
        let codecss = $('.redcat-hidden-data-css').text();
        let array_code_js = codejs.split('OTHER FILE');
        let array_code_css = codecss.split('OTHER FILE');

        if (extension == 'js') {
            return array_code_js;
        }
        else if(extension == 'css') {
            return array_code_css;
        }
        else {
            return 'NO DATA';
        }
    }
});