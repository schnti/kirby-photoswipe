<?php

Kirby::plugin('schnti/photoswipe', [
	'snippets' => [
		'photoswipe' => __DIR__ . '/snippets/pswp.php'
	]
]);

//$kirby->set('tag', 'photoswipe', array(
//	'attr' => array(
//		// thumb
//		'width',
//		'height',
//		'quality',
//		'crop',
//		// image
//		'pwidth',
//		'pheight',
//		'pquality',
//		// settings
//		'class',
//		'text'
//	),
//	'html' => function ($tag) {
//
//		$url = $tag->attr('photoswipe');
//		$file = $tag->file($url);
//
//		$imageWidth = $tag->attr('pwidth', 1000);
//		$imageHeight = $tag->attr('pheight', null);
//		$imageQuality = $tag->attr('pquality', 80);
//
//		$thumbWidth = $tag->attr('width', 300);
//		$thumbHeight = $tag->attr('height', null);
//		$thumbQuality = $tag->attr('quality', 70);
//		$thumbCrop = $tag->attr('crop', false);
//
//		$class = $tag->attr('class', 'img-responsive');
//
//		$text = $tag->attr('text', '');
//
//		$image = clone $file->thumb(['width' => $imageWidth, 'height' => $imageHeight, 'quality' => $imageQuality]);
//		$thumb = clone $file->thumb(['width' => $thumbWidth, 'height' => $thumbHeight, 'quality' => $thumbQuality, 'crop' => $thumbCrop]);
//
//		return tpl::load(__DIR__ . DS . 'templates' . DS . 'tag.php', ['image' => $image, 'thumb' => $thumb, 'class' => $class, 'text' => $text]);
//	}
//));