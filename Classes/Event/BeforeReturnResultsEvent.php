<?php
declare(strict_types=1);

namespace Eike\Yacy\Event;

use Eike\Yacy\Domain\Model\Demand;

final class BeforeReturnResultsEvent
{
    public function __construct(
        private Demand $demand,
        private readonly int $page,
        private mixed $json
    ) {}

    public function getDemand(): Demand
    {
        return $this->demand;
    }

    public function setDemand(Demand $demand): BeforeReturnResultsEvent
    {
        $this->demand = $demand;
        return $this;
    }

    public function getJson(): mixed
    {
        return $this->json;
    }

    public function setJson(mixed $json): BeforeReturnResultsEvent
    {
        $this->json = $json;
        return $this;
    }

    public function getPage(): int
    {
        return $this->page;
    }
}
