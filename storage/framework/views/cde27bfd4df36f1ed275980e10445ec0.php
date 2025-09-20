<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['active' => false, 'type' => 'a']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['active' => false, 'type' => 'a']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php if($type === 'a'): ?>

<a  class="<?php echo e($active ? 'rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white' : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white'); ?>" aria-current="<?php echo e($active ? 'page' : 'false'); ?>" <?php echo e($attributes); ?>><?php echo e($slot); ?></a>

<?php else: ?>
<button type="button" class="<?php echo e($active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'); ?> rounded-md px-3 py-2 text-sm font-medium" <?php echo e($attributes); ?>><?php echo e($slot); ?></button>
<?php endif; ?><?php /**PATH /Users/susana/Visualismo Dropbox/Susana M/Visualismo - Susy Tom/FTPS_2024/2025/_laravel/p1/project1/resources/views/components/nav-link.blade.php ENDPATH**/ ?>