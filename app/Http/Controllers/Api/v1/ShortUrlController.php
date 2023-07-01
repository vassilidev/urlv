<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreShortURLRequest;
use App\Http\Requests\UpdateShortURLRequest;
use AshAllenDesign\ShortURL\Models\ShortURL;
use App\Http\Resources\Api\V1\ShortUrlResource;
use AshAllenDesign\ShortURL\Facades\ShortURL as Url;

class ShortUrlController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreShortURLRequest $request)
    {
        $shortUrl = Url::destinationUrl($request->get('url'))->make();

        return new ShortUrlResource($shortUrl);
    }

    /**
     * Display the specified resource.
     */
    public function show(ShortURL $shortURL)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateShortURLRequest $request, ShortURL $shortURL)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShortURL $shortURL)
    {
        //
    }
}
