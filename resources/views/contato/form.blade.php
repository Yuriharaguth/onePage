<div class="form-group">
    {!! Form::label('contato_titulo', 'Titulo') !!}
    {!! Form::text('contato_titulo', null, ['class' => 'form-control', 'placeholder' => 'Titulo']) !!}
</div>

<div class="form-group">
    {!! Form::label('contato_mensagem', 'Frase Apresentação') !!}
    {!! Form::text('contato_mensagem', null, ['class' => 'form-control', 'placeholder' => 'Frase Mensagem']) !!}
</div>

<div class="form-group">
    {!! Form::label('contato_email', 'Email') !!}
    {!! Form::text('contato_email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
</div>


<div class="form-group">
    {!! Form::label('contato_tel', 'Telefone') !!}
    {!! Form::text('contato_tel', null, ['class' => 'form-control', 'placeholder' => 'Telefone']) !!}
</div>


{!! Form::submit('Salvar', ['class' => 'btn btn-default']) !!}