<?php

class ModelToolImage extends Model
{
    public function resize($filename, $width = null, $height = null, $params = null)
    {
        if (!is_file(DIR_IMAGE . $filename) || substr(str_replace('\\', '/', realpath(DIR_IMAGE . $filename)), 0, strlen(DIR_IMAGE)) != str_replace('\\', '/', DIR_IMAGE)) {
            //			return;
            $filename = 'catalog/logoIcon.svg';
        }

        $extension = pathinfo($filename, PATHINFO_EXTENSION);

        $image_old = $filename;
        if ($extension == 'svg') {
            if ($this->request->server['HTTPS']) {
                return $this->config->get('config_ssl') . 'image/' . $image_old;
            } else {
                return $this->config->get('config_url') . 'image/' . $image_old;
            }
        }
        if (isset($params['webp']) && ($params['webp'] == true)) {
            $extension = 'webp';
        }

        list($width_orig, $height_orig, $image_type) = getimagesize(DIR_IMAGE . $image_old);

        //        if (!$width&&!$height){
        //            $width=$width_orig;
        //            $height=$height_orig;
        //        }


        if ($width && !$height) {
            //            if  ($width>$width_orig){
            //                $width=$width_orig;
            //            }

            try {
                $height = $height_orig / ($width_orig / $width);
            } catch (Throwable $e) {
                dump($height_orig);
                dump($width_orig);
                dump($width);

                dump($e->getMessage());
            }
        }
        if (!$width && $height) {

            //            if  ($height>$height_orig){
            //                $height=$height_orig;
            //            }
            $width = $width_orig / ($height_orig / $height);

        }
        if (!$width) {
            $width = $width_orig;
        }
        if (!$height) {
            $height = $height_orig;
        }


        $image_new = 'cache/' . utf8_substr($filename, 0, utf8_strrpos($filename, '.')) . '-' . (int)$width . 'x' . (int)$height . '.' . $extension;

        if (!is_file(DIR_IMAGE . $image_new) || (filemtime(DIR_IMAGE . $image_old) > filemtime(DIR_IMAGE . $image_new))) {
            //if (!in_array($image_type, array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF))) {
            //    return DIR_IMAGE . $image_old;
            //}

            $path = '';

            $directories = explode('/', dirname($image_new));

            foreach ($directories as $directory) {
                $path = $path . '/' . $directory;

                if (!is_dir(DIR_IMAGE . $path)) {
                    @mkdir(DIR_IMAGE . $path, 0777);
                }
            }

            //            if ($width_orig != $width || $height_orig != $height) {
            $image = new Image(DIR_IMAGE . $image_old);
            //                $image = new Image(DIR_IMAGE . $image_old);
            if (isset($params['orientation']) && ($params['orientation'] == 'w' || $params['orientation'] == 'h')) {
                $image->resize($width, $height, $params['orientation']);
            } else {
                $image->resize($width, $height);
            }
            $image->save(DIR_IMAGE . $image_new);
            //            } else {
            //                copy(DIR_IMAGE . $image_old, DIR_IMAGE . $image_new);
            //            }
        }

        $image_new = str_replace(' ', '%20', $image_new);  // fix bug when attach image on email (gmail.com). it is automatic changing space " " to +

        if ($this->request->server['HTTPS']) {
            return $this->config->get('config_ssl') . 'image/' . $image_new;
        } else {
            return $this->config->get('config_url') . 'image/' . $image_new;
        }
    }

    public function placeholder()
    {
        return [
            'webp' => $this->resize('/placeholder.png', 512, 512, ['webp' => true]),
            'default' => $this->resize('/placeholder.png', 512, 512),
        ];
    }
}
