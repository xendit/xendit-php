<?php

/**
 * Recurring.php
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
 * Class Recurring
 *
 * @category Class
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class Recurring
{
    use ApiOperations\Request;
    use ApiOperations\Create;
    use ApiOperations\Retrieve;
    use ApiOperations\Update;

    /**
     * Instantiate base URL
     *
     * @return string
     */
    public static function classUrl()
    {
        return "/recurring_payments";
    }

    /**
     * Instantiate required params for Create
     *
     * @return array
     */
    public static function createReqParams()
    {
        return [
            'external_id',
            'payer_email',
            'description',
            'amount',
            'interval',
            'interval_count'
        ];
    }

    /**
     * Instantiate required params for Update
     *
     * @return array
     */
    public static function updateReqParams()
    {
        return [];
    }

    /**
     * Stop a recurring payment
     *
     * @param string $id      recurring payment ID
     * @param array  $options user's headers
     *
     * @return array[
     * 'id'=> string,
     * 'user_id'=> string,
     * 'external_id'=> string,
     * 'status'=> string,
     * 'amount'=> int,
     * 'payer_email'=> string,
     * 'description'=> string,
     * 'interval'=> string,
     * 'interval_count'=> int,
     * 'recurrence_progress'=> int,
     * 'should_send_email'=> bool,
     * 'missed_payment_action'=> string,
     * 'recharge'=> bool,
     * 'created'=> string,
     * 'updated'=> string,
     * 'start_date'=> string
     * ]
     * @throws Exceptions\ApiExceptions
     */
    public static function stop($id, $options = [])
    {
        $url = '/recurring_payments/' . $id . '/stop!';

        return static::_request('POST', $url, $options);
    }

    /**
     * Pause a recurring payment
     *
     * @param string $id      recurring payment ID
     * @param array  $options user's headers
     *
     * @return array[
     * 'id'=> string,
     * 'user_id'=> string,
     * 'external_id'=> string,
     * 'status'=> string,
     * 'amount'=> int,
     * 'payer_email'=> string,
     * 'description'=> string,
     * 'interval'=> string,
     * 'interval_count'=> int,
     * 'recurrence_progress'=> int,
     * 'should_send_email'=> bool,
     * 'missed_payment_action'=> string,
     * 'recharge'=> bool,
     * 'created'=> string,
     * 'updated'=> string,
     * 'start_date'=> string
     * ]
     * @throws Exceptions\ApiExceptions
     */
    public static function pause($id, $options = [])
    {
        $url = '/recurring_payments/' . $id . '/pause!';

        return static::_request('POST', $url, $options);
    }

    /**
     * Resume a recurring payment
     *
     * @param string $id      recurring payment ID
     * @param array  $options user's headers
     *
     * @return array[
     * 'id'=> string,
     * 'user_id'=> string,
     * 'external_id'=> string,
     * 'status'=> string,
     * 'amount'=> int,
     * 'payer_email'=> string,
     * 'description'=> string,
     * 'interval'=> string,
     * 'interval_count'=> int,
     * 'recurrence_progress'=> int,
     * 'should_send_email'=> bool,
     * 'missed_payment_action'=> string,
     * 'recharge'=> bool,
     * 'created'=> string,
     * 'updated'=> string,
     * 'start_date'=> string
     * ]
     * @throws Exceptions\ApiExceptions
     */
    public static function resume($id, $options = [])
    {
        $url = '/recurring_payments/' . $id . '/resume!';

        return static::_request('POST', $url, $options);
    }
}
