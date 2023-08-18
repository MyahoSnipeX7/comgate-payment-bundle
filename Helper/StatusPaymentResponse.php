<?php


namespace Mysho\ComgateBundle\Helper;



use Mysho\ComgateBundle\Exception\ErrorCodeException;
use Mysho\ComgateBundle\Exception\InvalidArgumentException;
use Mysho\ComgateBundle\Factory\ResponseCodes;

class StatusPaymentResponse
{
    /**
     * @var int
     */
    private $code;    

    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $transId;   
    
    /**
     * @var int
     */
    private $price;
    
    /**
     * @var int
     */
    private $name;

    /**
     * @var string
     */
    private $curr;

    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $refId;  

    /**
     * @var string
     */
    private $payerId;

    /**
     * @var string
     */
    private $method;  

    /**
     * @var string
     */
    private $account;

    /**
     * @var string
     */
    private $email;    

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $payerName;

    /**
     * @var string
     */
    private $payerAcc;

    /**
     * @var string
     */
    private $fee;
    
    /**
     * @var string
     */
    private $vs;


    /**
     * @param array $rawData
     * @throws InvalidArgumentException
     * @throws ErrorCodeException
     */
    public function __construct(array $rawData)
    {
        if (isset($rawData['code'])) {
            $this->code = (int)$rawData['code'];
        } else {
            throw new InvalidArgumentException('Missing "code" in response');
        }

        if (isset($rawData['message'])) {
            $this->message = $rawData['message'];
        } else {
            throw new InvalidArgumentException('Missing "message" in response');
        }

        if (!$this->isOk()) {
            throw new ErrorCodeException($this->message, $this->code);
        }

        if (isset($rawData['transId'])) {
            $this->transId = $rawData['transId'];
        } else {
            throw new InvalidArgumentException('Missing "transId" in response');
        }

        $this->price = $rawData['price'];
        $this->curr = $rawData['curr'];
        $this->label = $rawData['label'];
        $this->refId = $rawData['refId'];
        $this->method = $rawData['method'];
        $this->email = $rawData['email'];
        $this->name = $rawData['name'];
        $this->transId = $rawData['transId'];
        $this->status = $rawData['status'];
        $this->fee = $rawData['fee'];
        $this->vs = $rawData['vs'];
        $this->payerAcc = $rawData['payer_acc'];
        $this->payerName = $rawData['payer_name'];
    }

    /**
     * @return bool
     */
    public function isOk(): bool
    {
        return $this->code === ResponseCodes::CODE_OK;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getCurr(): int
    {
        return $this->curr;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @return string
     */
    public function getRefId(): string
    {
        return $this->refId;
    }

    /**
     * @return string
     */
    public function getPayerId(): string
    {
        return $this->payerId;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @return string
     */
    public function getAccount(): string
    {
        return $this->account;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getPayerName(): string
    {
        return $this->payerName;
    }

    /**
     * @return string
     */
    public function getPayerAcc(): string
    {
        return $this->payerAcc;
    }

    /**
     * @return string
     */
    public function getFee(): string
    {
        return $this->fee;
    }

    /**
     * @return string
     */
    public function getVs(): string
    {
        return $this->vs;
    }
}