@extends('common.master')

@section('title')
    <title>Foo</title>
@endsection

@section('style')
    <style>
        ul {
            background-color: black;
            padding: 5px;
            font-size: 25px;
        }
        li{
            list-style-type: none;
            color: white;
        }
        li a{
            color: white;
            background-color: black;
            padding: 25px;
            border-radius: 5px;
        }
        li a, li form {
            display: inline-block;
        }
        form button {
            color: white;
            background-color: black;
            padding: 25px;
            border-radius: 5px;
            border: none;
            font-size: 25px;
        }
        form button:hover {
            cursor: pointer;
        }
    </style>
@endsection

@section('content')
    <main>
        <ul>
            <li>
                <h2>{{$foo->name}}</h2>
            </li>
            <li>
                <p>{{$foo->quote}}</p>
            </li>
            <li>
                <a href="{{route('foos.edit', $foo)}}">Link to edit</a>
                <form action="{{ route('foos.destroy', $foo) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        </ul>
    </main>
@endsection
