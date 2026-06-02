<?php

use App\Livewire\ContactSubmissions\Index;
use App\Models\ContactSubmission;
use App\Models\User;
use Livewire\Livewire;

test('submissions index requires authentication', function () {
    $this->get(route('submissions.index'))->assertRedirect(route('login'));
});

test('submissions index is accessible to authenticated users', function () {
    $this->actingAs(User::factory()->create())
        ->get(route('submissions.index'))
        ->assertOk();
});

test('submissions index lists all submissions', function () {
    ContactSubmission::factory()->count(3)->create();

    Livewire::actingAs(User::factory()->create())
        ->test(Index::class)
        ->assertSee(ContactSubmission::first()->name);
});

test('selecting a submission marks it as read', function () {
    $submission = ContactSubmission::factory()->unread()->create();

    Livewire::actingAs(User::factory()->create())
        ->test(Index::class)
        ->call('selectSubmission', $submission->id);

    expect($submission->fresh()->read_at)->not->toBeNull();
});

test('deleting a submission removes it from the database', function () {
    $submission = ContactSubmission::factory()->create();

    Livewire::actingAs(User::factory()->create())
        ->test(Index::class)
        ->call('deleteSubmission', $submission->id);

    $this->assertDatabaseMissing('contact_submissions', ['id' => $submission->id]);
});
