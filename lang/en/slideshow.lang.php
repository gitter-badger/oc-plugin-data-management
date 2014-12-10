<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/e-sLICENSE-2.0 Apache License, Version 2.0
 */

/**
 * EN i18n.
 * @var array
 */
$slideshow_lang = [
	'label' => ['singular' => 'Slide-Show', 'plural' => 'Slide-Shows'],
	'permissions' => [
		'access'	=> 'Slide-Show Management access',
		'create'	=> 'Slide-Show creation',
		'delete'	=> 'Slide-Show deletion',
		'update'	=> 'Slide-Show update',
		'publish'	=> 'Slide-Show publish'
	],
	'widget' => [
		'label'			=> 'Slide-Show Statistics',
		'published'	=> [
			'ratio' => ['description' => '%s of %s slide-shows published']
		]
	],
	'component' => ['name' => 'Slide-Show List', 'description' => 'provide various methods to get lists of slide-shows'],
	'fields' => [
		'title'				=> ['comment' => 'The title of the slide-show must be unique and comprise between 5 and 100 characters'	],
		'image'				=> ['comment' => 'The size of the slide-show image will be %dx%d'																			],
		'position'		=> ['comment' => 'The slide-shows will be showed in order based on position value'											],
		'published'		=> ['comment' => 'The slide-shows will be showed only if published'																		],
		'description'	=> ['comment' => 'Slide-show description'																																]
	]
];