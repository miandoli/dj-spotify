var client_id = "c6dcb66351104f2aa5d5d88e746abdf4";
var client_secret = "969410d48dbc409499f33d550ddf7460";
var redirect_uri = "localhost:8000";

function logIn(){
    var scopes = 'user-read-private user-read-email';

    $.ajax({
        type: 'GET',
        url: 'https://accounts.spotify.com/authorize'
            + '?response_type=code' + '&client_id=' + client_id +
            (scopes ? '&scope=' + encodeURIComponent(scopes) : '') +
            '&redirect_uri=' + encodeURIComponent(redirect_uri),
        success: function(data){
            $.ajax({
                type: 'POST',
                url: 'https://accounts.spotify.com/api/token',
                data: {grant_type: 'authorization_code', code: data.code, 
                        redirect_uri: redirect_uri},
                beforeSend: function(xhr){
                    xhr.setRequestHeader("Authorization", "Basic " 
                    + btoa(client_id) + ":" + btoa(client_secret))
                },
                success: function(data){
                    let username = "";
                    $.ajax({
                        type: 'GET',
                        url: 'https://api.spotify.com/v1/me',
                        beforeSend: function(xhr){
                            xhr.setRequestHeader("Authorization", "Bearer " 
                            + data.access_token);
                        },
                        success: function(data){
                            username = data.display_name;
                        }
                    });
                    $.ajax({
                        type:'POST',
                        url:'/user/add',
                        data:{refresh_token: data.refresh_token, 
                                access_token: data.access_token,
                                username: username},
                        success:function(data){
                            console.log(data);
                        },
                        error:function(data){
                            console.log("Error contacting Laraval server.");
                        }
                    });
                }
            });
        }
    });
}