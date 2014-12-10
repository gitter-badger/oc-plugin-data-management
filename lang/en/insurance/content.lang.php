<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

require_once(__DIR__ .'/content/item.lang.php');

/**
 * EN i18n.
 * @var array
 */
$insurance_content_lang = [
	'label' => ['singular' => 'Content', 'plural' => 'Contents'],
	'image' => ['title' => 'Insurance Content image'],
	'permissions' => [
		'access'	=> 'Insurance Content Management access',
		'create'	=> 'Insurance Content creation',
		'delete'	=> 'Insurance Content deletion',
		'update'	=> 'Insurance Content update',
		'publish'	=> 'Insurance Content publish'
	],
	'fields' => [
		'title'			=> ['comment' => 'The title of the insurance content must be unique and comprise between 5 and 100 characters'],
		'position'	=> ['comment' => 'The insurance contents will be showed in order based on position value'											],
		'published'	=> ['comment' => 'The insurance contents will be showed only if published'																		]
	],
	'item' => $insurance_content_item_lang
];	