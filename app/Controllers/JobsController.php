<?php 

namespace App\Controllers;

use Respect\Validation\Validator as v;

use App\Models\Job;
class JobsController extends BaseController{
    public function viewAddJobAction($request){
        $responseMessage  = null;
        if($request->getMethod() == "POST"){
            $postData = $request->getParsedBody(); 
            $jobValidator = v::key('title', v::stringType()->notEmpty())
                  ->key('description', v::stringType()->notEmpty());
                  try {
                      $jobValidator->assert($postData);
                      $files = $request->getUploadedFiles();
                      $logo = $files['logo'];

                      if($logo->getError() == UPLOAD_ERR_OK){
                          $fileName = $logo->getClientFilename();
                         $logo->moveTo("uploads/$fileName");
                      }

                      $job = new Job();
                      $job->title = $postData['title'];
                      $job->description = $postData['description'];
                      $job->logo_url = $logo->getClientFilename();
                      $job->save();

                      $responseMessage = 'save';
            }catch(\Exception $e){
                $responseMessage = $e->getMessage(); 
            }
        }

        return $this->renderHTML('addJob.twig', [
            'responseMessage' => $responseMessage,
        ]);
    }
}