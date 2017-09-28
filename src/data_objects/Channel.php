<?php

namespace Platron\Chat2desk\data_objects;

class Channel extends BaseDataObject {
    public $id;
    /** @var string[] */
    public $transports = [];
}
