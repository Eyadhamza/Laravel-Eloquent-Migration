<?php

namespace Eyadhamza\LaravelAutoMigration\Core\Attributes\Columns;

use Attribute;
use Eyadhamza\LaravelAutoMigration\Core\Attributes\ForeignKeys\ForeignKeyMapper;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignIdColumnDefinition;
use Illuminate\Database\Schema\ForeignKeyDefinition;


#[Attribute(Attribute::IS_REPEATABLE | Attribute::TARGET_CLASS)]
class ForeignId extends ColumnMapper
{
    protected ForeignKeyDefinition|ForeignIdColumnDefinition $definition;

    protected function setDefinition(string $tableName): self
    {
        $this->definition = (new Blueprint($tableName))->foreignId($this->name);

        return $this;
    }
}
