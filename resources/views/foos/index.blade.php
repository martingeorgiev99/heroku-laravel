@extends('common.master')

@section('title')
    <title>Foos</title>
@endsection

@section('style')
    <style>
        table {
            border-spacing: 0;
            color: white;
        }
        td, th {
            border-bottom: 1px solid black;
            border-left: 1px solid black;
            padding: 1em;
        }
        tr td:last-child, tr th:last-child {
            border-right: 1px solid black;
        }
        th {
            border-top: 1px solid black;
        }

        .button {
            padding: 0.8em;
            background-color: black;
            color: #d0d0d0;
        }
    </style>
@endsection

@section('content')
    <main>
        <table>
            <thead>
            <tr>
                <th>Link to Foo</th>
                <th>Foo Name</th>
                <th>Foo Description</th>
            </tr>
            </thead>
            <tbody>
            @foreach($foos as $foo)
                <tr>
                    <td><a href="{{ route('foos.show', $foo) }}" class="button">Open</a></td>
                    <td>{{$foo->name}}</td>
                    <td>{{$foo->quote}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </main>
@endsection
