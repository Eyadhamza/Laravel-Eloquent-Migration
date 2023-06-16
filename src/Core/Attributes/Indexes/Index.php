<?php

namespace PiSpace\LaravelSnapshot\Core\Attributes\Indexes;

use Attribute;
use PiSpace\LaravelSnapshot\Core\Attributes\AttributeEntity;

use PiSpace\LaravelSnapshot\Core\Attributes\Columns\ColumnMapper;

;

#[Attribute(Attribute::IS_REPEATABLE | Attribute::TARGET_CLASS)]
class Index extends IndexMapper
{
    public function setType(): AttributeEntity
    {
        $this->type = 'index';

        return $this;
    }
}
