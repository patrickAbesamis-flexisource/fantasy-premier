<?php

namespace App\Repositories\Interfaces;

interface ElementInterface
{
    public function getAllElements();
    public function getElement(int $intId);
    public function saveFetchedElements(object $fetchedElements);
}
