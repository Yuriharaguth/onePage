<div class="form-group">
    {!! Form::label('servicoimg_titulo', 'Nome Servico') !!}
    {!! Form::text('servicoimg_titulo', null, ['class' => 'form-control', 'placeholder' => 'Nome Servico']) !!}
</div>

<div class="form-group">
    {!! Form::label('servicoimg_descricao', 'Frase Apresentação') !!}
    {!! Form::text('servicoimg_descricao', null, ['class' => 'form-control', 'placeholder' => 'Serviço descrição']) !!}
</div>

{!! Form::submit('Salvar', ['class' => 'btn btn-default']) !!}