<?php

declare(strict_types=1);

namespace Webinertia\Db;

use Laminas\Permissions\Acl\ProprietaryInterface;
use Laminas\Permissions\Acl\Resource\ResourceInterface;

interface ModelInterface extends ResourceInterface, ProprietaryInterface
{
}
