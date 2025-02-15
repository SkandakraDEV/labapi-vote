<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use App\Models\VoteCandidate;
use App\Models\VoteDetail;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function getActiveVoteSession(){
        try {
            $activeVotes = Vote::active()->get();

            return response()->json([
                'status'=> 'success',
                'data'  =>
                    [
                        'votes'=> $activeVotes
                    ]
            ]);

        } catch(Exception $e){
            return response()->json([
                'status' => 'error',
                'message' => $e
            ], 401);
        }
    }

    public function chooseVotingCandidate(Request $request, $id){
        try {

            $activeVotes = Vote::checkActiveById($id)->get();

            if($activeVotes->isEmpty()){
                throw new ModelNotFoundException("voted is expired", 401);
            }

            $candidate = VoteCandidate::with('user')->where('vote_id', $id)->get();

            $is_choose = VoteDetail::isChoose($request->user()->id, $candidate[0]->vote_id)->get()->isEmpty() ? false: true;
            return response()->json([
                'status'=> 'success',
                'data'  =>
                    [
                        'candidate'=> $candidate,
                        'is_voted' => $is_choose
                    ]

            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 401);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function chooseCandidate(Request $request, $id, $user_id){
        try {
            $activeVotes = Vote::checkActiveById($id)->get();

            if($activeVotes->isEmpty()){
                throw new ModelNotFoundException("voted is expired", 401);
            }

            $candidate = VoteCandidate::with('user')->where('vote_id', $id)->get();

            $candidate_id = VoteCandidate::where('vote_id', $id)
                                            ->where('user_id', $user_id)
                                            ->first();
            if(empty($candidate_id)){
                throw new ModelNotFoundException("user is not the candidate", 401);
            }

            $is_choose = VoteDetail::isChoose($request->user()->id, $candidate[0]->vote_id)->get()->isEmpty() ? false: true;

            if($is_choose){
                throw new ModelNotFoundException("user is voted", 401);
            }

            $votedDetail = new VoteDetail;
            $votedDetail->vote_candidate_id = $candidate_id->id;
            $votedDetail->user_id = $request->user()->id;
            $votedDetail->save();

            $vote = Vote::find($id);
            $vote->total_votes = $vote->total_votes+1;
            $vote->save();


            $data = [
                'user' => $request->user(),
                'votingCandidate' => $id,
                'user_id' => $user_id
            ];

            return response()->json($data, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 401);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }

    }

    public function chooseCandidatePost(Request $request){
        try {
            $request->validate([
                'vote_id' => 'required',
                'candidate_id' => 'required'
            ]);

            $activeVotes = Vote::checkActiveById($request->vote_id)->get();

            if($activeVotes->isEmpty()){
                throw new ModelNotFoundException("voted is expired", 401);
            }

            $candidate = VoteCandidate::with('user')->where('vote_id', $request->vote_id)->get();

            $candidate_id = VoteCandidate::where('vote_id', $request->vote_id)
                                            ->where('user_id', $request->candidate_id)
                                            ->first();
            if(empty($candidate_id)){
                throw new ModelNotFoundException("user is not the candidate", 401);
            }

            $is_choose = VoteDetail::isChoose($request->user()->id, $candidate[0]->vote_id)->get()->isEmpty() ? false: true;

            if($is_choose){
                throw new ModelNotFoundException("user is voted", 401);
            }

            $votedDetail = new VoteDetail;
            $votedDetail->vote_candidate_id = $candidate_id->id;
            $votedDetail->user_id = $request->user()->id;
            $votedDetail->save();

            $vote = Vote::find($request->vote_id);
            $vote->total_votes = $vote->total_votes+1;
            $vote->save();


            $data = [
                'user' => $request->user(),
                'votingCandidate' => $request->vote_id,
                'user_id' => $request->candidate_id
            ];

            return response()->json($data, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 401);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }

    }
}
