<x-layouts.app titulo="Principal" meta-description="Pagina principal" :suma=2+3>
    <h1>Principal</h1>
    @dump($dic) <!--dump es como una especie de print-->
    <p>estamos probando</p>

    <p>{{ 'Esto lo hacemos con BLADE'}}</p>
    @foreach ($dic as $val)
    {{ $val['num']}}
    @endforeach

    <?php
    //Código de PHP embebido
    print "<p>Esto lo hacemos con PHP</p>";
    foreach ( $dic as $val) {
        print $val['num'].' ' ;
    }
?>
</x-layouts.app>