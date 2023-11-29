<div class="col-lg-2 col-md-4 col-sm-6">
    <div class="video-item">
        <div class="thumb">
            <div class="hover-efect"></div>
            <small class="time">{{ $video->length }}</small>
            <a href="{{route('videos.show',$video->id)}}"><img src={{ $video->thumbnail }} alt=""></a>
        </div>
        <div class="video-info">
            <a href="{{route('videos.show',$video->id)}}" class="title">{{ $video->name }}</a>
            <a class="channel-name" href="{{route('videos.show',$video->id)}}">hesameddin Mosaffa<span>
                    <i class="fa fa-check-circle"></i></span></a>
            <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
            <span class="date"><i class="fa fa-clock-o"></i>{{ $video->created_at }}</span>
        </div>
    </div>
</div>