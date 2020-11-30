@extends('templates.template')

@section('content')
    <div class="content">
        <h2>Criar uma nova categoria</h2>
        <form method="post" action="{{url('/categorias/nova')}}" class="form-product">
            @csrf
            <div class="input-group">
                <label for="name" class="text">Nome</label>
                <input type="text" name="name" id="name">
            </div>
            <button type="submit">Cadastrar</button>
        </form>
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
            margin-bottom: 2em;
        }

        .form-product {
            width: 35em;
            height: 100%;
        }

        form .input-group {
            display: flex;
            flex-direction: column;
        }

        form .input-group input[type=text], form .input-group input[type=number] {
            padding: 5px 20px;
            margin: 8px 0;
            font-size: 16px;

            border: none;
            border-bottom: 1px solid #F92351;
            background: transparent;
            transition: all ease 0.2s;
        }

        form .input-group input[type=text]:hover,
        form .input-group input[type=number]:hover,
        form .input-group input[type=text]:active,
        form .input-group input[type=number]:active {
            transition: all ease 0.2s;
            border-bottom: 2px solid #F92351;
        }

        form .input-group textarea {
            padding: 5px 20px;
            margin: 8px 0;
            font-size: 16px;

            border: 1px solid #F92351;
            background: transparent;
            transition: all ease 0.2s;
        }

        form .input-group textarea:active, form .input-group textarea:hover {
            border: 2px solid #F92351;
            transition: all ease 0.2s;
        }

        .input-group label[for=category] {
            margin-bottom: 8px;
        }

        .input-group:last-of-type {
            margin-bottom: 5em;
        }

        select {
            display: block;
            font-size: 16px;
            font-family: sans-serif;
            font-weight: 700;
            color: #444;
            line-height: 1.3;
            padding: .6em 1.4em .5em .8em;
            width: 100%;
            max-width: 100%; /* useful when width is set to anything other than 100% */
            box-sizing: border-box;
            margin: 0;
            border: 1px solid #F92351;
            box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
            border-radius: .5em;
            -moz-appearance: none;
            -webkit-appearance: none;
            appearance: none;
            background-color: #fff;
            margin-bottom: 1em;
            /* note: bg image below uses 2 urls. The first is an svg data uri for the arrow icon, and the second is the gradient.
            for the icon, if you want to change the color, be sure to use `%23` instead of `#`, since it's a url. You can also swap in a different svg icon or an external image reference

            */
            background-repeat: no-repeat, repeat;
            /* arrow icon position (1em from the right, 50% vertical) , then gradient position*/
            background-position: right .7em top 50%, 0 0;
            /* icon size, then gradient */
            background-size: .65em auto, 100%;
            }
            /* Hide arrow icon in IE browsers */
            select::-ms-expand {
                display: none;
            }
            /* Hover style */
            select:hover {
                border-color: #F92351;
            }
            /* Focus style */
            select:focus {
                border-color: #aaa;
                /* It'd be nice to use -webkit-focus-ring-color here but it doesn't work on box-shadow */
                box-shadow: 0 0 1px 3px #F92351;
                box-shadow: 0 0 0 3px -moz-mac-focusring;
                color: #F92351;
                outline: none;
            }

            /* Set options to normal weight */
            select option {
            font-weight:normal;
            }

            select:disabled:hover, select[aria-disabled=true] {
                border-color: #F92351;
            }

            form button {
                display: flex;
                justify-content: space-evenly;
                align-items: center;

                width: 10em;
                height: 3em;
                margin-bottom: 1em;

                font-weight: bolder;
                background: #2387f9;
                color: #FAFAFA;
                transition: all ease 0.5s;
                border: 1px solid;
                cursor: pointer;
            }

            form button:hover {
                background: #2387f9b2;
                transition: all ease 0.5s;
            }
    </style>
@endsection
