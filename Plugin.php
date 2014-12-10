<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\DataManagement
 */

namespace AxC\DataManagement;

/**
 * DataManagement Plugin Information File
 */
class Plugin extends \System\Classes\PluginBase
{
	/**
	 * Plugin dependencies.
	 * @var array
	 */
	public $require = [
		'AxC.Framework',
		'RainLab.Translate'
	];

	/**
	 * Returns information about this plugin.
	 * @return array
	 */
	public function pluginDetails()
	{
		return [
			'name'				=> trans('axc.datamanagement::lang.plugin.details.name'),
			'description'	=> trans('axc.datamanagement::lang.plugin.details.description'),
			'author'			=> 'Alex Carrega',
			'icon'				=> 'icon-database'
		];
	}

	/**
	 * Register the backend navigation menu.
	 * @return array
	 */
	public function registerNavigation()
	{
		$sideMenu['home'] = [
			'label'	=> trans('axc.datamanagement::lang.home.label.singular'),
			'icon'	=> 'icon-home',
			'url'		=> \Backend::url('axc/datamanagement/home'),
		];

		$functionalities = [
			'abbreviation' => 'code',
			'email' => 'envelope',
			'phone' => 'phone',
			'fax' => 'fax',
			'insurance' => 'briefcase',
			'link' => 'list',
			'route' => 'road',
			'slideshow' => 'image'
		];

		$settings = \AxC\DataManagement\Models\Settings::instance();
		foreach ($functionalities as $func => $icon)
			if ($settings->{ "enable_$func" })
			{
				$sideMenu[$func] = [
					'label'				=> trans("axc.datamanagement::lang.$func.label.singular"),
					'icon'				=> "icon-$icon",
					'url'					=> \Backend::url("axc/datamanagement/$func"),
					'permissions'	=> ["axc.data_management.{$func}_access"]
				];
			}

		$sideMenu['settings'] = [
			'label'				=> trans('system::lang.settings.menu_label'),
			'icon'				=> 'icon-cog',
			'url'					=> \Backend::url('system/settings/update/axc/datamanagement/settings'),
		];

		return
		[
			'data-management' => [
				'label'				=> trans('axc.datamanagement::lang.plugin.navigation'),
				'url'					=> \Backend::url('axc/datamanagement/home'),
				'icon'				=> 'icon-database',
				'permissions'	=> ['axc.data_management.access'],
				'order'				=> 2,
				'sideMenu'		=> $sideMenu
			]
		];
	}

	/**
	 * Register the components.
	 * @return array
	 */
	public function registerComponents()
	{
		return [
			'AxC\DataManagement\Components\Abbreviation' => 'data_management_abbreviation',
			'AxC\DataManagement\Components\Email' => 'data_management_email',
			'AxC\DataManagement\Components\Fax' => 'data_management_fax',
			'AxC\DataManagement\Components\Insurance' => 'data_management_insurance',
			'AxC\DataManagement\Components\Link' => 'data_management_link',
			'AxC\DataManagement\Components\Phone' => 'data_management_phone',
			'AxC\DataManagement\Components\Slideshow' => 'data_management_slideshow'
		];
	}

