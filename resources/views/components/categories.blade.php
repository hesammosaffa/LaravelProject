<label>@lang('videos.labels')</label>
<select class="form-control" name="category_id" id="category">
    @foreach ($categories as $category)
    <option value="{{$category->id}}" {{$category->id == $video->category_id ? 'selected' :''}}>{{$category->name}}</option>
    @endforeach
</select>