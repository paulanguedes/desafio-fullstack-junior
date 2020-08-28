@extends('navbar')

@section('title') customerX - Relatório @endsection

<link rel="stylesheet" href="../css/report.css">

@section('main')

    <h2>relatório</h2>

    <main id="report">
        
        <table>
            <tr>
                <th>ID do cliente</th>
                <th>Cliente</th>
                <th>Cliente criado em:</th>
                <th>Nome do contato</th>
                <th>Telefone</th>
                <th>E-mail</th>
            </tr>
            @foreach ($reports as $item)
            <tr>
                <td> {{ $item->id }} </td>
                <td> {{ $item->customer }} </td>
                <td> {{ $item->created_at }} </td>
                <td> {{ $item->name }} </td>
                <td> {{ $item->phone }} </td>
                <td> {{ $item->email }} </td>
            </tr>
            @endforeach
        </table>

    </main>

@endsection