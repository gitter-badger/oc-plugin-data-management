<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

/**
 * EN i18n.
 * @var array
 */
$abbreviation_lang = [
	'label' => ['singular' => 'Abbreviation', 'plural' => 'Abbreviations'],
	'permissions' => [
		'access'	=> 'Abbreviation Management access',
		'create'	=> 'Abbreviation creation',
		'delete'	=> 'Abbreviation deletion',
		'update'	=> 'Abbreviation update',
		'publish'	=> 'Abbreviation publish'
	],
	'widget' => [
		'label'			=> 'Abbreviation Statistics',
		'published'	=> [
			'ratio' => ['description' => '%s of %s abbreviations published']
		]
	],
	'component' => ['name' => 'Abbreviation List', 'description' => 'provide various methods to get lists of abbreviations'],
	'fields' => [
		'code' => [
			'placeholder'	=> 'Insert the abbreviation code',
			'comment'			=> 'The code of the abbreviation must be unique, in lowercase format and comprise between 2 and 10 characters'
		],
		'acronym' => [
			'label'				=> 'Acronym',
			'placeholder'	=> 'Insert the abbreviation acronym',
			'comment'			=> 'The acronym of the abbreviation must be unique, in uppercase format and comprise between 2 and 10 characters'
		],
		'meaning' => [
			'label'				=> 'Meaning',
			'placeholder'	=> 'Insert the abbreviation meaning',
			'comment'			=> 'The meaning must be a valid unique abbreviation and comprise between 5 and 50 characters'
		],
		'published' => ['comment' => 'The abbreviations will be showed only if published'],
	],
	'filter' => [
		'meaning' => ['label' => 'Meaning starts with'],
		'acronym' => ['label' => 'Acronym starts with']
	],
	'columns' => [
		'acronym' => ['label' => 'Acronym'],
		'meaning' => ['label' => 'Meaning']
	]
];