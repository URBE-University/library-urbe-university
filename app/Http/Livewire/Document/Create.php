<?php

namespace App\Http\Livewire\Document;

use Livewire\Component;
use App\Models\Document;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Imagick;

class Create extends Component
{
    use WithFileUploads;
    public $name, $file;

    public function render()
    {
        return view('livewire.document.create');
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'file' => 'required|file|mimes:pdf'
        ]);

        try {
            $location = $this->file->store('documents');
            $imagick = new Imagick();
            $imagick->setImageBackgroundColor('#ffffff');
            $imagick->setImageAlphaChannel(Imagick::ALPHACHANNEL_REMOVE);
            $imagick = $imagick->mergeImageLayers(Imagick::LAYERMETHOD_FLATTEN);
            $imagick->readImage(Storage::path($location . '[0]'));
            $tn = Str::uuid();
            $imagick->writeImages(Storage::path('documents/' . $tn. '.jpg'), true);
            Document::create([
                'name' => $this->name,
                'url' => $location,
                'thumbnail' => 'documents/' . $tn . '.jpg',
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
