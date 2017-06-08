<div class="form-group">
    {!! Form::label('frase_curta', 'Nome Site') !!}
    {!! Form::text('frase_curta', null, ['class' => 'form-control', 'placeholder' => 'Frase Longa']) !!}
</div>

<div class="form-group">
    {!! Form::label('frase_longa', 'Frase Longa') !!}
    {!! Form::text('frase_longa', null, ['class' => 'form-control', 'placeholder' => 'Frase Longa']) !!}
</div>

{!! Form::submit('Salvar', ['class' => 'btn btn-default']) !!}