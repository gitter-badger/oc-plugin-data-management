<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\DataManagement\ReportWidgets
 */

namespace AxC\DataManagement\ReportWidgets;

/**
 * Base report widget class.
 */
class Base extends \Backend\Classes\ReportWidgetBase
{
	/**
	 * Model name or instance.
	 * @var mixed
	 */
	private $__model;

	/**
	 * Create the base report widget for the controller.
	 * @static
	 * @param \Backend\Classes\Controller $controller
	 * @param string $model [ = null ]
	 * @return null
	 */
	public static function create(\Backend\Classes\Controller $controller, $model = null)
	{
		$widget = new \AxC\DataManagement\ReportWidgets\Base($controller);
		$widget->alias = "{$controller->type}_report_widget";
		$widget->setModel($model);
		$widget->bindToController();
	}

	/**
	 * Set the model. If @var model is null set the model from the controller. 
	 * @param string $model [ = null ]
	 * @return null
	 */
	public function setModel($model = null)
	{
		$this->__model = $model ? $model : $this->controller->model;
	}

	/**
	 * Render the widget.
	 * @return mixed
	 */
	public function render()
	{
		$model = $this->__model;

		$date_current_month = date('Y-m-01 00:00:00');
		$date_previous_month = date( 'Y-m-d 00:00:00', strtotime("first day of previous month") );

		$current_month = $model::where( 'created_at', '>=', $date_current_month)->count();
		$previous_month = $model::where( 'created_at', '<', $date_current_month )->where( 'created_at', '>=', $date_previous_month )->count();
		$total = $model::all()->count();
		$published = $model::wherePublished(true)->count();
		$trashed = $model::onlyTrashed()->get()->count();

		switch ( \AxC\Framework\Helpers\Math::sign($current_month - $previous_month) )
		{
			case 1:		$trend = 'positive'; break;
			case 0:		$trend = ''; break;
			case -1:	$trend = 'negative'; break;
		}

		return $this->makePartial('widget', [
			'current_month' => $current_month,
			'previous_month' => $previous_month,
			'published' => $published,
			'published_ratio' => $total != 0 ? (int)($published / $total * 100) : 0,
			'total' => $total,
			'trashed' => $trashed,
			'trend' => $trend
		] );
	}
}