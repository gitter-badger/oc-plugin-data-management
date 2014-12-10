<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

/**
 * EN i18n.
 * @var array
 */
$fax_lang = [
	'label' => ['singular' => 'Fax', 'plural' => 'Faxes'],
	'permissions' => [
		'access'	=> 'Fax Management access',
		'create'	=> 'Fax creation',
		'delete'	=> 'Fax deletion',
		'update'	=> 'Fax update',
		'publish'	=> 'Fax publish'
	],
	'widget' => [
		'label'			=> 'Fax Statistics',
		'published'	=> [
			'ratio' => ['description' => '%s of %s faxes published']
		]
	],
	'component' => ['name' => 'Fax List', 'description' => 'provide various methods to get lists of faxes'],
	'fields' => [
		'type' => [
			'placeholder'	=> 'Insert the fax type',
			'comment'			=> 'The type of the fax must be unique and comprise between 3 and 20 characters'
		],
		'number' => [
			'placeholder'	=> 'Insert the fax number',
			'comment'			=> 'The number must be a valid unique fax and comprise between 5 and 50 digits'
		],
		'position'	=> ['comment' => 'The faxes will be showed in order based on position value'],
		'published'	=> ['comment' => 'The faxes will be showed only if published'								],
		'principal'	=> ['comment' => 'The principal fax will be used as contact reference'			]
	]
];