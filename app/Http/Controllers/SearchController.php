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

        //  $request = $request->json()->all();





        $file = $request->file('file');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $request->file->move('file/', $filename);

        $upload = ResearcherForm::create([
            'upload_search' => $filename,
            'front_journal' => $this->uploadPicture($request->front_journal, '/ImagesProduct/'),
            'user_id' => auth()->user()->id,
            'search_title' => $request->search_title,
            'search_type' =>  $request->search_type,
            'volume' =>  $request->volume,
            'type_volume' =>  $request->type_volume,
            'version' =>  $request->version,
            'link_search' =>  $request->link_search,
            'journal_title' => $request->journal_title,
            'publication' =>  $request->publication,
            'journal_type' =>  $request->journal_type,
            'approvment' =>  0,
        ]);
        return $this->send_response(200, 'upload form', null, $upload, []);
    }
    public function getSearchAuth()
    {
        $research = ResearcherForm::with('searchForms')->where('user_id', auth()->user()->id)->get();
        // return $research;
        // $searchs = FeedbackAdmin::with('users', 'researcherforms')->whereIn('researcherforms_id', $research)->get();

        return $this->send_response(200, 'get searchs form', null, $research);
    }
    public function getAllSearch()
    {
        $searchs = ResearcherForm::with('user')->get();
        return $this->send_response(200, 'get searchs form', null, $searchs,);
    }
    public function feedbackAdmins(Request $request)
    {
        $request = $request->json()->all();

        $search = ResearcherForm::where('id', $request['researcherforms_id'])->first();
        $search->update(['approvment' => 1]);
        $request['user_id'] = auth()->user()->id;
        $feedback = FeedbackAdmin::create($request);
        return $this->send_response(200, 'get searchs form', null, $feedback);
    }
    public function getFeedback()
    {

        $feedback = FeedbackAdmin::with('users')->where('researcherforms_id', $_GET['researcherforms_id'])->get();

        return $this->send_response(200, 'get searchs form', null, $feedback);
    }
    public function download()
    {
        return response()->download('file/' . $_GET['code']);
    }
}