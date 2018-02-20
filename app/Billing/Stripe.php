<?php
namespace Adi\Billing;

class Stripe
{
    protected $key;

    public function __construct($key)
    {
        $this->key = $key;
    }

    public function show()
    {
        dd($this->key);
    }
}
