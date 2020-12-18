<?php

namespace Balt\NewRelic;

class NewRelic
{
    public function isExtensionLoaded(): bool
    {
        return extension_loaded('newrelic');
    }

    public function report(Metric $metric)
    {
        if (!$this->isExtensionLoaded()) {
            return false;
        }

        newrelic_record_custom_event($metric->getName(), $metric->getAttributes());

        return true;
    }
}