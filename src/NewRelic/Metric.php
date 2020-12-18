<?php


namespace Balt\NewRelic;


interface Metric
{

    public function getName(): string;

    public function getAttributes(): array;

}