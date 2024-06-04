<?php
namespace Template;
final class Twig {
	private $data = array();

	public function set($key, $value) {
		$this->data[$key] = $value;
	}
	
	public function render($filename, $code = '') {
		if (!$code) {
			$file = DIR_TEMPLATE . $filename . '.twig';

			if (defined('DIR_CATALOG') && is_file(DIR_MODIFICATION . 'admin/view/template/' . $filename . '.twig')) {	
                $code = file_get_contents(DIR_MODIFICATION . 'admin/view/template/' . $filename . '.twig');
            } elseif (is_file(DIR_MODIFICATION . 'catalog/view/theme/' . $filename . '.twig')) {
                $code = file_get_contents(DIR_MODIFICATION . 'catalog/view/theme/' . $filename . '.twig');
            } elseif (is_file($file)) {
				$code = file_get_contents($file);
			} else {
				throw new \Exception('Error: Could not load template ' . $file . '!');
				exit();
			}
		}

		// initialize Twig environment
		$config = array(
			'autoescape'  => false,
			'debug'       => false,
			'auto_reload' => true,
			'cache'       => DIR_CACHE . 'template/'
		);

		try {
			$include = [];

            if (defined('DIR_CATALOG')) {
                if (is_dir(DIR_MODIFICATION . 'admin/view/template/')) {
                    $include[] = DIR_MODIFICATION . 'admin/view/template/';
                }
            } else {
                if (is_dir(DIR_MODIFICATION . 'catalog/view/theme/')) {
                    $include[] = DIR_MODIFICATION . 'catalog/view/theme/';
                }
            }
        
			$include[] = DIR_TEMPLATE;
            
			$loader = new \Twig\Loader\ChainLoader([
				new \Twig\Loader\ArrayLoader([$filename . '.twig' => $code]),
				new \Twig\Loader\FilesystemLoader($include)
			]);

			$twig = new \Twig\Environment($loader, $config);

			return $twig->render($filename . '.twig', $this->data);
		} catch (Exception $e) {
			trigger_error('Error: Could not load template ' . $filename . '!');
			exit();
		}	
	}	
}
