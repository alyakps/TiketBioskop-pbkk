<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace RectorPrefix20220609\Nette\Utils;

use RectorPrefix20220609\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(IHtmlString::class)) {
    \class_alias(Nette\HtmlStringable::class, IHtmlString::class);
}
namespace RectorPrefix20220609\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends Translator
    {
    }
} elseif (!\interface_exists(ITranslator::class)) {
    \class_alias(Translator::class, ITranslator::class);
}
