@extends('layouts.app')

@section('content')
    <script src="https://sdk.scdn.co/spotify-player.js"></script>


    <script >

    setInterval( function() {
      $.ajax({
            type: "GET",
            url: "/check",
            success: function(data) {
                if(data.song != null) {
                  console.log(data.song);
                  $(".song-name").text(data.song.name);
                  $(".album-img").attr("src", data.song.album.images[0].url);

                  $(".hide").show();
                }
            }
         });
      }, 1000);

    </script>

    <script src="{{ asset('js/host.js') }}" defer></script>
    <div class="row" style="height: 100%;">
        <div class="col-sm-6 col-12" style="height: 100%;" >
            <div class="d-flex justify-content-center align-items-center hide" style="height: 100%;">
                <div class="col">
                    <h1 class="text-light text-center">Now Playing</h1>
                    <div class="text-center">
                        <img src="" class="img-fluid album-img" alt="logo" style="width: 10rem;">
                    </div>
                    <h1 class="text-light text-center song-name"></h1>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-12" style="height: 100%;">
            <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                <div class="col">
                    <h1 class="text-light text-center">Queue</h1>
                    <div class="container-fluid bg-dark pre-scrollable p-0" style="height: 100%; width: 75%; border-radius: 1rem;">
                        <ul id="ulHost" class="list-group"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
