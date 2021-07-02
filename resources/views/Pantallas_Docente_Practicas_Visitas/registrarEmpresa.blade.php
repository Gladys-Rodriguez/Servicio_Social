<h2>Registra tu Empresa</h2>

<form action="{{ route('docente.guardarEmpresa') }}" method="POST">
    @csrf
    <label for="nombre">Nombre Empresa: </label>
    <input type="text" name="nombre" id="nombre">
    <br />

    <label for="ciudad">Alcaldía/Municipio: </label>
    <select name="ciudad" id="ciudad">
        <option value="CDMX">CDMX</option>
        <option value="Edo México">Edo México</option>
    </select>
    <br />

    <label for="alcaldia">Alcaldía/Municipio: </label>
    <input type="text" name="alcaldia" id="nombre">
    <br />

    <label for="colonia">Colonia: </label>
    <input type="text" name="colonia" id="colonia">
    <br />

    <label for="calle">Calle: </label>
    <input type="text" name="calle" id="calle">
    <br />

    <label for="num_ext">Núm Ext: </label>
    <input type="text" name="num_ext" id="num_ext">
    <br />

    <label for="num_int">Núm Int: </label>
    <input type="text" name="num_int" id="num_int">
    <br />

    <label for="cp">Código Postal: </label>
    <input type="text" name="cp" id="cp">
    <br />

    <button type="submit">Registrar Empresa </button>
</form>