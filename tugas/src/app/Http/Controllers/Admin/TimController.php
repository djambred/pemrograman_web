<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyTimRequest;
use App\Http\Requests\StoreTimRequest;
use App\Http\Requests\UpdateTimRequest;
use App\Models\Tim;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class TimController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('tim_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tims = Tim::with(['media'])->get();

        return view('admin.tims.index', compact('tims'));
    }

    public function create()
    {
        abort_if(Gate::denies('tim_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tims.create');
    }

    public function store(StoreTimRequest $request)
    {
        $tim = Tim::create($request->all());

        if ($request->input('image', false)) {
            $tim->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $tim->id]);
        }

        return redirect()->route('admin.tims.index');
    }

    public function edit(Tim $tim)
    {
        abort_if(Gate::denies('tim_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tims.edit', compact('tim'));
    }

    public function update(UpdateTimRequest $request, Tim $tim)
    {
        $tim->update($request->all());

        if ($request->input('image', false)) {
            if (! $tim->image || $request->input('image') !== $tim->image->file_name) {
                if ($tim->image) {
                    $tim->image->delete();
                }
                $tim->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($tim->image) {
            $tim->image->delete();
        }

        return redirect()->route('admin.tims.index');
    }

    public function show(Tim $tim)
    {
        abort_if(Gate::denies('tim_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tims.show', compact('tim'));
    }

    public function destroy(Tim $tim)
    {
        abort_if(Gate::denies('tim_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tim->delete();

        return back();
    }

    public function massDestroy(MassDestroyTimRequest $request)
    {
        $tims = Tim::find(request('ids'));

        foreach ($tims as $tim) {
            $tim->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('tim_create') && Gate::denies('tim_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Tim();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
