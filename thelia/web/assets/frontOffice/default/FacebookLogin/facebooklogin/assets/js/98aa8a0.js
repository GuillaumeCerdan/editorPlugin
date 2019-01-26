console.log("Init Facebook Login");
$(document).ready(function(){
function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);

    if (response.status === 'connected') {
        // Logged into your app and Facebook.
        testAPI(response.authResponse.accessToken);
    } else {
        // The person is not logged into your app or we are unable to tell.
        document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    }
    }

function checkLoginState() {
    FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
    });
}

window.fbAsyncInit = function() {
    FB.init({
        appId      : '371201160320541',
        cookie     : true,  // enable cookies to allow the server to access 
        oauth  : true, // enable OAuth 2.0       // the session
        xfbml      : true,  // parse social plugins on this page
        version    : 'v2.8' // use graph api version 2.8
    });

    FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
    });

};

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));


    function testAPI(accessToken) {
        console.log('Welcome!  Fetching your information.... ');
        FB.api('/me',
                {fields: "id,birthday,email,first_name,last_name,gender,middle_name,name"}
                ,  function(response) {
            console.log('Successful login for blblb: ' + response.name);
            console.log(response);
            $.ajax({
                url: "http://localhost/editorPlugin/thelia/web/facebook/login", 
                type: "POST",
                data: {fb_token: accessToken},
                success: function(result){
                    console.log(result);
                },
                error: function(result){
                    console.log(result);
                }
            });
            document.getElementById('status').innerHTML =
            'Thanks for logging in, ' + response.name + '!';
        });
    }

    function logout(){
        FB.logout(function(response) {
            console.log(response);
        });
    }
});

