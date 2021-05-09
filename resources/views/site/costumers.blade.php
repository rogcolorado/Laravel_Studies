@extends('site.Master.dashboard')

@section('content')
<div class="container">
    <form method="post">
<h1>Clientes</h1>

@csrf
<b>Nome</b>
<input type="text" name="nome"><br><br>

<b>email</b>
<input type="text" name="email"><br><br>

<b>Cidade</b>
<input type="text" name="cidade"><br><br>

<input type="submit" value="Salvar">

</form>

<hr>
<label>Nome: {{$nome}}</label><br>
<label>Email: {{$email}}</label><br>
<label>Cidade: {{$cidade}}</label><br>

</div>
@endsection
