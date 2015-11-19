<?php

namespace App\Http\Contracts;

interface LocalizedTextsRepositoryInterface
{
    public function getLocalizedText($text_id, $locale);
}