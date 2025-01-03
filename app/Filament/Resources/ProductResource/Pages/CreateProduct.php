<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        /** @var \Illuminate\Contracts\Auth\Guard $auth */
        $auth = auth();
        $data['created_by'] = $auth->id();
        $data['updated_by'] = $auth->id();
        
        return $data;
    }
}
