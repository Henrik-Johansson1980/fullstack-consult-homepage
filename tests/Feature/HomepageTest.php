<?php

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

test('homepage renders successfully', function () {
    $this->get('/')->assertStatus(200);
});

test('homepage contains key sections', function () {
    $response = $this->get('/');

    $response->assertSee('Skräddarsydda webblösningar', false);
    $response->assertSee('Tjänster', false);
    $response->assertSee('Process', false);
    $response->assertSee('FAQ', false);
});

test('contact form rejects empty submission', function () {
    $this->post(route('contact.store'), [])
        ->assertSessionHasErrors(['name', 'email', 'message']);
});

test('contact form rejects too short message', function () {
    $this->post(route('contact.store'), [
        'name'    => 'Test Person',
        'email'   => 'test@example.com',
        'message' => 'Too short',
    ])->assertSessionHasErrors(['message']);
});

test('contact form accepts valid submission', function () {
    Mail::fake();

    $this->post(route('contact.store'), [
        'name'    => 'Anna Andersson',
        'email'   => 'anna@foretag.se',
        'company' => 'Företaget AB',
        'message' => 'Hej, jag är intresserad av att diskutera ett projekt för vår verksamhet.',
        'budget'  => '50k_100k',
    ])->assertRedirect('/#kontakt')
        ->assertSessionHas('contact_success', true);

    Mail::assertQueued(ContactFormMail::class);
});
