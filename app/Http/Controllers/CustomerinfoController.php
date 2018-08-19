<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCustomerinfoRequest;
use App\Http\Requests\UpdateCustomerinfoRequest;
use App\Repositories\CustomerinfoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CustomerinfoController extends AppBaseController
{
    /** @var  CustomerinfoRepository */
    private $customerinfoRepository;

    public function __construct(CustomerinfoRepository $customerinfoRepo)
    {
        $this->middleware('auth');
        $this->customerinfoRepository = $customerinfoRepo;
    }

    /**
     * Display a listing of the Customerinfo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->customerinfoRepository->pushCriteria(new RequestCriteria($request));
        $customerinfos = $this->customerinfoRepository->all();

        return view('customerinfos.index')
            ->with('customerinfos', $customerinfos);
    }

    /**
     * Show the form for creating a new Customerinfo.
     *
     * @return Response
     */
    public function create()
    {
        return view('customerinfos.create');
    }

    /**
     * Store a newly created Customerinfo in storage.
     *
     * @param CreateCustomerinfoRequest $request
     *
     * @return Response
     */
    public function store(CreateCustomerinfoRequest $request)
    {
        $input = $request->all();

        $input['password'] = bcrypt($request->password);

        $customerinfo = $this->customerinfoRepository->create($input);

        Flash::success('Customerinfo saved successfully.');

        return redirect(route('customerinfos.index'));
    }

    /**
     * Display the specified Customerinfo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $customerinfo = $this->customerinfoRepository->findWithoutFail($id);

        if (empty($customerinfo)) {
            Flash::error('Customerinfo not found');

            return redirect(route('customerinfos.index'));
        }

        return view('customerinfos.show')->with('customerinfo', $customerinfo);
    }

    /**
     * Show the form for editing the specified Customerinfo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $customerinfo = $this->customerinfoRepository->findWithoutFail($id);

        if (empty($customerinfo)) {
            Flash::error('Customerinfo not found');

            return redirect(route('customerinfos.index'));
        }

        return view('customerinfos.edit')->with('customerinfo', $customerinfo);
    }

    /**
     * Update the specified Customerinfo in storage.
     *
     * @param  int              $id
     * @param UpdateCustomerinfoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCustomerinfoRequest $request)
    {
        $customerinfo = $this->customerinfoRepository->findWithoutFail($id);

        if (empty($customerinfo)) {
            Flash::error('Customerinfo not found');

            return redirect(route('customerinfos.index'));
        }

        $customerinfo = $this->customerinfoRepository->update($request->all(), $id);

        Flash::success('Customerinfo updated successfully.');

        return redirect(route('customerinfos.index'));
    }

    /**
     * Remove the specified Customerinfo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $customerinfo = $this->customerinfoRepository->findWithoutFail($id);

        if (empty($customerinfo)) {
            Flash::error('Customerinfo not found');

            return redirect(route('customerinfos.index'));
        }

        $this->customerinfoRepository->delete($id);

        Flash::success('Customerinfo deleted successfully.');

        return redirect(route('customerinfos.index'));
    }
}
