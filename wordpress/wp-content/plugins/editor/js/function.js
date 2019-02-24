
jQuery(document).ready(function($) {

    $('.save_btn').click(() => {

        let editor_line = $('.ace_layer.ace_text-layer .ace_line');
        let insideCode = '';
        editor_line.each(function(el, idx) {
            insideCode += $(this).text() + '\n';
        })
        console.log(insideCode);
        // Requête ajax pour uploader le code dans le fichier
        $.ajax({
            url: "http://localhost/editorPlugin/wordpress/wp-content/plugins/editor/ajax/files/uploadCode.php",
            type: 'POST',
            data: {'insideCode':insideCode},
            success: function (data) {
                console.log('File overwritten');
            },
            error: function (e) {
                console.log('Error : ', e);
            }
        });

    });
});