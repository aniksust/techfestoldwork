<?php

class GalleryController extends \BaseController {

	
	public function ab()
    {
        $manuals1 = [];
        $manuals2 = [];
        $manuals3 = [];
        $manuals4 = [];
        $filesInFolder = \File::files(public_path('public/carnival_assets/gallery/all/'));
        foreach($filesInFolder as $path)
        {
            $manuals1[] = pathinfo($path);
        }
        $filesInFolder = \File::files(__DIR__.'public/carnival_assets/gallery/programming/');

        foreach($filesInFolder as $path)
        {
            $manuals2[] = pathinfo($path);
        }
        $filesInFolder = \File::files(__DIR__.'public/carnival_assets/gallery/software/');

        foreach($filesInFolder as $path)
        {
            $manuals3[] = pathinfo($path);
        }
        $filesInFolder = \File::files(__DIR__.'public/carnival_assets/gallery/game/');

        foreach($filesInFolder as $path)
        {
            $manuals4[] = pathinfo($path);
        }
        return View::make('g.index')
                ->with('manuals1',$manuals1)
                ->with('manuals2',$manuals2)
                ->with('manuals3',$manuals3)
                ->with('manuals4',$manuals4)
                 ->with('title','IPvision SUST 6th CSE Carnival 2017 ::. Gallery ::.');
    }
    public function start()
    {
        $manuals1 = [];
        $manuals2 = [];
        $manuals3 = [];
        $manuals4 = [];
        $filesInFolder = \File::files(__DIR__.'public/carnival_assets/gallery/flash/');

        foreach($filesInFolder as $path)
        {
            $manuals1[] = pathinfo($path);
        }
        return View::make('flash.index')
                ->with('myslides',$manuals1)
                ->with('title','IPvision SUST 6th CSE Carnival 2017 .::::.');
    }
    public function start2()
    {
        $manuals1 = [];
        $filesInFolder = \File::files(__DIR__.'public/carnival_assets/gallery/flash/');

        foreach($filesInFolder as $path)
        {
            $manuals1[] = pathinfo($path);
        }
        return View::make('flash2.index')
                ->with('myslides',$manuals1)
                ->with('title','IPvision SUST 6th CSE Carnival 2017 .::::.');
    }



}
