@extends('Template.template')
@section('title','Personas Fisicas')
@section('content')
    <h1 class="bg-primary text-white text-center">Personas Morales</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("PersonasMorales/create")}}">Agregar</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>Id Personas morales</th>
                <th>Razón o denominación social</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Nombre</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
                </thead>
                <tbody>
                @foreach($PersonasMorales as $PersonaMoral)
                    <tr>
                        <td>{{$PersonaMoral->id_personas_morales}}</td>
                        <td>{{$PersonaMoral->razon_den_social}}</td>
                        <td>{{$PersonaMoral->ap_rep}}</td>
                        <td>{{$PersonaMoral->am_rep}}</td>
                        <td>{{$PersonaMoral->nom_rep}}</td>
                        <td>
                            <a href="" class="btn btn-outline-primary" name="actualizar"><i class="fas fa-pen-alt"></i></a>
                        </td>
                        <td>
                            <form action="" method="post">
                                @csrf
                                @method('DELETE')
                                <button href="" class="btn btn-outline-danger" name="eliminar"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
