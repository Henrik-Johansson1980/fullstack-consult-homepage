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

    public string $search = '';

    public string $statusFilter = '';

    public string $budgetFilter = '';

    public string $dateFrom = '';

    public string $dateTo = '';

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public function updatedStatusFilter(): void
    {
        $this->resetPage();
    }

    public function updatedBudgetFilter(): void
    {
        $this->resetPage();
    }

    public function updatedDateFrom(): void
    {
        $this->resetPage();
    }

    public function updatedDateTo(): void
    {
        $this->resetPage();
    }

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
            'submissions' => ContactSubmission::query()
                ->when($this->search, fn ($q) => $q->where(
                    fn ($q) => $q->where('name', 'like', "%{$this->search}%")
                        ->orWhere('email', 'like', "%{$this->search}%")
                ))
                ->when($this->statusFilter === 'unread', fn ($q) => $q->whereNull('read_at'))
                ->when($this->statusFilter === 'read', fn ($q) => $q->whereNotNull('read_at'))
                ->when($this->budgetFilter, fn ($q) => $q->where('budget', $this->budgetFilter))
                ->when($this->dateFrom, fn ($q) => $q->whereDate('created_at', '>=', $this->dateFrom))
                ->when($this->dateTo, fn ($q) => $q->whereDate('created_at', '<=', $this->dateTo))
                ->latest()
                ->paginate(10),
        ]);
    }
}
