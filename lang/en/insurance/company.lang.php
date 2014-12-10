<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

/**
 * EN i18n.
 * @var array
 */
$insurance_company_lang = [
	'label' => ['singular' => 'Company', 'plural' => 'Companies'],
	'image' => ['title' => 'Insurance Company image'],
	'permissions' => [
		'access'	=> 'Insurance Company Management access',
		'create'	=> 'Insurance Company creation',
		'delete'	=> 'Insurance Company deletion',
		'update'	=> 'Insurance Company update',
		'publish'	=> 'Insurance Company publish'
	],
	'columns' => [
		'imageTitle' => 'Insurance Company image',
	],
	'fields' => [
		'title'			=> ['comment' => 'The title of the insurance company must be unique and comprise between 5 and 100 characters'],
		'url'				=> ['comment' => 'The URL of the insurance company must be unique'																						],
		'image'			=> ['comment' => 'The size of the insurance company image will be %dx%d'																			],
		'position'	=> ['comment' => 'The insurance companies will be showed in order based on position value'										],
		'published'	=> ['comment' => 'The insurance companies will be showed only if published'																		]
	],
	'filter' => [
		'title' => ['label' => 'Company Title starts with']
	]
];