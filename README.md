# A package for sending Metrics to New Relic

## Installation

You can install the php package using composer.

    composer require balt-technologies/newrelic-metrics

That's is.

## Requirements

You need to have to install the new relic PHP extension.

## Report a metric

    $newRelic = new NewRelic();
        
    $newRelic->report((new FormMetric())->created(1));

## Create a metric

    use Balt\NewRelic\Metric;

    class FormMetric implements Metric
    {
        private array $attributes;

        public function __construct()
        {
            $this->attributes = [];
        }

        public function created(int $createdForms = 1): self
        {   
            $this->attributes['created'] = $createdForms;

            return $this;
        }

    
        public function getName(): string
        {
            return 'forms';
        }

        public function getAttributes(): array
        {
            return $this->attributes;
        }
    }