@extends('navbar')

@section('title') Novo contato @endsection

<link rel="stylesheet" href="../css/contact.css">

@section('main')
    
    <main>

        <div id="contactList">
            <table>
                <tr>
                  <th>ID do cliente</th>
                  <th>Nome</th>
                  <th>E-mail</th>
                  <th>Telefone</th>
                  <th>Editar</th>
                  <th>Deletar</th>
                </tr>
                @foreach ($contacts as $item)
                    <tr>
                        <td> {{ $item->customer_id }} </td>
                        <td> {{ $item->name }} </td>
                        <td> {{ $item->email }} </td>
                        <td> {{ $item->phone }} </td>
                        <td> <a href="/edit/{{ $item->id }}">&#10000</a> </td>
                        <td> <a href="/delete/{{ $item->id }}">&#9747</a> </td>
                    </tr>
                @endforeach
            </table>
        </div>
        
        <h2>Novo contato</h2>
        <h5>*Todos os campos são obrigatórios</h5>

        <form action="{{ route('addContact') }}" method="post">
            @csrf
            <div id="customer_id">
                <label for="customer_id">Cliente</label>
                <br>
                <select name="customer_id" id="customer_id" required>
                    <option disabled selected value="">Escolha um cliente</option>
                    @foreach ($contacts as $item)
                        <option value="{{ $item->customer_id }}"> {{ $item->customer_id }} </option>
                    @endforeach
                </select>
            </div>
            <div id="name">
                <label for="name">Nome completo</label>
                <br>
                <input type="text" name="name" id="name" required>
            </div>
            <div id="email">
                <label for="email">E-mails (separe os e-mails com vírgula)</label>
                <br>
                <input type="email" name="email" id="email" multiple required>
            </div>
            <div id="phone">
                <label for="phone">Telefones (separe os e-mails com vírgula)</label>
                <br>
                <input type="tel" name="phone" id="phone" multiple required>
            </div>
            
            <button type="submit">enviar</button>

        </form>
    </main>

@endsection