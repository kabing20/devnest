<?php

namespace Module\Developer\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class ModuleController extends DeveloperBaseController
{
    public $view_path = 'module';
    public $base_route = 'module';

    public function __construct()
    {
        //
    }

    public function index()
    {
        return view(parent::__loadView('create'));
    }

    public function store(Request $request)
    {
        $name = $request->module . "Controller";
        $module = "Admin";

        $this->module = $module;
        $this->class = $name;
        $this->classname = str_replace('Controller', '', $name);
        $this->makeController();
//        $this->makeModel();
//        $this->makeRepo();
//        $this->makeServices();
    }

    public function makeController()
    {
        $stub = __DIR__ . '/stubs/controller.module.stub';
        $file = file_get_contents($stub);
        $file = str_replace('{{module}}', $this->module, $file);
        $file = str_replace('{{bigtitle}}', $this->classname, $file);
        $file = str_replace('{{smalltitle}}', strtolower($this->classname), $file);

        $path = base_path('module/' . strtolower($this->module) . '/Controllers/' . $this->class . '.php');
        $this->makeDirectory($path);
        file_put_contents($path,$file,0);

        $this->makeDirectory($path);
        $this->filesPut($path, $file);

        return true;
    }

    public function makeRepo()
    {
        $stub = __DIR__ . '/stubs/repo.module.stub';
        $file = file_get_contents($stub);
        $file = str_replace('{{bigtitle}}', $this->classname, $file);

        $path = base_path('module/common/Repositories/' . $this->classname . 'Repository.php');
        $this->makeDirectory($path);
        $this->filesPut($path, $file);

        return true;
    }

    public function makeModel()
    {
        $stub = __DIR__ . '/stubs/model.module.stub';
        $file = file_get_contents($stub);
        $file = str_replace('{{bigtitle}}', $this->classname, $file);

        $path = base_path('module/common/Models/' . $this->classname . '.php');
        $this->makeDirectory($path);
        $this->filesPut($path, $file);

        return true;
    }

    public function makeServices()
    {
        $stub = __DIR__ . '/stubs/services.module.stub';
        $file = file_get_contents($stub);
        $file = str_replace('{{bigtitle}}', $this->classname, $file);

        $path = base_path('module/common/Services/' . $this->classname . 'Service.php');
        $this->makeDirectory($path);
        $this->filesPut($path, $file);

        return true;
    }

    public function filesPut($path, $contents, $lock = false)
    {
        return file_put_contents($path, $contents, $lock ? LOCK_EX : 0);
    }

    public function isDirectory($directory)
    {
        return is_dir($directory);
    }

    public function makeDirectorys($path, $mode = 0755, $recursive = false, $force = false)
    {
        if ($force) {
            return @mkdir($path, $mode, $recursive);
        }

        return mkdir($path, $mode, $recursive);
    }

    protected function makeDirectory($path)
    {
        if (!$this->isDirectory(dirname($path))) {
            $this->makeDirectorys(dirname($path), 0777, true, true);
        }

        return $path;
    }
}
