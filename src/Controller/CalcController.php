<?php

namespace App\Controller;

use http\Env\Response;
use mysql_xdevapi\Exception;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use PhpParser\JsonDecoder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use OpenApi\Annotations as OA;
/**
 * @OA\Info(title="Calc API", version="1.0.0")
 */
class CalcController extends AbstractController
{
    /**
     * @OA\Post(
     *     path="/api/sum",
     *     summary="Returns most sum of object",
     *     description="Returns most sum of object",
     *     @OA\RequestBody(
     *         description="first, second and maybe third parametr",
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/json",
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Success",
     *
     *     @OA\Response(
     *         response=404,
     *         description="Could Not Find Resource"
     *     )
     * )
     */
    /**
     * @Route("/api/sum", methods={"POST"})
     * @param Request $request
     * @return JsonResponse
     */
    public function GetSum(Request $request  )
    {

        $data = json_decode($request->getContent(), true);
        $request->request->replace($data);
        $first = $request->request->get('first', '5');
        $second = $request->request->get('second', '5');
        $third =$request->request->get('third', null);
        $value = bcadd($first, $second, 20);
        if($third != null){
            $value =bcadd($value,$third,20);
            return
                $this->json([
                    'body' => "$first + $second + $third= $value",
                    'message' => 'Sum of number ',
                    'path' => 'src/Controller/CalcController.php',
                ]);
        }
         return
        $this->json([
        'body' => "$first + $second = $value",
        'message' => 'Sum of number ',
        'path' => 'src/Controller/CalcController.php',
    ]);
}


    /**
     * @OA\Post(
     *     path="/api/sum",
     *     summary="Returns most sum of object",
     *     description="Returns most sum of object",
     *     @OA\RequestBody(
     *         description="first, second and maybe third parametr",
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/json",
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Success",
     *
     *     @OA\Response(
     *         response=404,
     *         description="Could Not Find Resource"
     *     )
     * )
     */
    /**
    /**
     * @Route("/api/sub", methods={"POST"})
     * @param Request $request
     * @return JsonResponse
     */
    public function GetSub(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $request->request->replace($data);
        $first = $request->request->get('first', '5');
        $second = $request->request->get('second', '5');
        $value = bcsub($first, $second,20);
        return $this->json([
            'body' => "$first - $second = $value ",
            'message' => 'Sub two number ',
            'path' => 'src/Controller/CalcController.php',
        ]);
    }
    /**
     * @OA\Post(
     *     path="/api/sum",
     *     summary="Returns most sum of object",
     *     description="Returns most sum of object",
     *     @OA\RequestBody(
     *         description="first, second and maybe third parametr",
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/json",
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Success",
     *
     *     @OA\Response(
     *         response=404,
     *         description="Could Not Find Resource"
     *     )
     * )
     */
    /**
    /**
     * @Route("/api/mult", methods={"POST"})
     * @param Request $request
     * @return JsonResponse
     */
    public function Mult(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $request->request->replace($data);
        $first = $request->request->get('first', '5');
        $second = $request->request->get('second', '5');
        $value = bcpow($first, $second,20);
        return $this->json([
            'body' => "$first * $second = $value",
            'message' => 'Multiple two number ',
            'path' => 'src/Controller/CalcController.php',
        ]);
    }


}
