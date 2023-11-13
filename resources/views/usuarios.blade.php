<x-layout titulo="Usuarios">
    <h1>Usuarios</h1>
    <p>estamos probando</p>

    @dump($users)

    <p>{{ "Esto lo hacemos con BLADE" }}</p>
    @foreach ($users as $u)
    {{ $u->usuario }}
    @endforeach
<!-- $u->usuario son todas las columnas -->
</x-layout>