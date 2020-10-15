<?php
namespace App\Http\Services;

use App\Http\Services\UploaderService;
use App\Http\Repositories\MentorRepository;

class MentorUpdateService
{

  private $mentor;

  public function __construct(MentorRepository $mentor, UploaderService $uploaderService){

    $this->mentor = $mentor;
    $this->uploaderService = $uploaderService;

  }

  public function handle($request, $oldMentor){

    if(isset($request['image']))
    $request['image'] = $this->uploaderService->upload($request['image'], 'mentor');

    $oldMentor->update($request);

  }

}
