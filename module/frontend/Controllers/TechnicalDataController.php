<?php

namespace Module\Frontend\Controllers;


use Illuminate\Http\Request;
use Module\Common\Services\TechinicalDataService;
use Module\Common\Services\TechnicaldataFileService;
use Module\Common\Services\TechnicaldataImageService;
use ZipArchive;

class TechnicalDataController extends FrontendBaseController
{
    public $view_path = 'technical-data';
    public $title = 'Technical Data';
    private $techinicalDataService;
    private $technicaldataFileService;
    private $technicaldataImageService;

    public function __construct(TechinicalDataService $techinicalDataService,TechnicaldataFileService $technicaldataFileService,TechnicaldataImageService $technicaldataImageService)
    {
        $this->techinicalDataService = $techinicalDataService;
        $this->technicaldataFileService = $technicaldataFileService;
        $this->technicaldataImageService = $technicaldataImageService;
    }

    public function index()
    {
        $data['description'] = $this->techinicalDataService->first();
        $data['file'] = $this->technicaldataFileService->getAll();
        $data['image'] = $this->technicaldataImageService->getAll();
        return view(parent::__loadView('index'),compact('data'));
    }

    public function zipDownload(Request $request)
    {

        if($request->has('download')) {
            $zip = new ZipArchive;
            if(\File::exists(public_path('attachment.zip'))){
                \File::delete(public_path('attachment.zip'));
                }
            $fileName = 'attachment.zip';
            if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE) {
                $files = $this->technicaldataFileService->getAll();

                foreach ($files as $key => $value) {

                     $file_path =  public_path(str_replace('public','storage',$value->file));

                    $relativeName = basename($value);

                    $zip->addFile($file_path, $value->file);

                }

                $zip->close();

            }

            return response()->download(public_path($fileName));
        }

    }
}
