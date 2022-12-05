<?php

namespace App\Http\Livewire\Newsletter;

use Livewire\Component;
use App\Models\Newsletter;
use Illuminate\Support\Facades\Storage;

class Delete extends Component
{
    public $newsletter, $modal;

    public function mount(Newsletter $newsletter)
    {
        $this->newsletter = $newsletter;
    }

    public function render()
    {
        return view('livewire.newsletter.delete');
    }

    public function delete()
    {
        // Delete thumbnail
        Storage::delete($this->newsletter->thumbnail);
        // Delete document
        Storage::delete($this->newsletter->url);
        // Delete from DB
        $this->newsletter->delete();

        return redirect()->route('dashboard');
    }
}
