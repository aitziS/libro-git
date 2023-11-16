<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void /*  con el método up se crea la tabla con todas estas columnas */
    {
        /*el método create recibe el nombre de la tabla que yo quiero crear. como segundo parámetro
        se le pasa una función anónima que recibe un objeto blueprint que indica las "columnas"*/
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id(); //lamamos al método id del objeto y me crea una columna con las siguientes propiedades:
            /* Integer Unsigned Increment. El nobre que le va a asignar es id*/
            $table->morphs('tokenable');
            $table->string('name');
            /* agrega una nueva columna de tipo varchar(255) por defecto, pero se le puede poner $table->string('name', 100) para que sea varchar(100) */
            $table->string('token', 64)->unique();
            /* la propiedad unique protege a nivel de base de datos y se le dice que lo que almacenamos aquí debe ser único*/
            $table->text('abilities')->nullable();
            /* si queremos almacenar>255 caracteres usamos text y le damos el nombre que queramos
            $table->text('nombre')*/
            $table->timestamp('last_used_at')->nullable();
            /* me crea una columna de tipo fecha y se va a usar para el caso en que queramos activar la verificación de correos
            nullable me deja que el campo pueda quedar vacío */
            $table->timestamp('expires_at')->nullable();
            $table->timestamps(); /* me crea dos columnas timestamp  */ 
            $table->rememberToken(); /* en esta columna se almacena un token cada vez que el usuario marque "mantener la sesión iniciada"*/ 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void /* este método incluye un método de Schema que borra la tabla*/
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};
