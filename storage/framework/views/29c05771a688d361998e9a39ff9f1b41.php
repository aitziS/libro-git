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
    <?php dump($dic); ?> <!--dump es como una especie de print-->
    <p>estamos probando</p>

    <p><?php echo e('Esto lo hacemos con BLADE'); ?></p>
    <?php $__currentLoopData = $dic; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($val['num']); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php
    //Código de PHP embebido
    print "<p>Esto lo hacemos con PHP</p>";
    foreach ( $dic as $val) {
        print $val['num'].' ' ;
    }
?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH /var/www/laravelapp/resources/views/principal.blade.php ENDPATH**/ ?>