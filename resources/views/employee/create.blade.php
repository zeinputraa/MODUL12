@extends('layouts.app')

@section('content')
    <div class="container-sm my-5">
        <form action="{{ route('employees.store') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                {{-- Dan Seterusnya --}}
            </div>
        </form>
    </div>
@endsection
