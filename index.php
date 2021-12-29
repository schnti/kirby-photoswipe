<?php

use Kirby\Toolkit\Tpl;

Kirby::plugin('schnti/photoswipe', [
	'options' => [
		'class' => 'photoswipe',
	],
	'tags'    => [
		'photoswipe' => [
			'attr' => [
				// image
				'width',
				'height',
				'quality',
				// thumb
				'thumbwidth',
				'thumbheight',
				'thumbquality',
				'thumbcrop',
			],
			'html' => function ($tag) {

				$file = $tag->parent()->file($tag->value);

				// image
				$width = $tag->width ?? 1000;
				$height = $tag->height ?? null;
				$quality = $tag->quality ?? 90;

				// thumb
				$thumbWidth = $tag->thumbwidth ?? 500;
				$thumbHeight = $tag->thumbheight ?? null;
				$thumbQuality = $tag->thumbquality ?? 90;
				$thumbCrop = boolval($tag->thumbcrop);

				$class = option('schnti.photoswipe.class');

				$image = clone $file->thumb(['width' => $width, 'height' => $height, 'quality' => $quality]);
				$thumb = clone $file->thumb(['width' => $thumbWidth, 'height' => $thumbHeight, 'quality' => $thumbQuality, 'crop' => $thumbCrop]);

				return Tpl::load(__DIR__ . DS . 'snippets' . DS . 'tag.php', ['class' => $class, 'image' => $image, 'thumb' => $thumb]);
			}
		]
	]
]);