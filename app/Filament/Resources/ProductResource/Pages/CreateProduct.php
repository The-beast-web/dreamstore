<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['code'] = Str::random(6);

        return $data;
    }

    protected function handleRecordCreation(array $data): Model
    {
        $data['gallery'] = json_encode($data['gallery']);
        $data['tag'] = json_encode($data['tag']);

        return static::getModel()::create($data);
    }
}
