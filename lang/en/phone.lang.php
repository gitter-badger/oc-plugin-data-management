<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

/**
 * EN i18n.
 * @var array
 */
$phone_lang = [
	'label' => ['singular' => 'Phone', 'plural' => 'Phones'],
	'permissions' => [
		'access'	=> 'Phone Management access',
		'create'	=> 'Phone creation',
		'delete'	=> 'Phone deletion',
		'update'	=> 'Phone update',
		'publish'	=> 'Phone publish'
	],
	'widget' => [
		'label'			=> 'Phone Statistics',
		'published'	=> [
			'ratio' => ['description' => '%s of %s phones published']
		]
	],
	'component' => ['name' => 'Phone List', 'description' => 'provide various methods to get lists of phones'],
	'fields' => [
		'type' => [
			'placeholder' => 'Insert the phone type',
			'comment' => 'The type of the phone must be unique and comprise between 3 and 20 characters'
		],
		'number' => [
			'placeholder'	=> 'Insert the phone number',
			'comment'			=> 'The number must be a valid unique phone and comprise between 5 and 50 digits'
		],
		'position'	=> ['comment' => 'The phones will be showed in order based on position value'	],
		'published'	=> ['comment' => 'The phones will be showed only if published'								],
		'principal'	=> ['comment' => 'The principal phone will be used as contact reference'			]
	]
];