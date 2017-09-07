<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title', 'Titel', ['class' => 'col-md-4 control-label']) !!}    <!--maakt een label met de naam Titel-->
    <div class="col-md-6">
        {!! Form::text('title', null, ['class' => 'form-control', 'required' => '']) !!}    <!--maakt een form stukje waar je tekst kan invullen-->
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}   <!--geeft een error bericht als de form een error heeft.-->
    </div>
</div>
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('upload', 'Thumbnail', ['class' => 'col-md-4 control-label']) !!}   <!--maakt een label met de naam Thumbnail-->
    <div class="col-md-6">
        {!! Form::file('upload', ['class' => 'form-control btn btn-default btn-file', 'required' => '']) !!}    <!--maakt een form met file type dus je kan hier bestanden uploaden-->
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    {!! Form::label('content', 'Beschrijving', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('content', null, ['class' => 'form-control', 'required' => '']) !!}    <!--maakt een textarea-->
        {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
  {{ Form::label('category', 'Categorie', ['class' => 'col-md-4 control-label']) }}
    <div class="col-md-6">
        <select class="form-control" name="category_id">
            @foreach($categories as $category)    <!--elke onderdeel van categories word als category gebruikt-->
                <option value='{{ $category->id }}'>{{ $category->name }}</option>    <!--afhankelijk van welke id bij category hoord komt de bijbehorende category naam op het scherm-->
            @endforeach   <!--einde foreach-->
        </select>
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}   <!--maakt een submit button  als alles is ingevuld dan word het gecreate(???????)-->
    </div>
</div>
