<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait Searchable
{
    public function scopeSearch(Builder $query, ?string $term): Builder
    {
        if (empty($term)) {
            return $query;
        }

        return $query->where(function (Builder $query) use ($term) {
            foreach ($this->getSearchableFields() as $field) {
                if (str_contains($field, '.')) {
                    [$relation, $relatedField] = explode('.', $field);
                    $query->orWhereHas($relation, function (Builder $query) use ($term, $relatedField) {
                        $query->where($relatedField, 'LIKE', "%$term%");
                    });
                } else {
                    $query->orWhere($field, 'LIKE', "%$term%");
                }
            }
        });
    }
}
