
function getUser(){
    $.ajax({
       type: 'POST',
       url: '/info/host',
       success: function(data){
           return data.user;
       } 
    });
}

function search(e){
    e.preventDefault();
    $.ajax({
        type: 'GET',
        url: '/search',
        data = {q: this.innerHTML, type: 'track'},
        success: function(data){
            return data.results;
        }
    });
}

function addToQueue(song, code){
    $.ajax({
        type: 'POST',
        url: "/queue",
        data = {song: song, code: code},
        success: function(){
            console.log("Added to queue" + song);
        }
    });
}

function deleteSong(song){
    $.ajax({
        type: 'POST',
        url: '/playlist/delete',
        data = {song: song, code: code},
        success: function(data){
            console.log("Deleted song from queue" + song);
        }
    });
}

function getPlaylist(){
    $.ajax({
        type: 'GET',
        url: '/queue/get',
        success: function(data){
            return data.queue;
        }
    })
}

function getUserPlaylists(){
    $.ajax({
        type: 'GET',
        url: '/user/playlists',
        success: function(data){
            return data.playlists;
        }
    })
}