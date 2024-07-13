<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\Phrase;

class HomeController extends Controller
{
    public function index()
    {
        $langCount = Language::count();
        $phrases = Phrase::with('translations')->get();

        $phrasesHaveEmptyTranslations = [];
        foreach ($phrases as $phrase) {
            if (count($phrase->translations) < $langCount) {
                $phrasesHaveEmptyTranslations[] = $phrase;
            }
        }

        return view('home', compact('phrasesHaveEmptyTranslations'));
    }
}
