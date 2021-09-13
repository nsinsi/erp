<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use App\Models\Payableto;

use App\Models\District;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Mail;

use App\Models\Requisition;

use App\Mail\RequisitionMail;

use Spatie\Permission\Models\Role;

use DB;

use Hash;

use PDF;

use Illuminate\Support\Arr;

use Codedge\Fpdf\Fpdf\Fpdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class RequisitionPdf extends Fpdf
{
    // Page header
    function Header()
    {
        // Arial bold 15
        $this->SetFont('Times','',12);
        // Move to the right
        $this->Cell(30);
        $this->Cell(0,5,'YOUTH NET AND COUNSELLING',0,1);
        $this->Cell(90);
        $this->Image(public_path('/assets/images/yoneco.png'),90,6,30);
        // Line break
        $this->Ln(20);
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }

}

class RequisitionController extends Controller
{

    public $userIds;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Requisition::orderBy('id','DESC')->paginate(5);
          $requisition = Requisition::all();
         return view('requisitions.index',compact('data','requisition'))

             ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $requisition = Requisition::all();
        $payabletos = Payableto::all();
        $projects = Project::all();
        return view('requisitions.create',compact('requisition','payabletos','projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'amount' => 'required',

            'purpose' => 'required',

            // 'payable_to' => 'required',

            'budgetline_id' => 'required'
        ]);


        $input = $request->all();

       $requisition= Requisition::create($input);
       $requisition ->user_id = Auth::user()->id;
       $requisition ->budgetline_id = $request->input('budgetline_id');
       $requisition ->start_date= $request->input('start_date');
       $requisition ->end_date= $request->input('end_date');
       $requisition->save();

       $to  ="psm@yoneco.org";
       if(Auth::user()->hasAnyRole('ea')){
            $to ="sm@yoneco.org";
       }elseif(Auth::user()->hasRole('psm')){
            $to ="sm@yoneco.org";
       }else{
            $to ="psm@yoneco.org";
       }

        Mail::to($to)->send(new RequisitionMail($requisition));
        return redirect()->route('requisitions.index')->with('success','requisition created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Session::get('userIds') == null)
            return redirect('/');

        $value = Session::get('requisition');
        $requisition  = Requisition::whereIn('user_id',Session::get('userIds'))->find($id);
        return view('requisitions.show');
       // Mail::to('mosesmsukwa@yoneco.org')->send(new RequisitionMail($requisition));
        view()->share('requisitions.show',$requisition);
        $pdf = PDF::loadView('requisitions.requisition',['requisition'=>$requisition])->setOptions(['defaultFont' => 'sans-serif','isHtml5ParserEnabled' => true]);
        return $pdf;
    return view('requisitions.requisition',compact('requisition'));

    }
    /**
     *
     */
    public function print($id)
    {

        // if(Session::get('userIds') == null)
        //     return redirect('/');

        $value = Session::get('requisition');

        $requisition  = Requisition::whereIn('user_id',Session::get('userIds'))->find($id);

       // Mail::to('mosesmsukwa@yoneco.org')->send(new RequisitionMail($requisition));
       $name = $requisition->users->first_name + $requisition->user->last_name;
        view()->share('requisitions.show',$requisition);
        $pdf = PDF::loadView('requisitions.view_requisition',['requisition'=>$requisition])->setOptions(['defaultFont' => 'sans-serif','isHtml5ParserEnabled' => true]);

      return $pdf->download('requisition.pdf');;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $requisition = Requisition::find($id);
        return  $requisition;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function endorse($id)
    {
        //
    }
    public function search()
    {
      $search_text = $_GET['query'];
      $requisitions=Requistions::where('amount','LIKE','%'.$search_text.'%')->paginate(10);
      return view('requisitions.search',compact('requisitions'));
    }
}
