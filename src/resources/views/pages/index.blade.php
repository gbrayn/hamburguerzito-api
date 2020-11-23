@extends('templates.template')

@section('content')
    <div class="content">
        <div class="container-category">
            <h2 class="title-category">Favoritos da galera</h2>
            <div class="content-category">
                @foreach ($products as $product)
                @if ($product->isHighlight == 1)
                <div class="card">
                    <div class="card-image">
                        <img src={{ $product->image_url }} />
                    </div>
                    <div class="card-title">{{ $product->name }}</div>
                    <div class="price">R$ {{ $product->price }}</div>
                </div>
                @endif
            @endforeach
            </div>
        </div>
        @foreach ($categories as $category)
        <div class="container-category">
            <h2 class="title-category">{{ $category->name }}</h2>
            <div class="content-category">
                @foreach ($products as $product)
                    @if ($category->id == $product->category->id)
                    <div class="card">
                        <div class="card-image">
                            <img src={{ $product->image_url }} />
                        </div>
                        <div class="card-title">{{ $product->name }}</div>
                        <div class="price">R$ {{ $product->price }}</div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
    <style>
        .content {
            width: 100vw ;
            min-height: 100vh;

            display: flex;
            flex-direction: column;
            margin-left: 8em;

            padding: 1em;
            background: #FAFAFA;
        }

        .content .container-category {
            margin-bottom: 1em;
        }

        .content .container-category .title-category {
            margin-bottom: 1em;
        }

        .content-category {
            width: 100%;
            display: flex;

            flex-wrap: wrap;
        }

        .card {
            min-width: 10%;
            height: 40%;

            display: flex;
            flex-direction: column;
            align-items: center;

            padding: 1em;
            margin-bottom: 1rem;
            border-radius: 1em;
            background: #FFFFFF;
            font-weight: bold;
            transition: all ease 0.5s;
        }

        .card:not(:last-of-type) {
            margin-right: 1em;
        }

        .card .card-image img {
            width: 6em;
            height: 6em;

            margin: auto;
            border-radius: 100%;

            object-fit: fill;
        }

        .card .price {
            color: #A0A0A0;
        }

        .card:hover {
            background: #FCDB6D;
            transition: all ease 0.5s;
            cursor: pointer;
        }
    </style>
@endsection
