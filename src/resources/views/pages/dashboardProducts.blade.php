@extends('templates.template')

@section('content')
    <div class="content">
    <h2>Produtos</h2>
    <a href="/produtos/novo" class="btn-new">
        <i class="fas fa-plus"></i>
        Novo Produto
    </a>
        <table>
            <tr>
                <th>Código</th>
                <th>Imagem</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Categoria</th>
                <th>É Favorito?</th>
                <th>Ações</th>
            <tr>
            @foreach ($products as $product)
            <tr>
                <td> {{ $product->id }} </td>
                <td> <img src="{{ $product->image_url }}" alt="" srcset="" width="30px" height="30px"></td>
                <td> {{ $product->name }} </td>
                <td> {{ $product->description }} </td>
                <td> {{ $product->price }} </td>
                <td> {{ $product->category->name }} </td>
                <td>
                    @if ($product->isHighlight == 1)
                        Sim
                    @else
                        Não
                    @endif
                </td>
                <td class="actions">
                <a href="/produtos/deletar/{{ $product->id }}" class="delete">
                    <i class="fas fa-trash"></i>
                </a>
                <a href="/produtos/alterar/{{ $product->id }}" class="update">
                    <i class="fas fa-edit"></i>
                </a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <style>
        .content {
            width: 100vw ;
            min-height: 100vh;

            display: flex;
            flex-direction: column;
            flex-direction: column;
            margin-left: 8em;

            padding: 1em;
            background: #FAFAFA;
        }

        .content h2 {
            margin-bottom: 1em;
        }

        td, th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2;}

        tr:hover {background-color: #f9235175;}

        th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #F92351;
            color: white;
        }

        table .actions {
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 55px;
        }

        table .delete {
            color: #F92351;
        }

        table .update {
            color: #2387f9
        }

        .content .btn-new, .btn-new:visited {
            display: flex;
            justify-content: space-evenly;
            align-items: center;

            width: 10em;
            height: 2em;
            margin-bottom: 1em;

            text-decoration: none;
            background: #2387f9;
            color: #FAFAFA;
            transition: all ease 0.5s;
        }

        .content .btn-new:hover {
            background: #2387f9b2;
            transition: all ease 0.5s;
        }

    </style>
@endsection
