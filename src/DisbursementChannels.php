<?php

/**
 * DisbursementChannels.php
 * php version 7.2.0
 *
 * @category Class
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

namespace Xendit;

/**
 * Class DisbursementChannels
 *
 * @category Class
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class DisbursementChannels
{

    use ApiOperations\Request;
    use ApiOperations\Retrieve;

    /**
     * Instantiate base URL
     *
     * @return string
     */
    public static function classUrl()
    {
        return '/disbursement-channels';
    }

    /**
     * Send GET request to Get Disbursement Channels
     *
     * @param none
     *
     * @return array[
     * [
     * 'channel_code'=> 'PH_CIMB',
     * 'name'=> 'CIMB Bank Philippines Inc',
     * 'channel_category'=> 'BANK',
     * 'currency'=> 'PHP',
     * 'minimum'=> 50000,
     * 'maximum'=> 200000000,
     * 'minimum_increment'=> 0.01
     * ], [
     * 'channel_code'=> 'PH_CITI',
     * 'name'=> 'Citibank, N.A.',
     * 'channel_category'=> 'BANK',
     * 'currency'=> 'PHP',
     * 'minimum'=> 1,
     * 'maximum'=> 999999999,
     * 'minimum_increment'=> 1
     * ]]
     * @throws Exceptions\ApiException
     */
    public static function getDisbursementChannels()
    {
        $url = '/disbursement-channels';
        return static::_request('GET', static::classUrl());
    }

    /**
     * Send GET request to Get Disbursement Channels by Channel Category
     *
     * @param string $channel_category channel category
     * @param array $params extra parameters
     *
     * @return array[
     * [
     * 'channel_code'=> 'PH_CIMB',
     * 'name'=> 'CIMB Bank Philippines Inc',
     * 'channel_category'=> 'BANK',
     * 'currency'=> 'PHP',
     * 'minimum'=> 50000,
     * 'maximum'=> 200000000,
     * 'minimum_increment'=> 0.01
     * ], [
     * 'channel_code'=> 'PH_CITI',
     * 'name'=> 'Citibank, N.A.',
     * 'channel_category'=> 'BANK',
     * 'currency'=> 'PHP',
     * 'minimum'=> 1,
     * 'maximum'=> 999999999,
     * 'minimum_increment'=> 1
     * ]]
     * @throws Exceptions\ApiException
     */
    public static function getDisbursementChannelsByChannelCategory($channel_category, $params = [])
    {
        $url = static::classUrl() . '?channel_category=' . $channel_category;
        return static::_request('GET', $url, $params);
    }

    /**
     * Send GET request to Get Disbursement Channels by Channel Code
     *
     * @param string $channel_code channel Code
     * @param array $params extra parameters
     *
     * @return array[
     * [
     * 'channel_code'=> 'PH_CIMB',
     * 'name'=> 'CIMB Bank Philippines Inc',
     * 'channel_category'=> 'BANK',
     * 'currency'=> 'PHP',
     * 'minimum'=> 50000,
     * 'maximum'=> 200000000,
     * 'minimum_increment'=> 0.01
     * ]]
     * @throws Exceptions\ApiException
     */
    public static function getDisbursementChannelsByChannelCode($channel_code, $params = [])
    {
        $url = static::classUrl() . '?channel_code=' . $channel_code;
        return static::_request('GET', $url, $params);
    }
}
