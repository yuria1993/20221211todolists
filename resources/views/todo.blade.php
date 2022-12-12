<div class="container mt-3">
        <h1>TodoList</h1>
    </div>
    <div class="container mt-3">
        <div class="container mb-4">
            {!! Form::open(['route' => 'todos.store', 'method' => 'POST']) !!}
            {{ csrf_field() }}
                <div class="row">
                    {{ Form::text('newTodo', null, ['class' => 'form-control col-8 mr-5']) }}
                    {{ Form::date('newDeadline', null, ['class' => 'mr-5']) }}
                    {{ Form::submit('追加', ['class' => 'btn btn-primary']) }}
                </div>
            {!! Form::close() !!}
        </div>
        {{-- エラー表示 ここから --}}
        @if ($errors->has('newTodo'))
            <p class="alert alert-danger">{{ $errors->first('newTodo') }}</p>
        @endif
        @if ($errors->has('newDeadline'))
            <p class="alert alert-danger">{{ $errors->first('newDeadline') }}</p>
        @endif
        {{-- エラー表示 ここまで --}}

        <table class="table">