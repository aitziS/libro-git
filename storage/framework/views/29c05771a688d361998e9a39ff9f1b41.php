<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => ['titulo' => 'Principal','metaDescription' => 'Pagina principal','suma' => 2+3]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['titulo' => 'Principal','meta-description' => 'Pagina principal','suma' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(2+3)]); ?>
    <h1>Principal</h1>
    
    <h1>Vamos a iniciar sesión</h1>
    
    <div class="container">
        <form action="/validar" method="post" class="aesthetic-form">
            <?php echo csrf_field(); ?>
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
    
    

    <?php
    //Código de PHP embebido
    //print "<p>Esto lo hacemos con PHP</p>";
    //foreach ( $dic as $val) {
    //    print $val['num'].' ' ;
    //}
    ?> 

    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH /var/www/laravelapp/resources/views/principal.blade.php ENDPATH**/ ?>