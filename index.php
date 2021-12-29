<?php

use Kirby\Toolkit\Tpl;

Kirby::plugin('schnti/photoswipe', [
	'options' => [
		'class' => 'photoswipe',
	],
	'tags'    => [
		'photoswipe' => [
			'attr' => [
				// thumb
				'width',
				'height',
				'quality',
				'crop',
				// image
				'lightboxwidth',
				'lightboxheight',
				'lightboxquality',
			],
			'html' => function ($tag) {

				$file = $tag->parent()->file($tag->value);

				// Small preview thumb
				$thumbWidth = $tag->width ?? 500;
				$thumbHeight = $tag->height ?? null;
				$thumbQuality = $tag->quality ?? 80;
				$thumbCrop = boolval($tag->crop);

				// Large lightbox image
				$imageWidth = $tag->lightboxwidth ?? 1000;
				$imageHeight = $tag->lightboxheight ?? null;
				$imageQuality = $tag->lightboxquality ?? 90;

				// CSS CLass
				$class = option('schnti.photoswipe.class');

				$thumb = clone $file->thumb(['width' => $thumbWidth, 'height' => $thumbHeight, 'quality' => $thumbQuality, 'crop' => $thumbCrop]);
				$image = clone $file->thumb(['width' => $imageWidth, 'height' => $imageHeight, 'quality' => $imageQuality]);

				return Tpl::load(__DIR__ . DS . 'snippets' . DS . 'tag.php', ['class' => $class, 'image' => $image, 'thumb' => $thumb]);
			}
		]
	]
]);