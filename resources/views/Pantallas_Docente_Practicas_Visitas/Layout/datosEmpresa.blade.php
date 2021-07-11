<h2>Datos de la Empresa</h2>
<section class="datos">
    <div class="col-12">
        <p>Empresa:</p> 
        <span class="campo"> {{ $empresa->nombre }}</span>
    </div>

    <div class="col-6">
        <p>Estado:</p> 
        <span class="campo"> {{ $empresa->direccion->ciudad }}</span>
    </div>
    <div class="col-6">
        <p>Alcaldia/ Municipio:</p> 
        <span class="campo"> {{ $empresa->direccion->alcaldia }}</span>
    </div>

    <div class="col-6">
        <p>Calle:</p> 
        <span class="campo"> {{ $empresa->direccion->calle }}</span>
    </div>
    <div class="col-3">
        <p>Num Ext:</p> 
        <span class="campo"> {{ $empresa->direccion->num_ext }}</span>
    </div>
    <div class="col-3">
        <p>Num Int:</p> 
        <span class="campo"> {{ $empresa->direccion->num_int }}</span>
    </div>

    <div class="col-4">
        <p>Colonia:</p> 
        <span class="campo"> {{ $empresa->direccion->colonia }}</span>
    </div>
    <div class="col-3">
        <p>Código Postal:</p> 
        <span class="campo"> {{ $empresa->direccion->cp }}</span>
    </div>
</section>