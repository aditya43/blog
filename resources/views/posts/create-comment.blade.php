<form action="/posts/{{ $post->id }}/comments" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <textarea name="body" id="body" rows="5" placeholder="Your comment here.." class="form-control {{ $errors->has('body') ? 'is-invalid' : ''}}">{{ old('body') }}</textarea>
        <div class="invalid-feedback">{{ $errors->first('body') }}</div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Add Comment</button>
    </div>
</form>