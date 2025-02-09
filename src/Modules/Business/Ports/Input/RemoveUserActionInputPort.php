<?php

declare(strict_types=1);

namespace hexagonal\Modules\Business\Ports\Input;

use hexagonal\Modules\Business\Entities\User;

interface RemoveUserActionInputPort
{
    public function execute(string $id): User;
}
