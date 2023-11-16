<x-layouts.app titulo="Principal" meta-description="Pagina principal" :suma=2+3>
    <h1>Principal</h1>
    {{-- @dump($dic) <!--dump es como una especie de print--> --}}
    <h1>Vamos a iniciar sesión</h1>
    
    <div class="container">
        <form action="/validar" method="post" class="aesthetic-form">
            @csrf
            <div class="form-group">
                <label for="nombre" class="aesthetic-label">Usuario:</label>
                <input type="text" class="form-control aesthetic-input" name="nombre"/>
            </div>
            <div class="form-group">
                <label for="password" class="aesthetic-label">Contraseña:</label>
                <input type="password" class="form-control aesthetic-input" name="password">
            </div>
            <button type="submit" class="btn btn-primary aesthetic-btn">Enviar</button>
        </form>
    </div>
    
    {{-- <p>{{ 'Esto lo hacemos con BLADE'}}</p>
    @foreach ($dic as $val)
    {{ $val['num']}}
    @endforeach--}}

    <?php
    //Código de PHP embebido
    //print "<p>Esto lo hacemos con PHP</p>";
    //foreach ( $dic as $val) {
    //    print $val['num'].' ' ;
    //}
    ?> 

    
</x-layouts.app>