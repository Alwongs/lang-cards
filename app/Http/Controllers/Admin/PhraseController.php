<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Phrase;
use App\Models\Language;
use App\Models\Translation;

class PhraseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phrases = Phrase::with('translations')->orderBy('default_translation')->get();

        return view('pages.admin.phrases.manage', compact('phrases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $phrase = $request->all();
        $phrase_key_array = explode(' ', $phrase['default_translation']);
        $phrase['phrase_key']          = strtolower(implode('_', $phrase_key_array));
        $phrase['default_translation'] = strtolower($phrase['default_translation']);
        $created_phrase = Phrase::create($phrase);

        $lang_en = Language::where('code', 'en')->first();
        if (empty($lang_en)) {
            $language['code'] = 'en';
            $language['name'] = 'English';
            $lang_en = Language::create($language);
        }

        $translation['translation'] = $phrase['default_translation'];
        $translation['phrase_id'] = $created_phrase->id;
        $translation['language_id'] = $lang_en->id;
        Translation::create($translation);

        return redirect()->back()->with('info', 'Phrase created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Phrase $phrase)
    {
        $languages = Language::all();

        // if (count($languages) == 0) {
        //     $language['code'] = 'EN';
        //     $language['name'] = 'English';
        //     $created_language = Language::create($language);
        //     $languages = Language::all();

        //     $translation['translation'] = $phrase->default_translation;
        //     $translation['phrase_id'] = $phrase->id;
        //     $translation['language_id'] = $created_language->id;
        //     Translation::create($translation);
        // }

        $phrase_translations = Translation::where('phrase_id', $phrase->id)->get();

        foreach($languages as &$lang) {
            foreach($phrase_translations as $translation) {
                if ($lang->id == $translation->language_id) {
                    $lang->phrase_translation = $translation->translation;
                    $lang->translation_id = $translation->id;
                }
            }
        }

        return view('pages.admin.translations.manage', compact('phrase', 'languages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phrase $phrase)
    {
        $phrase->delete();

        return redirect()->back()->with('info', 'Phrase deleted');
    }
}
