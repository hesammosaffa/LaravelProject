@extends('layout')

@section('content')
    <div class="row">
        <!-- Watch -->
        <div class="col-md-8">
            <div id="watch">

                <!-- Video Player -->
                <h1 class="video-title">{{ $video->name }}</h1>
                <div class="video-code">
                    <video controls style="height: 100%; width: 100%;">
                        <source src="{{ $video->url }}" type="video/mp4">
                    </video>
                </div><!-- // video-code -->

                <div>
                    <p>
                        {{ $video->description }}
                    </p>
                </div>
                
                <!-- // video-share -->
                <x-video-share></x-video-share>

                <!-- // video-share -->

                <!-- // Video Player -->


                <!-- Chanels Item -->
                <div class="chanel-item">
                    <div class="chanel-thumb">
                        <a href="#"><img src="{{$video->OwnerAvatar}}" alt=""></a>
                    </div>
                    <div class="chanel-info">
                        <a class="title" href="#">{{$video->OwnerName}}</a>
                        <span class="subscribers">436,414 اشتراک</span>
                    </div>
                    <a href="#" class="subscribe">اشتراک</a>
                </div>
                <!-- // Chanels Item -->


                <!-- Comments -->
                <div id="comments" class="post-comments">
                    <h3 class="post-box-title"><span>19</span> نظرات</h3>
                    <ul class="comments-list">
                        <li>
                            <div class="post_author">
                                <div class="img_in">
                                    <a href="#"><img src={{$video->OwnerAvatar}} alt=""></a>
                                </div>
                                <a href="#" class="author-name">{{$video->OwnerName}}</a>
                                <time datetime="2017-03-24T18:18">مرداد 27, 1397 - 11:00</time>
                            </div>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                            </p>
                            <a href="#" class="reply">پاسخ</a>

                            <ul class="children">
                                <li>
                                    <div class="post_author">
                                        <div class="img_in">
                                            <a href="#"><img src="demo_img/c2.jpg" alt=""></a>
                                        </div>
                                        <a href="#" class="author-name">بهمن نجاتی</a>
                                        <time datetime="2017-03-24T18:18">مرداد 27, 1397 - 11:00</time>
                                    </div>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                        طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                        سطرآنچنان که لازم است</p>
                                    <a href="#" class="reply">پاسخ</a>
                                </li>
                            </ul>


                        </li>
                        <li>
                            <div class="post_author">
                                <div class="img_in">
                                    <a href="#"><img src="demo_img/c2.jpg" alt=""></a>
                                </div>
                                <a href="#" class="author-name">بهمن نجاتی</a>
                                <time datetime="2017-03-24T18:18">مرداد 27, 1397 - 11:00</time>
                            </div>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                            </p>
                            <a href="#" class="reply">پاسخ</a>
                        </li>

                    </ul>


                    <h3 class="post-box-title">ارسال نظرات</h3>
                    <form>
                        <input type="text" class="form-control" id="Name" placeholder="نام">
                        <input type="email" class="form-control" id="Email" placeholder="ایمیل">
                        <input type="text" class="form-control" placeholder="سایت">
                        <textarea class="form-control" rows="8" id="Message" placeholder="پیام"></textarea>
                        <button type="button" id="contact_submit" class="btn btn-dm">ارسال پیام</button>
                    </form>
                </div>
                <!-- // Comments -->


            </div><!-- // watch -->
        </div><!-- // col-md-8 -->
        <!-- // Watch -->

        <!-- Related Posts-->
        <div class="col-md-4">

            <!-- video item -->
            <x-related-videos :video="$video"></x-related-videos>
            <!-- // video item -->

        </div><!-- // col-md-4 -->
        <!-- // Related Posts -->
    </div><!-- // row -->
@endsection
