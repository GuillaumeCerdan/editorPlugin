var editor;

$(document).on("click", "#saveContent", function(){
    saveContent();
});

var saveContent = function(){
    let v = editor.getSession().getValue();
    $.ajax({
        method: "POST",
        url: routeUrlSave,
        data: { content: v },
        success: function(data){
            console.log(data);
        },
        error: function(data){
            console.log(data);
        }
    })
}

var readContent = function(){
    //let v = editor.getSession().getValue();
    $.ajax({
        method: "GET",
        url: routeUrlRead,
        success: function(data){
            editor.getSession().setValue(data);
        },
        error: function(data){
            console.log(data);
        }
    })
}

var init = function(callback){
    editor = ace.edit("ace_editor");
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
    
    editor.commands.addCommand({
        name: 'saveCOmmand',
        bindKey: {win: 'Ctrl-S',  mac: 'Command-S'},
        exec: function(editor) {
            saveContent();
        },
        readOnly: false // false if this command should not apply in readOnly mode
    });

    callback();
}

init(readContent);