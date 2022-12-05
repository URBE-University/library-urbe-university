<?php

namespace App\Http\Livewire\Url;

use App\Models\Url;
use Livewire\Component;

class Delete extends Component
{
    public $url, $modal;

    public function mount(Url $url)
    {
        $this->url = $url;
    }

    public function render()
    {
        return view('livewire.url.delete');
    }

    public function delete()
    {
        $this->url->delete();
        return redirect()->route('dashboard');
    }
}
