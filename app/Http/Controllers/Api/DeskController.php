<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Desk;

use App\Http\Resources\DeskResource;
use App\Http\Resources\DeskListResource;

use App\Http\Requests\DeskStoreRequest;

class DeskController extends Controller
{

    public function index()
    {
        return DeskResource::collection(Desk::with('lists')->get());
    }





    public function store(Request $request)
    {
				$this->validate($request, [
					'name' => 'required'
				],[
					'name.required' => 'обязательное поле'
				]);

				$desk = new Desk;

				$desk->name = $request->name;
				$desk->save();

        // $desk = Desk::create($request->all());
				return new DeskResource($desk);
    }





    public function show($id)
    {
        return new DeskResource(Desk::findOrFail($id));
    }





    public function update(Request $request, $id)
    {
        $desk = Desk::find($id);

				$desk->update([
					'name' => $request->name,
				]);

				return new DeskResource($desk);
    }





    public function destroy($id)
    {
			$desk = Desk::find($id);
			$desk->delete();

			return response(null, Response::HTTP_NO_CONTENT);
    }
}
