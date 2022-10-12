<?php

namespace App\Http\View;

use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Support\Facades\Http;

class CategoryComposer
{
    public function compose(View $view)
    {
        $resultPhotos = Http::get('https://graph.instagram.com/me/media?fields=id,caption&access_token=IGQVJXSVVlSjVaeUt4cnFBMTY5Wi1hNTlpTVAxN2dhZAGllSDMxX2JLZA0lsN2V0YjhRTDFOdWRDX054VXVGS2todWdMemt3SlVMV0ZA1eEhIWHptd25CZAXNvSlRKSUpLOXZAnaU9wekJn')->json();
        $photos = [];
        foreach ($resultPhotos['data'] as $photo) {
            $photos[] = $photo['id'];
        }
        $photos = array_slice($photos, 0, 8);

        $dataPhotos = [];
        foreach ($photos as $photo) {
            $resultDataPhotos = Http::get("https://graph.instagram.com/$photo?fields=id,media_type,media_url,username,timestamp&access_token=IGQVJXSVVlSjVaeUt4cnFBMTY5Wi1hNTlpTVAxN2dhZAGllSDMxX2JLZA0lsN2V0YjhRTDFOdWRDX054VXVGS2todWdMemt3SlVMV0ZA1eEhIWHptd25CZAXNvSlRKSUpLOXZAnaU9wekJn")->json();
            $dataPhoto = [];
            foreach ($resultDataPhotos as $photoss) {
                $dataPhoto[] = $photoss;
            }
            $dataPhotos[] = $dataPhoto;
        }

        $categories = Category::with(['child'])->withCount(['child'])->getParent()->orderBy('name', 'ASC')->get();

        $view->with('categories', $categories);
        $view->with('footerE')->with('dataPhotos', $dataPhotos);
    }
}
