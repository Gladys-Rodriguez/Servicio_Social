<section class="section-dos">
    <div class="content-wrap">
        <h2>Lista de Grupos</h2>
        <p>Selecciona tu grupo</p>
        <table class="table">
            <thead>
                <tr>
                    <th>Secuencia</th>
                    <th>Carrera</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($grupos as $grupo)
                    <tr>
                        <td> {{ $grupo->secuencia }} </td>
                        <td> {{ $grupo->carrera->nombre }} </td>
                        <td>
                            <a href="#">
                                Seleccionar
                            </a>
                        </td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>
</section>