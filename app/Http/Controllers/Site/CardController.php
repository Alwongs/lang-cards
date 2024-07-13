<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Phrase;
use App\Models\Language;
use App\Models\Translation;

class CardController extends Controller
{
    public function index(Request $request)
    {
        $languages = Language::all();
        $langFrom = $request->lang_from ?? "";
        $langTo = $request->lang_to ?? "";

        if (empty($langFrom) || empty($langTo)) {
            return view('pages.site.cards.cards', compact('languages'));
        }

        if ($langFrom == $langTo) {
            return redirect()->back()->with('status', 'Languages should be different!');
        }

        $cards = Phrase::with('translations')->take(9)->get();
        foreach ($cards as $card) {
            foreach ($card->translations as $translation) {

                if ($translation->language_id == $langFrom) {
                    $card->translation_from = $translation;
                }
                if ($translation->language_id == $langTo) {
                    $card->translation_to = $translation;
                }
            }
        }

        return view('pages.site.cards.cards', compact('cards', 'languages', 'langFrom', 'langTo'));
    }


}
