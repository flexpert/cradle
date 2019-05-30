<?php

/**
 * This file is part of the Dibi, smart database abstraction layer (https://dibiphp.com)
 * Copyright (c) 2005 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Dibi;

/**
 * Exception for a foreign key constraint violation.
 */
class ForeignKeyConstraintViolationException extends ConstraintViolationException
{
}