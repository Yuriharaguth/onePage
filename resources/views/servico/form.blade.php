<div class="form-group">
    {!! Form::label('nome_servico', 'Nome Servico') !!}
    {!! Form::text('nome_servico', null, ['class' => 'form-control', 'placeholder' => 'Nome Servico']) !!}
</div>

<div class="form-group">
    {!! Form::label('descricao_servico', 'Frase Apresentação') !!}
    {!! Form::text('descricao_servico', null, ['class' => 'form-control', 'placeholder' => 'Serviço descrição']) !!}
</div>

<div class="form-group">
    {!! Form::label('servico_icon', 'Icon') !!}
    {!! Form::text('servico_icon', null, ['class' => 'form-control', 'placeholder' => 'icon']) !!}
</div>

{!! Form::submit('Salvar', ['class' => 'btn btn-default']) !!}