<style>
    table{
        border-collapse: collapse;
        width: 80%;
        margin: auto;
        text-align: center;
    }
    tr,td,th{
        border: 1px solid black;
    }
</style>
<h1>Benvingut/da mascota: {{$nick}}</h1>

<table>
    <tr>
        <th>Nom de la possible parella</th>
        <th>Edat</th>
        <th>Raça</th>
        <th>Sexe</th>
        <th>Color</th>
        <th>Nom del seu humá</th>
        <th>Telèfon del seu humá</th>
        <th>Fotos</th>
    </tr>

    @foreach ($mascotas as $mascota)
        <tr>
            <td>{{$mascota->nom}}</td>
            <td>{{$mascota->edat}}</td>
            <td>{{$mascota->raça}}</td>
            <td>{{$mascota->sexe}}</td>
            <td>{{$mascota->color}}</td>
            <td>{{$mascota->nom_huma}}</td>
            <td>{{$mascota->telefon_huma}}</td>
            <td><a href="../verFoto/{{$nick}}">Veure foto</a></td>
        </tr>
    @endforeach
</table>

<a href="../logout">Sortir</a>
