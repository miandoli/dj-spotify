function hostQueue(songs) {
    var ulHost = $("#ulHost");
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
            ulHost.append(elem);
        }
    }
}

$(document).ready(function () {
    getPlaylist();
});
