<?php

class ControllerInformationVk extends Controller
{

    //private $user_token = 'vk1.a.NVv6iLOHFGjh9LmWImemFdUrhcgz9gS6KiRjV54HRSoasfl2PD-UslM3Nt1nwzlzAlmh2X-x6Vc4ki-Xf9OxR_RrPLHbwLgiIp6K4m3h0LmcFHGmh4T0q3Fy_5Izbv-mERseXOrx4u5hxG5S7UEkqtm9ZNzrPXZD3i07h1c0kbLxYefyLmF11vZdr3699e5aE2_jVmEGWrtK-P1HasCYWA';
    private $user_token = 'vk1.a.YpTK7auOZiKy9zR1d034eNtA-VOirtUpBsHvUuBS5Uk6JWn-4dq6ST1xAYQ4YANG08q6E18VS64mUJFd419misss1FPPtQLK1c7sw_OF-ZPsKanjfHcc6tnPsxq3BBkywPq0mrVBUrIsPJMh8Ek1KDgzTjKRunxpeXqITemww-gkS0HzqvCtZbz3ofsLQwTmCXw3uFHUre4nzevR5Y6U7g';
    private $group_token = 'f9e0975a026f454cea275163d1fccbd885f66d1770c78ca9f2ef113f9f59646179dc68defa0c98c99c65f';
//    private  $auchParams = [
//        'client_id' => '51603621',
//        'redirect_uri' => 'https://oauth.vk.com/blank.html',
//        'display' => 'page',
//        'scope' => 'market,offline,photos,groups',
//        'response_type' => 'token',
//        'v' => '5.131'
//    ];
    private $auchParams = [
        'client_id' => '30778041',//51751464
        'redirect_uri' => 'https://oauth.vk.com/blank.html',
        'display' => 'page',
        'scope' => 'market,offline,photos,groups,video',
        'response_type' => 'token',
        'v' => '5.131'
    ];
    private $redirect_url = 'https://oauth.vk.com/blank.html';

    public function index()
    {

    }

    public function getReview($parameters = [])
    {

        $request_params = [ //подготавливаем параметры для запроса к api vk
            'group_id' => abs(30778041),
            'topic_id' => 48807862,
            'sort' => 'desc',
            'count' => 100,
            'extended' => 1,
            'lang' => 'ru'
        ];

        $result = $this->vk_query('board.getComments', $request_params, $this->user_token);

        echo "<pre>";
        var_dump($result);
        echo "</pre>";

        $array_profiles = [];
        if ($result) {
            foreach ($result['response']['profiles'] as $item) {
                $array_profiles[$item['id']]['name'] = $item['first_name'] . ' ' . $item['last_name'];
                $array_profiles[$item['id']]['photo'] = $item['photo_100'];
            }
            if (count($result['response']['groups'])) {
                $array_profiles[-$result['response']['groups'][0]['id']]['name'] = 'Дари Цветы';
                $array_profiles[-$result['response']['groups'][0]['id']]['photo'] = $result['response']['groups'][0]['photo_100'];
            }
        }

        $index = 0;
        $vk_review = [];
        if ($result) {
            foreach ($result['response']['items'] as $item) {
                if (in_array($item['from_id'], $vk_post_ids)) {
                    continue;
                }
                $vk_review[$index]['id'] = $item['id'];
                $vk_review[$index]['name'] = $array_profiles[$item['from_id']]['name'];
                $vk_review[$index]['photo'] = $array_profiles[$item['from_id']]['photo'];
                $vk_review[$index]['text'] = $item['text'];
                $vk_review[$index]['date'] = date('d.m.Y H:i', $item['date']);
                $vk_review[$index]['href_post'] = "https://vk.com/topic-" . abs(30778041) . "_" . 48807862 . "?post={$item['id']}";
                $vk_review[$index]['post_id'] = $item['id'];
                $attachments = array();
                if (isset($item['attachments'])) {
                    foreach ($item['attachments'] as $attachment) {

                        if ($attachment['type'] == 'photo') {
                            $attachments[] = ['img' => $attachment['photo']['sizes'][1]['url'], 'img_big' => $attachment['photo']['sizes'][5]['url']];
                        }
                    }
                }
                $vk_review[$index]['attachments'] = $attachments;
                switch (true) {
                    case (!empty($attachments) && !empty($item->text)):
                        $type = 'review--all';
                        break;
                    case (!empty($attachments) && empty($item->text)):
                        $type = 'review--onlyImg';
                        break;
                    case (empty($attachments) && !empty($item->text)):
                        $type = 'review--onlytext';
                        break;
                    default:
                        $type = 'review--default';
                        break;
                }
                $vk_review[$index]['type'] = $type;
                $index++;
            }

        }

        $this->cache->set('vk_review.' . $hash, $vk_review);

        return $vk_review;
    }

    public function vk_query($method, $parameters = array(), $user_token = null)
    {


        $parameters = array_merge($parameters, [
            'v' => '5.131',
            'access_token' => $user_token ?? $this->user_token,
        ]);


        if (stripos($method, 'https:') === 0) {
            $link = $method;
        } else {
            $link = 'https://api.vk.com/method/' . $method;

        }
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; ru; rv:1.9.0.4) Gecko/2008102920 AdCentriaIM/1.7 Firefox/3.0.4',
            CURLOPT_AUTOREFERER => TRUE,
            CURLOPT_POST => TRUE,
            // это именно POST запрос!
            CURLOPT_RETURNTRANSFER => TRUE,
            // вернуть ответ ВК в переменную
            CURLOPT_SSL_VERIFYPEER => FALSE,
            // не проверять https сертификаты
            CURLOPT_SSL_VERIFYHOST => FALSE,
            CURLOPT_POSTFIELDS => $parameters,
            CURLOPT_URL => $link
        ));
        $result = json_decode(curl_exec($ch), TRUE);
        curl_close($ch);
        $message = '';
        $message .= '-------------------------------------Начало-------------------------------------' . PHP_EOL;
        $message .= 'Время: ' . date('H:i:s') . PHP_EOL;
        $message .= 'Данные: ' . PHP_EOL;
        $message .= json_encode($parameters, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        $message .= 'Ответ: ' . PHP_EOL;
        $message .= json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        $message .= '-------------------------------------Конец-------------------------------------' . PHP_EOL;
        //logData($message, 'vk_log/' . $method, $method);
        return $result;
    }


    public function auth()
    {
        $url = 'https://oauth.vk.com/authorize?';
        echo '<a href="' . $url . http_build_query($this->auchParams) . '">Доступ</a>';
    }
}
