<?php
/**
 *
 * Lightbox extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2015 Matt Friedman
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Translated By : Bassel Taha Alhitary - www.alhitary.net
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'LIGHTBOX_SETTINGS'				=> 'إعدادات تصغير الصور',
	'LIGHTBOX_MAX_WIDTH'			=> 'الحد الأقصى لعرض الصورة بالبكسل ',
	'LIGHTBOX_MAX_WIDTH_EXPLAIN'	=> 'سيتم تصغير الصور التي تتجاوز هذه القيمة ويمكن تكبيرها بإستخدام تقنية النافذة المضيئة Lightbox. القيمة صفر يعني تعطيل هذا الخيار.',
	'LIGHTBOX_GALLERY'				=> 'السماح بالتنقل بين الصور ',
	'LIGHTBOX_GALLERY_EXPLAIN'		=> 'السماح بسهولة التنقل بين جميع الصور المُصغرة في الصفحة بإستخدام تقنية النافذة المضيئة.',
	'LIGHTBOX_SIGNATURES'			=> 'تصغير صور التواقيع ',
	'LIGHTBOX_SIGNATURES_EXPLAIN'	=> 'السماح بتصغير الصور الموجودة في تواقيع الأعضاء.',
	'LIGHTBOX_IMG_TITLES'			=> 'Show image file names',
	'LIGHTBOX_IMG_TITLES_EXPLAIN'	=> 'Image names will appear as a caption in the Lightbox effect.',
));
