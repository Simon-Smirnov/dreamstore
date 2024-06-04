<?php
    # example - banner.36

    class ControllerToolGetModule extends Controller {
        public function index($module_name) {
            $this->load->model('setting/module');

            $part = explode('.', $module_name);

            if (isset($part[1])) {
                $setting_info = $this->model_setting_module->getModule($part[1]);

                $setting_info = array_merge($setting_info, [
                    'module_id' => $part[0] . '_' . $part[1]
                ]);

                if ($setting_info && isset($setting_info['status']) && $setting_info['status']) {
                    return $this->load->controller('extension/module/' . $part[0], $setting_info);
                }
            }
        }
    }