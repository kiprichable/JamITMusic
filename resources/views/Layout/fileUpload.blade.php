@extends('welcome')
@section('content')
    <div class="col-md-10 content">
        <div class="panel panel-default">
            <div class="panel-heading">
                Music Upload
            </div>
        </div>

        <div class="panel panel-body">
            <div class="panel-heading">
                Upload new music
            </div>
            <div class="row">

                <div id="left" class="col-xs-6" style="border-top: 1px solid;">

                    <div class="panel-heading">
                        Artist and Song Info
                        <hr>
                        <div id="audio-player">
                            <div class="clearfix">
                                <form action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data">
                                    <div class="container">


                                        <div class="col-sm-8 contact-form">
                                                <div class="row">
                                                    <div class="col-xs-6 col-md-6 form-group">
                                                        Names <input class="form-control" id="name" name="name"
                                                                placeholder="Names" type="text" required autofocus />
                                                    </div>
                                                    <div class="col-xs-6 col-md-6 form-group">
                                                        Email <input class="form-control" id="Email" name="Email"
                                                                placeholder="Email" type="email" required />
                                                    </div>
                                                    <div class="col-xs-6 col-md-6 form-group">
                                                        Artist <input class="form-control"  name="stagename"
                                                                       placeholder="Artist stage name" type="text" required />
                                                    </div>
                                                    <div class="col-xs-6 col-md-6 form-group">
                                                        Phone Number<input class="form-control" id="Contact Number 1"
                                                                name="phone" placeholder="phone number"
                                                                type="phonenumber" required />
                                                    </div>
                                                    <div class="col-xs-6 col-md-6 form-group">
                                                        Track Name <input class="form-control" name="song" placeholder="Track Name"
                                                                           type="phone number" />
                                                    </div>
                                                    <div class="col-xs-6 col-md-6 form-group">
                                                        Track Album<input class="form-control" name="album" placeholder="Album" required />
                                                    </div>
                                                    <div class="col-xs-6 col-md-6 form-group">
                                                       Track Cover <input class="form-control" name="cover"
                                                                    placeholder="Cover Image" type="file" required />
                                                    </div>
                                                    <div class="col-xs-6 col-md-6 form-group">
                                                        Select music to upload
                                                        <input type="file" name="file" id="file">
                                                    </div>

                                                </div>
                                                Song Description<textarea class="form-control" id="songDescription"
                                                                 name="Address"
                                                          placeholder="Song description" rows="5"></textarea>
                                                <br />
                                            <input class="btn btn-primary pull-right" type="submit" value="Upload"
                                                   name="submit">
                                            <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                        </div>
                                    </div>

                                </form>



                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop