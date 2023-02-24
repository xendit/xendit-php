<?php

namespace Xendit;

/**
 * Class PayoutNew
 *
 * @category Class
 * @package  Xendit
 * @author   Yanuar <yanuaraditia@outlook.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class PayoutsNew
{
    use ApiOperations\Request;
    use ApiOperations\Create;
    use ApiOperations\Retrieve;

    /**
     * Instantiate base URL
     *
     * @return string
     */
    public static function classUrl(): string
    {
        return '/v2/payouts';
    }

    /**
     * Instantiate required params for Create
     *
     * @return array
     */
    public static function createReqParams(): array
    {
        return [
            'reference_id',
            'channel_code',
            'channel_properties',
            'amount',
            'description',
            'currency',
            'receipt_notification',
            'metadata'
        ];
    }

    /**
     * Send GET request to retrieve data by reference id
     *
     * @param $referenceId
     * @param array $params
     *
     * @return array[
     * [
     * 'id' => 'disb-1475459775872',
     * 'amount' => 100,
     * 'channel_code' => 'ID_BCA',
     * 'currency' => 'IDR',
     * 'description' => 'Sample Failed Create Payout',
     * 'estimated_arrival_time' => '2022-01-05T06:09:23.667Z',
     * 'failure_code' => 'TEMPORARY_TRANSFER_ERROR',
     * 'reference_id' => 'sample-failed-create-payout',
     * 'status' => 'FAILED',
     * 'created' => '2022-01-05T05:54:23.670Z',
     * 'updated' => '2022-01-05T05:54:35.680Z',
     * 'business_id' => '5785e6334d7b410667d355c4',
     * 'channel_properties' => [
     * 'account_number' => '123456',
     * 'account_holder_name' => 'Test',
     * ],
     * ],
     * [
     * 'id' => 'disb-567845975142',
     * 'amount' => 200,
     * 'channel_code' => 'ID_BCA',
     * 'currency' => 'IDR',
     * 'description' => 'Sample Failed Create Payout2',
     * 'estimated_arrival_time' => '2022-01-05T06:14:23.667Z',
     * 'failure_code' => 'TEMPORARY_TRANSFER_ERROR',
     * 'reference_id' => 'sample-failed-create-payout2',
     * 'status' => 'FAILED',
     * 'created' => '2022-01-05T05:58:23.670Z',
     * 'updated' => '2022-01-05T05:58:35.680Z',
     * 'business_id' => '5785e6334d7b410667d355c4',
     * 'channel_properties' => [
     * 'account_number' => '123456',
     * 'account_holder_name' => 'Test',
     * ],
     * ],
     * ]
     * @throws \Xendit\Exceptions\ApiException
     */
    public static function retrieveReference($referenceId, array $params = [])
    {
        $url = static::classUrl() . '?reference_id=' . $referenceId;
        return static::_request('GET', $url, $params);
    }

    /**
     * Send GET request to retrieve available payouts channels
     *
     * @return array [
     * [
     * 'channel_code' => 'ID_BSI',
     * 'channel_category' => 'BANK',
     * 'currency' => 'IDR',
     * 'channel_name' => 'Bank Syariah Indonesia',
     * 'amount_limits' => [
     * 'minimum' => 10000,
     * 'maximum' => 1999999999999,
     * 'minimum_increment' => 1,
     * ],
     * ],
     * [
     * 'channel_code' => 'PH_AUB',
     * 'channel_category' => 'BANK',
     * 'currency' => 'PHP',
     * 'channel_name' => 'Asia United Bank',
     * 'amount_limits' => [
     * 'minimum' => 1,
     * 'maximum' => 100000000,
     * 'minimum_increment' => 1,
     * ],
     * ],
     * ]
     * @throws Exceptions\ApiException
     */
    public static function getPayoutsChannels()
    {
        $url = '/payouts_channels';
        return static::_request('GET', $url);
    }

    /**
     * @return array[
     * [
     * 'id' => 'disb-1475459775872',
     * 'amount' => 100,
     * 'channel_code' => 'ID_BCA',
     * 'currency' => 'IDR',
     * 'description' => 'Sample Failed Create Payout',
     * 'estimated_arrival_time' => '2022-01-05T06:09:23.667Z',
     * 'failure_code' => 'TEMPORARY_TRANSFER_ERROR',
     * 'reference_id' => 'sample-failed-create-payout',
     * 'status' => 'FAILED',
     * 'created' => '2022-01-05T05:54:23.670Z',
     * 'updated' => '2022-01-05T05:54:35.680Z',
     * 'business_id' => '5785e6334d7b410667d355c4',
     * 'channel_properties' => [
     * 'account_number' => '123456',
     * 'account_holder_name' => 'Test',
     * ],
     * ],
     * [
     * 'id' => 'disb-567845975142',
     * 'amount' => 200,
     * 'channel_code' => 'ID_BCA',
     * 'currency' => 'IDR',
     * 'description' => 'Sample Failed Create Payout2',
     * 'estimated_arrival_time' => '2022-01-05T06:14:23.667Z',
     * 'failure_code' => 'TEMPORARY_TRANSFER_ERROR',
     * 'reference_id' => 'sample-failed-create-payout2',
     * 'status' => 'FAILED',
     * 'created' => '2022-01-05T05:58:23.670Z',
     * 'updated' => '2022-01-05T05:58:35.680Z',
     * 'business_id' => '5785e6334d7b410667d355c4',
     * 'channel_properties' => [
     * 'account_number' => '123456',
     * 'account_holder_name' => 'Test',
     * ],
     * ],
     * ]
     * @throws \Xendit\Exceptions\ApiException
     */
    public static function cancel(string $id)
    {
        $url = static::classUrl() . '/' . $id . '/cancel';
        return static::_request('GET', $url);
    }
}
