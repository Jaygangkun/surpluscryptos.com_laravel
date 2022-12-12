<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ClientContractAsset;
use App\Models\LeadMeta;
use App\Models\TempUser;
use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;
use File;

class WelcomeController extends Controller
{
    const VIEW = 'backend';

    public function index()
    {
        
        return view(self::VIEW . '.index', []);
    }

    public function clientIndex()
    {
        return view(self::VIEW . '.client-index', []);
    }

    public function dashboardMetas(Request $request)
    {
        $user = auth()->user();
        $result = [];
        if ($request->crypto_news) {
            $endpoint = "https://newsapi.org/v2/top-headline";
            $client = new \GuzzleHttp\Client();
            $id = 5;
            $value = "ABC";

            $response = $client->request('GET', $endpoint, ['query' => [
                'q' => 'crypto',
                'language' => 'en',
                'apiKey' => '66bcc9e496484640a948864fc2375414',
            ]]);

// url will be: http://my.domain.com/test.php?key1=5&key2=ABC;

            $statusCode = $response->getStatusCode();
            $content = $response->getBody();

        // Send the GET request with cURL

dd($response);
            $contents = file_get_contents("s?");
            $contents = json_decode($contents);

            return [
                'crypto_news' => view('backend.crypto-news.index', [
                    'records' => $contents->articles
                ])
                    ->render()
            ];
        }
        if ($user->hasRole(1)) {
            if ($request->partner_meta) {
                $result['total_partners'] = User::role(2)->count();
                $result['total_partners_ratio'] = $result['total_partners'] ? 100 : 0;
                $result['total_partners_today'] = User::role(2)->whereDate('created_at', date('Y-m-d'))->count();
                $result['total_partners_today_ratio'] = $result['total_partners_today'] ? 100 : 0;
                $result['total_partners_top'] = User::role(2)->has('myClients')->count();
                $result['total_partners_top_ratio'] = $result['total_partners_top'] ? 100 : 0;
                $result['total_partners_month'] = User::role(2)->whereDate('created_at', date('Y-m-01'))->count();
                $result['total_partners_month_ratio'] = $result['total_partners_month'] ? 100 : 0;
                $result['total_assets_week'] = ClientContractAsset::where('status','approved')->whereDate('created_at', '>=', date("Y-m-d", strtotime('monday this week')))->sum('initial_amount');
                $result['total_assets_week_ratio'] = $result['total_assets_week'] ? 100 : 0;
                $result['total_assets_avg'] = ClientContractAsset::where('status','approved')->avg('initial_amount');
                $result['total_assets_avg_ratio'] = $result['total_assets_avg'] ? 100 : 0;
                $result['total_assets'] = ClientContractAsset::where('status','approved')->sum('initial_amount');
                $result['total_assets_ratio'] = $result['total_assets'] ? 100 : 0;
            }
            if ($request->client_meta) {
                $result['total_clients'] = User::role(3)->count();
                $result['total_clients_ratio'] = $result['total_clients'] ? 100 : 0;
                $result['total_clients_today'] = User::role(3)->whereDate('created_at', date('Y-m-d'))->count();
                $result['total_clients_today_ratio'] = $result['total_clients_today'] ? 100 : 0;
                $result['total_partners_top'] = User::role(2)->has('myClients')->count();
                $result['total_partners_top_ratio'] = $result['total_partners_top'] ? 100 : 0;
                $result['total_clients_month'] = User::role(3)->whereDate('created_at', date('Y-m-01'))->count();
                $result['total_clients_month_ratio'] = $result['total_clients_month'] ? 100 : 0;
                $result['total_assets_client'] = ClientContractAsset::where('status','approved')->count();
                $result['total_assets_client_ratio'] = $result['total_assets_client'] ? 100 : 0;
                $result['total_assets_week'] = ClientContractAsset::where('status','approved')->whereDate('created_at', '>=', date("Y-m-d", strtotime('monday this week')))->sum('initial_amount');
                $result['total_assets_week_ratio'] = $result['total_assets_week'] ? 100 : 0;
                $result['total_assets'] = ClientContractAsset::where('status','approved')->sum('initial_amount');
                $result['total_assets_ratio'] = $result['total_assets'] ? 100 : 0;
            }
        }

        if ($user->hasRole(2)) {
            $result['total_clients'] = User::where('partner_code', $user->partner_number)->count();
            $result['total_clients_ratio'] = $result['total_clients'] ? 100 : 0;
            $result['total_client_assets'] = ClientContractAsset::where('status','approved')->where('partner_id', $user->id)->sum('initial_amount');
            $result['total_client_assets_ratio'] = $result['total_client_assets'] ? 100 : 0;
        }

        return $result;
    }

}
