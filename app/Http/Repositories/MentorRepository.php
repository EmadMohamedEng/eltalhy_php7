<?php
namespace App\Http\Repositories;

use App\Mentor;

class MentorRepository
{

    private $mentor;

    public function __construct(Mentor $mentor)
    {

      $this->mentor = $mentor;

    }

    public function __call($method , $arguments)
    {

      return $this->mentor->$method(...$arguments);

    }

}
