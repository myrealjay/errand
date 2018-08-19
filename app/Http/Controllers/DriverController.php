<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDriverRequest;
use App\Http\Requests\UpdateDriverRequest;
use App\Repositories\DriverRepository;
use App\Repositories\UserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DriverController extends AppBaseController
{
    /** @var  DriverRepository */
    private $driverRepository;
    private $userRepository;

    public function __construct(DriverRepository $driverRepo, UserRepository $userRepo)
    {
        $this->middleware('auth');
        $this->driverRepository = $driverRepo;
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the Driver.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->driverRepository->pushCriteria(new RequestCriteria($request));
        $drivers = $this->driverRepository->all();

        return view('drivers.index')
            ->with('drivers', $drivers);
    }

    /**
     * Show the form for creating a new Driver.
     *
     * @return Response
     */
    public function create()
    {
        return view('drivers.create');
    }

    /**
     * Store a newly created Driver in storage.
     *
     * @param CreateDriverRequest $request
     *
     * @return Response
     */
    public function store(CreateDriverRequest $request)
    {
        $this->validate($request, [
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $input = $request->all();
        $input['password'] = bcrypt($request->password);

        if ($request->file('picture')) {
        $file = $request->file('picture');
        $destinationPath = public_path(). '/drivers-image/';
        $filename = $file->getClientOriginalName();
        $image = time().$filename;
        $file->move($destinationPath, $image);
        $imgpath = '/drivers-image/'.$image;

        $input['picture'] = $imgpath;
        }
        
        //dd($input);

        $driver = $this->driverRepository->create($input);
        $user = $this->userRepository->create($input);

        Flash::success('Driver saved successfully.');

        return redirect(route('drivers.index'));
    }

    /**
     * Display the specified Driver.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $driver = $this->driverRepository->findWithoutFail($id);

        if (empty($driver)) {
            Flash::error('Driver not found');

            return redirect(route('drivers.index'));
        }

        return view('drivers.show')->with('driver', $driver);
    }

    /**
     * Show the form for editing the specified Driver.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $driver = $this->driverRepository->findWithoutFail($id);

        if (empty($driver)) {
            Flash::error('Driver not found');

            return redirect(route('drivers.index'));
        }

        return view('drivers.edit')->with('driver', $driver);
    }

    /**
     * Update the specified Driver in storage.
     *
     * @param  int              $id
     * @param UpdateDriverRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $driver = $this->driverRepository->findWithoutFail($id);

        if (empty($driver)) {
            Flash::error('Driver not found');

            return redirect(route('drivers.index'));
        }
        $input = $request->except(['picture','password']);


        if ($request->file('picture')) {
        $file = $request->file('picture');
        $destinationPath = public_path(). '/drivers-image/';
        $filename = $file->getClientOriginalName();
        $image = time().$filename;
        $file->move($destinationPath, $image);
        $imgpath = '/drivers-image/'.$image;

        $input['picture'] = $imgpath;
        }

        $driver = $this->driverRepository->update($input, $id);

        Flash::success('Driver updated successfully.');

        return redirect(route('drivers.index'));
    }

    /**
     * Remove the specified Driver from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $driver = $this->driverRepository->findWithoutFail($id);

        if (empty($driver)) {
            Flash::error('Driver not found');

            return redirect(route('drivers.index'));
        }

        $this->driverRepository->delete($id);

        Flash::success('Driver deleted successfully.');

        return redirect(route('drivers.index'));
    }
}
