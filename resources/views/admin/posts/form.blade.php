<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title', 'Titel', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('title', null, ['class' => 'form-control', 'required' => '']) !!}
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('upload', 'Thumbnail', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('upload', ['class' => 'form-control btn btn-default btn-file', 'required' => '']) !!}
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    {!! Form::label('content', 'Inhoud', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('content', null, ['class' => 'form-control', 'required' => '']) !!}
        {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
  {{ Form::label('category', 'Categorie', ['class' => 'col-md-4 control-label']) }}
    <div class="col-md-6">
        <select class="form-control" name="category_id">
            @foreach($categories as $category)
                <option value='{{ $category->id }}'>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    {!! Form::label('snippet', 'snippet inhoud', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6" id="dynamicInput">
        {!! Form::textarea('snippet', null, ['class' => 'form-control', 'required' => '']) !!}
        {!! $errors->first('snippet', '<p class="help-block">:message</p>') !!}
    </div>
</div>


    <form method="POST">
     <div id="dynamicInput">Snippet 1<br><textarea type="text" name="myInputs[]"></textarea></div>
     <input type="button" value="Add another text area" onClick="addInput('dynamicInput');">
    </form>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
