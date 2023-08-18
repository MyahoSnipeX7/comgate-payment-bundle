<?php


namespace Mysho\ComgateBundle\Helper;

class StatusPayment implements RequestInterface
{
    /**
     * @var string
     */
    private $transId;

    /**
     * @param string $transId comgate transactionId
     */
    public function __construct(string $transId)
    {
        $this->transId  = $transId;
    }


    /**
     * @return string
     */
    public function getTransId(): string
    {
        return $this->transId;
    }


    /**
     * @param string $transId
     * @return StatusPayment
     */
    public function setTransId(string $transId): StatusPayment
    {
        $this->transId = $transId;

        return $this;
    }


    /**
     * @return array
     */
    public function getData()
    {
        $data = [
            'transId' => $this->getTransId()
        ];

        $fields = [
            'transId'
        ];

        foreach ($fields as $field) {
            if ($this->$field !== NULL) {
                if (is_bool($this->$field)) {
                    $data[$field] = $this->$field ? 'true' : 'false';
                } else {
                    $data[$field] = $this->$field;
                }
            }
        }

        return $data;
    }


    /**
     * @return bool
     */
    public function isPost()
    {
        return true;
    }


    /**
     * @return string
     */
    public function getEndPoint()
    {
        return 'status';
    }

    /**
     * @return string
     */
    public function getResponseClass()
    {
        return StatusPaymentResponse::class;
    }
}