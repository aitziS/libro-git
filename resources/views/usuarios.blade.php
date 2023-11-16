<x-layout titulo="Usuarios" class="bg-red-500">
    <h1>Usuarios</h1>
    <p>estamos probando</p>

    @dump($users)

    <p>{{ "Esto lo hacemos con BLADE" }}</p>
    @foreach ($users as $u)
    {{ $u->metodo }}
    @endforeach
<!-- $u->usuario son todas las columnas -->
</x-layout>