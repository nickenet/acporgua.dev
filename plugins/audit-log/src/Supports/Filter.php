<?php

namespace Botble\AuditLog\Supports;

use Botble\Dashboard\Repositories\Interfaces\DashboardWidgetInterface;
use Botble\Dashboard\Repositories\Interfaces\DashboardWidgetSettingInterface;
use Sentinel;

class Filter
{

    /**
     * Filter constructor.
     */
    public function __construct()
    {
        add_filter(DASHBOARD_FILTER_ADMIN_LIST, [$this, 'registerDashboardWidgets'], 28, 1);
    }

    /**
     * Trigger __construct function
     *
     * @return Filter
     */
    public static function initialize()
    {
        return new self();
    }

    /**
     * @param $widgets
     * @return string
     * @author Sang Nguyen
     */
    public function registerDashboardWidgets($widgets)
    {
        $widget = app(DashboardWidgetInterface::class)->firstOrCreate(['name' => 'widget_audit_logs']);
        $widget_setting = app(DashboardWidgetSettingInterface::class)->getFirstBy(['widget_id' => $widget->id, 'user_id' => Sentinel::getUser()->getUserId()]);

        if (empty($widget_setting) || array_key_exists($widget_setting->order, $widgets)) {
            $widgets[] = view('audit-logs::widgets.base', compact('widget', 'widget_setting'))->render();
        } else {
            $widgets[$widget_setting->order] = view('audit-logs::widgets.base', compact('widget', 'widget_setting'))->render();
        }
        return $widgets;
    }
}