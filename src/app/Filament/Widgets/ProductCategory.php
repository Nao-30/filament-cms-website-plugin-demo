<?php

namespace App\Filament\Widgets;

use App\Models\ProductCategory as ModelsProductCategory;
use App\Filament\Widgets;
use Filament\Forms\Components\TextInput;
use SolutionForest\FilamentTree\Widgets\Tree as BaseWidget;

class ProductCategory extends BaseWidget
{
    protected static string $model = ModelsProductCategory::class;

    protected static int $maxDepth = 2;

    protected ?string $treeTitle = 'Product Category';

    protected bool $enableTreeTitle = true;
    

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('title'),
        ];
    }

    protected function hasDeleteAction(): bool
    {
        return true;
    }
    protected function hasEditAction(): bool
    {
        return true;
    }
}
