{!! Form::open(['route' => 'tasks.store']) !!}
    <div class="form-group">
        {!! Form::textarea('status', old('status'), ['class' => 'form-control', 'rows' => '1']) !!}
        {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}
        {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
    </div>
{!! Form::close() !!}