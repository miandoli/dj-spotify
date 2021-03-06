function getUser(){
    $.ajax({
       type: 'POST',
       url: '/info/host',
       success: function(data){
           return data.user;
       }
    });
}

function search(query){
    $.ajax({
        type: 'GET',
        url: '/search',
        data: {q: query, type: 'track'},
        success: function(data){
            updateSongs(data.results.items);
        }
    });
}

function addToQueue(id, code, isPlaylist){
    $.ajax({
        type: 'POST',
        url: "/queue/add",
        async: false,
        data: {id: id, code: code},
        beforeSend: function(xhr, type) {
            if (!type.crossDomain) {
                xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
            }
        },
        success: function(data) {
            if (!isPlaylist) {
                alert("Song added to the queue!");
            }
        }
    });
}

function addPlaylist(id, code){
    console.log("yes");
    $.ajax({
        type: 'POST',
        url: "/queue/playlist",
        data: {id: id},
        beforeSend: function(xhr, type) {
            if (!type.crossDomain) {
                xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
            }
        },
        success: function(data) {
            var playlist = data.playlist.items;
            for (var i = 0; i < playlist.length; i++) {
                var song = playlist[i].track.id;
                addToQueue(song, code, true);
            }
            window.location = "/host/" + code;
        }
    });
}

function deleteSong(song){
    $.ajax({
        type: 'POST',
        url: '/playlist/delete',
        data: {song: song, code: code},
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
            hostQueue(data);
        },
        error: function () {
            console.log("shit");
        }
    });
}

function getUserPlaylists(){
    $.ajax({
        type: 'GET',
        url: '/user/playlists',
        success: function(data){
            return updatePlaylists(data.playlists);
        }
    });
}
