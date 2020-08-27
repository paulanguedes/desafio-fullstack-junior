@extends('navbar')

@section('title') Editar contato @endsection

<link rel="stylesheet" href="../css/contact.css">

@section('main')

    <h2>editar contato</h2>
    <h5>*Preencha somente os campos que deseja alterar.</h5>

    <form action="{{ action('ContactController@update', $contact->id) }}" method="post">
        @csrf
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <input type="hidden" name="id" id="id" value="{{ $contact->id }}">
        <div id="customer_id">
            <label for="customer_id">ID do cliente</label>
            <br>
            <input type="text" name="customer_id" id="customer_id" value="{{ $contact->customer_id }}">
        </div>
        <div id="name">
            <label for="name">Nome completo</label>
            <br>
            <input type="text" name="name" id="name" value="{{ $contact->name }}">
        </div>
        <div id="email">
            <label for="email">E-mails (separe os e-mails com vírgula)</label>
            <br>
            <input type="email" name="email" id="email" multiple value="{{ $contact->email }}">
        </div>
        <div id="phone">
            <label for="phone">Telefones (somente números, sem espaço, separe por vírgula)</label>
            <br>
            <input type="tel" name="phone" id="phone" multiple value="{{ $contact->phone }}">
        </div>
        
        <button type="submit">editar</button>

    </form>

@endsection