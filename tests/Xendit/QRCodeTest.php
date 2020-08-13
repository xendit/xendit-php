<?php

/**
 * QRCodeTest.php
 * php version 7.2.0
 * 
 * @category Test
 * @package  Xendit
 * @author   Dave <kevindave@xendit.co>
 * @license  https::/opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

namespace Xendit;

use Xendit\QRCode;

/**
 * Class QRCodeTest
 * 
 * @category Class
 * @package  Xendit
 * @author   Dave <kevindave@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class QRCodeTest extends TestCase
{
  const TEST_EXTERNAL_ID = 'external_123';

  /**
   * Create QR Code test
   * Should pass
   * 
   * @return void
   */
  public function testIsCreatable()
  {
    $params = [
      'external_id' => self::TEST_EXTERNAL_ID,
      'type' => 'DYNAMIC',
      'callback_url' => 'https://webhook.site',
      'amount' => 10000,
    ];

    $expectedResult = [
      'id' => 'id1',
      'external_id' => self::TEST_EXTERNAL_ID,
      'amount' => 10000,
      'qr_string' => 'this_is_qr_string',
      'callback_url' => 'https://webhook.site',
      'type' => 'DYNAMIC',
      'status' => 'ACTIVE',
      'created' => '2020-01-08T18:18:18.661Z',
      'updated' => '2020-01-08T18:18:18.661Z',
    ];

    $this -> stubRequest(
      'POST',
      '/qr_codes',
      $params,
      [],
      $expectedResult
    );

    $result = QRCode::create($params);

    $this->assertEquals($result['id'], 'id1');
    $this->assertEquals($result['external_id'], $params['external_id']);
    $this->assertEquals($result['amount'], $params['amount']);
    $this->assertEquals($result['qr_string'], 'this_is_qr_string');
    $this->assertEquals($result['callback_url'], $params['callback_url']);
    $this->assertEquals($result['type'], $params['type']);
    $this->assertEquals($result['status'], 'ACTIVE');
    $this->assertEquals($result['created'], '2020-01-08T18:18:18.661Z');
    $this->assertEquals($result['updated'], '2020-01-08T18:18:18.661Z');
  }

  /**
   * Create QR Code
   * Should throw InvalidArgumentException with type not exist
   * 
   * @return void
   */
  public function testIsCreatableThrowInvalidArgumentExceptionIfTypeDoesntExist()
  {
    $this->expectException(Exceptions\InvalidArgumentException::class);
    $params = [];

    QRCode::create($params);
  }

  /**
   * Create QR Code
   * Should throw InvalidArgumentExcpetion with type not exist
   * 
   * @return void
   */
  public function testIsCreatableThrowInvalidArgumentExceptionOnWrongType()
  {
    $this->expectException(Exceptions\InvalidArgumentException::class);
    $params = [
      'type' => 'NOT_DYNAMIC',
    ];

    QRCode::create($params);
  }

  /**
   * Get QR Code test
   * Should pass
   * 
   * @return void
   */
  public function testIsGettable()
  {
    $expectedResult = [
      'id' => 'id1',
      'external_id' => self::TEST_EXTERNAL_ID,
      'amount' => 10000,
      'qr_string' => 'this_is_qr_string',
      'callback_url' => 'https://webhook.site',
      'type' => 'DYNAMIC',
      'status' => 'ACTIVE',
      'created' => '2020-01-08T18:18:18.661Z',
      'updated' => '2020-01-08T18:18:18.661Z',
    ];

    $this -> stubRequest(
      'GET',
      '/qr_codes' . '/' . self::TEST_EXTERNAL_ID,
      [],
      [],
      $expectedResult
    );

    $result = QRCode::get(self::TEST_EXTERNAL_ID);

    $this->assertEquals($result['id'], 'id1');
    $this->assertEquals($result['external_id'], self::TEST_EXTERNAL_ID);
    $this->assertEquals($result['amount'], 10000);
    $this->assertEquals($result['qr_string'], 'this_is_qr_string');
    $this->assertEquals($result['callback_url'], 'https://webhook.site');
    $this->assertEquals($result['type'], 'DYNAMIC');
    $this->assertEquals($result['status'], 'ACTIVE');
    $this->assertEquals($result['created'], '2020-01-08T18:18:18.661Z');
    $this->assertEquals($result['updated'], '2020-01-08T18:18:18.661Z');
  }
}
