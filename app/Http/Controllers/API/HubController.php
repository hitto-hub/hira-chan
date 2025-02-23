<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Threads\StoreRequest;
use App\Http\Resources\ThreadResource;
use App\Services\Tables\HubService;
use Illuminate\Http\Request;

class HubController extends Controller
{
    private HubService $hubService;

    public function __construct(HubService $hubService)
    {
        $this->hubService = $hubService;
    }

    /**
     * スレッド一覧を表示する
     */
    public function index(): ThreadResource
    {
        return new ThreadResource(
            $this->hubService->getThreadBySCategoryAndAccessedDescendingOrder()
        );
    }

    /**
     * スレッドを作成する
     *
     * @param StoreRequest $request アクセス時のパラメータなど
     * @return void
     */
    public function store(StoreRequest $request)
    {
        $this->hubService->createThread(
            $request->secondaryCategoryId,
            $request->user()->id,
            $request->threadName
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
