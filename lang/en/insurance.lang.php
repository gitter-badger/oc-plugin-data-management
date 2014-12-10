<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

require_once(__DIR__ .'/insurance/company.lang.php');
require_once(__DIR__ .'/insurance/content.lang.php');

/**
 * EN i18n.
 * @var array
 */
$insurance_lang = [
	'label' => ['singular' => 'Insurance', 'plural' => 'Insurances'],
	'widget' => [
		'label'			=> 'Insurance Statistics',
		'published'	=> '%s of %s insurance content published'
	],
	'component' => [
		'name'				=> 'Insurance List',
		'description'	=> 'provide various methods to get lists of insurance (company and content)'
	],
	'company' => $insurance_company_lang,
	'content' => $insurance_content_lang,
];