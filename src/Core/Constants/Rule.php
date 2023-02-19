<?php

namespace Eyadhamza\LaravelAutoMigration\Core\Constants;

abstract class Rule
{
    const AFTER = 'after';
    const DEFAULT = 'default';
    const NULLABLE = 'nullable';
    const UNIQUE = 'unique';
    const UNSIGNED = 'unsigned';
    const FIRST = 'first';
    const CHANGE = 'change';
    const COMMENT = 'comment';
    const AUTO_INCREMENT = 'autoIncrement';
    const CONSTRAINED = 'constrained';
    const CASCADE_ON_DELETE = 'cascadeOnDelete';
    const CASCADE_ON_UPDATE = 'cascadeOnUpdate';


    private static array $rules = [
        Rule::AFTER ,
        Rule::DEFAULT ,
        Rule::NULLABLE ,
        Rule::UNIQUE ,
        Rule::UNSIGNED,
        Rule::FIRST,
        Rule::CHANGE,
        Rule::COMMENT,
        Rule::AUTO_INCREMENT,
    ];

}
