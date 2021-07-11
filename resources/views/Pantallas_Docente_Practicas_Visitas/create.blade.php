<h2>Solicitud de Visita</h2>

<form action=" {{ route('docente.guardarVisita') }} " method="POST" enctype="multipart/form-data">

    @csrf
    <label for="docente_id">ID DOCENTE: </label>
    <input type="text" name="docente_id" id="docente_id" value="1" readonly>
    <br />

    <label for="empresa_id">EMPRESA:</label>
    <select name="empresa_id" id="empresa_id" required>
        @foreach ($empresas as $id => $display)
            <option value=" {{ $id }} "> {{ $display }} </option>
        @endforeach
    </select>
    <br />

    <label for="grupo_id">GRUPOS:</label>
    <select name="grupo_id" id="grupo_id" required>
        @foreach ($grupos as $id => $display)
            <option value=" {{ $id }} "> {{ $display }} </option>
        @endforeach
    </select>
    <br />

    <label for="fecha_visita">FECHA VISITA: </label>
    <input type="date" name="fecha_visita" id="fecha_visita">
    <br />
    
    <label  for="ruta">Documento</label>
    <input name="ruta" type="file" accept="application/pdf" />
    <br />
    
    <button type= "submit">Registrar Visita </button>
</form>