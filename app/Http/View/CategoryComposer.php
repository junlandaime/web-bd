<?php

namespace App\Http\View;

use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Support\Facades\Http;

class CategoryComposer
{
    public function compose(View $view)
    {   
        $id = 'IGQVJYZAG83aFpURmQ4R0hpQW1PcGhOb2VteGQtYjhpejVBOGNNVkRORWdTTFRJU2lPXzJFTUp2dzRLTkN4cERGOWV2SVRVVnRLTEpLNTFkTDd0VlNzY0h5d1ZA5MGh4ejlBRkFZAc01R';
        $resultPhotos = Http::get("https://graph.instagram.com/me/media?fields=id,caption&access_token=$id")->json();
        $photos = [];
        foreach ($resultPhotos['data'] as $photo) {
            $photos[] = $photo['id'];
        }
        $photos = array_slice($photos, 0, 8);

        $dataPhotos = [];
        foreach ($photos as $photo) {
            $resultDataPhotos = Http::get("https://graph.instagram.com/$photo?fields=id,media_type,media_url,username,timestamp&access_token=$id")->json();
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
