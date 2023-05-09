<?php

namespace App\Http\Livewire\Document;

use App\Models\Document;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class Delete extends Component
{
    public $document, $modal;

    public function mount(Document $document)
    {
        $this->document = $document;
    }

    public function render()
    {
        return view('livewire.document.delete');
    }

    public function delete()
    {
        // Delete thumbnail
        Storage::delete($this->document->thumbnail);
        // Delete document
        Storage::delete($this->document->url);
        // Delete from DB
        $this->document->delete();

        return redirect()->route('dashboard');
    }
}
