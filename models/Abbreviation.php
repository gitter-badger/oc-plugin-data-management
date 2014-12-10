<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\DataManagement\Models
 */

namespace AxC\DataManagement\Models;

/**
 * Abbreviation model class.
 */
class Abbreviation extends \AxC\Framework\Models\Base
{
	/**
	 * DB Table name.
	 * @var string
	 */
	protected $table = 'axc_data_management_abbreviation';

	/**
	 * Modal validation.
	 * @var array
	 */
	public $rules = [
		'code'			=> 'required|unique:axc_data_management_abbreviation|between:2,10|alpha|lowercase',
		'acronym'		=> 'required|unique:axc_data_management_abbreviation|between:2,10|uppercase',
		'meaning'		=> 'required|unique:axc_data_management_abbreviation|between:5,50',
		'published'	=> 'boolean'
	];

	/**
	 * Fields to translate.
	 * @var array
	 */
	public $translatable = ['acronym', 'meaning'];

	/**
	 * Add scope method to filter code field.
	 * @param \October\Rain\Database\Builder query
	 * @param array $params [ = [] ]
	 * @return \Illuminate\Database\Eloquent\Collection
	 */
	public function scopeFilterCode(\October\Rain\Database\Builder $query, array $params = [] )
	{
		return \AxC\Framework\Helpers\Filter::scopeStarts('code', 'AxC\Framework\Models\FilterAlpha', $query, $params);
	}

	/**
	 * Add scope method to filter acronym field.
	 * @param \October\Rain\Database\Builder query
	 * @param array $params [ = [] ]
	 * @return \Illuminate\Database\Eloquent\Collection
	 */
	public function scopeFilterAcronym(\October\Rain\Database\Builder $query, array $params = [] )
	{
		return \AxC\Framework\Helpers\Filter::scopeStarts('acronym', 'AxC\Framework\Models\FilterAlpha', $query, $params);
	}

	/**
	 * Add scope method to filter meaning field.
	 * @param \October\Rain\Database\Builder query
	 * @param array $params [ = [] ]
	 * @return \Illuminate\Database\Eloquent\Collection
	 */
	public function scopeFilterMeaning(\October\Rain\Database\Builder $query, array $params = [] )
	{
		return \AxC\Framework\Helpers\Filter::scopeStarts('meaning', 'AxC\Framework\Models\FilterAlpha', $query, $params);
	}

	public function beforeDuplicate()
	{
		$this->code .= 'a';
		$this->acronym .= 'A';
		$this->meaning .= 'a';
		return parent::save();
	}
}