	/**
	 * Register the user permissions.
	 * @return array
	 * @todo
	 */
	public function registerPermissions()
	{
		return [
			'axc.data_management.abbreviation_access'		=> [ 'label' => trans('axc.datamanagement::lang.abbreviation.permissions.access')		],
			'axc.data_management.abbreviation_create'		=> [ 'label' => trans('axc.datamanagement::lang.abbreviation.permissions.create')		],
			'axc.data_management.abbreviation_delete'		=> [ 'label' => trans('axc.datamanagement::lang.abbreviation.permissions.delete')		],
			'axc.data_management.abbreviation_publish'	=> [ 'label' => trans('axc.datamanagement::lang.abbreviation.permissions.publish')	],
			'axc.data_management.abbreviation_update'		=> [ 'label' => trans('axc.datamanagement::lang.abbreviation.permissions.update')		],

			'axc.data_management.access' => [ 'label' => trans('axc.datamanagement::lang.permissions.access') ],

			'axc.data_management.email_access'	=> [ 'label' => trans('axc.datamanagement::lang.email.permissions.access')	],
			'axc.data_management.email_create'	=> [ 'label' => trans('axc.datamanagement::lang.email.permissions.create')	],
			'axc.data_management.email_delete'	=> [ 'label' => trans('axc.datamanagement::lang.email.permissions.delete')	],
			'axc.data_management.email_publish'	=> [ 'label' => trans('axc.datamanagement::lang.email.permissions.publish')	],
			'axc.data_management.email_update'	=> [ 'label' => trans('axc.datamanagement::lang.email.permissions.update')	],

			'axc.data_management.fax_access'	=> [ 'label' => trans('axc.datamanagement::lang.fax.permissions.access')	],
			'axc.data_management.fax_create'	=> [ 'label' => trans('axc.datamanagement::lang.fax.permissions.create')	],
			'axc.data_management.fax_delete'	=> [ 'label' => trans('axc.datamanagement::lang.fax.permissions.delete')	],
			'axc.data_management.fax_publish'	=> [ 'label' => trans('axc.datamanagement::lang.fax.permissions.publish')	],
			'axc.data_management.fax_update'	=> [ 'label' => trans('axc.datamanagement::lang.fax.permissions.update')	],

			'axc.data_management.insurance_access' => [ 'label' => trans('axc.datamanagement::lang.insurance.permissions.access') ],

			'axc.data_management.insurance_company_access'	=> [ 'label' => trans('axc.datamanagement::lang.insurance.company.permissions.access')	],
			'axc.data_management.insurance_company_create'	=> [ 'label' => trans('axc.datamanagement::lang.insurance.company.permissions.create')	],
			'axc.data_management.insurance_company_delete'	=> [ 'label' => trans('axc.datamanagement::lang.insurance.company.permissions.delete')	],
			'axc.data_management.insurance_company_publish'	=> [ 'label' => trans('axc.datamanagement::lang.insurance.company.permissions.publish')	],
			'axc.data_management.insurance_company_update'	=> [ 'label' => trans('axc.datamanagement::lang.insurance.company.permissions.update')	],

			'axc.data_management.insurance_content_access'	=> [ 'label' => trans('axc.datamanagement::lang.insurance.content.permissions.access')	],
			'axc.data_management.insurance_content_create'	=> [ 'label' => trans('axc.datamanagement::lang.insurance.content.permissions.create')	],
			'axc.data_management.insurance_content_delete'	=> [ 'label' => trans('axc.datamanagement::lang.insurance.content.permissions.delete')	],
			'axc.data_management.insurance_content_publish'	=> [ 'label' => trans('axc.datamanagement::lang.insurance.content.permissions.publish')	],
			'axc.data_management.insurance_content_update'	=> [ 'label' => trans('axc.datamanagement::lang.insurance.content.permissions.update')	],

			'axc.data_management.link_access'		=> [ 'label' => trans('axc.datamanagement::lang.link.permissions.access')		],
			'axc.data_management.link_create'		=> [ 'label' => trans('axc.datamanagement::lang.link.permissions.create')		],
			'axc.data_management.link_delete'		=> [ 'label' => trans('axc.datamanagement::lang.link.permissions.delete')		],
			'axc.data_management.link_publish'	=> [ 'label' => trans('axc.datamanagement::lang.link.permissions.publish')	],
			'axc.data_management.link_update'		=> [ 'label' => trans('axc.datamanagement::lang.link-permissions.update')		],
			
			'axc.data_management.phone_access'	=> [ 'label' => trans('axc.datamanagement::lang.phone.permissions.access')	],
			'axc.data_management.phone_create'	=> [ 'label' => trans('axc.datamanagement::lang.phone.permissions.create')	],
			'axc.data_management.phone_delete'	=> [ 'label' => trans('axc.datamanagement::lang.phone.permissions.delete')	],
			'axc.data_management.phone_publish'	=> [ 'label' => trans('axc.datamanagement::lang.phone.permissions.publish')	],
			'axc.data_management.phone_update'	=> [ 'label' => trans('axc.datamanagement::lang.phone.permissions.update')	],

			'axc.data_management.route_access'	=> [ 'label' => trans('axc.datamanagement::lang.route.permissions.access')	],
			'axc.data_management.route_create'	=> [ 'label' => trans('axc.datamanagement::lang.route.permissions.create')	],
			'axc.data_management.route_delete'	=> [ 'label' => trans('axc.datamanagement::lang.route.permissions.delete')	],
			'axc.data_management.route_publish'	=> [ 'label' => trans('axc.datamanagement::lang.route.permissions.publish')	],
			'axc.data_management.route_update'	=> [ 'label' => trans('axc.datamanagement::lang.route.permissions.update')	],

			'axc.data_management.slideshow_access'	=> [ 'label' => trans('axc.datamanagement::lang.slideshow.permissions.access')	],
			'axc.data_management.slideshow_create'	=> [ 'label' => trans('axc.datamanagement::lang.slideshow.permissions.create')	],
			'axc.data_management.slideshow_delete'	=> [ 'label' => trans('axc.datamanagement::lang.slideshow.permissions.delete')	],
			'axc.data_management.slideshow_publish'	=> [ 'label' => trans('axc.datamanagement::lang.slideshow.permissions.publish')	],
			'axc.data_management.slideshow_update'	=> [ 'label' => trans('axc.datamanagement::lang.slideshow.permissions.update')	]
		];
	}

/**
 * Register the information about the plugin settings.
 * @return array.
 */
	public function registerSettings()
	{
		return [
			'settings' => [
				'label'				=> trans('axc.datamanagement::lang.settings.label'),
				'icon'				=> 'icon-inbox',
				'description'	=> trans('axc.datamanagement::lang.settings.description'),
				'class'				=> 'AxC\DataManagement\Models\Settings',
				'category'		=> \AxC\Framework\Models\Settings::CATEGORY_AXC,
				'order'				=> 2
			]
		];
	}

