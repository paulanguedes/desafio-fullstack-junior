@extends('navbar')

@section('title') Cadastrar cliente @endsection

<link rel="stylesheet" href="../css/customer.css">

@section('main')

    <h2>cadastrar cliente</h2>
    <h5>*Todos os campos são obrigatórios</h5>

    <form action="{{ action('CustomerController@update', $customers->id) }}" method="post">
        @csrf
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <input type="hidden" name="id" id="id" value="{{ $customers->id }}">
        <div id="customer">
            <label for="customer">Nome completo da empresa</label>
            <br>
            <input type="text" name="customer" id="customer" value="{{ $customers->customer }}">
        </div>
        <div id="email">
            <label for="email">E-mails (separe os e-mails com vírgula)</label>
            <br>
            <input type="email" name="email" id="email" multiple value="{{ $customers->email }}">
        </div>
        <div id="phone">
            <label for="phone">Telefones (somente números, sem espaço, separe por vírgula)</label>
            <br>
            <input type="tel" name="phone" id="phone" multiple value="{{ $customers->phone }}">
        </div>
        
        <button type="submit">salvar</button>

    </form>

@endsection