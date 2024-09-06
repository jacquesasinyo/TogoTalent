<form <?php echo e($attributes(["class" => "max-w-2xl mx-auto space-y-6", "method" => "GET"])); ?>>
    <?php if($attributes->get('method', 'GET') !== 'GET'): ?>
        <?php echo csrf_field(); ?>
        <?php echo method_field($attributes->get('method')); ?>
    <?php endif; ?>

    <?php echo e($slot); ?>

</form>
<?php /**PATH /Users/jacques/Herd/TogoTalent/resources/views/components/forms/form.blade.php ENDPATH**/ ?>