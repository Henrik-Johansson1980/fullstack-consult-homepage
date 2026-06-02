<?php

arch('no debugging statements')
    ->expect('App')
    ->not->toUse(['dd', 'dump', 'var_dump', 'ray', 'ddd']);

arch('controllers')
    ->expect('App\Http\Controllers')
    ->toExtend('App\Http\Controllers\Controller')
    ->toHaveSuffix('Controller');

arch('form requests')
    ->expect('App\Http\Requests')
    ->toExtend('Illuminate\Foundation\Http\FormRequest')
    ->toHaveSuffix('Request');

arch('models')
    ->expect('App\Models')
    ->toExtend('Illuminate\Database\Eloquent\Model');

arch('livewire components extend Component')
    ->expect('App\Livewire')
    ->toExtend('Livewire\Component')
    ->ignoring('App\Livewire\Actions');

arch('livewire components do not use Request facade')
    ->expect('App\Livewire')
    ->not->toUse('Illuminate\Support\Facades\Request')
    ->ignoring('App\Livewire\Actions');

arch('livewire actions are invokable')
    ->expect('App\Livewire\Actions')
    ->toBeClasses()
    ->toHaveMethod('__invoke');

arch('mailables')
    ->expect('App\Mail')
    ->toExtend('Illuminate\Mail\Mailable');

arch('providers')
    ->expect('App\Providers')
    ->toExtend('Illuminate\Support\ServiceProvider')
    ->toHaveSuffix('ServiceProvider');

arch('concerns are traits')
    ->expect('App\Concerns')
    ->toBeTraits();

arch('actions are invokable or have no public properties')
    ->expect('App\Actions')
    ->toBeClasses();
