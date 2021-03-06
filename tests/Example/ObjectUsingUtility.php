<?php

namespace TurmericSpice\Example;

use TurmericSpice\ReadableAttributes;

/**
 * These functions are only helper.
 * You should not expect too much.
 */
class ObjectUsingUtility
{
    use ReadableAttributes;

    public function getCreated()
    {
        return $this->attributes->mayHave('created')->asInstanceOf('\\Datetime');
    }

    public function getCreatedDatetime()
    {
        return $this->attributes->mustHave('created_datetime')->asInstanceOf('\\Datetime');
    }

    public function getUpdatedHistories()
    {
        return $this->attributes->mayHave('updated_histories')->asInstanceArray('\\Datetime');
    }

    public function getUpdatedHistoriesDatetime()
    {
        return $this->attributes->mustHave('updated_histories_datetime')->asInstanceArray('\\Datetime');
    }

    public function getRaw()
    {
        return $this->attributes->getRaw();
    }
}
