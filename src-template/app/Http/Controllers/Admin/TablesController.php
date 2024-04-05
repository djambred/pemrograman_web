<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyTableRequest;
use App\Http\Requests\StoreTableRequest;
use App\Http\Requests\UpdateTableRequest;
use App\Models\Table;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class TablesController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('table_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tables = Table::with(['media'])->get();

        return view('admin.tables.index', compact('tables'));
    }

    public function create()
    {
        abort_if(Gate::denies('table_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tables.create');
    }

    public function store(StoreTableRequest $request)
    {
        $table = Table::create($request->all());

        if ($request->input('image', false)) {
            $table->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $table->id]);
        }

        return redirect()->route('admin.tables.index');
    }

    public function edit(Table $table)
    {
        abort_if(Gate::denies('table_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tables.edit', compact('table'));
    }

    public function update(UpdateTableRequest $request, Table $table)
    {
        $table->update($request->all());

        if ($request->input('image', false)) {
            if (! $table->image || $request->input('image') !== $table->image->file_name) {
                if ($table->image) {
                    $table->image->delete();
                }
                $table->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($table->image) {
            $table->image->delete();
        }

        return redirect()->route('admin.tables.index');
    }

    public function show(Table $table)
    {
        abort_if(Gate::denies('table_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tables.show', compact('table'));
    }

    public function destroy(Table $table)
    {
        abort_if(Gate::denies('table_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $table->delete();

        return back();
    }

    public function massDestroy(MassDestroyTableRequest $request)
    {
        $tables = Table::find(request('ids'));

        foreach ($tables as $table) {
            $table->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('table_create') && Gate::denies('table_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Table();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