	public function registerReportWidgets()
	{
		return [
			'AxC\DataManagement\ReportWidgets\Abbreviation' => [
				'label' => trans('axc.datamanagement::lang.abbreviation.widget.label'),
				'context' => 'dashboard'
			],
			'AxC\DataManagement\ReportWidgets\Email' => [
				'label' => trans('axc.datamanagement::lang.email.widget.label'),
				'context' => 'dashboard'
			],
			'AxC\DataManagement\ReportWidgets\Fax' => [
				'label' => trans('axc.datamanagement::lang.fax.widget.label'),
				'context' => 'dashboard'
			],
			'AxC\DataManagement\ReportWidgets\Insurance' => [
				'label' => trans('axc.datamanagement::lang.insurance.widget.label'),
				'context' => 'dashboard'
			],
			'AxC\DataManagement\ReportWidgets\Link' => [
				'label' => trans('axc.datamanagement::lang.link.widget.label'),
				'context' => 'dashboard'
			],
			'AxC\DataManagement\ReportWidgets\Phone' => [
				'label' => trans('axc.datamanagement::lang.phone.widget.label'),
				'context' => 'dashboard'
			],
			'AxC\DataManagement\ReportWidgets\Route' => [
				'label' => trans('axc.datamanagement::lang.route.widget.label'),
				'context' => 'dashboard'
			],
			'AxC\DataManagement\ReportWidgets\Slideshow' => [
				'label' => trans('axc.datamanagement::lang.slideshow.widget.label'),
				'context' => 'dashboard'
			]
		];
	}
}