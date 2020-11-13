@extends('..templates/template')

@section('content')
    <div class="content">
        <form>
            <div class="form-header">
                <h2 class="form-title">Cadastro de Produto</h2>
            </div>
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Descrição</label>
                <textarea name="description" id="description" rows="4" cols="50">
                </textarea>
            </div>
            <div class="form-group">
                <label for="price">Preço</label>
                <input type="text" name="price" id="price" class="form-control">
            </div>
            <div class="form-group">
                <label>É um produto destaque?</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="yes" id="exampleRadios1" value="true">
                    <label class="form-check-label" for="yes">
                      Sim
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="no" id="exampleRadios2" value="false" checked>
                    <label class="form-check-label" for="no">
                      Não
                    </label>
                  </div>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
    <style>
        .content {
            min-width: 80%;
            min-height: 100%;

            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column
        }

        .content form {
            width: 30%;
            padding: 2%;

            background: #FCDA6C;
            border-radius: 1em;
        }

        .content .form-header {
            margin-bottom: 2em;
            text-align: center;
        }

        .content .form-header .form-title {
            display: block;
            font-weight: 400;
            color: #393939;
        }


        .content form .form-group {
            display: flex;
            flex-direction: column;

            margin-bottom: 1em;
        }
    </style>
@endsection
