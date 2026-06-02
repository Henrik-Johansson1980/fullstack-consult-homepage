<?php

namespace App\Livewire\ContactSubmissions;

use App\Models\ContactSubmission;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Contact Submissions')]
class Index extends Component
{
    public ?ContactSubmission $selectedSubmission = null;

    public bool $showSubmissionModal = false;

    public function selectSubmission(int $id): void
    {
        $this->selectedSubmission = ContactSubmission::findOrFail($id);
        $this->selectedSubmission->markAsRead();
        $this->showSubmissionModal = true;
    }

    public function closeSubmission(): void
    {
        $this->selectedSubmission = null;
        $this->showSubmissionModal = false;
    }

    public function deleteSubmission(int $id): void
    {
        ContactSubmission::findOrFail($id)->delete();

        if ($this->selectedSubmission?->id === $id) {
            $this->selectedSubmission = null;
        }
    }

    public function render(): View
    {
        return view('livewire.contact-submissions.index', [
            'submissions' => ContactSubmission::latest()->get(),
        ]);
    }
}
