<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

/**
 * EN i18n.
 * @var array
 */
$route_lang = [
	'label' => ['singular' => 'Route', 'plural' => 'Routes'],
	'permissions' => [
		'access'	=> 'Route Management access',
		'create'	=> 'Route creation',
		'delete'	=> 'Route deletion',
		'update'	=> 'Route update',
		'publish'	=> 'Route publish'
	],
	'widget' => [
		'label'			=> 'Route Statistics',
		'published'	=> [
			'ratio' => ['description' => '%s of %s routes published']
		]
	],
	'fields' => [
		'path' => [
			'placeholder'	=> 'Insert the route path',
			'comment'			=> 'It must be a valid unique route path and comprise between 3 and 100 characters'
		],
		'language'	=> ['comment' => 'The route will be applied for this language'],
		'page'			=> ['comment' => 'The route target page'											],
		'published'	=> ['comment' => 'The routes will be valid only if published' ]
	]
];