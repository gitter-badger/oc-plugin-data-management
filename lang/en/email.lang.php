<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

/**
 * EN i18n.
 * @var array
 */
$email_lang = [
	'label' => ['singular' => 'Email', 'plural' => 'Emails'],
	'permissions' => [
		'access'	=> 'Email Management access',
		'create'	=> 'Email creation',
		'delete'	=> 'Email deletion',
		'update'	=> 'Email update',
		'publish'	=> 'Email publish'
	],
	'widget' => [
		'label'			=> 'Email Statistics',
		'published'	=> [
			'ratio' => ['description' => '%s of %s emails published']
		]
	],
	'component' => ['name' => 'Email List', 'description' => 'provide various methods to get lists of emails'],
	'fields' => [
		'type' => [
			'placeholder'	=> 'Insert the email type',
			'comment'			=> 'The type of the email must be unique and comprise between 3 and 20 characters'
		],
		'address' => [
			'placeholder'	=> 'Insert the email address',
			'comment'			=> 'The address must be a valid unique email and comprise between 5 and 50 characters'
		],
		'position'	=> ['comment' => 'The emails will be showed in order based on position value'	],
		'published'	=> ['comment' => 'The emails will be showed only if published'								],
		'principal'	=> ['comment' => 'The principal email will be used as contact reference'			]
	]
];