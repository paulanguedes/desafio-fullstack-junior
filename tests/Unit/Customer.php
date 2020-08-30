<?php

namespace Tests\Unit;

use App\Customer;
use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{
    public function testIndexCustomer()
    {
        $customers = new Customer();
        $this->assertTrue($customers->index());
    }
    public function testStoreCustomer()
    {
        $customers = new Customer();
        $this->assertTrue($customers->index());
    }
    public function testEditCustomer()
    {
        $customers = new Customer();
        $this->assertTrue($customers->edit('id'));
    }
    public function testUpdateCustomer()
    {
        $customers = new Customer();
        $this->assertTrue($customers->update());
    }
    public function testDestroyCustomer()
    {
        $customers = new Customer();
        $this->assertTrue($customers->destroy('id'));
    }
}
