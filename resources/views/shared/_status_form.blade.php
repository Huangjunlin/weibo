<form method="post" action="{{route('statuses.store')}}">
    @include('shared._errors')
    {{csrf_field()}}

    <textarea class="form-control" rows="3" placeholder="聊聊新鲜事..." name="content">{{old('content')}}</textarea>

    <div class="text-right">
        <button type="submit" class="btn btn-primary mt-3">发布</button>
    </div>
</form>
