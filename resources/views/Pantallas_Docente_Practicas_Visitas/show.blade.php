<h2>Datos Visita</h2>
<dl>
    <dt>ID Solicitud</dt>
    <dd>{{ $visita->id }}</dd> 

    <dt>Fecha de la Visita</dt>
    <dd> {{ $visita->fecha_visita }} </dd>

    <dt>Validacion</dt>
    <dd> {{ $visita->validacion ? 'Aceptada' : 'Sin validar'}} </dd>

    <dt>Fecha de Solicitud</dt>
    <dd> {{ $visita->created_at }} </dd>
</dl>

<h2>Datos Docente</h2>
<dl>
    <dt>Matricula</dt>
    <dd> {{ $visita->docente->user->id }} </dd>

    <dt>Docente</dt>
    <dd>
        {{ $visita->docente->dato->nombre }} 
        {{ $visita->docente->dato->ap_materno }}  
        {{ $visita->docente->dato->ap_paterno }}  
    </dd> 

    <dt>Academia</dt>
    <dd> {{ $visita->docente->academia }} </dd>

</dl>

<h2>Datos Empresa</h2>
<dt>
    <dt>Empresa</dt>
    <dd> {{ $visita->empresa->nombre }} </dd>
    
    <dt>Ciudad</dt>
    <dd> {{ $visita->empresa->direccion->ciudad }} </dd>

    <dt>Alcaldía</dt>
    <dd> {{ $visita->empresa->direccion->alcaldia }} </dd>

    <dt>Colonia</dt>
    <dd> {{ $visita->empresa->direccion->colonia }} </dd>

    <dt>Calle</dt>
    <dd> {{ $visita->empresa->direccion->calle }} </dd>

    <dt>Num. Exterior</dt>
    <dd> {{ $visita->empresa->direccion->num_ext }} </dd>

    <dt>Num. Interior</dt>
    <dd> {{ $visita->empresa->direccion->num_int }} </dd>

    <dt>Codigo Postal</dt>
    <dd> {{ $visita->empresa->direccion->cp }} </dd>
</dl>