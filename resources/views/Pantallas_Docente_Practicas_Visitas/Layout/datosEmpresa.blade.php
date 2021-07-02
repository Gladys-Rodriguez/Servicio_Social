<h2>Datos de la Empresa</h2>
<section class="datos-empresa">
    <div class="grid-item-nombre">
        <p><b>Empresa:</b></p> 
        <span class="campo"> {{ $empresa->nombre }}</span>
    </div>

    <div class="grid-item-ciudad">
        <p><b>Estado:</b></p> 
        <span class="campo"> {{ $empresa->direccion->ciudad }}</span>
    </div>
    <div class="grid-item-alcaldia">
        <p><b>Alcaldia/ Municipio:</b></p> 
        <span class="campo"> {{ $empresa->direccion->alcaldia }}</span>
    </div>

    <div class="grid-item-calle">
        <p><b>Calle:</b></p> 
        <span class="campo"> {{ $empresa->direccion->calle }}</span>
    </div>
    <div class="grid-item-numExt">
        <p><b>Num Ext:</b></p> 
        <span class="campo"> {{ $empresa->direccion->num_ext }}</span>
    </div>
    <div class="grid-item-numInt">
        <p><b>Num Int:</b></p> 
        <span class="campo"> {{ $empresa->direccion->num_int }}</span>
    </div>

    <div class="grid-item-colonia">
        <p><b>Colonia:</b></p> 
        <span class="campo"> {{ $empresa->direccion->colonia }}</span>
    </div>
    <div class="grid-item-cp">
        <p><b>Código Postal:</b></p> 
        <span class="campo"> {{ $empresa->direccion->cp }}</span>
    </div>
</section>