<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

/**
 * EN i18n.ink
 * @var array
 */
$link_lang = [
	'label' => ['singular' => 'Link', 'plural' => 'Links'],
	'permissions' => [
		'access'	=> 'Link Management access',
		'create'	=> 'Link creation',
		'delete'	=> 'Link deletion',
		'update'	=> 'Link update',
		'publish'	=> 'Link publish'
	],
	'widget' => [
		'label'			=> 'Link Statistics',
		'published'	=> [
			'ratio' => ['description' => '%s of %s links published']
		]
	],
	'component' => ['name' => 'Link List', 'description' => 'provide various methods to get lists of links'],
	'columns' => [
		'image' => ['title' => 'Link Image']
	],
	'fields' => [
		'title'			=> ['comment' => 'The title of the link must be unique and comprise between 5 and 100 characters'	],
		'url'				=> ['comment' => 'The URL of the link must be unique'																							],
		'image'			=> ['comment' => 'The size of the link image will be %dx%d'																				],
		'position'	=> ['comment' => 'The links will be showed in order based on position value'											],
		'published'	=> ['comment' => 'The links will be showed only if published'																			]
	],
	'filter' => [
		'title' => ['label' => 'Link Title starts with']
	]
];