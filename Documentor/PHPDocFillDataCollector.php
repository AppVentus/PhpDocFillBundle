<?php
namespace AppVentus\PhpDocFillBundle\Documentor;

use Symfony\Component\HttpKernel\DataCollector\DataCollector;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
/**
 * Load PHPDocFill in symfony navbar
 */
class PHPDocFillDataCollector extends DataCollector
{

    public function collect(Request $request, Response $response, \Exception $exception = null)
    {
    }
    public function getName()
    {
        return 'documentor';
    }
}
