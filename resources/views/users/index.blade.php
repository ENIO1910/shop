@extends('layouts.app')

@section('content')
    @vite(['resources/js/delete.js'])
<div class="container">

    <table class="table table-hover">
        <thead class="bg-dark text-white">
        <tr>
            <th scope="col">#</th>
            <th scope="col">E-mail</th>
            <th scope="col">Imię</th>
            <th scope="col">Nazwisko</th>
            <th scope="col">Akcje</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->email}}</td>
                <td>{{$user->name}}</td>
                <td> {{$user->surname}}</td>
                <td>
                    <button class="btn btn-danger btn-sm delete" data-id="{{$user->id}}">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$users->links()}}
</div>


@endsection
@section('javascript')
    const deleteUrl = "{{url('users')}}/";
@endsection
@section('js-files')
    @vite('resources/js/delete.js')
@endsection
