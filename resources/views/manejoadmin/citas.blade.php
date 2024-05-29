<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gestor de Citas</title>
<script type="text/javascript">
        function confirmDeletion(event) {
            event.preventDefault();
            var form = event.target.form;
            if (confirm("¿Desea eliminar? Los registros no se pueden recuperar después de eliminados.")) {
                form.submit();
            }
        }
    </script>
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
    font-size: 20px;
    font-family: 'Poppins';
}

button:hover{
    color: #fff;
    background-color: #619E48;
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

</style>

<body>
<x-index></x-index>
<br><br><br><br><br>
<h1>Gestión de Citas</h1>
<br>
@if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif
    <center>
    @if(isset($citas))
        <p>{{ $citas->count() }} registros de citas existentes.</p>
    @else
        <p>Variable $citas no está definida.</p>
    @endif
    </center>
    <br>
    <br>
    <table border="0">
        <tr>
            <th>Id De Cita</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Dirección</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Acciones</th>
        </tr>
        @foreach($citas as $cita)
            <tr>
                <td>{{ $cita->id }}</td>
                <td>{{ $cita->nombre_cliente }}</td>
                <td>{{ $cita->email }}</td>
                <td>{{ $cita->direccion }}</td>
                <td>{{ $cita->fecha }}</td>
                <td>{{ $cita->hora }}</td>
                <td>
                    <form action="{{ route('citas.destroy', $cita->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="confirmDeletion(event)">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
<x-footer></x-footer>
</html>