<?php
namespace App\Http\Services\Newsletter;

use App\Http\Repositories\NewsletterRepository;

class NewsletterSendMailService
{

  private $newsletter;

  public function __construct(NewsletterRepository $newsletter){

    $this->newsletter = $newsletter;

  }

  public function handle($request){

    dd($request);

  }

}
