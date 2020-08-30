<?php

namespace Tests\Unit;

use App\Contact;
use PHPUnit\Framework\TestCase;

class ContactTest extends TestCase
{
    public function testIndexContact()
    {
        $contacts = new Contact();
        $this->assertTrue($contacts->index());
    }
    public function testStoreContact()
    {
        $contacts = new Contact();
        $this->assertTrue($contacts->store());
    }
    public function testEditContact()
    {
        $contacts = new Contact();
        $this->assertTrue($contacts->edit('id'));
    }
    public function testUpdateContact()
    {
        $contacts = new Contact();
        $this->assertTrue($contacts->update());
    }
    public function testDestroyContact()
    {
        $contacts = new Contact();
        $this->assertTrue($contacts->destroy('id'));
    }
}
