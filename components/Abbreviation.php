<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\DataManagement\Components
 */

namespace AxC\DataManagement\Components;

use AxC\DataManagement\Models\Abbreviation as AbbreviationModel;

/**
 * Abbreviation component class.
 */
class Abbreviation extends \Cms\Classes\ComponentBase
{
	/**
	 * Return the component details.
	 * @return array
	 */
	public function componentDetails()
	{
		return [
			'name'				=> trans('axc.datamanagement::lang.abbreviation.component.name'),
			'description'	=> trans('axc.datamanagement::lang.abbreviation.component.description')
		];
	}

	/**
	 * Return all the published abbreviations.
	 * @return array
	 */
	public function published()
	{
		return AbbreviationModel::published();
	}

	/**
	 * Return all the published abbreviations with abbreviation code as key.
	 * @return array
	 */
	public function publishedKey()
	{
		$records = $this->published();
		return array_combine(
			/* keys		*/ array_map(function ($abbr) { return $abbr->code; }, $records), 
			/* values	*/ $records
		);
	}

	/**
	 * Return all the published abbreviations in HTML Bootstrap format with abbreviation code as object name.
	 * @return object
	 */
	public function publishedHtml()
	{
		return array_combine(
			/* keys		*/ array_keys( $this->publishedKey() ),
			/* values	*/ array_map( function ($abbr) { return "<abbr title=\"$abbr->meaning\">$abbr->acronym</abbr>"; }, $this->published() )
		);
	}
}