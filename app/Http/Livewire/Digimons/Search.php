<?php

namespace App\Http\Livewire\Digimons;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Search extends Component
{
    public $lvls = [
        'fresh',
        'training',
        'rookie',
        'champion',
        'ultimate',
        'mega',
    ];
    public $lvl, $digimon, $avatar, $baseUrl, $digimons;

    public function mount()
    {
        $this->baseUrl  = 'https://digimon-api.vercel.app/api/digimon/level/';
        $this->digimons = new \Illuminate\Support\Collection([]);
    }

    public function render()
    {
        return view('livewire.digimons.search');
    }

    public function updatingLvl($value)
    {
        $request        = Http::get($this->baseUrl . $value);
        $this->digimons = new \Illuminate\Support\Collection($request->json());
        $this->avatar = $this->digimons->first()['img'];
        $this->emit('reApplyS2');
    }

    public function updatingDigimon($value)
    {
        $this->avatar = $this->digimons->where('name', $value)->first()['img'];
    }
}
