<?php

namespace Infonesy;

class Facebook extends \B2\Obj
{
	function infonesy_uuid()
	{
		return 'facebook.' . $this->id();
	}

	function posts()
	{
		$fb = new Facebook\Facebook([
			'app_id' => $this->app_id(),
		    'app_secret' => $this->app_secret(),
		    'default_graph_version' => 'v2.10',
		]);

		$accessToken = $this->access_token();

		// Send a GET request
		$response = $fb->get('/me/feed', $accessToken);

		$data = $response->getDecodedBody();

		yield $data;

//		dump($data);

//		$next = $data['paging']['next'];

//		echo "\n$next\n\n";

//		echo "\n{$data['paging']['next']}\n\n";
//		exit();

//		$next = str_replace('https://graph.facebook.com/v2.10/', '/', $next);
//		$next = str_replace('1629590003726939', 'me', $next);
//		$next = preg_replace('!&access_token=.+$!', '', $next);
//		$next = str_replace('since', 'until', $next);

//		echo "\n$next\n\n";

//		$response = $fb->get($next, $accessToken);
//		$data = $response->getDecodedBody();
//		dump($data);
	}
}
