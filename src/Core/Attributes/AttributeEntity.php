<?php

namespace Eyadhamza\LaravelEloquentMigration\Core\Attributes;

use Attribute;
use Eyadhamza\LaravelEloquentMigration\Core\Constants\AttributeToColumn;
use Eyadhamza\LaravelEloquentMigration\Core\Constants\Rule;
use Illuminate\Support\Fluent;

#[Attribute(Attribute::IS_REPEATABLE | Attribute::TARGET_CLASS)]
abstract class AttributeEntity
{
    protected ?string $name;
    protected string $type;
    protected ?array $rules;
    public function __construct(string $name = null, array $rules = [])
    {
        $this->name = $name;
        $this->setRules($rules);
    }

    public function getName(): ?string
    {
        return $this->name ?? null;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = AttributeToColumn::map($type);

        return $this;
    }
    abstract public function setDefinition(string $tableName): self;
    public function getRules(): ?array
    {
        return $this->rules;
    }

    public function setRules(array $rules): self
    {
        $this->rules = Rule::map($rules);

        return $this;
    }

}
