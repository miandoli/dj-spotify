
function getUser(){
    let access_token = "";
    $.ajax({
       type: 'GET',
       url: '/host/access',
       success: function(data){
           access_token = data.access_token;
       } 
    });
    $.ajax({
        type: 'GET',
        url: 'https://api.spotify.com/v1/me',
        beforeSend: function(xhr){
            xhr.setRequestHeader("Authorization", "Bearer "+ access_token);
        },
        success: function(data){
            return data;
        }
    })
}


function createPlaylist(){
    let user = getUser();
    let userID = "";

    $.ajax({
        type: 'POST',
        url: 'https://api.spotify.com/v1/users/'+ userID +'/playlists',
        data: {name: 'Party'+roomcode, },
        success: function(data){

        }
    })
}
