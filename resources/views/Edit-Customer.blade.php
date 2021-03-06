@extends('navbar')

@section('title') Editar cliente @endsection

<link rel="stylesheet" href="../css/customer.css">

@section('main')

    <h2>editar cliente</h2>
    <h5>*Preencha somente os campos que deseja alterar</h5>

    <form action="/updateCustomer/{{ $customers->id }}" method="post">
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
        
        <button type="submit">editar</button>

    </form>

@endsection