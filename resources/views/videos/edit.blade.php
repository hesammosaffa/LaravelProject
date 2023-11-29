@extends('layout')

@section('content')
    <div id="upload">
        <div class="row">
            
            <x-validation-errors></x-validation-errors>

            <!-- upload -->
            <div class="col-md-8">
                <h1 class="page-title"><span>@lang('videos.upload')</span>@lang('videos.film')</h1>

                <form action="{{route('videos.update',$video->slug)}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>@lang('videos.name')</label>
                            <input name="name" value="{{$video->name}}" type="text" class="form-control" placeholder="@lang('videos.name')">
                        </div>
                        <div class="col-md-6">
                            <label>@lang('videos.length')</label>
                            <input name="length" value="{{$video->length}}" type="text" class="form-control" placeholder="@lang('videos.length')">
                        </div>
                        <div class="col-md-6">
                            <label>@lang('videos.slug')</label>
                            <input name="slug" value="{{$video->slug}}" type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-6">
                            <label>@lang('videos.video-address')</label>
                            <input name="url" value="{{$video->url}}" type="text" class="form-control" placeholder="@lang('videos.video-address')">
                        </div>
                        <div class="col-md-6">
                            <label>@lang('videos.thumbnail')</label>
                            <input name="thumbnail" value="{{$video->thumbnail}}" type="text" class="form-control" placeholder="@lang('videos.thumbnail')">
                        </div>
                        <div class="col-md-6">
                            <label>@lang('videos.labels')</label>
                            <input type="text" class="form-control" placeholder="@lang('videos.labels')">
                        </div>
                        <div class="col-md-6">
                            <label>@lang('videos.video_upload')</label>
                            <input id="upload_file" type="file" class="file">
                        </div>
                        <div class="col-md-12">
                            <label>@lang('videos.description')</label>
                            <textarea name="description" value="{{$video->description}}" class="form-control" rows="4" placeholder="@lang('videos.description')"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label>@lang('videos.picture')</label>
                            <input id="featured_image" type="file" class="file">
                        </div>
                        <div class="col-md-6">
                            <button type="submit" id="contact_submit" class="btn btn-dm">@lang('videos.update')</button>
                        </div>
                    </div>
                </form>
            </div><!-- // col-md-8 -->

            <div class="col-md-4">
                <a href="#"><img src="{{ asset('img/upload-adv.png') }}" alt=""></a>
            </div><!-- // col-md-8 -->
            <!-- // upload -->
        </div><!-- // row -->
    </div><!-- // upload -->
@endsection
