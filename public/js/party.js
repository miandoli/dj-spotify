function updateSongs(songs) {
    var code = $("#code").text();
    var ulSongs = $("#ulSongs");
    ulSongs.empty();
    if (songs != null) {
        for (var i = 0; i < songs.length; i++) {
            var song = songs[i];
            var elem = "<li class=\"list-group-item list-group-item-dark\" style='cursor: pointer;' onclick='addToQueue(\"" + song.id + "\", \"" + code + "\");'>\n" +
                "<div class=\"row\">\n" +
                "<div class=\"col-2\">\n" +
                "<img src=\"" + song.album.images[0].url + "\" class=\"img-fluid\" alt=\"icon\" style=\"width: 1.5rem;\">" +
                "</div>\n" +
                "<div class=\"col-5\">\n" +
                song.name +
                "</div>\n" +
                "<div class=\"col-5\">\n" +
                song.album.name +
                "</div>\n" +
                "</div>\n" +
                "</li>";
            ulSongs.append(elem);
        }
    }
}

function feedback() {
    
}

$(document).ready(function () {
    $("#txtSong").on('input', function() {
        var query = $("#txtSong").val();
        if (query != "" && query != null) {
            search(query);
        } else {
            search("some_really_long_string_that_has_no_song_matches_:)");
        }
    });
});
