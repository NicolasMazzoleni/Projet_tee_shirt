<?php

namespace App\Http\Controllers;

//require 'vendor/autoload.php';

use App\Creation;
use App\Logo;
use App\Tshirt;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\File;


class GenerateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Tshirt $tshirt, Logo $logo)
    {

        $shirtPath = public_path('images/tshirts/' . $tshirt->id . '.png');
        $imagePath = public_path('images/logos/' . $logo->id . '.png');

        $manager = new ImageManager();
        $imgShirt = $manager->make($shirtPath);
        $imageLogo = $manager->make($imagePath)->resize($tshirt->largeurImpression, $tshirt->hauteurImpression, function ($constraint) {
            $constraint->aspectRatio();
        });

        $width = $imageLogo->width();
        $height = $imageLogo->height();
        $x = intval($tshirt->origineX + (($tshirt->largeurImpression / 2) - ($width / 2)));
        $y = intval($tshirt->origineY + (($tshirt->hauteurImpression / 2) - ($height / 2)));
        //Coller le logo sur le tshirt
        //$imgShirt->insert($imageCopyrights, 'top-left', 550, 700);
        $imgShirt->insert($imageLogo, 'top-left', $x, $y);

        $imgShirt->text('© Copyright', 900, 1200, function($font) {
            $font->file('fonts/OrangeJuice.ttf');
            $font->size(250);
            $font->color('#ff6666');
            $font->align('center');
            $font->valign('top');
            $font->angle(45);
        });

        return $imgShirt->response();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Tshirt $tshirt, Logo $logo)
    {
        $data = array('tshirt_id' => $tshirt->id, 'logo_id' => $logo->id, 'user_id' => 1);
        $creation = Creation::create($data);

        $shirtPath = public_path('images/tshirts/' . $tshirt->id . '.png');
        $imagePath = public_path('images/logos/' . $logo->id . '.png');
        $savedShirt = public_path('storage/sauvegarde/' . $creation->id . '.png');

        $manager = new ImageManager();
        $imgShirt = $manager->make($shirtPath);
        $imageLogo = $manager->make($imagePath)->resize($tshirt->largeurImpression, $tshirt->hauteurImpression, function ($constraint) {
            $constraint->aspectRatio();
        });
        $width = $imageLogo->width();
        $height = $imageLogo->height();
        $x = intval($tshirt->origineX + (($tshirt->largeurImpression / 2) - ($width / 2)));
        $y = intval($tshirt->origineY + (($tshirt->hauteurImpression / 2) - ($height / 2)));
        //Coller le logo sur le tshirt
        $imgShirt->insert($imageLogo, 'top-left', $x, $y);
        $imgShirt->save($savedShirt);

        $this->destroy($logo);
        return redirect()->route("home");
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logo $logo)
    {
        if ($logo->nom === "upload") {
            File::delete('images/logos/' . $logo->id . '.png');
            Logo::where('nom', 'upload')->delete();
        }
        return redirect()->route("home");
    }
}
