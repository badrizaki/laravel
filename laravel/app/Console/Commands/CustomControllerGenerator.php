<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Illuminate\Filesystem\Filesystem;

class CustomControllerGenerator extends Command
{
    /**
     * The filesystem instance.
     *
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $files;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:custom-controller {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create controller using custom template';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'controller';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Filesystem $files)
    {
        parent::__construct();
        $this->files = $files;
        $this->BaseControllerName = 'BaseController.php';
        $this->getStubBaseController = __DIR__.'/stubs/customcontroller/base.controller.plain.stub';
        $this->RESTfullName = 'RESTfull.php';
        $this->getStubRESTfull = __DIR__.'/stubs/customcontroller/RESTfull.controller.plain.stub';
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->fire();
    }

    /**
     * Execute the console command.
     *
     * @return bool|null
     */
    public function fire()
    {
        $name = $this->qualifyClass($this->getNameInput());
        $path = $this->getPath($name);
        $path_parts = pathinfo($path);
        $path_only = $path_parts['dirname'];

        /**
        * First we will check to see if the class already exists. If it does, we don't want
        * to create the class and overwrite the user's code. So, we will bail out so the
        * code is untouched. Otherwise, we will continue generating this class' files.
        */
        if ($this->alreadyExists($this->getNameInput()))
        {
            $this->error($this->type.' already exists!');
            return false;
        }

        /**
        * Next, we will generate the path to the location where this class' file should get
        * written. Then, we will build the class and make the proper replacements on the
        * stub files so that it gets the correctly formatted namespace and class name.
        */
        $this->makeDirectory($path);
        $this->files->put($path, $this->buildClass($name));

        /**
        * Check BaseController, if BaseController doesn't exists then create BaseController
        * if not exists skip
        */
        if (!file_exists($path_only.'/'.$this->BaseControllerName))
            $this->files->put($path_only.'/'.$this->BaseControllerName, $this->buildClassBaseController($name));

        /**
        * Check RESTFull Class, if RESTFull Class doesn't exists then create RESTFull Class
        * if not exists skip
        */
        if (!file_exists($path_only.'/'.$this->RESTfullName))
            $this->files->put($path_only.'/'.$this->RESTfullName, $this->buildClassRESTfull($name));


        $this->info($this->type.' telah berhasil di buat.');
    }

    /**
     * Parse the class name and format according to the root namespace.
     *
     * @param  string  $name
     * @return string
     */
    protected function qualifyClass($name)
    {
        $rootNamespace = $this->rootNamespace();
        if (Str::startsWith($name, $rootNamespace)) {
            return $name;
        }

        $name = str_replace('/', '\\', $name);
        return $this->qualifyClass(
            $this->getDefaultNamespace(trim($rootNamespace, '\\')).'\\'.$name
        );
    }

    /**
     * Get the desired class name from the input.
     *
     * @return string
     */
    protected function getNameInput()
    {
        return trim($this->argument('name'));
    }

    /**
     * Get the root namespace for the class.
     *
     * @return string
     */
    protected function rootNamespace()
    {
        return $this->laravel->getNamespace();
    }

    /**
     * Get the destination class path.
     *
     * @param  string  $name
     * @return string
     */
    protected function getPath($name)
    {
        $name = str_replace_first($this->rootNamespace(), '', $name);
        return $this->laravel['path'].'/'.str_replace('\\', '/', $name).'.php';
    }

    /**
     * Determine if the class already exists.
     *
     * @param  string  $rawName
     * @return bool
     */
    protected function alreadyExists($rawName)
    {
        return $this->files->exists($this->getPath($this->qualifyClass($rawName)));
    }

    /**
     * Build the directory for the class if necessary.
     *
     * @param  string  $path
     * @return string
     */
    protected function makeDirectory($path)
    {
        if (! $this->files->isDirectory(dirname($path))) {
            $this->files->makeDirectory(dirname($path), 0777, true, true);
        }
        return $path;
    }

    /**
     * Build the class with the given name.
     *
     * @param  string  $name
     * @return string
     */
    protected function buildClass($name)
    {
        $stub = $this->files->get($this->getStub());
        $stub = $this->replaceClassModel($stub, $name);
        $stub = $this->replaceViewName($stub, $name);
        $stub = $this->replaceNamespace($stub, $name)->replaceClass($stub, $name);
        return $stub;
    }

    /**
     * Build the class base controller.
     *
     * @param  string  $name
     * @return string
     */
    protected function buildClassBaseController($name)
    {
        $stub = $this->files->get($this->getStubBaseController);
        $stub = str_replace(
            ['DummyNamespace', 'DummyRootNamespace'],
            [$this->getNamespace($name), $this->rootNamespace()],
            $stub
        );
        return $stub;
    }

    /**
     * Build the class rest full class.
     *
     * @param  string  $name
     * @return string
     */
    protected function buildClassRESTfull($name)
    {
        $stub = $this->files->get($this->getStubRESTfull);
        $stub = str_replace(
            ['DummyNamespace', 'DummyRootNamespace'],
            [$this->getNamespace($name), $this->rootNamespace()],
            $stub
        );
        return $stub;
    }

    /**
     * Replace the namespace for the given stub.
     *
     * @param  string  $stub
     * @param  string  $name
     * @return $this
     */
    protected function replaceNamespace(&$stub, $name)
    {
        $stub = str_replace(
            ['DummyNamespace', 'DummyRootNamespace'],
            [$this->getNamespace($name), $this->rootNamespace()],
            $stub
        );
        return $this;
    }

    /**
     * Get the full namespace for a given class, without the class name.
     *
     * @param  string  $name
     * @return string
     */
    protected function getNamespace($name)
    {
        return trim(implode('\\', array_slice(explode('\\', $name), 0, -1)), '\\');
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/stubs/customcontroller/controller.custom.plain.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Http\Controllers';
    }

    /**
     * Replace the class name for the given stub.
     *
     * @param  string  $stub
     * @param  string  $name
     * @return string
     */
    protected function replaceClass($stub, $name)
    {
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        return str_replace('DummyClass', $class, $stub);
    }

    /**
     * Replace the class name for the given stub.
     *
     * @param  string  $stub
     * @param  string  $name
     * @return string
     */
    protected function replaceClassModel($stub, $name)
    {
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $model = str_replace('Controller', '', $class);
        return str_replace('DummyModel', $model, $stub);
    }

    /**
     * Replace the class name for the given stub.
     *
     * @param  string  $stub
     * @param  string  $name
     * @return string
     */
    protected function replaceViewName($stub, $name)
    {
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $viewName = str_replace('Controller', '', $class);
        return str_replace('dummy', strtolower($viewName), $stub);
    }
}