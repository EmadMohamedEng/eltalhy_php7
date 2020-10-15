<?php
namespace App\Http\Services;

use App\Http\Services\UploaderService;
use App\Http\Repositories\MentorRepository;

class MentorStoreService
{

  private $mentor;

  private $uploaderService;

  public function __construct(MentorRepository $mentor, UploaderService $uploaderService){

    $this->mentor = $mentor;
    $this->uploaderService = $uploaderService;

  }

  public function handle($request){

    $request['image'] = $this->uploaderService->upload($request['image'], 'mentor');

    $this->mentor->create($request);

  }

}
