<?php

namespace brazhnikov\yii2cadastre\components\CurlAgent;

/**
 * Agent - класс реализующий поискового агента на базе функционала PHP Curl
 *
 * This class provides control of the data coming to the app updater
 * from the user interface or from Cron
 *
 * @version 1.0.3
 * @package CurlAgent
 * @author  Vasya Brazhnikov
 * @copyright Copyright (c) 2017, Vasya Brazhnikov
 */
class Agent
{
    /**
     * @var array   поисковые результаты итерации агента
     */
    private static $search_results = array(
                'agent_error' => null,
                'agent_resp'  => null,
                'agent_info'  => null
            );
    /**
     * @var string  адрес источника сканирования
     */
    private static $url = '';

    /**
     * init - инициализирует работу CURL-агента'
     *
     * @access private
     * @param  array  $source источник сканирования
     */
    public static function init( $source )
    {
        self::setAgentData( $source );
        self::performSearch();

        return self::getResults();
    }

    /**
     * getResults - Получает результаты итерации агента
     *
     * @access private
     * @return  array    $search_results - результаты итерации агента
     */
    private static function getResults()
    {
        return self::$search_results;
    }

     /**
     * setResults - Записывает итерации агента
     *
     * @access private
     * @param  string    $response - результаты итерации агента
     * @param  array     $info     - информация о запросе
     * @param  string    $error    - описание кода ошибки
     */
    private static function setResults( $response, $info, $error )
    {
        self::$search_results['agent_resp']  = $response;
        self::$search_results['agent_info']  = $info;
        self::$search_results['agent_error'] = $error;
    }

    /**
     * setAgentData - Записывает данные агента
     *
     * @access private
     * @param  object    $url -
     */
    private function setAgentData( $source )
    {
        self::$url = $source;
    }

    /**
     * performSearch - отправить агента в сеть на поиски
     *
     * @access private
     */
    private static function performSearch()
    {
        $ch  = curl_init();

        curl_setopt_array($ch, array(
            CURLOPT_URL => "https://pkk5.rosreestr.ru/api/features/1/47:13:713001:360",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "accept: text/javascript, application/javascript, application/ecmascript, application/x-ecmascript, */*; q=0.01",
                "accept-language: ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7",
                "authority: pkk5.rosreestr.ru",
                "cache-control: no-cache",
                "postman-token: c1127194-5445-c367-8536-f4339fb9cb89",
                "referer: https://pkk5.rosreestr.ru/",
                "sec-fetch-dest: empty",
                "sec-fetch-mode: cors",
                "sec-fetch-site: same-origin",
                "user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36",
                "x-requested-with: XMLHttpRequest"
            ),
        ));

        self::setResults(
            curl_exec( $ch ),
            self::getInfo( $ch ),
            curl_error( $ch )
        );
    }

    /**
     * getInfo - Получает информацию о запросе
     *
     * @access private
     * @param  object    $ch - объект CURL
     * @return array     $info - информация о запросе
     */
    private static function getInfo( $ch )
    {
        $info['CURLINFO_OS_ERRNO']         = curl_getinfo( $ch,CURLINFO_OS_ERRNO );
        $info['CURLINFO_REDIRECT_COUNT']   = curl_getinfo( $ch,CURLINFO_REDIRECT_COUNT );
        $info['CURLINFO_NUM_CONNECTS']     = curl_getinfo( $ch,CURLINFO_NUM_CONNECTS );
        $info['CURLINFO_TOTAL_TIME']       = curl_getinfo( $ch,CURLINFO_TOTAL_TIME );
        $info['CURLINFO_RESPONSE_CODE']    = curl_getinfo( $ch,CURLINFO_RESPONSE_CODE );
        $info['CURLINFO_HTTP_CONNECTCODE'] = curl_getinfo( $ch,CURLINFO_HTTP_CONNECTCODE );
        $info['CURLINFO_CONTENT_TYPE']     = curl_getinfo( $ch,CURLINFO_CONTENT_TYPE );
        $info['CURLINFO_NUM_CONNECTS']     = curl_getinfo( $ch,CURLINFO_NUM_CONNECTS );
        $info['CURLINFO_PRIMARY_IP']       = curl_getinfo( $ch,CURLINFO_PRIMARY_IP );
        $info['CURLINFO_SPEED_UPLOAD']     = curl_getinfo( $ch,CURLINFO_SPEED_UPLOAD );

        return $info;
    }
}
