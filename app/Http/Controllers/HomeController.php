<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewsletterRequest;
use App\Team;
use App\Suport;
use App\Newsletter;
use App\Portfolio;


class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $suports = Suport::all();
         $teams = Team::all();
         $portfolios = Portfolio::all();

         return view('pages.home',[
            'teams' => $teams,
            'suports' => $suports,
            'portfolios' => $portfolios
        ]);

    }
    public function update(Request $request)
    {
        $data = $request->all();

        Newsletter::create($data);

        alert()->success('Success','Trimaksih Telah bergabung dengan kami');

        return redirect()->route('/');
    }


}
