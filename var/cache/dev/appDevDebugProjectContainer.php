<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNuiyeus\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNuiyeus/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerNuiyeus.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerNuiyeus\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerNuiyeus\appDevDebugProjectContainer([
    'container.build_hash' => 'Nuiyeus',
    'container.build_id' => '2e3d8eca',
    'container.build_time' => 1554646567,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNuiyeus');
