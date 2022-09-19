<?php

namespace Tests\Feature;

use App\Models\ContactForm;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class ContactTest extends TestCase
{
    use RefreshDatabase;
   
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function testIfContactFormIsStored()
    {
        $params = [
        'name' => 'Josiah',
        'user' => 'Joe001',
        'email' => 'myemail@gmail.com',
        'city' => 'Lagos',
        'subject' => 'Aristocrate',
        'message' => 'If you would like to access the current parallel process "token" from any other location in your applications test code, you may use the token method. This token is a unique, string identifier for an individual test process and may be used to segment resources across parallel test processes'
        ];
        
        $this->get('/Contact/show', $params)
             ->assertStatus(500);

        $this->assertDatabaseHas('contact_forms', [
            'name' => null
        ]);
    }

    private function createDummyForm(): ContactForm
    {
        $form = new ContactForm();
        $form->name = 'Josiah';
        $form->user = 'Joe001';
        $form->email = 'myemail@gmail.com';
        $form->city = 'Lagos';
        $form->subject = 'Aristocrate';
        $form->message = 'If you would like to access the current parallel process "token" from any other location in your applications test code, you may use the token method. This token is a unique, string identifier for an individual test process and may be used to segment resources across parallel test processes';
        $form->save();

        return $form;
    }
}
