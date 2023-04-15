<h1>Foto de la mascota {{$nick}}</h1>
@foreach ($mascotas as $mascota)
    {{$mascota['foto']}}
    <img src="../../img/<?php echo $mascota['foto']?>" alt="">
@endforeach