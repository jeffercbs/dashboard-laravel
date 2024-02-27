@extends('layouts.root')

@section('content')
    <main class="container" style="height: 60vh">
        <div class="row">
            <div class="col-lg">
                <h1>Login</h1>
            </div>
            <div class="col-lg h-full">
                @if(isset ($errors) && count($errors) > 0)
                    <div class="alert alert-warning" role="alert">
                        <ul class="list-unstyled mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(Session::get('success', false))
                        <?php $data = Session::get('success'); ?>
                    @if (is_array($data))
                        @foreach ($data as $msg)
                            <div class="alert alert-warning" role="alert">
                                <i class="fa fa-check"></i>
                                {{ $msg }}
                            </div>
                        @endforeach
                    @else
                        <div class="alert alert-warning" role="alert">
                            <i class="fa fa-check"></i>
                            {{ $data }}
                        </div>
                    @endif
                @endif

                <form method="post" action="{{route('login.signin')}}" class="border py-3 rounded-lg px-2 my-auto">
                    @csrf
                    <label for="dni" class="form-label">Documento de identidad</label>
                    <input type="number" id="dni" class="form-control mb-2" aria-describedby="dni">

                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" class="form-control" aria-describedby="password">

                    <button type="submit" class="btn btn-warning mt-5">
                        Iniciar sesión
                    </button>
                </form>
            </div>
        </div>
    </main>
@endsection
