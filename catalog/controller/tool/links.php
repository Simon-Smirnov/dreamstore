<?php
class ControllerToolLinks extends Controller {
	public function index() {
        return [
            [
                'name' => 'О нас',
                'link' => $this->url->link('informaion/about')
            ]
        ]
    }
}