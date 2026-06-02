<?php

use App\Models\ContactSubmission;

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
        'name' => 'Test Person',
        'email' => 'test@example.com',
        'message' => 'Too short',
    ])->assertSessionHasErrors(['message']);
});

test('contact form saves submission to database', function () {
    $this->post(route('contact.store'), [
        'name' => 'Anna Andersson',
        'email' => 'anna@foretag.se',
        'company' => 'Företaget AB',
        'message' => 'Hej, jag är intresserad av att diskutera ett projekt för vår verksamhet.',
        'budget' => '50k_100k',
    ])->assertRedirect('/#kontakt')
        ->assertSessionHas('contact_success', true);

    $this->assertDatabaseHas('contact_submissions', [
        'email' => 'anna@foretag.se',
        'company' => 'Företaget AB',
        'budget' => '50k_100k',
    ]);
});

test('contact submission is saved as unread', function () {
    $this->post(route('contact.store'), [
        'name' => 'Test Person',
        'email' => 'test@example.com',
        'message' => 'Hej, jag är intresserad av att diskutera ett projekt för vår verksamhet.',
    ]);

    expect(ContactSubmission::latest()->first()->read_at)->toBeNull();
});
