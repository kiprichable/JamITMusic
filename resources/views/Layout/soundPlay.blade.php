@extends('welcome')
@section('content')
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="{{ url() }}/soundManager/soundmanager2.js"></script>
    <script src="{{ url() }}/soundManager/bar-ui.js"></script>
    <link rel="stylesheet" href="{{ url() }}/soundManager/bar-ui.css" />
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <!-- demo for this page only, you don't need this stuff -->
    <script src="script/demo.js"></script>
    <link rel="stylesheet" href="css/demo.css" />



    <div class="col-md-10 content">
        <div class="panel panel-default">
            <div class="panel-heading">
                Dashboard
            </div>
            <div class="panel-body">
                <h4>All Music</h4>
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
                    <div class="sm2-bar-ui compact full-width playlist-open">

                        <div class="bd sm2-main-controls">

                            <div class="sm2-inline-texture"></div>
                            <div class="sm2-inline-gradient"></div>

                            <div class="sm2-inline-element sm2-button-element">
                                <div class="sm2-button-bd">
                                    <a href="#play" class="sm2-inline-button play-pause">Play / pause</a>
                                </div>
                            </div>

                            <div class="sm2-inline-element sm2-inline-status">

                                <div class="sm2-playlist">
                                    <div class="sm2-playlist-target">
                                        <!-- playlist <ul> + <li> markup will be injected here -->
                                        <!-- if you want default / non-JS content, you can put that here. -->
                                        <noscript><p>JavaScript is required.</p></noscript>
                                    </div>
                                </div>

                                <div class="sm2-progress">
                                    <div class="sm2-row">
                                        <div class="sm2-inline-time">0:00</div>
                                        <div class="sm2-progress-bd">
                                            <div class="sm2-progress-track">
                                                <div class="sm2-progress-bar"></div>
                                                <div class="sm2-progress-ball"><div class="icon-overlay"></div></div>
                                            </div>
                                        </div>
                                        <div class="sm2-inline-duration">0:00</div>
                                    </div>
                                </div>

                            </div>
                            <div class="sm2-inline-element sm2-button-element">
                                <div class="sm2-button-bd">
                                    <a href="#prev" title="Previous" class="sm2-inline-button previous">&lt; previous</a>
                                </div>
                            </div>

                            <div class="sm2-inline-element sm2-button-element">
                                <div class="sm2-button-bd">
                                    <a href="#next" title="Next" class="sm2-inline-button next">&gt; next</a>
                                </div>
                            </div>

                            <div class="sm2-inline-element sm2-button-element">
                                <div class="sm2-button-bd">
                                    <a href="#repeat" title="Repeat playlist" class="sm2-inline-button repeat">&infin; repeat</a>
                                </div>
                            </div>

                            <div class="sm2-inline-element sm2-button-element sm2-volume">
                                <div class="sm2-button-bd">
                                    <span class="sm2-inline-button sm2-volume-control volume-shade"></span>
                                    <a href="#volume" class="sm2-inline-button sm2-volume-control">volume</a>
                                </div>
                            </div>

                            <div class="sm2-inline-element sm2-button-element sm2-menu">
                                <div class="sm2-button-bd">
                                    <a href="#" class="sm2-inline-button download">download</a>
                                </div>
                            </div>

                            <div class="sm2-inline-element sm2-button-element sm2-menu">
                                <div class="sm2-button-bd">
                                    <a href="#menu" class="sm2-inline-button menu">menu</a>
                                </div>
                            </div>

                        </div>

                        <div class="bd sm2-playlist-drawer sm2-element">

                            <div class="sm2-inline-texture">
                                <div class="sm2-box-shadow"></div>
                            </div>

                            <!-- playlist content is mirrored here -->

                            <div class="sm2-playlist-wrapper">
                                <ul class="sm2-playlist-bd">
                                    @foreach($music as $m)
                                        <li><a href="{{url()}}/Music/{{$m->song}}"><b>{{$m->song}}</b> - LA<span
                                                        class="label">Explicit</span></a></li>
                                    @endforeach
                                </ul>
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
                        Top 5 Played songs
                        <hr>

                        <div class="sm2-bar-ui playlist-open">

                        <div class="bd sm2-main-controls">

                        <div class="sm2-inline-texture"></div>
                        <div class="sm2-inline-gradient"></div>

                        <div class="sm2-inline-element sm2-button-element">
                        <div class="sm2-button-bd">
                        <a href="#play" class="sm2-inline-button play-pause">Play / pause</a>
                        </div>
                        </div>

                        <div class="sm2-inline-element sm2-inline-status">

                        <div class="sm2-playlist">
                        <div class="sm2-playlist-target">
                        <!-- playlist <ul> + <li> markup will be injected here -->
                        <!-- if you want default / non-JS content, you can put that here. -->
                        <noscript><p>JavaScript is required.</p></noscript>
                        </div>
                        </div>

                        <div class="sm2-progress">
                        <div class="sm2-row">
                        <div class="sm2-inline-time">0:00</div>
                        <div class="sm2-progress-bd">
                        <div class="sm2-progress-track">
                        <div class="sm2-progress-bar"></div>
                        <div class="sm2-progress-ball"><div class="icon-overlay"></div></div>
                        </div>
                        </div>
                        <div class="sm2-inline-duration">0:00</div>
                        </div>
                        </div>

                        </div>

                        <div class="sm2-inline-element sm2-button-element sm2-volume">
                        <div class="sm2-button-bd">
                        <span class="sm2-inline-button sm2-volume-control volume-shade"></span>
                        <a href="#volume" class="sm2-inline-button sm2-volume-control">volume</a>
                        </div>
                        </div>

                        <div class="sm2-inline-element sm2-button-element">
                        <div class="sm2-button-bd">
                        <a href="#prev" title="Previous" class="sm2-inline-button previous">&lt; previous</a>
                        </div>
                        </div>

                        <div class="sm2-inline-element sm2-button-element">
                        <div class="sm2-button-bd">
                        <a href="#next" title="Next" class="sm2-inline-button next">&gt; next</a>
                        </div>
                        </div>

                            <div class="sm2-inline-element sm2-button-element sm2-menu">
                                <div class="sm2-button-bd">
                                    <a href="#download" class="sm2-inline-button download">download</a>
                                </div>
                            </div>

                        <div class="sm2-inline-element sm2-button-element sm2-menu">
                        <div class="sm2-button-bd">
                        <a href="#menu" class="sm2-inline-button menu">menu</a>
                        </div>
                        </div>



                        </div>

                        <div class="bd sm2-playlist-drawer sm2-element">

                        <div class="sm2-inline-texture">
                        <div class="sm2-box-shadow"></div>
                        </div>

                        <!-- playlist content is mirrored here -->

                        <div class="sm2-playlist-wrapper">

                        <ul class="sm2-playlist-bd">
                            @foreach($music as $m)
                                <li><a href="{{url()}}/Music/{{$m->song}}"><b>{{$m->song}}</b> - LA<span
                                                class="label">Explicit</span></a></li>
                            @endforeach

                        </ul>

                        </div>

                        <div class="sm2-extra-controls">

                        <div class="bd">

                        <div class="sm2-inline-element sm2-button-element">
                        <a href="#prev" title="Previous" class="sm2-inline-button previous">&lt; previous</a>
                        </div>

                        <div class="sm2-inline-element sm2-button-element">
                        <a href="#next" title="Next" class="sm2-inline-button next">&gt; next</a>
                        </div>

                        <!-- not implemented -->
                        <!--
                        <div class="sm2-inline-element sm2-button-element disabled">
                        <div class="sm2-button-bd">
                        <a href="#repeat" title="Repeat playlist" class="sm2-inline-button repeat">&infin; repeat</a>
                        </div>
                        </div>

                        <div class="sm2-inline-element sm2-button-element disabled">
                        <a href="#shuffle" title="Shuffle" class="sm2-inline-button shuffle">shuffle</a>
                        </div>
                        -->

                        </div>

                        </div>

                        </div>

                        </div>
                    </div>
                </div>

                <div id="right" class="col-xs-6" style="border-left: 1px solid; border-right: 1px solid;border-top: 1px
                 solid;">

                    <div class="panel-heading">
                        Top 5 songs in donations
                        <hr>
                        <div class="sm2-bar-ui playlist-open">

                            <div class="bd sm2-main-controls">

                                <div class="sm2-inline-texture"></div>
                                <div class="sm2-inline-gradient"></div>

                                <div class="sm2-inline-element sm2-button-element">
                                    <div class="sm2-button-bd">
                                        <a href="#play" class="sm2-inline-button play-pause">Play / pause</a>
                                    </div>
                                </div>

                                <div class="sm2-inline-element sm2-inline-status">

                                    <div class="sm2-playlist">
                                        <div class="sm2-playlist-target">
                                            <!-- playlist <ul> + <li> markup will be injected here -->
                                            <!-- if you want default / non-JS content, you can put that here. -->
                                            <noscript><p>JavaScript is required.</p></noscript>
                                        </div>
                                    </div>

                                    <div class="sm2-progress">
                                        <div class="sm2-row">
                                            <div class="sm2-inline-time">0:00</div>
                                            <div class="sm2-progress-bd">
                                                <div class="sm2-progress-track">
                                                    <div class="sm2-progress-bar"></div>
                                                    <div class="sm2-progress-ball"><div class="icon-overlay"></div></div>
                                                </div>
                                            </div>
                                            <div class="sm2-inline-duration">0:00</div>
                                        </div>
                                    </div>

                                </div>

                                <div class="sm2-inline-element sm2-button-element sm2-volume">
                                    <div class="sm2-button-bd">
                                        <span class="sm2-inline-button sm2-volume-control volume-shade"></span>
                                        <a href="#volume" class="sm2-inline-button sm2-volume-control">volume</a>
                                    </div>
                                </div>

                                <div class="sm2-inline-element sm2-button-element">
                                    <div class="sm2-button-bd">
                                        <a href="#prev" title="Previous" class="sm2-inline-button previous">&lt; previous</a>
                                    </div>
                                </div>

                                <div class="sm2-inline-element sm2-button-element">
                                    <div class="sm2-button-bd">
                                        <a href="#next" title="Next" class="sm2-inline-button next">&gt; next</a>
                                    </div>
                                </div>
                                <div class="sm2-inline-element sm2-button-element sm2-menu">
                                    <div class="sm2-button-bd">
                                        <a href="#download" class="sm2-inline-button download">download</a>
                                    </div>
                                </div>
                                <div class="sm2-inline-element sm2-button-element sm2-menu">
                                    <div class="sm2-button-bd">
                                        <a href="#menu" class="sm2-inline-button menu">menu</a>
                                    </div>
                                </div>

                            </div>

                            <div class="bd sm2-playlist-drawer sm2-element">

                                <div class="sm2-inline-texture">
                                    <div class="sm2-box-shadow"></div>
                                </div>

                                <!-- playlist content is mirrored here -->

                                <div class="sm2-playlist-wrapper">

                                    <ul class="sm2-playlist-bd">
                                        @foreach($music as $m)
                                            <li><a href="{{url()}}/Music/{{$m->song}}"><b>{{$m->song}}</b> - LA<span
                                                            class="label">Explicit</span></a></li>
                                        @endforeach

                                    </ul>

                                </div>

                                <div class="sm2-extra-controls">

                                    <div class="bd">

                                        <div class="sm2-inline-element sm2-button-element">
                                            <a href="#prev" title="Previous" class="sm2-inline-button previous">&lt; previous</a>
                                        </div>

                                        <div class="sm2-inline-element sm2-button-element">
                                            <a href="#next" title="Next" class="sm2-inline-button next">&gt; next</a>
                                        </div>

                                        <!-- not implemented -->
                                        <!--
                                        <div class="sm2-inline-element sm2-button-element disabled">
                                        <div class="sm2-button-bd">
                                        <a href="#repeat" title="Repeat playlist" class="sm2-inline-button repeat">&infin; repeat</a>
                                        </div>
                                        </div>

                                        <div class="sm2-inline-element sm2-button-element disabled">
                                        <a href="#shuffle" title="Shuffle" class="sm2-inline-button shuffle">shuffle</a>
                                        </div>
                                        -->

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="sm2-bar-ui full-width fixed">

        <div class="bd sm2-main-controls">

            <div class="sm2-inline-texture"></div>
            <div class="sm2-inline-gradient"></div>

            <div class="sm2-inline-element sm2-button-element">
                <div class="sm2-button-bd">
                    <a href="#play" class="sm2-inline-button play-pause">Play / pause</a>
                </div>
            </div>

            <div class="sm2-inline-element sm2-inline-status">

                <div class="sm2-playlist">
                    <div class="sm2-playlist-target">
                        <!-- playlist <ul> + <li> markup will be injected here -->
                        <!-- if you want default / non-JS content, you can put that here. -->
                        <noscript><p>JavaScript is required.</p></noscript>
                    </div>
                </div>

                <div class="sm2-progress">
                    <div class="sm2-row">
                        <div class="sm2-inline-time">0:00</div>
                        <div class="sm2-progress-bd">
                            <div class="sm2-progress-track">
                                <div class="sm2-progress-bar"></div>
                                <div class="sm2-progress-ball"><div class="icon-overlay"></div></div>
                            </div>
                        </div>
                        <div class="sm2-inline-duration">0:00</div>
                    </div>
                </div>

            </div>

            <div class="sm2-inline-element sm2-button-element sm2-volume">
                <div class="sm2-button-bd">
                    <span class="sm2-inline-button sm2-volume-control volume-shade"></span>
                    <a href="#volume" class="sm2-inline-button sm2-volume-control">volume</a>
                </div>
            </div>

            <div class="sm2-inline-element sm2-button-element">
                <div class="sm2-button-bd">
                    <a href="#prev" title="Previous" class="sm2-inline-button previous">&lt; previous</a>
                </div>
            </div>

            <div class="sm2-inline-element sm2-button-element">
                <div class="sm2-button-bd">
                    <a href="#next" title="Next" class="sm2-inline-button next">&gt; next</a>
                </div>
            </div>

            <div class="sm2-inline-element sm2-button-element">
                <div class="sm2-button-bd">
                    <a href="#repeat" title="Repeat playlist" class="sm2-inline-button repeat">&infin; repeat</a>
                </div>
            </div>


            <div class="sm2-inline-element sm2-button-element sm2-menu">
                <div class="sm2-button-bd">
                    <a href="#menu" class="sm2-inline-button menu">menu</a>
                </div>
            </div>



        </div>

        <div class="bd sm2-playlist-drawer sm2-element">

            <div class="sm2-inline-texture">
                <div class="sm2-box-shadow"></div>
            </div>

            <!-- playlist content is mirrored here -->

            <div class="sm2-playlist-wrapper">

                <ul class="sm2-playlist-bd">
                    @foreach($music as $m)
                        <li><a href="{{url()}}/Music/{{$m->song}}"><b>{{$m->song}}</b> - LA<span
                                        class="label">Explicit</span></a><a></a></li>
                    @endforeach

                </ul>

            </div>

        </div>
    </div>

    </div>
@stop