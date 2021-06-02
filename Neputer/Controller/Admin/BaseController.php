<?php


namespace Neputer\Controller\Admin;
use Neputer\Traits\CrudTrait;
use Neputer\Traits\FileUploadTrait;
use Neputer\Mixins\Responsable;

class BaseController
{

 use FileUploadTrait, CrudTrait, Responsable ;

}
