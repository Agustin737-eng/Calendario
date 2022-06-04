@extends('layouts.vistapadre')

@section('content')
<div class="container">
    <div class="row">
        <h1 class="text-center">Calendario</h1>
    </div>

    <!-- <div class="row">
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
    </div> -->

    <!-- <div class="row">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Servicios
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Servicio 1</a></li>
                <li><a class="dropdown-item" href="#">Servicio 2</a></li>
            </ul>
        </div>
    </div> -->
    <div class="row">
        <div class="col-2 border">

            <h4><b>Datos del Agente</b></h4>
            <!-- <p>idagente: 12706</p>
            <p>documento: 23114022</p>
            <p>apellido: Gonzalez de Burgos</p>
            <p>nombre: Maria Sonia</p>

            <h4><b>Puesto: </b></h4>
            <p>Servicio: Jefe de caps</p>
            <p>Efector: caps canal norte</p>
            <p>Ao: ao mariano moreno</p>
            <p>Ap: Area programatica centro</p>
            <p>idpuesto: 66635</p> -->

        </div>
        <div class="col border">
            <div id="agenda">
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="evento" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="evento" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="titulo"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form>
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Titulo</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">fecha inicio</label>
                        <input type="date" class="form-control" name="start" id="start">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">fecha fin</label>
                        <input type="date" class="form-control" name="end" id="end">
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btnGuardar">Guardar</button>
                <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button>
                <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

@endsection