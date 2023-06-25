@extends('common.master')

@section('title')
    <title>Create Foo</title>
@endsection

@section('style')
    <style>
        form {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .content {
            background-color: black;
            display: flex;
            flex-direction: column;
            gap: 1em;
            padding: 2em;
            font-size: 3rem;
            width: 70%;
        }
        .field {
            background-color: black;
            display: flex;
            gap: 25px;
        }
        .field {
            color: white;
        }
        .is-grouped a, .is-grouped button {
            font-size: 25px;
            background-color: black;
            color: white;
            padding: 5px;
        }
        .is-grouped a:hover, .is-grouped button:hover {
            cursor: pointer;
        }
    </style>
@endsection

@section('content')
    <main>
        <form method="POST" action="{{ route('foos.store') }}">
            @csrf
            <div class="content">
                <div class="field">
                    <label for="name">Name</label>
                    <input name="name" id="name" type="text" placeholder="The foo name here..." required>
                </div>

                <div class="field">
                    <label for="quote">Quote</label>
                    <input name="quote" id="quote" type="text" placeholder="The foo quote here..." required>
                </div>

                <div class="field is-grouped">
                    {{-- Here are the form buttons: save, reset and cancel --}}
                    <div class="control">
                        <button type="submit" class="button is-primary">Save</button>
                    </div>
                    <div class="control">
                        <button type="reset" class="button is-warning">Reset</button>
                    </div>
                    <div class="control">
                        <a type="button" href="{{ route('foos.index') }}" class="button is-light">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </main>
@endsection


