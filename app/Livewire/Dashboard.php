<?php

namespace App\Livewire;

use App\Models\ContactSubmission;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.app')]
#[Title('Dashboard')]
class Dashboard extends Component
{
    use WithPagination;

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
            $this->showSubmissionModal = false;
        }
    }

    public function render(): View
    {
        return view('livewire.dashboard', [
            'totalSubmissions' => ContactSubmission::count(),
            'unreadSubmissions' => ContactSubmission::whereNull('read_at')->count(),
            'readSubmissions' => ContactSubmission::whereNotNull('read_at')->count(),
            'submissions' => ContactSubmission::latest()->paginate(10),
        ]);
    }
}
