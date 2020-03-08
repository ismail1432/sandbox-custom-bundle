<?php

namespace TegCorp\TestBundle;

use TegCorp\TestBundle\DependencyInjection\TegCorpTestExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class TegCorpTestBundle extends Bundle
{
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new TegCorpTestExtension();
        }
        return $this->extension;
    }
}
