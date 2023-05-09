<?php

namespace App\Http\Livewire\Newsletter;

use Imagick;
use Livewire\Component;
use App\Models\Document;
use App\Models\Newsletter;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Create extends Component
{
    use WithFileUploads;
    public $name, $file;

    public function render()
    {
        return view('livewire.newsletter.create');
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'file' => 'required|file|mimes:pdf'
        ]);

        try {
            $location = $this->file->store('newsletters');
            $imagick = new Imagick();
            $imagick->readImage(Storage::path($location . '[0]'));
            $imagick->setImageBackgroundColor('#ffffff');
            $imagick->setImageAlphaChannel(Imagick::ALPHACHANNEL_REMOVE);
            $imagick = $imagick->mergeImageLayers(Imagick::LAYERMETHOD_FLATTEN);
            $tn = Str::uuid();
            $imagick->writeImages(Storage::path('newsletters/' . $tn. '.jpg'), true);
            Newsletter::create([
                'name' => $this->name,
                'url' => $location,
                'thumbnail' => 'newsletters/' . $tn . '.jpg',
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
