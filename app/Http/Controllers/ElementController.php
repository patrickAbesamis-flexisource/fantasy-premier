<?php

namespace App\Http\Controllers;

use App\Element;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\ElementInterface;

class ElementController extends Controller
{
    protected $elementRepository;

    public function __construct(ElementInterface $elementRepository) {
        $this->elementRepository = $elementRepository;
    }

    public function index() {
        return $this->elementRepository->getAllElements();
    }

    public function getElement(Request $request) {
        return $this->elementRepository->getElement($request->intId);
    }
}