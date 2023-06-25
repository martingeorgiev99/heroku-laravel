@extends('common.master')

@section('title')
    <title>Edit Foo</title>
@endsection

@section('style')
    <style>
        form {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .content {
            background-color: rgba(2, 2, 2, 0.11);
            display: flex;
            flex-direction: column;
            gap: 1em;
            padding: 2em;
            font-size: 3rem;
            width: 70%;
        }
        .field {
            padding: 1em;
            background-color: rgba(2, 2, 2, 0.15);
            display: flex;
            gap: 0.5em;
        }
        .field {
            color: #d0d0d0;
        }
        .is-grouped a, .is-grouped button {
            font-size: 1.75rem;
            background-color: rgba(2, 2, 2, 0.20);
            color: #d0d0d0;
            border: none;
            padding: 0.5em;
        }
        .is-grouped a:hover, .is-grouped button:hover {
            cursor: pointer;
        }
    </style>
@endsection

@section('content')
    <main>
        <form method="POST" action="{{ route('foos.update', $foo) }}">
            @csrf
            @method('PUT')
            <div class="content">
                <div class="field">
                    <label for="name">Name</label>
                    <input name="name" id="name" type="text" value="{{ $foo->name }}" required>
                </div>

                <div class="field">
                    <label for="quote">Quote</label>
                    <input name="quote" id="quote" type="text" value="{{ $foo->quote }}" required >
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit">Save</button>
                    </div>
                    <div class="control">
                        <button type="reset">Reset</button>
                    </div>
                    <div class="control">
                        <a type="button" href="{{ route('foos.show', $foo) }}">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </main>
@endsection


