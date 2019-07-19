@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ $channel->name }}
                    </div>

                    <div class="card-body">

                        <form id="update-channel-form" action="{{ route('channels.update' , $channel->id) }}" method="POST" enctype="multipart/form-data">

                           @method('PUT')
                           @csrf

                            <div class="form-group row justify-content-center">
                                <div class="channel-avatar">

                                    <div class="channel-avatar-overlay">

                                        <svg width="200" height="200"
                                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <image xlink:href="https://mdn.mozillademos.org/files/6457/mdn_logo_only_color.png" height="200" width="200"/>
                                        </svg>



                                    </div>



                                </div>
                            </div>


                            <input onchange="document.getElementById('update-channel-form').submit()" style="display: none;" type="file" name="image" >



                            <div class="form-group">
                                <label for="name" class="form-control-label">
                                    Name
                                </label>
                                <input type="text" name="name" class="form-control" value="{{ $channel->name }}">

                            </div>

                            <div class="form-group">
                                <label for="description" class="form-control-label">
                                    Description
                                </label>
                                <textarea  name="description" class="form-control" cols="3" rows="3">
                                     {{$channel->description}}
                                </textarea>

                            </div>

                            <button type="submit" class="btn btn-warning">Update</button>


                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
