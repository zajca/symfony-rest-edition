<?php

namespace AppBundle\Controller;


use FOS\RestBundle\Controller\Annotations;
use FOS\RestBundle\Controller\FOSRestController;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\ConflictHttpException;

/**
 * Rest controller for notes
 *
 * @package AppBundle\Controller
 * @author Gordon Franke <info@nevalon.de>
 */
class NoteController extends FOSRestController
{

    /**
     * List all notes.
     *
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful"
     *   }
     * )
     *
     * @Annotations\View()
     *
     * @return array
     */
    public function getNotesAction()
    {
        throw new ConflictHttpException('dsadas');
        throw $this->createNotFoundException('xssadas');
        throw $this->createNotFoundException('my message');

        return new JsonResponse([]);
    }
}
