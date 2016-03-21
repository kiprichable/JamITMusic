@extends('welcome')
@section('content')
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <div class="col-md-10 content">
        <div class="panel panel-default">
            <div class="panel-heading">
                Dashboard
            </div>
            <div class="panel-body">
                <script>
                    $(document).ready(function() {
                        $('.play').on('click', function () {
                            $('.stop').show();
                            $('.play').hide();
                        })
                        $('.stop').on('click', function () {
                            nowplaying[i].pause();
                            $('.play').show();
                            $('.stop').hide();
                        })
                    });


                </script>

                <div id="container" class="body">
                    <hr>
                    <div id="audio-image">
                        <img class="cover" />
                    </div>
                    <div id="audio-player">
                        <div id="audio-info">
                            <div id="audio-info">
                                <p id="play" class="glyphicon glyphicon-play"></p>
                                <p id="pause" class="glyphicon glyphicon-pause" style="display: none"></p>
                                <span class="artist"></span> - <span class="title"></span>
                            </div>
                        </div>
                    </div>
                    <div id="tracker">
                        <div id="progressBar">
                            <span id="progress"></span> <span id="duration"></span>


                            <div style="width: 250px">
                                <input class="volume" type="range" name="range" min="0" max="50" value="25">
                            </div>

                            <p id="prev" class="glyphicon glyphicon-backward" style="background-color:
                            #C20000">Prev</p>
                            <p id="next" class="glyphicon glyphicon-forward" style="background-color:
                            #C20000">Next</p>

                        </div>
                        <div id="audio-player">
                            <br>
                            <div id="buttons">


                                <p id="prev" class="glyphicon glyphicon-backward"></p>
                                <p id="play" class="glyphicon glyphicon-play"></p>
                                <p id="pause" class="glyphicon glyphicon-pause" style="display: none"></p>
                                <p id="next" class="glyphicon glyphicon-forward"></p>

                            </div>


                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="panel panel-body">
            <div class="panel-heading">
                Our Music
            </div>
            <div class="row">

                <div id="left" class="col-xs-6" style="border-top: 1px solid;">

                    <div class="panel-heading">
                        Top Played
                        <hr>
                        <div id="audio-player">
                            <div class="clearfix"></div>
                            {{--<table id="playlist">--}}
                                {{--<thead>--}}
                                {{--<tr>--}}
                                    {{--<td>Track</td>--}}
                                    {{--<td>Cover</td>--}}
                                    {{--<td>Song Title</td>--}}
                                    {{--<td>Artist</td>--}}
                                {{--</tr>--}}
                                {{--</thead>--}}
                                {{--<tbody>--}}
                                {{--@foreach($music as $musics)--}}
                                    {{--<tr>--}}
                                        {{--<td>{{$musics->song_id}}</td>--}}
                                        {{--<td>{{$musics->cover}}</td>--}}
                                        {{--<td>{{$musics->song}}</td>--}}
                                        {{--<td>{{$musics->artist}}</td>--}}
                                    {{--</tr>--}}
                                {{--@endforeach--}}
                                {{--</tbody>--}}
                            {{--</table>--}}
                            <ul id="playlist">
                                <p style="border-bottom: solid black">Name</p>
                                @foreach($music as $musics)

                                    <li song="{{$musics->song}}" cover="{{$musics->cover}}"
                                        artist="{{$musics->artist}}">{{$musics->song}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div id="right" class="col-xs-6" style="border-left: 1px solid; border-right: 1px solid;border-top: 1px
                 solid;">

                    <div class="panel-heading">
                        Top donations
                        <hr>
                        <div id="audio-player">
                            <div class="clearfix"></div>
                            <ul id="playlist-2">
                                <li song="Energy.mp3" cover="cover1.jpg" artist="Drake">Drake - Energy</li>
                                <li song="The Banger.mp3" cover="cover1.jpg" artist="Uhuru">The Banger</li>
                                <li song="Duro.mp3" cover="cover1.jpg" artist="Teknomiles">Duro</li>
                                <li song="Runtown.mp3" cover="cover1.jpg" artist="Runtown ft wizkid">Bend down and pause</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@stop