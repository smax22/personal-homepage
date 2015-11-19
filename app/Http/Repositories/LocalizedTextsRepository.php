<?php

namespace App\Http\Repositories;

use App\Http\Contracts\LocalizedTextsRepositoryInterface;
use DB;

class LocalizedTextsRepository implements LocalizedTextsRepositoryInterface
{
    public function getLocalizedText($text_id, $locale)
    {
        $text = DB::table('localized_texts')->where('text_id', $text_id)->where('locale', $locale)->first();

        return $text;
    }

}