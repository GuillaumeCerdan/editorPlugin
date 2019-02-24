jQuery(document).ready(function($) {
    $('.save_btn').click(() => {
        let editor_line = $('.ace_layer.ace_text-layer .ace_line');
        var insideCode = '';

        editor_line.each(function(el, idx) {
            insideCode += $(this).text();
        })
        console.log(insideCode);
    });
});