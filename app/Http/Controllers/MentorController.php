<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MentorStoreRequest;
use App\Http\Services\MentorStoreService;
use App\Http\Requests\MentorUpdateRequest;
use App\Http\Services\MentorUpdateService;
use App\Http\Repositories\MentorRepository;

class MentorController extends Controller
{

    protected $mentorRepository;
    protected $mentorStoreService;
    protected $mentorUpdateService;

    public function __construct(
      MentorRepository $mentorRepository,
      MentorStoreService $mentorStoreService,
      MentorUpdateService $mentorUpdateService
    )
    {
      $this->mentorRepository = $mentorRepository;
      $this->mentorStoreService = $mentorStoreService;
      $this->mentorUpdateService = $mentorUpdateService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $title = 'Mentors';
      $mentors = $this->mentorRepository->all();
      return view('mentor.index', compact('title', 'mentors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $title = 'Mentors';
      return view('mentor.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MentorStoreRequest $request)
    {
      $this->mentorStoreService->handle($request->validated());
      return redirect('mentor')->with('success', 'Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $title = 'Mentors';
      $mentor = $this->mentorRepository->find($id);
      return view('mentor.show', compact('title', 'mentor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $title = 'Mentors';
      $mentor = $this->mentorRepository->find($id);
      return view('mentor.edit', compact('title', 'mentor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function update(MentorUpdateRequest $request, $id)
    {
      $mentor = $this->mentorRepository->find($id);
      $this->mentorUpdateService->handle($request->validated(), $mentor);
      return redirect('mentor')->with('success', 'Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $mentor = $this->mentorRepository->destroy($id);
      return back()->with(['success' => 'Deleted Successfully']);
    }
}
