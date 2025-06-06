<?php

/**
 * TransferSchedule.
 *
 * PHP version 8.3
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */

/**
 * The Selling Partner API for Amazon Seller Wallet Open Banking API.
 *
 * The Selling Partner API for Seller Wallet (Seller Wallet API) provides financial information that is relevant to a seller's Seller Wallet account. You can obtain financial events, balances, and transfer schedules for Seller Wallet accounts. You can also schedule and initiate transactions.
 *
 * The version of the OpenAPI document: 2024-03-01
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SpApi\Model\sellerWallet\v2024_03_01;

use SpApi\Model\ModelInterface;
use SpApi\ObjectSerializer;

/**
 * TransferSchedule Class Doc Comment.
 *
 * @category Class
 *
 * @description Transfer schedule details and historical details related to it.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class TransferSchedule implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'TransferSchedule';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'transfer_schedule_id' => 'string',
        'transaction_type' => '\SpApi\Model\sellerWallet\v2024_03_01\TransactionType',
        'transaction_source_account' => '\SpApi\Model\sellerWallet\v2024_03_01\TransactionAccount',
        'transaction_destination_account' => '\SpApi\Model\sellerWallet\v2024_03_01\TransactionAccount',
        'transfer_schedule_status' => '\SpApi\Model\sellerWallet\v2024_03_01\TransferScheduleStatus',
        'transfer_schedule_information' => '\SpApi\Model\sellerWallet\v2024_03_01\TransferScheduleInformation',
        'payment_preference' => '\SpApi\Model\sellerWallet\v2024_03_01\PaymentPreference',
        'transfer_schedule_failures' => '\SpApi\Model\sellerWallet\v2024_03_01\TransferScheduleFailures[]'];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     *
     * @phpstan-var array<string, string|null>
     *
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'transfer_schedule_id' => null,
        'transaction_type' => null,
        'transaction_source_account' => null,
        'transaction_destination_account' => null,
        'transfer_schedule_status' => null,
        'transfer_schedule_information' => null,
        'payment_preference' => null,
        'transfer_schedule_failures' => null];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'transfer_schedule_id' => false,
        'transaction_type' => false,
        'transaction_source_account' => true,
        'transaction_destination_account' => false,
        'transfer_schedule_status' => false,
        'transfer_schedule_information' => false,
        'payment_preference' => true,
        'transfer_schedule_failures' => false,
    ];

    /**
     * If a nullable field gets set to null, insert it here.
     *
     * @var bool[]
     */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'transfer_schedule_id' => 'transferScheduleId',
        'transaction_type' => 'transactionType',
        'transaction_source_account' => 'transactionSourceAccount',
        'transaction_destination_account' => 'transactionDestinationAccount',
        'transfer_schedule_status' => 'transferScheduleStatus',
        'transfer_schedule_information' => 'transferScheduleInformation',
        'payment_preference' => 'paymentPreference',
        'transfer_schedule_failures' => 'transferScheduleFailures',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'transfer_schedule_id' => 'setTransferScheduleId',
        'transaction_type' => 'setTransactionType',
        'transaction_source_account' => 'setTransactionSourceAccount',
        'transaction_destination_account' => 'setTransactionDestinationAccount',
        'transfer_schedule_status' => 'setTransferScheduleStatus',
        'transfer_schedule_information' => 'setTransferScheduleInformation',
        'payment_preference' => 'setPaymentPreference',
        'transfer_schedule_failures' => 'setTransferScheduleFailures',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'transfer_schedule_id' => 'getTransferScheduleId',
        'transaction_type' => 'getTransactionType',
        'transaction_source_account' => 'getTransactionSourceAccount',
        'transaction_destination_account' => 'getTransactionDestinationAccount',
        'transfer_schedule_status' => 'getTransferScheduleStatus',
        'transfer_schedule_information' => 'getTransferScheduleInformation',
        'payment_preference' => 'getPaymentPreference',
        'transfer_schedule_failures' => 'getTransferScheduleFailures',
    ];

    /**
     * Associative array for storing property values.
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param null|array $data Associated array of property values
     *                         initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('transfer_schedule_id', $data ?? [], null);
        $this->setIfExists('transaction_type', $data ?? [], null);
        $this->setIfExists('transaction_source_account', $data ?? [], null);
        $this->setIfExists('transaction_destination_account', $data ?? [], null);
        $this->setIfExists('transfer_schedule_status', $data ?? [], null);
        $this->setIfExists('transfer_schedule_information', $data ?? [], null);
        $this->setIfExists('payment_preference', $data ?? [], null);
        $this->setIfExists('transfer_schedule_failures', $data ?? [], null);
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Checks if a property is nullable.
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if (null === $this->container['transfer_schedule_id']) {
            $invalidProperties[] = "'transfer_schedule_id' can't be null";
        }
        if (null === $this->container['transaction_type']) {
            $invalidProperties[] = "'transaction_type' can't be null";
        }
        if (null === $this->container['transaction_destination_account']) {
            $invalidProperties[] = "'transaction_destination_account' can't be null";
        }
        if (null === $this->container['transfer_schedule_status']) {
            $invalidProperties[] = "'transfer_schedule_status' can't be null";
        }
        if (null === $this->container['transfer_schedule_information']) {
            $invalidProperties[] = "'transfer_schedule_information' can't be null";
        }
        if (null === $this->container['transfer_schedule_failures']) {
            $invalidProperties[] = "'transfer_schedule_failures' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * Gets transfer_schedule_id.
     */
    public function getTransferScheduleId(): string
    {
        return $this->container['transfer_schedule_id'];
    }

    /**
     * Sets transfer_schedule_id.
     *
     * @param string $transfer_schedule_id the unique identifier provided by Amazon to the scheduled transfer
     */
    public function setTransferScheduleId(string $transfer_schedule_id): self
    {
        if (is_null($transfer_schedule_id)) {
            throw new \InvalidArgumentException('non-nullable transfer_schedule_id cannot be null');
        }
        $this->container['transfer_schedule_id'] = $transfer_schedule_id;

        return $this;
    }

    /**
     * Gets transaction_type.
     */
    public function getTransactionType(): string
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type.
     *
     * @param string $transaction_type transaction_type
     */
    public function setTransactionType(string $transaction_type): self
    {
        if (is_null($transaction_type)) {
            throw new \InvalidArgumentException('non-nullable transaction_type cannot be null');
        }
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets transaction_source_account.
     */
    public function getTransactionSourceAccount(): ?TransactionAccount
    {
        return $this->container['transaction_source_account'];
    }

    /**
     * Sets transaction_source_account.
     *
     * @param null|TransactionAccount $transaction_source_account transaction_source_account
     */
    public function setTransactionSourceAccount(?TransactionAccount $transaction_source_account): self
    {
        if (is_null($transaction_source_account)) {
            array_push($this->openAPINullablesSetToNull, 'transaction_source_account');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('transaction_source_account', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['transaction_source_account'] = $transaction_source_account;

        return $this;
    }

    /**
     * Gets transaction_destination_account.
     */
    public function getTransactionDestinationAccount(): TransactionAccount
    {
        return $this->container['transaction_destination_account'];
    }

    /**
     * Sets transaction_destination_account.
     *
     * @param TransactionAccount $transaction_destination_account transaction_destination_account
     */
    public function setTransactionDestinationAccount(TransactionAccount $transaction_destination_account): self
    {
        if (is_null($transaction_destination_account)) {
            throw new \InvalidArgumentException('non-nullable transaction_destination_account cannot be null');
        }
        $this->container['transaction_destination_account'] = $transaction_destination_account;

        return $this;
    }

    /**
     * Gets transfer_schedule_status.
     */
    public function getTransferScheduleStatus(): string
    {
        return $this->container['transfer_schedule_status'];
    }

    /**
     * Sets transfer_schedule_status.
     *
     * @param string $transfer_schedule_status transfer_schedule_status
     */
    public function setTransferScheduleStatus(string $transfer_schedule_status): self
    {
        if (is_null($transfer_schedule_status)) {
            throw new \InvalidArgumentException('non-nullable transfer_schedule_status cannot be null');
        }
        $this->container['transfer_schedule_status'] = $transfer_schedule_status;

        return $this;
    }

    /**
     * Gets transfer_schedule_information.
     */
    public function getTransferScheduleInformation(): TransferScheduleInformation
    {
        return $this->container['transfer_schedule_information'];
    }

    /**
     * Sets transfer_schedule_information.
     *
     * @param TransferScheduleInformation $transfer_schedule_information transfer_schedule_information
     */
    public function setTransferScheduleInformation(TransferScheduleInformation $transfer_schedule_information): self
    {
        if (is_null($transfer_schedule_information)) {
            throw new \InvalidArgumentException('non-nullable transfer_schedule_information cannot be null');
        }
        $this->container['transfer_schedule_information'] = $transfer_schedule_information;

        return $this;
    }

    /**
     * Gets payment_preference.
     */
    public function getPaymentPreference(): ?PaymentPreference
    {
        return $this->container['payment_preference'];
    }

    /**
     * Sets payment_preference.
     *
     * @param null|PaymentPreference $payment_preference payment_preference
     */
    public function setPaymentPreference(?PaymentPreference $payment_preference): self
    {
        if (is_null($payment_preference)) {
            array_push($this->openAPINullablesSetToNull, 'payment_preference');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payment_preference', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payment_preference'] = $payment_preference;

        return $this;
    }

    /**
     * Gets transfer_schedule_failures.
     */
    public function getTransferScheduleFailures(): array
    {
        return $this->container['transfer_schedule_failures'];
    }

    /**
     * Sets transfer_schedule_failures.
     *
     * @param array $transfer_schedule_failures a list of transfer schedule failures
     */
    public function setTransferScheduleFailures(array $transfer_schedule_failures): self
    {
        if (is_null($transfer_schedule_failures)) {
            throw new \InvalidArgumentException('non-nullable transfer_schedule_failures cannot be null');
        }
        $this->container['transfer_schedule_failures'] = $transfer_schedule_failures;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed    $value  Value to be set
     */
    public function offsetSet($offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @see https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Array of nullable properties.
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null.
     *
     * @return bool[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null.
     *
     * @param bool[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
     * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
     * $this->openAPINullablesSetToNull array.
     *
     * @param mixed $defaultValue
     */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }
}
