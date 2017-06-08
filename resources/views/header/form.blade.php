<div class="form-group">
    {!! Form::label('nome_site', 'Nome Site') !!}
    {!! Form::text('nome_site', null, ['class' => 'form-control', 'placeholder' => '']) !!}
</div>

<div class="form-group">
    {!! Form::label('frase_apresentacao', 'Frase Apresentação') !!}
    {!! Form::text('frase_apresentacao', null, ['class' => 'form-control', 'placeholder' => 'Frase Apresentação']) !!}
</div>

{!! Form::submit('Salvar', ['class' => 'btn btn-default']) !!}