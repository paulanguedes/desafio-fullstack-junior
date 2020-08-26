@extends('navbar')

@section('title') Cadastrar cliente @endsection

<link rel="stylesheet" href="../css/customer.css">

@section('main')

    <div id="displayCustomers">

        <table>
            <tr>
              <th>Cliente</th>
              <th>E-mail</th>
              <th>Telefone</th>
              <th>Data de registro</th>
              <th>Editar</th>
            </tr>
            @foreach ($customers as $item)
                <tr>
                    <td> {{ $item->customer }} </td>
                    <td> {{ $item->email }} </td>
                    <td> {{ $item->phone }} </td>
                    <td> {{ $item->created_at }} </td>
                    <td><a href="/edit/{{ $item->id }}">&#10000</a></td>
                </tr>
            @endforeach
        </table>

    </div>

    <h2>cadastrar cliente</h2>
    <h5>*Todos os campos são obrigatórios</h5>

    <form method="post">
        @csrf
        <div id="customer">
            <label for="customer">Nome completo da empresa</label>
            <br>
            <input type="text" name="customer" id="customer" required>
        </div>
        <div id="email">
            <label for="email">E-mails (separe os e-mails com vírgula)</label>
            <br>
            <input type="email" name="email" id="email" multiple required>
        </div>
        <div id="phone">
            <label for="phone">Telefones (separe os e-mails com vírgula)</label>
            <br>
            <input type="tel" name="phone" id="phone" multiple pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
        </div>
        
        <button type="submit">enviar</button>

    </form>

@endsection