<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NewsController extends Controller
{
    //

    public function getNews(){

    	$fb = new \Facebook\Facebook([
		  'app_id' => '1115550901858422',
		  'app_secret' => '55076b8a8f66cf8c72851c31802c2043',
		  'default_graph_version' => 'v2.7',
		]);

    	try {
			// Returns a `Facebook\FacebookResponse` object
		    $response = $fb->get(
		        '194281337341129/posts?fields=message,created_time,full_picture,properties,id,type',
		        $fb->getApp()->getAccessToken()->getValue()
		    );
			} catch(\Facebook\Exceptions\FacebookResponseException $e) {
			echo 'Graph returned an error: ' . $e->getMessage();
			exit;
			} catch(\Facebook\Exceptions\FacebookSDKException $e) {
			echo 'Facebook SDK returned an error: ' . $e->getMessage();
			exit;
		}


		$graphEdge = $response->getGraphEdge();

		return view('news')->with('graphEdge', $graphEdge);
	}
}
