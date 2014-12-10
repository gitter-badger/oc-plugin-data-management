<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

/**
 * EN i18n.
 * @var array
 */
$insurance_content_item_lang = [
	'label' => ['singular' => 'Item', 'plural' => 'Items'],
	'permissions' => [
		'access'	=> 'Insurance Content Item Management access',
		'create'	=> 'Insurance Content Item creation',
		'delete'	=> 'Insurance Content Item deletion',
		'update'	=> 'Insurance Content Item update',
		'publish'	=> 'Insurance Content Item publish'
	],
	'columns' => [
		'image' => ['title' => 'Company Image']
	],
	'fields' => [
		'title' =>			['comment' => 'The title of the insurance content item must be unique and comprise between 5 and 100 characters'],
		'value' =>			['comment' => 'The value of the insurance content item must be unique and comprise between 5 and 100 characters'],
		'position' =>		['comment' => 'The insurance content items will be showed in order based on position value'											],
		'published' =>	['comment' => 'The insurance content items will be showed only if published'																		]
	]
];