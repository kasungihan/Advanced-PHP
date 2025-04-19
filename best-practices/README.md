# Best Practices

---

**Code related**

- Readability & Maintainability
- Efficient code - fast code / Big o Notation / code run time / execute time start and end print / data structure
- Tests - dependency injection class to class call / mock dummy data
- Refactor

**Development Process**

- Version Control
- Code Review
- CI/CD pipeline - GitHub Action / Automate / CodeMagic / GitLab Runner
- Agile - Asana / github issue
- General Guidelines
- Documentation - Requirement / Plan / User Manual

## Principle

- KISS - keep it simple stupid
- YADNI - you are not gonna need it

## code standard following php project like lint in js

- phpstan
- rector
- ecs

make file template

```
.PHONY: phpstan rector analyses ecs

include .env
export $(shell sed 's/=.*//' .env)

phpstan:
	docker exec -it ${CONTAINER_PREFIX}-fpm vendor/bin/phpstan analyses

rector:
	docker exec -it ${CONTAINER_PREFIX}-fpm vendor/bin/rector process

ecs:
	docker exec -it ${CONTAINER_PREFIX}-fpm vendor/bin/ecs check $(ECS_FLAG)

analyses: phpstan rector ecs

```

configure

```
<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->paths([
        _DIR_ . '/app/DTOs',
        _DIR_ . '/app/UseCases',
    ]);

    $ecsConfig->sets([
        SetList::PSR_12,
        SetList::CLEAN_CODE,
        SetList::LARAVEL
    ]);
};
```

rector.php

```
<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        _DIR_ . '/app/DTOs',
        _DIR_ . '/app/UseCases',
    ]);

    $rectorConfig->sets([
        SetList::CODE_QUALITY,
        SetList::DEAD_CODE,
        SetList::CODE_QUALITY,
        SetList::TYPE_DECLARATION,
        SetList::EARLY_RETURN,
        SetList::PHP_81,
    ]);
};

```
