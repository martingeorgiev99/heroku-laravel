<?php

namespace App\Http\Controllers;

use App\Models\Foo;
use Illuminate\Http\Request;

class FooController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foos = Foo::all();
        return view('foos.index', compact('foos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('foos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Foo::create($this->validateFoo($request));
        return redirect(route('foos.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Foo $foo)
    {
        return view('foos.show', compact('foo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Foo $foo)
    {
        return view('foos.edit', compact('foo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Foo $foo)
    {
        $foo->update($this->validateFoo($request));
        return redirect(route('foos.show', $foo));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Foo $foo)
    {
        $foo->delete();
        return redirect(route('foos.index'));
    }

    public function validateFoo(Request $request)
    {
        return $request->validate([
            'name' => 'required',
            'quote' => 'required'
        ]);
    }
}
