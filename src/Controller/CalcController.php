<?php

namespace App\Controller;
use App\Calcualte\Calculate;
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
    public function sum(Request $request)
    {

        $data = self::parsRequest($request);
        $result = Calculate::sum($data);
        if ($data['thirdValue'] != null) {
            $result = bcadd($result, $data['thirdValue'], 24);
            return
                $this->json([
                    'body' => "$data[firstValue] + $data[secondValue] + $data[thirdValue]= $result" ,
                    'message' => 'Sum of number ' ,
                    'path' => 'src/Controller/CalcController.php' ,
                ]);
        }
        return
            $this->json([
                'body' => "$data[firstValue] + $data[secondValue] = $result" ,
                'message' => 'Sum of number ' ,
                'path' => 'src/Controller/CalcController.php' ,
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
     * /**
     * @Route("/api/subtraction", methods={"POST"})
     * @param Request $request
     * @return JsonResponse
     */
    public function subtraction(Request $request)
    {
         $data = self::parsRequest($request);;
         $result = Calculate::subtraction($data);
         return $this->json([
            'body' => "$data[firstValue] - $data[secondValue] = $result " ,
            'message' => 'Sub two number' ,
            'path' => 'src/Controller/CalcController.php' ,
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
     * /**
     * @Route("/api/multiplay", methods={"POST"})
     * @param Request $request
     * @return JsonResponse
     */
    public function multiply(Request $request)
    {
        $data = self::parsRequest($request);;
        $result = Calculate::multiply($data);
        return $this->json([
            'body' => "$data[firstValue] * $data[secondValue] = $result" ,
            'message' => 'Multiple two number ' ,
            'path' => 'src/Controller/CalcController.php' ,
        ]);
    }
    public static function parsRequest(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $request->request->replace($data);
        $firstValue = $request->request->get('firstValue', '0');
        $secondValue = $request->request->get('secondValue', '0');
        $thirdValue = $request->request->get('thirdValue', null);
        return $array = [
            "firstValue" => "$firstValue",
            "secondValue" => "$secondValue",
            "thirdValue" => "$thirdValue",
        ];
    }

}
