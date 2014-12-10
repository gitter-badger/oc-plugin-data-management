<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\DataManagement\Components
 */

namespace AxC\DataManagement\Components;

use AxC\DataManagement\Models\Email as EmailModel;

/**
 * Email component class.
 */
class Email extends \Cms\Classes\ComponentBase
{
	/**
	 * Return the component details.
	 * @return array
	 */
	public function componentDetails()
	{
		return [
			'name'				=> trans('axc.datamanagement::lang.email.component.name'),
			'description'	=> trans('axc.datamanagement::lang.email.component.description')
		];
	}

	/**
	 * Return all the published emails.
	 * @return array
	 */
	public function published()
	{
		return EmailModel::published();
	}

	/**
	 * Return the principal email.
	 * @return AxC\DataManagement\Models\Email
	 */
	public function principal()
	{
		return EmailModel::principal();
	}
}