<?php

/*
 * This file was created by developers working at BitBag
 * Do you need more information about us and what we do? Visit our https://bitbag.io website!
 * We are hiring developers from all over the world. Join us and start your new, exciting adventure and become part of us: https://bitbag.io/career
*/

declare(strict_types=1);

namespace BitBag\SyliusAmazonPayPlugin\Client;

use AmazonPay\Client;
use Sylius\Component\Core\Model\PaymentMethodInterface;

interface AmazonPayApiClientInterface
{
    public const PRODUCTION_ENVIRONMENT = 'production';
    public const SANDBOX_ENVIRONMENT = 'sandbox';
    public const TRANSACTION_TIMED_OUT_ERROR_CODE = 'TransactionTimedOut';
    public const PAYMENT_METHOD_NOT_ALLOWED_ERROR_CODE = 'PaymentMethodNotAllowed';
    public const INVALID_PAYMENT_METHOD_ERROR_CODE = 'InvalidPaymentMethod';
    public const OPEN_ORDER_REFERENCE_STATUS = 'Open';
    public const DECLINED_AUTHORIZATION_STATUS = 'Declined';
    public const CLOSED_AUTHORIZATION_STATUS = 'Closed';
    public const OPEN_AUTHORIZATION_STATUS = 'Open';
    public const PENDING_AUTHORIZATION_STATUS = 'Pending';
    public const MAX_CAPTURES_PROCESSED_CODE = 'MaxCapturesProcessed';
    public const STATUS_PROCESSING = 'processing';
    public const STATUS_AUTHORIZED = 'authorized';
    public const STATUS_FAILED = 'failed';

    public function initializeFromPaymentMethod(PaymentMethodInterface $paymentMethod): void;

    public function initialize(array $config): void;

    public function getClient(): Client;
}
