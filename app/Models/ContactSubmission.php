<?php

namespace App\Models;

use Database\Factories\ContactSubmissionFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactSubmission extends Model
{
    /** @use HasFactory<ContactSubmissionFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'company',
        'message',
        'budget',
        'read_at',
    ];

    protected $casts = [
        'read_at' => 'datetime',
    ];

    public function isUnread(): bool
    {
        return $this->read_at === null;
    }

    public function markAsRead(): void
    {
        if ($this->isUnread()) {
            $this->update(['read_at' => now()]);
        }
    }
}
