<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Service\ServiceApi;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct(private ServiceApi $service) {}

    public function index()
    {
        $dataApi = $this->service->handle();

        return view('welcome', compact('dataApi'));
    }

    public function store(Request $request)
    {
        $dataApi = $this->service->handle();

        foreach ($dataApi as $data) {
            Profile::create([
                'name' => $data['name'],
                'avatar_url' => $data['avatar'],
                'country' => $data['country']
            ]);
        }

        return back()->with('success', 'Perfiles importados Correctamente');
    }

    public function edit($id)
    {
        $profile = Profile::find($id);

        return view('profile', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'string|required|max:100',
            'avatar_url' => 'string|nullable',
            'country' => 'string|nullable',
        ]);

        $profile = Profile::find($id);

        if (!$profile) {
            return back()->with('error', 'No se encontro perfil con ese id.');
        }

        $profile->update([
            'name' => $validated['name'],
            'avatar_url' => $validated['avatar_url'],
            'country' => $validated['country']
        ]);

        return redirect()->route('home')->with('success', 'Perfil Actualizado con exito.');
    }
}
