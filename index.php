<?php

/**
 * A block component should define a
 * matching snippet for the `blocks` field method.
 *
 * The snippet name must follow the scheme `editor/$type`
 *
 * If no snippet is defined, the block will be skipped when
 * the HTML is rendered in the template. This can be used
 * for block types that are only visible in the backend.
 */
load([
    'kirby\editor\galleryblock' => __DIR__ . '/KirbyEditorGalleryBlock.php'
]);

Kirby::plugin('cajames/gallery-block', [
    'snippets' => [
        'editor/gallery' => __DIR__ . '/snippets/simple.php'
    ],
    'translations' => [
        'en'    => @include_once __DIR__ . '/i18n/en.php',
    ]
]);
