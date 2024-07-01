<?php

class ControllerExtensionTotalTotal extends Controller
{
    public function index()
    {
        // Totals
        $this->load->model('setting/extension');

        $totals = array();
        $taxes = $this->cart->getTaxes();
        $total = 0;

        // Because __call can not keep var references so we put them into an array.
        $total_data = array(
            'totals' => &$totals,
            'taxes' => &$taxes,
            'total' => &$total
        );

        //echo "<pre>";
        //var_dump($total_data);
        //echo "</pre>";

        // Display prices
        if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
            $sort_order = array();

            $results = $this->model_setting_extension->getExtensions('total');

            foreach ($results as $key => $value) {
                $sort_order[$key] = $this->config->get('total_' . $value['code'] . '_sort_order');
            }

            //echo "<pre>";
            //var_dump($results);
            //echo "</pre>";

            array_multisort($sort_order, SORT_ASC, $results);

            foreach ($results as $result) {
                if ($this->config->get('total_' . $result['code'] . '_status')) {
                    $this->load->model('extension/total/' . $result['code']);

                    // We have to put the totals in an array so that they pass by reference.
                    $this->{'model_extension_total_' . $result['code']}->getTotal($total_data);

                    //echo "<pre>";
                    //var_dump($result['code']);
                    //echo "</pre>";
                }
            }

            $sort_order = array();

            foreach ($totals as $key => $value) {
                $sort_order[$key] = $value['sort_order'];
            }

            //echo "<pre>";
            //var_dump($totals);
            //echo "</pre>";

            array_multisort($sort_order, SORT_ASC, $totals);
        }

        $data['totals'] = [];

        foreach ($totals as $total) {
            //echo "<pre>";
            //var_dump($totals);
            //var_dump($total['title']);
            //var_dump($total['value']);
            //echo "</pre>";

            $data['totals'][$total['code']] = [
                'code' => $total['code'],
                'title' => $total['title'],
                'value' => floor($total['value']),
                'sort_order' => $total['sort_order']
            ];
        }

        return $data['totals'];
    }
}