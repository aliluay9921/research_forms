<?php

namespace App\Http\Controllers;

use App\Models\FeedbackAdmin;
use App\Models\ResearcherForm;
use App\Traits\SendResponse;
use App\Traits\UploadImage;
use Illuminate\Http\Request;
use League\CommonMark\Block\Element\FencedCode;

class SearchController extends Controller
{
    use SendResponse, UploadImage;
    public function uploadSearch(Request $request)
    {
        $request = $request->json()->all();

        // return $request;
        // if ($request->hasfile('upload_search')) {
        //     $file = $request->file('upload_search');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     $request['upload_search'] = $filename;
        //     $request->file->move('/search/', $filename);
        // }

        $request['front_journal'] = $this->uploadPicture($request['front_journal'], '/ImagesProduct/');
        $request['approvment'] = 0;
        $request['user_id'] = auth()->user()->id;
        $upload = ResearcherForm::create($request);
        return $this->send_response(200, 'upload form', null, $upload, []);
    }
    public function getSearchAuth()
    {
        $searchs = ResearcherForm::where('user_id', auth()->user()->id)->get();
        return $this->send_response(200, 'get searchs form', null, $searchs,);
    }
    public function getAllSearch()
    {
        $searchs = ResearcherForm::all();
        return $this->send_response(200, 'get searchs form', null, $searchs,);
    }
    public function feedbackAdmins(Request $request)
    {
        $request = $request->json()->all();
        $search = ResearcherForm::where('id', $request['researcherforms_id'])->first();
        $search->update(['approvment' => 1]);
        $feedback = FeedbackAdmin::create($request);
        return $this->send_response(200, 'get searchs form', null, $feedback,);
    }
}