@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<h1>Web de Mascotes</h1>
<form action="form" method="post">
    @csrf
    <table>
        <tr>
            <td>Nick de la mascota:</td>
            <td><input type="text" name="nick" placeholder="Nick" required></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="passwd" placeholder="Password" required></td>
        </tr>
    </table>
    <input type="submit" value="Enviar" name="logear">
</form>

<a href="registrar_mascota">Registra la teva mascota!</a>