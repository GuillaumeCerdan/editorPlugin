$(document).ready(function(){
    if($("body").hasClass("page-cart")){
        $( "input[name=quantity], select[name=quantity]" ).prop( "disabled", true );
    }
})