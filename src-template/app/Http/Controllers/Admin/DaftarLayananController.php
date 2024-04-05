<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyDaftarLayananRequest;
use App\Http\Requests\StoreDaftarLayananRequest;
use App\Http\Requests\UpdateDaftarLayananRequest;
use App\Models\DaftarLayanan;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class DaftarLayananController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('daftar_layanan_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $daftarLayanans = DaftarLayanan::with(['media'])->get();

        return view('admin.daftarLayanans.index', compact('daftarLayanans'));
    }

    public function create()
    {
        abort_if(Gate::denies('daftar_layanan_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.daftarLayanans.create');
    }

    public function store(StoreDaftarLayananRequest $request)
    {
        $daftarLayanan = DaftarLayanan::create($request->all());

        if ($request->input('image', false)) {
            $daftarLayanan->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $daftarLayanan->id]);
        }

        return redirect()->route('admin.daftar-layanans.index');
    }

    public function edit(DaftarLayanan $daftarLayanan)
    {
        abort_if(Gate::denies('daftar_layanan_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.daftarLayanans.edit', compact('daftarLayanan'));
    }

    public function update(UpdateDaftarLayananRequest $request, DaftarLayanan $daftarLayanan)
    {
        $daftarLayanan->update($request->all());

        if ($request->input('image', false)) {
            if (! $daftarLayanan->image || $request->input('image') !== $daftarLayanan->image->file_name) {
                if ($daftarLayanan->image) {
                    $daftarLayanan->image->delete();
                }
                $daftarLayanan->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($daftarLayanan->image) {
            $daftarLayanan->image->delete();
        }

        return redirect()->route('admin.daftar-layanans.index');
    }

    public function show(DaftarLayanan $daftarLayanan)
    {
        abort_if(Gate::denies('daftar_layanan_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.daftarLayanans.show', compact('daftarLayanan'));
    }

    public function destroy(DaftarLayanan $daftarLayanan)
    {
        abort_if(Gate::denies('daftar_layanan_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $daftarLayanan->delete();

        return back();
    }

    public function massDestroy(MassDestroyDaftarLayananRequest $request)
    {
        $daftarLayanans = DaftarLayanan::find(request('ids'));

        foreach ($daftarLayanans as $daftarLayanan) {
            $daftarLayanan->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('daftar_layanan_create') && Gate::denies('daftar_layanan_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new DaftarLayanan();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
