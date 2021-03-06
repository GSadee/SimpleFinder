<?php

namespace Test\Component;

use Symfony\Component\Finder\Finder;


class SimpleFinder
{
    private $finder;

    public function __construct()
    {
        $this->finder = new Finder();
        $this->finder->files()->in(__DIR__);
    }

    public function printFiles()
    {
        foreach ($this->finder as $file) {
            echo '<pre>' . $file->getRelativePathname() . ' ' . $file->getSize() . 'B</pre>';
        }
    }
}