<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gestor de Usuarios</title>
</head>

<style>
@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

*{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    box-sizing: border-box;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    height: 100%;
}

.image-box {
    position: relative;
    width: 300px;
    text-align: center;
    margin: 20px; 
}

img {
    width: 100%;
}

.label {
    position: absolute;
    bottom: 150px; 
    left: 0;
    right: 0;
    font-size: 40px;
    font-family: 'Cinzel';
    color: #fff;
}

button {
    padding: 10px 20px;
    background-color: #f12f1f;
    color: #fff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 10px;
    font-family: 'Poppins';
}

button:hover{
    color: #fff;
    background-color: black;
    transition: 0.5s;
}

h1{
    font-family: 'Cinzel';
    text-align: center;
}

h3{
    font-family: 'Poppins';
    text-align: center;
}


footer{
	font-family: arial;
}

table {
        margin: 0 auto;
        border-collapse: collapse;
        width: 80%;
        max-width: 1000px;
        background-color: #fff;
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
    }
    th, td {
        padding: 12px 15px;
        border: 1px solid #ddd;
        font-family: Arial;
    }
    th {
        background-color: #333;
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-family: 'Cinzel';
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #f5f5f5;
    }

    p{
        font-family: 'Poppins';
    }

    a{
        color:#ffff;
        font-size: 20px;
    }

    .search-forms {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }
        .search-forms form {
            display: flex;
            align-items: center;
        }
        .search-forms input[type="text"] {
            padding: 5px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-family: arial;
        }
        .search-forms button {
            padding: 5px 10px;
            border: none;
            background-color: #f12f1f;
            color: white;
            border-radius: 4px;
            cursor: pointer;
            font-size: 15px;
        }
        .search-forms button:hover {
            background-color: #000;
        }


</style>

<body>
    <x-index></x-index>
    <br><br><br><br><br>
    <h1>Gestión de registros</h1>
    <br>
    <center>
    @if(isset($registros))
        <p>{{ $registros->count() }} registros existentes.</p>
    @else
        <p>Variable $registros no está definida.</p>
    @endif
    <br>
    <center><button><a href="{{ route('pantadmin') }}">Regresar</a></button></center>
    <br>

    <div class="search-forms">
        <form action="{{ route('registro.buscarid') }}" method="GET">
            <input type="text" name="id" placeholder="Buscar por ID" value="{{ request()->input('id') }}">
            <button type="submit">Buscar por ID</button>
        </form>

        <form action="{{ route('registro.buscar') }}" method="GET">
            <input type="text" name="query" placeholder="Buscar en todos los campos" value="{{ request()->input('query') }}">
            <button type="submit">Buscar</button>
        </form>
        <br>
    </div>
    </center>

    <table border="0">
    <tr>
        <th>Id Del Registro</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Teléfono</th>
        <th>Email</th>
        <th>Estado</th>
        <th>Acciones</th>
    </tr>
    @foreach ($registros as $registro)
        <tr>
            <td>{{ $registro->id }}</td>
            <td>{{ $registro->nombre_cliente }}</td>
            <td>{{ $registro->apellido_cliente }}</td>
            <td>{{ $registro->telefono_cliente }}</td>
            <td>{{ $registro->correo }}</td>
            <td>{{ $registro->estado ? 'Activo' : 'Inactivo' }}</td>
            <td>
                <form action="{{ route('registro.cambiarEstado', $registro->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas cambiar el estado de este registro?');">
                    @csrf
                    @method('PATCH')
                    <button type="submit">{{ $registro->estado ? 'Marcar como Inactivo' : 'Marcar como Activo' }}</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
  
    <br>
    <br>
    <br>
</body>
<x-footer></x-footer>
</html>