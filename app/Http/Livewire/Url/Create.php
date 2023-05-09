<?php

namespace App\Http\Livewire\Url;

use App\Models\Url;
use Livewire\Component;

class Create extends Component
{
    public $name, $url;

    public function render()
    {
        return view('livewire.url.create');
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'url' => 'required|active_url',
        ]);

        try {
            Url::create([
                'name' => $this->name,
                'url' => $this->url,
            ]);

            session()->flash('flash.banner', 'Document successfully uploaded!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('dashboard');
    }
}
