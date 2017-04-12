<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'is_fullwidth' => array(
		'label'        => __('Full Width', 'fw'),
		'type'         => 'switch',
	),
	'background_color' => array(
		'label' => __('Background Color', 'fw'),
		'desc'  => __('Please select the background color', 'fw'),
		'type'  => 'color-picker',
	),
	'background_image' => array(
		'label'   => __('Background Image', 'fw'),
		'desc'    => __('Please select the background image', 'fw'),
		'type'    => 'background-image',
		'choices' => array(//	in future may will set predefined images
		)
	),
	'video' => array(
		'label' => __('Background Video', 'fw'),
		'desc'  => __('Insert Video URL to embed this video', 'fw'),
		'type'  => 'text',
	),
	'custom_class' => array(
		'label' => __('Cusstom Section Class', 'fw'),
		'desc'  => __('Insert Section Class', 'fw'),
		'type'  => 'text',
	),
	'custom_id' => array(
		'label' => __('Cusstom Section ID', 'fw'),
		'desc'  => __('Insert Section ID', 'fw'),
		'type'  => 'text',
	),
	'custom_attribute' => array(
		'label' => __('Cusstom Section Attribute', 'fw'),
		'desc'  => __('Insert Section Attribute', 'fw'),
		'type'  => 'text',
		'value'  => 'Default value',

	)
);
