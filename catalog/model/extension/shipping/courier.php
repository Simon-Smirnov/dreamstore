<?php

class ModelExtensionShippingCourier extends Model
{
    public function getQuote()
    {

        $methodData = [];

        if (isset($this->session->data['courier_delivery'])) {
            $methodData = $this->session->data['courier_delivery'];
        }

        return $methodData;
    }
}