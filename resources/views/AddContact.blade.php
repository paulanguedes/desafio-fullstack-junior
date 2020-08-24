@extends('navbar')

@section('title') Novo contato @endsection

<link rel="stylesheet" href="../css/add-contact.css">

@section('main')
    
    <main>
        <h2>Novo contato</h2>
        <h5>*Todos os campos são obrigatórios</h5>

        <form method="post">

            <div id="customer">
                <label for="customer">Cliente</label>
                <br>
                <select name="customer" id="customer" required>
                    <option disabled selected value="">Escolha uma opção</option>
                    <option value="cliente2">Cliente 2</option>
                    <option value="cliente3">Cliente 3</option>
                    <option value="cliente4">Cliente 4</option>
                </select>
            </div>
            <div id="name">
                <label for="name">Nome completo da empresa</label>
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
                <input type="tel" name="phone" id="phone" multiple pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
            </div>
            
            <button type="submit">enviar</button>

        </form>
    </main>

@endsection