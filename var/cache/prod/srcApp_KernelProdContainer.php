<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZ2vSSEU\srcApp_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZ2vSSEU/srcApp_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerZ2vSSEU.legacy');

    return;
}

if (!\class_exists(srcApp_KernelProdContainer::class, false)) {
    \class_alias(\ContainerZ2vSSEU\srcApp_KernelProdContainer::class, srcApp_KernelProdContainer::class, false);
}

return new \ContainerZ2vSSEU\srcApp_KernelProdContainer([
    'container.build_hash' => 'Z2vSSEU',
    'container.build_id' => '8b53133a',
    'container.build_time' => 1578472747,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZ2vSSEU');
