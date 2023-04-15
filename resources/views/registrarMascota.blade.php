<h1>Registrar nova mascota</h1>
<form action="{{url('registrar')}}" method="post">
    @csrf
    <table>
        <tr>
            <td>Nick:</td>
            <td><input type="text" name="nick" id="" required></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="passwd" id="" required></td>
        </tr>
        <tr>
            <td>Nom de la mascota: </td>
            <td><input type="text" name="nom" id="" required></td>
        </tr>
        <tr>
            <td>Raça: </td>
            <td>
                <select name="raça" id="">
                    <option value="Boxer">Boxer</option>
                    <option value="Buldog">Buldog</option>
                    <option value="Labrador">Labrador</option>
                    <option value="Caniche">Caniche</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Sexe: </td>
            <td>
                <select name="sexe" id="">
                    <option value="Mascle">Mascle</option>
                    <option value="Femella">Femella</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Edat:</td>
            <td><input type="number" name="edat" min="1" max="20" id="" required></td>
        </tr>
        <tr>
            <td>Color: </td>
            <td><input type="text" name="color" id="" required></td>
        </tr>
        <tr>
            <td>Nom del seu humá: </td>
            <td><input type="text" name="nom_huma" maxlength="20" id="" required></td>
        </tr>
        <tr>
            <td>Telefon del seu humá: </td>
            <td><input type="number" name="telefon" id="" required></td>
        </tr>
        <tr>
            <td>Fotografia: </td>
            <td><input type="file" name="foto" id="" required></td>
        </tr>
        <tr>
            <td style="padding-top:50px"><input type="submit" nom="crear" value="Registrar"></td>
        </tr>
    </table>
</form>

<a href="form">Formulario login</a>

 
     
