function updatePlaylists(playlists) {
    var code = $("#code").text();
    var plItems = playlists.items;
    for (var i = 0; i < plItems.length; i++) {
        var pl = plItems[i];

        if(pl.images.length != 0) {
          var elem = "<li class=\"list-group-item list-group-item-dark\" style='cursor: pointer;' onclick='addPlaylist(\"" + pl.id + "\", \"" + code + "\");'>\n" +
              "<div class=\"row\">\n" +
              "<div class=\"col-2\">\n" +
              "<img src=\"" + pl.images[0].url + "\" class=\"img-fluid\" alt=\"icon\" style=\"width: 1.5rem;\">" +
              "</div>\n" +
              "<div class=\"col-10\">\n" +
              pl.name +
              "</div>\n" +
              "</div>\n" +
              "</li>";
        } else {
          var elem = "<li class=\"list-group-item list-group-item-dark\" style='cursor: pointer;' onclick='addPlaylist(\"" + pl.id + "\", \"" + code + "\");'>\n" +
              "<div class=\"row\">\n" +
              "<div class=\"col-2\">\n" +
              "<img src=\"https://media.wired.com/photos/5cabda11e903a149797c4518/125:94/w_2393,h_1800,c_limit/spotify-909238494.jpg\" class=\"img-fluid\" alt=\"icon\" style=\"width: 1.5rem;\">" +
              "</div>\n" +
              "<div class=\"col-10\">\n" +
              pl.name +
              "</div>\n" +
              "</div>\n" +
              "</li>";
        }
        $("#ulPlaylists").append(elem);
    }
}

$(document).ready(function () {
    getUserPlaylists();
});
