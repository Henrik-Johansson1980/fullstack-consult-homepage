<div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
    @php
        $budgetLabels = [
            'under_10k' => 'Under 10k',
            '10k_50k'   => '10k – 50k',
            '50k_100k'  => '50k – 100k',
            'over_100k' => 'Over 100k',
            'not_sure'  => 'Not sure',
        ];
    @endphp

    <div class="grid auto-rows-min gap-4 md:grid-cols-3">
        <div class="flex flex-col gap-1 rounded-xl border border-neutral-200 dark:border-neutral-700 p-6">
            <flux:text class="text-sm font-medium">{{ __('Total Submissions') }}</flux:text>
            <span class="text-3xl font-bold">{{ $totalSubmissions }}</span>
            <flux:text class="text-xs">{{ __('All time contact form submissions') }}</flux:text>
        </div>

        <div class="flex flex-col gap-1 rounded-xl border border-neutral-200 dark:border-neutral-700 p-6">
            <flux:text class="text-sm font-medium">{{ __('Unhandled') }}</flux:text>
            <span class="text-3xl font-bold text-amber-500">{{ $unreadSubmissions }}</span>
            <flux:text class="text-xs">{{ __('Submissions not yet read') }}</flux:text>
        </div>

        <div class="flex flex-col gap-1 rounded-xl border border-neutral-200 dark:border-neutral-700 p-6">
            <flux:text class="text-sm font-medium">{{ __('Handled') }}</flux:text>
            <span class="text-3xl font-bold text-green-500">{{ $readSubmissions }}</span>
            <flux:text class="text-xs">{{ __('Submissions already read') }}</flux:text>
        </div>
    </div>

    <div class="flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
        <div class="p-6">
            <flux:heading size="lg" class="mb-4">{{ __('Contact Submissions') }}</flux:heading>

            @if ($submissions->isEmpty())
                <flux:text class="text-center py-12">{{ __('No submissions yet.') }}</flux:text>
            @else
                <flux:table>
                    <flux:table.columns>
                        <flux:table.column>{{ __('Name') }}</flux:table.column>
                        <flux:table.column>{{ __('Email') }}</flux:table.column>
                        <flux:table.column>{{ __('Company') }}</flux:table.column>
                        <flux:table.column>{{ __('Budget') }}</flux:table.column>
                        <flux:table.column>{{ __('Received') }}</flux:table.column>
                        <flux:table.column>{{ __('Status') }}</flux:table.column>
                    </flux:table.columns>

                    <flux:table.rows>
                        @foreach ($submissions as $submission)
                            <flux:table.row
                                :key="$submission->id"
                                wire:click="selectSubmission({{ $submission->id }})"
                                class="cursor-pointer hover:bg-zinc-50 dark:hover:bg-zinc-800"
                            >
                                <flux:table.cell class="font-medium">{{ $submission->name }}</flux:table.cell>
                                <flux:table.cell>{{ $submission->email }}</flux:table.cell>
                                <flux:table.cell>{{ $submission->company ?? '—' }}</flux:table.cell>
                                <flux:table.cell>
                                    @if ($submission->budget)
                                        <flux:badge size="sm" color="blue" inset="top bottom">
                                            {{ $budgetLabels[$submission->budget] ?? $submission->budget }}
                                        </flux:badge>
                                    @else
                                        —
                                    @endif
                                </flux:table.cell>
                                <flux:table.cell class="whitespace-nowrap text-zinc-500">
                                    {{ $submission->created_at->diffForHumans() }}
                                </flux:table.cell>
                                <flux:table.cell>
                                    @if ($submission->isUnread())
                                        <flux:badge size="sm" color="amber" inset="top bottom">{{ __('Unread') }}</flux:badge>
                                    @else
                                        <flux:badge size="sm" color="zinc" inset="top bottom">{{ __('Read') }}</flux:badge>
                                    @endif
                                </flux:table.cell>
                            </flux:table.row>
                        @endforeach
                    </flux:table.rows>
                </flux:table>

                <flux:pagination :paginator="$submissions" />
            @endif
        </div>
    </div>

    <flux:modal wire:model.self="showSubmissionModal" class="md:w-[560px]" @close="$wire.closeSubmission()">
        @if ($selectedSubmission)
            <div class="space-y-6">
                <div>
                    <flux:heading size="lg">{{ $selectedSubmission->name }}</flux:heading>
                    <flux:text class="mt-1">{{ $selectedSubmission->email }}</flux:text>
                </div>

                <div class="grid grid-cols-2 gap-4 text-sm">
                    @if ($selectedSubmission->company)
                        <div>
                            <flux:text class="font-medium text-zinc-500 dark:text-zinc-400">{{ __('Company') }}</flux:text>
                            <flux:text>{{ $selectedSubmission->company }}</flux:text>
                        </div>
                    @endif

                    @if ($selectedSubmission->budget)
                        <div>
                            <flux:text class="font-medium text-zinc-500 dark:text-zinc-400">{{ __('Budget') }}</flux:text>
                            <flux:text>{{ $budgetLabels[$selectedSubmission->budget] ?? $selectedSubmission->budget }}</flux:text>
                        </div>
                    @endif

                    <div>
                        <flux:text class="font-medium text-zinc-500 dark:text-zinc-400">{{ __('Received') }}</flux:text>
                        <flux:text>{{ $selectedSubmission->created_at->format('d M Y, H:i') }}</flux:text>
                    </div>
                </div>

                <div>
                    <flux:text class="font-medium text-zinc-500 dark:text-zinc-400 mb-1">{{ __('Message') }}</flux:text>
                    <div class="rounded-lg border border-zinc-200 dark:border-zinc-700 bg-zinc-50 dark:bg-zinc-800 p-4">
                        <flux:text class="whitespace-pre-wrap">{{ $selectedSubmission->message }}</flux:text>
                    </div>
                </div>

                <div class="flex justify-between">
                    <flux:button
                        variant="danger"
                        wire:click="deleteSubmission({{ $selectedSubmission->id }})"
                        wire:confirm="{{ __('Are you sure you want to delete this submission?') }}"
                    >
                        {{ __('Delete') }}
                    </flux:button>

                    <flux:modal.close>
                        <flux:button variant="filled">{{ __('Close') }}</flux:button>
                    </flux:modal.close>
                </div>
            </div>
        @endif
    </flux:modal>
</div>
