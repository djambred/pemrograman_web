<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySosialMediumRequest;
use App\Http\Requests\StoreSosialMediumRequest;
use App\Http\Requests\UpdateSosialMediumRequest;
use App\Models\SosialMedium;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SosialMediaController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('sosial_medium_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sosialMedia = SosialMedium::all();

        return view('admin.sosialMedia.index', compact('sosialMedia'));
    }

    public function create()
    {
        abort_if(Gate::denies('sosial_medium_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sosialMedia.create');
    }

    public function store(StoreSosialMediumRequest $request)
    {
        $sosialMedium = SosialMedium::create($request->all());

        return redirect()->route('admin.sosial-media.index');
    }

    public function edit(SosialMedium $sosialMedium)
    {
        abort_if(Gate::denies('sosial_medium_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sosialMedia.edit', compact('sosialMedium'));
    }

    public function update(UpdateSosialMediumRequest $request, SosialMedium $sosialMedium)
    {
        $sosialMedium->update($request->all());

        return redirect()->route('admin.sosial-media.index');
    }

    public function show(SosialMedium $sosialMedium)
    {
        abort_if(Gate::denies('sosial_medium_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sosialMedia.show', compact('sosialMedium'));
    }

    public function destroy(SosialMedium $sosialMedium)
    {
        abort_if(Gate::denies('sosial_medium_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sosialMedium->delete();

        return back();
    }

    public function massDestroy(MassDestroySosialMediumRequest $request)
    {
        $sosialMedia = SosialMedium::find(request('ids'));

        foreach ($sosialMedia as $sosialMedium) {
            $sosialMedium->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
